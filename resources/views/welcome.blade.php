@extends('layouts.app')

@section('title', config('app.name', 'OM'))

@section('content')
    <!-- Slider -->
    <div class="container mt-6">
        <div id="carouselExample1" class="carousel slide">
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active">
                    <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption bg-white rounded-5 px-sm-3 px-md-4 px-xl-5 py-xxl-6 d-flex flex-column">
                        <p class="text-black fs-1 fw-bold text-start mb-1">Tạo điều kiện cho mọi người nâng cao trình độ học tập</p>
                        <p class="text-black fs-2 text-start mb-1">Phát triển con người và doanh nghiệp của bạn bằng cách cung cấp các khóa học được xếp hạng đầu bảng về các chủ đề họ cần để luôn cập nhật, phát triển và đổi mới.</p>
                        
                        <div class="d-flex mt-auto">
                            <a class="btn btn-secondary fs-3 px-md-5 py-xl-4 rounded-4 fw-bold shadow-sm" href="#" role="button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('img/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption bg-white rounded-5 px-sm-3 px-md-4 px-xl-5 py-xxl-6 d-flex flex-column">
                        <p class="text-black fs-1 fw-bold text-start mb-1">Tạo điều kiện cho mọi người nâng cao trình độ học tập</p>
                        <p class="text-black fs-2 text-start mb-1">Phát triển con người và doanh nghiệp của bạn bằng cách cung cấp các khóa học được xếp hạng đầu bảng về các chủ đề họ cần để luôn cập nhật, phát triển và đổi mới.</p>
                        
                        <div class="d-flex mt-auto">
                            <a class="btn btn-secondary fs-3 px-md-5 py-xl-4 rounded-4 fw-bold shadow-sm" href="#" role="button">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                <span class="material-symbols-outlined text-black bg-white rounded-circle p-1">
                    keyboard_arrow_left
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                <span class="material-symbols-outlined text-black bg-white rounded-circle p-1">
                    keyboard_arrow_right
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- With shadow-custom -->
    <div class="container mt-6">
        <div class="mt-6 p-sm-4 p-md-5 border border-2 border-custom rounded-5 shadow-custom bg-white">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="fw-max-bold fs-custom flex-grow-1">
                        Lựa chọn phương pháp<br class="d-none d-lg-block"> đào tạo phù hợp dành cho bạn
                    </h1>
                </div>
                <div class="col-lg-4">
                    <p class="text-lg-end fw-bold fs-3 text-decoration-underline">
                        Hệ thống bài giảng đa dạng và chuyên sâu. Cùng với đó bạn sẽ nhận được các hệ thống bài tập và
                        tài liệu
                        hỗ trợ trong quá trình theo học.
                    </p>
                </div>
            </div>

            <div class="row mt-xl-5 hover-1-container d-none d-md-flex">
                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p class="fs-3">Khoá học trực tuyến được thiết kế bài bản, học mọi lúc mọi nơi. Nội dung thực tiễn, dễ áp dụng, giúp học viên chủ động nâng cao kỹ năng theo lộ trình rõ ràng.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm"
                        href="https://online.hienu.vn/" role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Đào tạo Inhouse<br>Doanh nghiệp</p>
                    <p class="fs-3">Với những nội dung đào tạo chuyên sâu trực tiếp vào sản phẩm / dịch vụ của Doanh nghiệp của bạn.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm z-1" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Đăng ký học theo<br>lớp / nhóm </p>
                    <p class="fs-3">Hình thức học tương tác cùng giảng viên và học viên khác. Phù hợp cho nhóm cá nhân hoặc đội nhóm muốn học tập đồng bộ, trao đổi và thực hành hiệu quả.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Coaching kèm 1:1</p>
                    <p class="fs-3">Huấn luyện cá nhân hoá theo mục tiêu riêng. Giảng viên đồng hành, tư vấn và giải quyết trực tiếp các vấn đề thực tế của học viên.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>
            </div>

            <!-- Slide -->
            <div class="card-run-2 owl-carousel owl-theme mt-2 d-sm-block d-md-none">
                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p class="fs-3">Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm"
                        href="https://online.hienu.vn/" role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p class="fs-3">Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm z-1" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 position-relative">
                    <p class="fw-bold fs-2">Đăng ký học theo<br>lớp / nhóm </p>
                    <p class="fs-3">Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 position-relative">
                    <p class="fw-bold fs-2">Coaching<br>kèm 1:1</p>
                    <p class="fs-3">Bạn sẽ được xây dựng một lộ trình riêng cho mục tiêu kinh doanh hay học tập của mình.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Run -->
    <div class="container mt-6">
    
        <div class="row">
            <div class="col-lg-7">
                <h1 class="fw-max-bold fs-custom flex-grow-1 mon-alt">
                    Sử dụng hệ thống quản trị<br class="d-none d-lg-block"> tối ưu cho Marketing & Sales
                </h1>
            </div>
            <div class="col-lg-5">
                <p class="text-lg-end fw-bold fs-3 text-decoration-underline">
                    Các giải pháp học tập không nên là một giải pháp phù hợp với tất cả. Để đào tạo hiệu quả, bạn
                    cần có đúng kỹ năng và đúng phương thức, kỹ năng và đúng.
                </p>
            </div>
        </div>
    
    </div>

    <div class="container mt-4">
        <div class="word-run owl-carousel owl-theme mb-4">
            <div class="item fs-2 fw-bold text-decoration-underline">
                Bất Động Sản
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Spa
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Truyền thông
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Thiết kế
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Sản xuất
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Kinh doanh
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Tài chính
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Trang sức
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Thời trang
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Mỹ phẩm
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Trang sức
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Quảng cáo
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Sức khỏe
            </div>
            <div class="item fs-2 fw-bold text-decoration-underline">
                Sản xuất
            </div>
        </div>

        <div class="swiper ms-run d-none">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                    <div class="item fs-2 fw-bold text-decoration-underline swiper-slide">
                        Bất Động Sản
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar d-none"></div>
            </div>


        <div class="card-run-2 owl-carousel owl-theme mt-2">
            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Đo lường chi tiết</p>
                <p class="mb-auto">Giúp bạn theo dõi chi tiết các chỉ số quan trọng như kết quả
                    Marketing, doanh số, chi phí...</p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>

            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Lập báo cáo</p>
                <p class="mb-auto">Giúp bạn lập báo cáo chính xác và nhanh gọn. Tối ưu thời gian và minh
                    bạch.</p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>

            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Cảnh báo</p>
                <p class="mb-auto">Cảnh báo chính xác và kịp thời cho từng vị trí nhân sự trong doanh
                    nghiệp như hiệu suất, kết quả cùng kỳ,...</p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>

            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Theo dõi khách hàng</p>
                <p class="mb-auto">Bám sát và chăm sóc khách hàng kỹ càng theo từng giai đoạn trước,
                    trong và sau khi mua hàng.</p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>

            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Tối ưu quy trình</p>
                <p class="mb-auto">Bằng việc am hiểu thị trường, thấu hiểu khách hàng mục tiêu và mong.
                </p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>

            <div class="fs-3 rounded-5 p-4 bg-white shadow-sm item">
                <p class="fw-bold fs-2">Quản lý sản phẩm</p>
                <p class="mb-auto">Quản lý danh mục sản phẩm, số lượng tồn kho và các hạ mục quà tặng.
                </p>
                <div class="d-flex">
                    <a class="btn btn-custom fs-4 px-xxl-4 rounded-4 fw-bold" href="#" role="button">
                    <div class="custom-arrow-icon d-inline-block me-2" style="background-image: url('{{ asset('img/angle.png') }}');"></div>Xem chi tiết</a>
                </div>
            </div>
        </div>

    </div>


    <!-- Banner 1 -->
    <div class="bg-custom p-5 pt-6 mt-6">
        <div class="container width-60">
            <h1 class="text-center fw-max-bold text-white fs-custom">Chia sẻ chính là cách<br class="d-none d-lg-block"> nhận được nhiều hơn</h1>
            <p class="mt-4 text-center text-white fs-4">Dựa trên tinh thần cống hiến, trách nhiệm và phụng sự hết mình
                cho cộng đồng, cho những thế hệ tiếp nối. Bạn sẽ cảm nhận được những sản phẩm chất lượng và đầy tử tế.
            </p>
        </div>
    </div>


    <!-- Cau chuyen trong nghe-->
    <div class="container mt-6">
        <div class="p-sm-4 p-md-5 border border-2 border-custom rounded-5 shadow-custom bg-white">
            <div class="row justify-content-between">
                <div class="col-md-8 ">
                    <h1 class="fw-max-bold fs-custom mon-alt">
                        Những câu chuyện trong nghề
                    </h1>
                    <p class="fw-bold fs-2 text-decoration-underline mt-2">
                        Từ những trải nghiệm thực tế
                    </p>
                </div>
    
                <div class="col-2 d-sm-none d-md-flex justify-content-end">
                    <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mb-auto" href="#" role="button">Xem thêm
                    </a>
                </div>
            </div>
    
    
            <div class="row gx-5 mt-4 d-sm-none d-md-flex">
                <!-- Left main video -->
                <div class="col-lg-7 mb-5">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/hYnDo4qO0QE"
                            title="YouTube video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
    
                <!-- Right side small videos -->
                <div class="col-lg-5 d-flex flex-column">
                    <div class="video-item d-flex align-items-center border-bottom border-custom border-2 pb-45 mb-45">
                        <img src="https://img.youtube.com/vi/EPz2s0AFHRM/hqdefault.jpg" class="img-fluid rounded-4 me-45 w-38"
                            alt="Video thumbnail 1">
                        <p class="mb-0 fs-2">Phân tích tiến trình bán dẫn (TSMC vs Samsung) – EPz2s0AFHRM</p>
                    </div>
    
                    <div class="video-item d-flex align-items-center border-bottom border-custom border-2 pb-45 mb-45">
                        <img src="https://img.youtube.com/vi/VeNvatPJ3Tw/hqdefault.jpg" class="img-fluid rounded-4 me-45 w-38"
                            alt="Video thumbnail 2">
                        <p class="mb-0 fs-2">Tăng trưởng doanh nghiệp - VeNvatPJ3Tw</p>
                    </div>
    
                    <div class="video-item d-flex align-items-center">
                        <img src="https://img.youtube.com/vi/LsYHgMiiVyU/hqdefault.jpg" class="img-fluid rounded-4 me-45 w-38"
                            alt="Video thumbnail 3">
                        <p class="mb-0 fs-2">Vận hành & quản trị - LsYHgMiiVyU</p>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="card-run-2 owl-carousel owl-theme mt-2 d-sm-block d-md-none">
                <div class="col-lg-7 mb-5">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/EPz2s0AFHRM?start=37"
                            title="YouTube video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-4 fs-2">Phân tích tiến trình bán dẫn (TSMC vs Samsung) – EPz2s0AFHRM</p>
                </div>

                <div class="col-lg-7 mb-5">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/VeNvatPJ3Tw"
                            title="YouTube video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-4 fs-2">Tăng trưởng doanh nghiệp - VeNvatPJ3Tw</p>
                </div>

                <div class="col-lg-7 mb-5">
                    <div class="ratio ratio-16x9">
                        <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/LsYHgMiiVyU?start=149"
                            title="YouTube video"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mt-4 fs-2">Vận hành & quản trị - LsYHgMiiVyU</p>
                </div>
            </div>

            <div class="d-sm-flex d-md-none mt-5 justify-content-end">
                <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm" href="#" role="button">Xem thêm
                </a>
            </div>

        </div>

        
    
    </div>
@endsection
