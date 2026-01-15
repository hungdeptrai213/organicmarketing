@extends('layouts.app')

@section('title', config('app.name', 'OM') . ' - Chia sẻ')

@section('content')
    <!-- Banner 1 -->
    <div class="container mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg"><a class="px-0 text-black">Những chia sẻ từ<br class="d-none d-md-block"> những trải nghiệm vô giá!</a></h1>
            <p class="mt-3 text-sm-start text-md-center text-black fs-4">Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì<br class="d-none d-md-block"> Organic Marketing vẫn đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
            </p>
        </div>
        
    </div>

    <!-- Search -->
    <div class="container mt-5">
        <form class="border border-2 border-custom rounded-5 shadow-custom p-3 search-1" role="search" method="GET" action="{{ route('posts.index') }}">
            <div class="d-flex align-items-center">
                <input class="form-control bg-transparent text-center fs-1 fw-bold" type="search" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Bạn muốn nghe gì nào?" aria-label="Search"/>
                <button class="btn px-3" type="submit"><i class="fa-solid fa-magnifying-glass fs-2"></i></button>
            </div>

            <div class="row mt-4 justify-content-center">
                <div class="col-md-4 col-lg-24 mb-3">
                    <p class="text-decoration-underline text-center fs-3">Lĩnh vực:</p>
                    <div class="custom-select w-100">
                        <select name="industry">
                            <option value="">Tất cả</option>
                            @foreach($industries as $industry)
                                <option value="{{ $industry->slug }}" @selected(($filters['industry'] ?? '') === $industry->slug)>{{ $industry->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-24 mb-3">
                    <p class="text-decoration-underline text-center fs-3">Chủ đề:</p>
                    <div class="custom-select w-100">
                        <select name="topic">
                            <option value="">Tất cả</option>
                            @foreach($topics as $topic)
                                <option value="{{ $topic->slug }}" @selected(($filters['topic'] ?? '') === $topic->slug)>{{ $topic->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-lg-24 mb-3">
                    <p class="text-decoration-underline text-center fs-3">Tác giả:</p>
                    <div class="custom-select w-100">
                        <select name="author">
                            <option value="">Tất cả</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->slug }}" @selected(($filters['author'] ?? '') === $author->slug)>{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>

    

    <!-- Cau chuyen ban than -->
    <div class="container mt-5">
        <div class="row gx-5">
            <!-- Left main video -->
            <div class="col-lg-9 d-flex flex-column">
                @forelse ($posts as $post)
                    <div class="my-4 row m-0">
                        <div class="col-12">
                            <p class="fs-3 fw-bold mb-0 ">
                                <a href="{{ route('posts.show', $post->slug) }}" class="text-black text-decoration-none">
                                    {{ $post->title }}
                                </a>
                                <a class="btn fs-4 fst-italic py-0" href="{{ route('posts.show', $post->slug) }}" role="button">Xem thêm</a>
                            </p>
                            <div class="d-flex align-items-center flex-wrap mb-1">
                                <a class="btn fs-4 fst-italic text-start py-0 me-2" href="{{ route('posts.index', ['author' => $post->author->slug]) }}" role="button">#{{ $post->author->name }}</a>
                                <span class="fs-4 text-muted">
                                    {{ optional($post->published_at ?? $post->created_at)->format('d/m/Y') }}
                                </span>
                            </div>

                            <div class="d-flex flex-wrap ps-0">
                                @foreach($post->topics as $topic)
                                    <a class="btn fs-4 fst-italic text-start py-0" href="{{ route('posts.index', ['topic' => $topic->slug]) }}" role="button">#{{ $topic->name }}</a>
                                @endforeach
                                @foreach($post->industries as $industry)
                                    <a class="btn fs-4 fst-italic text-start py-0" href="{{ route('posts.index', ['industry' => $industry->slug]) }}" role="button">#{{ $industry->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="fs-4 fst-italic">Chưa có bài viết.</p>
                @endforelse

                <div class="mt-4">
                    {{ $posts->links() }}
                </div>
            </div>

            <!-- Right side small videos -->
            <div class="col-lg-3">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 ">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 mt-5">
            </div>
        </div>
    </div>
@endsection
