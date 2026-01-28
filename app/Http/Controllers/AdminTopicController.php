<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminTopicController extends Controller
{
    public function index(Request $request)
    {
        $topics = Topic::query()
            ->when($request->filled('q'), function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->q . '%')
                    ->orWhere('slug', 'like', '%' . $request->q . '%');
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.topics.index', compact('topics'));
    }

    public function create()
    {
        return view('admin.topics.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $slug = $this->makeUniqueSlug($data['slug'] ?: $data['name']);

        Topic::create([
            'name' => $data['name'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.topics.index')->with('success', 'Topic created.');
    }

    public function edit(Topic $topic)
    {
        return view('admin.topics.edit', compact('topic'));
    }

    public function update(Request $request, Topic $topic)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
        ]);

        $slug = $this->makeUniqueSlug($data['slug'] ?: $data['name'], $topic->id);

        $topic->update([
            'name' => $data['name'],
            'slug' => $slug,
        ]);

        return redirect()->route('admin.topics.index')->with('success', 'Topic updated.');
    }

    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topics.index')->with('success', 'Topic deleted.');
    }

    private function makeUniqueSlug(string $value, ?int $ignoreId = null): string
    {
        $base = Str::slug($value);
        $slug = $base;
        $i = 1;

        while (Topic::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
