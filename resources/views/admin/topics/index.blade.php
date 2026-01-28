@extends('layouts.app')

@section('title', 'Topics - Admin')

@section('content')
<div class="container mt-6 width-60">
    <h1 class="fw-max-bold fs-custom mb-4">Topics</h1>

    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Posts</a>
        <a href="{{ route('admin.topics.index') }}" class="btn btn-outline-secondary">Topics</a>
        <a href="{{ route('admin.authors.index') }}" class="btn btn-outline-secondary">Authors</a>
        <a href="{{ route('admin.industries.index') }}" class="btn btn-outline-secondary">Industries</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" action="{{ route('admin.topics.index') }}" class="mb-3 d-flex gap-2">
        <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Search topics">
        <button type="submit" class="btn btn-primary">Search</button>
        <a href="{{ route('admin.topics.create') }}" class="btn btn-success ms-auto">New topic</a>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th width="140">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($topics as $topic)
                    <tr>
                        <td>{{ $topic->name }}</td>
                        <td>{{ $topic->slug }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.topics.edit', $topic) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.topics.destroy', $topic) }}" method="POST" onsubmit="return confirm('Delete this topic?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="3" class="text-center">No topics.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $topics->links() }}
</div>
@endsection
