@extends('layouts.app')

@section('title', 'Edit Author - Admin')

@section('content')
<div class="container mt-6 width-60">
    <h1 class="fw-max-bold fs-custom mb-4">Edit author</h1>

    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('admin.authors.index') }}" class="btn btn-outline-secondary">Back to authors</a>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Posts</a>
        <a href="{{ route('admin.topics.index') }}" class="btn btn-outline-secondary">Topics</a>
        <a href="{{ route('admin.industries.index') }}" class="btn btn-outline-secondary">Industries</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.authors.update', $author) }}" method="POST" class="border border-2 border-dark rounded-5 shadow-custom p-4 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $author->name) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $author->slug) }}">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Avatar URL</label>
            <input type="text" name="avatar" class="form-control" value="{{ old('avatar', $author->avatar) }}">
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Bio</label>
            <textarea name="bio" class="form-control" rows="4">{{ old('bio', $author->bio) }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Social links (JSON)</label>
            <textarea name="social_links" class="form-control" rows="3">{{ old('social_links', $author->social_links ? json_encode($author->social_links) : '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary fw-bold px-4">Update</button>
    </form>
</div>
@endsection
