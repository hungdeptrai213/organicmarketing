@extends('layouts.app')

@section('title', 'Sửa bài viết - Admin')

@section('content')
<div class="container mt-6 width-60">
    <h1 class="fw-max-bold fs-custom mb-4">Sửa bài viết</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data" class="border border-2 border-dark rounded-5 shadow-custom p-4 bg-white">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-bold">Tiêu đề</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Tóm tắt</label>
            <textarea name="excerpt" class="form-control" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Nội dung</label>
            <textarea id="content-editor" name="content" class="form-control" rows="8">{{ old('content', $post->content) }}</textarea>
            <small class="text-muted">Soạn thảo WYSIWYG, chèn ảnh (nút Upload), heading, alt… phục vụ SEO onpage.</small>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Tác giả</label>
                <select name="author_id" class="form-select">
                    <option value="">-- Chọn tác giả có sẵn --</option>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" @selected(old('author_id', $post->author_id) == $author->id)>{{ $author->name }}</option>
                    @endforeach
                </select>
                <small class="text-muted">Hoặc nhập tên tác giả mới bên dưới</small>
                <input type="text" name="new_author" class="form-control mt-2" placeholder="Tác giả mới" value="{{ old('new_author') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Ngày xuất bản</label>
                <input type="datetime-local" name="published_at" class="form-control" value="{{ old('published_at', optional($post->published_at)->format('Y-m-d\\TH:i')) }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Chủ đề</label>
                <select name="topics[]" class="form-select" multiple>
                    @foreach($topics as $topic)
                        <option value="{{ $topic->id }}" @selected(collect(old('topics', $post->topics->pluck('id')))->contains($topic->id))>{{ $topic->name }}</option>
                    @endforeach
                </select>
                <div class="d-flex gap-2 mt-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary clear-selection" data-target="topics[]">Bỏ chọn</button>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-selected" data-target="topics[]">Xóa mục đã chọn</button>
                </div>
                <small class="text-muted">Nhập chủ đề mới (cách nhau dấu phẩy)</small>
                <input type="text" name="new_topics" class="form-control mt-2" placeholder="Ví dụ: Marketing, CRM" value="{{ old('new_topics') }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Lĩnh vực</label>
                <select name="industries[]" class="form-select" multiple>
                    @foreach($industries as $industry)
                        <option value="{{ $industry->id }}" @selected(collect(old('industries', $post->industries->pluck('id')))->contains($industry->id))>{{ $industry->name }}</option>
                    @endforeach
                </select>
                <div class="d-flex gap-2 mt-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary clear-selection" data-target="industries[]">Bỏ chọn</button>
                    <button type="button" class="btn btn-sm btn-outline-danger remove-selected" data-target="industries[]">Xóa mục đã chọn</button>
                </div>
                <small class="text-muted">Nhập lĩnh vực mới (cách nhau dấu phẩy)</small>
                <input type="text" name="new_industries" class="form-control mt-2" placeholder="Ví dụ: Bất động sản, Spa" value="{{ old('new_industries') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Ảnh cover</label>
                @if($post->cover_image)
                    <div class="mb-2">
                        <img src="{{ asset($post->cover_image) }}" alt="" class="img-fluid rounded-3" style="max-width: 120px;">
                    </div>
                @endif
                <input type="file" name="cover_image" class="form-control" accept="image/*">
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Ảnh dùng trong nội dung (tùy chọn)</label>
                <input type="file" name="content_image" class="form-control" accept="image/*">
                <small class="text-muted">Ảnh sẽ được tự chèn cuối nội dung, bạn có thể cắt/dán vị trí sau khi lưu.</small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Trạng thái</label>
                <select name="status" class="form-select">
                    <option value="draft" @selected(old('status', $post->status) === 'draft')>Nháp</option>
                    <option value="published" @selected(old('status', $post->status) === 'published')>Xuất bản</option>
                    <option value="archived" @selected(old('status', $post->status) === 'archived')>Lưu trữ</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary fw-bold px-4">Cập nhật</button>
    </form>
</div>

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const textarea = document.querySelector('#content-editor');
        if (textarea) {
            textarea.removeAttribute('required');
        }
        ClassicEditor
            .create(document.querySelector('#content-editor'), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'blockQuote',
                        'bulletedList', 'numberedList', '|',
                        'insertTable', 'imageUpload', 'undo', 'redo'
                    ]
                },
                ckfinder: {
                    uploadUrl: "{{ route('admin.posts.upload') }}?_token={{ csrf_token() }}"
                }
            })
            .catch(error => console.error(error));

        document.querySelectorAll('.clear-selection').forEach(btn => {
            btn.addEventListener('click', () => {
                const name = btn.dataset.target;
                document.querySelectorAll(`select[name="${name}"] option`).forEach(opt => opt.selected = false);
            });
        });

        document.querySelectorAll('.remove-selected').forEach(btn => {
            btn.addEventListener('click', () => {
                const name = btn.dataset.target;
                const select = document.querySelector(`select[name="${name}"]`);
                const toRemove = Array.from(select.selectedOptions);
                toRemove.forEach(opt => opt.remove());
            });
        });
    });
</script>
@endpush
@endsection
