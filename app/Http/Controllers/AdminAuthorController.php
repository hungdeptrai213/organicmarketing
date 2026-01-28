<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminAuthorController extends Controller
{
    public function index(Request $request)
    {
        $authors = Author::query()
            ->withCount('posts')
            ->when($request->filled('q'), function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->q . '%')
                    ->orWhere('slug', 'like', '%' . $request->q . '%');
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'avatar' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'social_links' => 'nullable|json',
        ]);

        $slug = $this->makeUniqueSlug($data['slug'] ?: $data['name']);
        $socialLinks = $this->parseSocialLinks($data['social_links'] ?? null);

        Author::create([
            'name' => $data['name'],
            'slug' => $slug,
            'avatar' => $data['avatar'] ?? null,
            'bio' => $data['bio'] ?? null,
            'social_links' => $socialLinks,
        ]);

        return redirect()->route('admin.authors.index')->with('success', 'Author created.');
    }

    public function edit(Author $author)
    {
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'avatar' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'social_links' => 'nullable|json',
        ]);

        $slug = $this->makeUniqueSlug($data['slug'] ?: $data['name'], $author->id);
        $socialLinks = $this->parseSocialLinks($data['social_links'] ?? null);

        $author->update([
            'name' => $data['name'],
            'slug' => $slug,
            'avatar' => $data['avatar'] ?? null,
            'bio' => $data['bio'] ?? null,
            'social_links' => $socialLinks,
        ]);

        return redirect()->route('admin.authors.index')->with('success', 'Author updated.');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('admin.authors.index')->with('success', 'Author deleted.');
    }

    private function makeUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $base = Str::slug($value);
        $slug = $base;
        $i = 1;

        while (Author::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }

    private function parseSocialLinks(?string $value): ?array
    {
        if ($value === null || $value === '') {
            return null;
        }

        return json_decode($value, true);
    }
}
