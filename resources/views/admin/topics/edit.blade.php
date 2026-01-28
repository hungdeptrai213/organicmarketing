@extends('layouts.app')

@section('title', 'Edit Topic - Admin')

@section('content')
<div class="container mt-6 width-60">
    <h1 class="fw-max-bold fs-custom mb-4">Edit topic</h1>

    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('admin.topics.index') }}" class="btn btn-outline-secondary">Back to topics</a>
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Posts</a>
        <a href="{{ route('admin.authors.index') }}" class="btn btn-outline-secondary">Authors</a>
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

    <form action="{{ route('admin.topics.update', $topic) }}" method="POST" class="border border-2 border-dark rounded-5 shadow-custom p-4 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $topic->name) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Slug</label>
            <input type="text" name="slug" class="form-control" value="{{ old('slug', $topic->slug) }}">
        </div>

        <button type="submit" class="btn btn-primary fw-bold px-4">Update</button>
    </form>
</div>
@endsection
