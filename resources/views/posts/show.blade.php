@extends('layouts.app')

@section('title', $post->title . ' - ' . config('app.name', 'OM'))

@section('content')
<style>
    .post-content img {
        width: 750px;
        max-width: 100%;
        height: auto;
        display: block;
        margin: 16px auto;
        border-radius: 25px;
    }
    .post-cover {
        width: 750px;
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto 16px;
    }
    .post-content .video-embed {
        width: 750px;
        max-width: 100%;
        aspect-ratio: 16 / 9;
        margin: 16px auto;
    }
    .post-content .video-embed iframe {
        width: 100%;
        height: 100%;
        border-radius: 25px;
    }
</style>
    <!-- Banner + search same as chia sẻ -->
    {{-- <div class="container mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg"><a class="px-0 text-black">Những chia sẻ từ<br class="d-none d-md-block"> những trải nghiệm vô giá!</a></h1>
            <p class="mt-3 text-sm-start text-md-center text-black fs-4">Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì<br class="d-none d-md-block"> Organic Marketing vẫn đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
            </p>
        </div>
    </div> --}}

{{--   
    <!-- Search -->
    <div class="container mt-5">
        <form class="border border-2 border-custom rounded-5 shadow-custom p-3 search-1" role="search" method="GET"
            action="{{ route('posts.index') }}">
            <div class="d-flex align-items-center">
                <input class="form-control bg-transparent text-center fs-1 fw-bold" type="search" name="q"
                    value="{{ $filters['q'] ?? '' }}" placeholder="Bạn muốn nghe gì nào?" aria-label="Search" />
                <button class="btn px-3" type="submit"><i class="fa-solid fa-magnifying-glass fs-2"></i></button>
            </div>
        </form>

        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 col-lg-24 mb-3">
                <p class="text-decoration-underline text-center fs-3">Lĩnh vực:</p>
                <div class="custom-select w-100">
                    <select name="industry">
                        <option value="">Tất cả</option>
                        @foreach ($industries as $industry)
                            <option value="{{ $industry->slug }}" @selected(($filters['industry'] ?? '') === $industry->slug)>{{ $industry->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-lg-24 mb-3">
                <p class="text-decoration-underline text-center fs-3">Chủ đề:</p>
                <div class="custom-select w-100">
                    <select name="topic">
                        <option value="">Tất cả</option>
                        @foreach ($topics as $topic)
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
                        @foreach ($authors as $author)
                            <option value="{{ $author->slug }}" @selected(($filters['author'] ?? '') === $author->slug)>{{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </div>
 --}}

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
                        <img src="{{ asset($post->cover_image) }}" alt="{{ $post->title }}" class="img-fluid rounded-5 mb-4 post-cover">
                    @endif

                    <div class="fs-4 custom-justify post-content" style="padding: 10px 0;">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

             <!-- Right side small videos -->
            <div class="col-lg-3">
                <img src="{{ asset('img/2.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 ">
                <img src="{{ asset('img/website qc-2 copy.jpg') }}" alt=""
                    class="rounded-5 shadow-custom w-100 mt-5">
                <img src="{{ asset('img/website qc-3 copy.jpg') }}" alt=""
                    class="rounded-5 shadow-custom w-100 mt-5">
            </div>
        </div>
    </div>

   
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const embeds = document.querySelectorAll('.post-content oembed[url]');
        embeds.forEach((embed) => {
            const url = embed.getAttribute('url') || '';
            let videoId = '';

            const youtubeMatch = url.match(/(?:youtube\.com\/watch\?v=|youtube\.com\/embed\/|youtu\.be\/)([A-Za-z0-9_-]{6,})/);
            if (youtubeMatch) {
                videoId = youtubeMatch[1];
            }

            if (!videoId) {
                return;
            }

            const wrapper = document.createElement('div');
            wrapper.className = 'video-embed';
            const iframe = document.createElement('iframe');
            iframe.src = `https://www.youtube.com/embed/${videoId}`;
            iframe.title = 'YouTube video';
            iframe.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
            iframe.allowFullscreen = true;
            wrapper.appendChild(iframe);

            const figure = embed.closest('figure');
            if (figure) {
                figure.replaceWith(wrapper);
            } else {
                embed.replaceWith(wrapper);
            }
        });
    });
</script>
@endpush
