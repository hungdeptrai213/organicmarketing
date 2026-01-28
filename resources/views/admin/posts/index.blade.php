@extends('layouts.app')

@section('title', 'Danh sách bài viết - Admin')

@section('content')
<div class="container mt-6 width-60">
    <h1 class="fw-max-bold fs-custom mb-4">Danh sách bài viết</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-secondary">Posts</a>
        <a href="{{ route('admin.topics.index') }}" class="btn btn-outline-secondary">Topics</a>
        <a href="{{ route('admin.authors.index') }}" class="btn btn-outline-secondary">Authors</a>
        <a href="{{ route('admin.industries.index') }}" class="btn btn-outline-secondary">Industries</a>
    </div>

    <form method="GET" action="{{ route('admin.posts.index') }}" class="mb-3 d-flex gap-2">
        <input type="text" name="q" value="{{ request('q') }}" class="form-control" placeholder="Tìm theo tiêu đề">
        <button type="submit" class="btn btn-primary">Tìm</button>
        <a href="{{ route('admin.posts.create') }}" class="btn btn-success ms-auto">Thêm bài mới</a>
    </form>

    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày xuất bản</th>
                    <th>Trạng thái</th>
                    <th width="140">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author->name ?? 'N/A' }}</td>
                        <td>{{ optional($post->published_at ?? $post->created_at)->format('d/m/Y H:i') }}</td>
                        <td>{{ $post->status }}</td>
                        <td class="d-flex gap-2">
                            <a href="{{ route('admin.posts.edit', $post) }}" class="btn btn-sm btn-outline-primary">Sửa</a>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Xóa bài viết này?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center">Chưa có bài viết.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{ $posts->links() }}
</div>
@endsection
