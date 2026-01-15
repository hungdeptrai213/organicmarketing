<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Industry;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminPostController extends Controller
{
    public function create()
    {
        return view('admin.posts.create', [
            'authors'    => Author::all(),
            'topics'     => Topic::all(),
            'industries' => Industry::all(),
        ]);
    }

    public function index(Request $request)
    {
        $posts = Post::with('author')
            ->when($request->filled('q'), function ($q) use ($request) {
                $q->where('title', 'like', '%' . $request->q . '%');
            })
            ->latest('published_at')
            ->paginate(15)
            ->withQueryString();

        return view('admin.posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post'       => $post->load(['topics', 'industries', 'author']),
            'authors'    => Author::all(),
            'topics'     => Topic::all(),
            'industries' => Industry::all(),
        ]);
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'upload' => 'required|mimes:jpg,jpeg,png,gif,webp,svg|max:8192',
        ]);

        $path = $request->file('upload')->store('uploads', 'public');

        return response()->json([
            'uploaded' => true,
            'url' => asset('storage/' . $path),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'excerpt'      => 'nullable|string',
            'content'      => 'required|string',
            'author_id'    => 'nullable|exists:authors,id',
            'new_author'   => 'nullable|string|max:255',
            'topics'       => 'array',
            'topics.*'     => 'exists:topics,id',
            'new_topics'   => 'nullable|string',
            'industries'   => 'array',
            'industries.*' => 'exists:industries,id',
            'new_industries' => 'nullable|string',
            'cover_image'  => 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:4096',
            'content_image'=> 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:8192',
            'published_at' => 'nullable|date',
            'status'       => 'required|in:draft,published,archived',
        ]);

        // Author: use existing or create new
        if (!empty($data['new_author'])) {
            $author = Author::firstOrCreate(
                ['slug' => Str::slug($data['new_author'])],
                ['name' => $data['new_author']]
            );
            $authorId = $author->id;
        } elseif (!empty($data['author_id'])) {
            $authorId = $data['author_id'];
        } else {
            return back()->withErrors(['author_id' => 'Chọn tác giả hoặc nhập tác giả mới.'])->withInput();
        }

        // Upload cover
        $coverPath = null;
        if ($request->hasFile('cover_image')) {
            $coverPath = $request->file('cover_image')->store('uploads', 'public');
        }

        // Optional content image to append
        $content = $data['content'];
        if ($request->hasFile('content_image')) {
            $contentImagePath = $request->file('content_image')->store('uploads', 'public');
            $content .= "\n<p><img src=\"".asset('storage/'.$contentImagePath)."\" alt=\"\"></p>";
        }

        // Generate unique slug
        $slugBase = Str::slug($data['title']);
        $slug = $slugBase;
        $i = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $i++;
        }

        $post = Post::create([
            'title'        => $data['title'],
            'slug'         => $slug,
            'excerpt'      => $data['excerpt'] ?? null,
            'content'      => $content,
            'author_id'    => $authorId,
            'cover_image'  => $coverPath ? 'storage/' . $coverPath : null,
            'published_at' => $data['published_at'] ?? now(),
            'status'       => $data['status'],
        ]);

        // Topics: attach existing + new
        $topicIds = $data['topics'] ?? [];
        if (!empty($data['new_topics'])) {
            $newTopics = collect(explode(',', $data['new_topics']))
                ->map(fn($t) => trim($t))
                ->filter();
            foreach ($newTopics as $topicName) {
                $topic = Topic::firstOrCreate(
                    ['slug' => Str::slug($topicName)],
                    ['name' => $topicName]
                );
                $topicIds[] = $topic->id;
            }
        }
        if ($topicIds) {
            $post->topics()->sync($topicIds);
        }

        // Industries: attach existing + new
        $industryIds = $data['industries'] ?? [];
        if (!empty($data['new_industries'])) {
            $newIndustries = collect(explode(',', $data['new_industries']))
                ->map(fn($t) => trim($t))
                ->filter();
            foreach ($newIndustries as $industryName) {
                $industry = Industry::firstOrCreate(
                    ['slug' => Str::slug($industryName)],
                    ['name' => $industryName]
                );
                $industryIds[] = $industry->id;
            }
        }
        if ($industryIds) {
            $post->industries()->sync($industryIds);
        }

        return redirect()->route('posts.index')->with('success', 'Đã tạo bài viết.');
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'excerpt'      => 'nullable|string',
            'content'      => 'required|string',
            'author_id'    => 'nullable|exists:authors,id',
            'new_author'   => 'nullable|string|max:255',
            'topics'       => 'array',
            'topics.*'     => 'exists:topics,id',
            'new_topics'   => 'nullable|string',
            'industries'   => 'array',
            'industries.*' => 'exists:industries,id',
            'new_industries' => 'nullable|string',
            'cover_image'  => 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:4096',
            'content_image'=> 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:8192',
            'published_at' => 'nullable|date',
            'status'       => 'required|in:draft,published,archived',
        ]);

        if (!empty($data['new_author'])) {
            $author = Author::firstOrCreate(
                ['slug' => Str::slug($data['new_author'])],
                ['name' => $data['new_author']]
            );
            $authorId = $author->id;
        } elseif (!empty($data['author_id'])) {
            $authorId = $data['author_id'];
        } else {
            $authorId = $post->author_id;
        }

        $coverPath = $post->cover_image;
        if ($request->hasFile('cover_image')) {
            $stored = $request->file('cover_image')->store('uploads', 'public');
            $coverPath = 'storage/' . $stored;
        }

        $content = $data['content'];
        if ($request->hasFile('content_image')) {
            $contentImagePath = $request->file('content_image')->store('uploads', 'public');
            $content .= "\n<p><img src=\"".asset('storage/'.$contentImagePath)."\" alt=\"\"></p>";
        }

        $post->update([
            'title'        => $data['title'],
            'excerpt'      => $data['excerpt'] ?? null,
            'content'      => $content,
            'author_id'    => $authorId,
            'cover_image'  => $coverPath,
            'published_at' => $data['published_at'] ?? $post->published_at ?? now(),
            'status'       => $data['status'],
        ]);

        $topicIds = $data['topics'] ?? [];
        if (!empty($data['new_topics'])) {
            $newTopics = collect(explode(',', $data['new_topics']))
                ->map(fn($t) => trim($t))
                ->filter();
            foreach ($newTopics as $topicName) {
                $topic = Topic::firstOrCreate(
                    ['slug' => Str::slug($topicName)],
                    ['name' => $topicName]
                );
                $topicIds[] = $topic->id;
            }
        }
        $post->topics()->sync($topicIds);

        $industryIds = $data['industries'] ?? [];
        if (!empty($data['new_industries'])) {
            $newIndustries = collect(explode(',', $data['new_industries']))
                ->map(fn($t) => trim($t))
                ->filter();
            foreach ($newIndustries as $industryName) {
                $industry = Industry::firstOrCreate(
                    ['slug' => Str::slug($industryName)],
                    ['name' => $industryName]
                );
                $industryIds[] = $industry->id;
            }
        }
        $post->industries()->sync($industryIds);

        return redirect()->route('admin.posts.index')->with('success', 'Đã cập nhật bài viết.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Đã xóa bài viết.');
    }
}
