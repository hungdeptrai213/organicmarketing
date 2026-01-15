<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Industry;
use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $query = Post::with(['author', 'topics', 'industries'])
            ->where('status', 'published')
            ->when($request->filled('q'), function ($q) use ($request) {
                $q->where(function ($qq) use ($request) {
                    $qq->where('title', 'like', '%' . $request->q . '%')
                        ->orWhere('excerpt', 'like', '%' . $request->q . '%')
                        ->orWhere('content', 'like', '%' . $request->q . '%');
                });
            })
            ->when($request->filled('topic'), function ($q) use ($request) {
                $q->whereHas('topics', function ($qq) use ($request) {
                    $qq->where('slug', $request->topic);
                });
            })
            ->when($request->filled('industry'), function ($q) use ($request) {
                $q->whereHas('industries', function ($qq) use ($request) {
                    $qq->where('slug', $request->industry);
                });
            })
            ->when($request->filled('author'), function ($q) use ($request) {
                $q->whereHas('author', function ($qq) use ($request) {
                    $qq->where('slug', $request->author);
                });
            })
            ->orderByDesc('published_at');

        $posts = $query->paginate(10)->withQueryString();

        return view('chiase', [
            'posts'      => $posts,
            'topics'     => Topic::all(),
            'industries' => Industry::all(),
            'authors'    => Author::all(),
            'filters'    => $request->only(['q', 'topic', 'industry', 'author']),
        ]);
    }

    public function show(Request $request, string $slug)
    {
        $post = Post::with(['author', 'topics', 'industries'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        $related = Post::with('author')
            ->where('id', '!=', $post->id)
            ->where('status', 'published')
            ->whereHas('topics', function ($q) use ($post) {
                $q->whereIn('topics.id', $post->topics->pluck('id'));
            })
            ->latest('published_at')
            ->limit(4)
            ->get();

        return view('posts.show', [
            'post'       => $post,
            'related'    => $related,
            'topics'     => Topic::all(),
            'industries' => Industry::all(),
            'authors'    => Author::all(),
            'filters'    => $request->only(['q', 'topic', 'industry', 'author']),
        ]);
    }
}
