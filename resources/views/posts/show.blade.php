@extends('layouts.app')

@section('title', $post->title . ' - ' . config('app.name', 'OM'))

@section('content')
    <!-- Banner + search same as chia sẻ -->
    <div class="container mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg"><a class="px-0 text-black">Những chia sẻ từ<br class="d-none d-md-block"> những trải nghiệm vô giá!</a></h1>
            <p class="mt-3 text-sm-start text-md-center text-black fs-4">Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì<br class="d-none d-md-block"> Organic Marketing vẫn đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
            </p>
        </div>
    </div>

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

    <!-- Content + sidebar -->
    <div class="container mt-5">
        <div class="row gx-5">
            <div class="col-lg-9 d-flex flex-column">
                <div class="p-4 rounded-4 border ">
                    <h1 class="fw-max-bold fs-custom">{{ $post->title }}</h1>
                    <div class="d-flex align-items-center flex-wrap mb-3">
                        <span class="me-3 fs-4">Tác giả: <a href="{{ route('posts.index', ['author' => $post->author->slug]) }}" class="text-decoration-underline">{{ $post->author->name }}</a></span>
                        <span class="me-3 fs-4 text-muted">{{ optional($post->published_at)->format('d/m/Y') }}</span>
                        <div class="d-flex flex-wrap">
                            @foreach($post->topics as $topic)
                                <a class="btn fs-5 fst-italic text-start py-0 me-2" href="{{ route('posts.index', ['topic' => $topic->slug]) }}">#{{ $topic->name }}</a>
                            @endforeach
                            @foreach($post->industries as $industry)
                                <a class="btn fs-5 fst-italic text-start py-0 me-2" href="{{ route('posts.index', ['industry' => $industry->slug]) }}">#{{ $industry->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    @if($post->cover_image)
                        <img src="{{ asset($post->cover_image) }}" alt="{{ $post->title }}" class="img-fluid rounded-5 mb-4">
                    @endif

                    <div class="fs-4 custom-justify" style="padding: 40px 0;">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 ">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 mt-5">
            </div>
        </div>
    </div>

    @if($related->count())
        <div class="container mt-6 width-60">
            <h2 class="fw-max-bold fs-2 mb-3">Bài viết liên quan</h2>
            <div class="row gx-4">
                @foreach($related as $item)
                    <div class="col-md-6 col-lg-3 mb-3">
                        <div class="p-3 border border-custom rounded-4 h-100">
                            <p class="fw-bold"><a class="text-black text-decoration-none" href="{{ route('posts.show', $item->slug) }}">{{ $item->title }}</a></p>
                            <p class="mb-1 fs-5">{{ optional($item->published_at)->format('d/m/Y') }}</p>
                            <p class="mb-0 fs-5 fst-italic">#{{ $item->author->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
