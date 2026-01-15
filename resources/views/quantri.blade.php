@extends('layouts.app')

@section('title', config('app.name', 'OM') . ' - Quản trị')

@section('content')
    <!-- Slider 2 -->
    <div class="container mt-6">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <h1 class="fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg ">
                    <a class="px-0 text-black">Hệ thống quản trị<br class="d-sm-block d-md-none d-lg-block"> sau đào tạo</a>
                </h1>

                <p class="mt-3 text-black fs-1 fw-bold">
                    Ứng dụng ngay kiến thức đã học với CRM OM - hệ thống quản trị thông minh, giúp đo lường hiệu quả, tối ưu
                    Marketing & Sales và quản lý toàn bộ hoạt động kinh doanh trên một nền tảng duy nhất.
                </p>

                <div class="d-flex my-sm-4 my-md-5">
                    <a class="btn btn-primary py-sm-2 px-sm-3 p-md-4 fs-4 rounded-4 fw-bold" role="button">Dùng thử</a>
                    <a class="btn btn-primary py-sm-2 px-sm-3 p-md-4 fs-4 rounded-4 fw-bold ms-4" role="button">Tư vấn
                        CRM</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded-5 embed-responsive-item" src="https://www.youtube.com/embed/YtvY3PyMdnQ"
                        title="YouTube video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Radar -->
    <div class="container width-60 mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg">
                <a class="px-0 text-black">CRM OM giúp bạn quan sát<br class="d-none d-md-block"> mọi chỉ số quan trọng</a>
            </h1>

            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold ">Khi dữ liệu được minh bạch và nhất quán,
                mọi quyết định đều trở nên chính xác hơn. Với hệ thống quản trị CRM OM, bạn luôn nắm bắt kịp thời các thông
                tin quan trọng, đồng thời nhận được những cảnh báo thông minh dựa trên tiêu chí riêng của doanh nghiệp, giúp
                chủ động kiểm soát và tối ưu hiệu quả vận hành.
            </p>

            <div class="col-lg-8 mt-4 position-relative">
                <div class="position-relative radar">
                    <img src="{{ asset('img/website Radar 2.png') }}" alt=""
                        class=" position-absolute rotate-item w-100">
                    <img src="{{ asset('img/website Radar Circle 2.png') }}" alt="" class="w-100 ">
                </div>
                <div class="radar-button">
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill ads-button">Quảng cáo</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill sales-button">Sales</button>

                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill vh-button">Vận
                        hành</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill luong-button">Lương</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill doanhso-button">Doanh số</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill doitac-button">Đối tác</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill chinhanh-button">Chi nhánh</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Quan ly -->
    <div class="container width-60">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
                <a class="px-0 text-black">Quản lý dễ dàng<br>
                    trên mọi thiết bị</a>
            </h1>

            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold">Hệ thống CRM OM tối ưu trên mọi thiết bị
                mang lại trải
                nghiệm tuyệt đối cho từng vị trí chuyên môn và yêu cầu đặc thù.
                Từ máy tính bàn, laptop, máy tính bảng cho đến các thiết bị di động. Giờ đây việc quan trị doanh nghiệp dễ
                dàng hơn bao giờ hết khi bạn chủ động hơn bao giờ hết khi có hệ thống CRM này.
            </p>

            <img src="{{ asset('img/Asset 2 1.png') }}" alt="" class="mt-5">
        </div>
    </div>

    <!-- Phu hop -->
    <div class="container mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
                <a class="px-0 text-black">Phù hợp cho mọi<br>
                    lĩnh vực kinh doanh
                </a>
            </h1>
        </div>


        <div class="word-run owl-carousel owl-theme mt-4">
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
        </div>


        <div class="row mt-5">
            <div class="col-lg-6 mb-5">
                <img src="{{ asset('img/morkup ipad 2 1.png') }}" alt="" class="w-100">
            </div>

            <div class="col-lg-6 mb-5 d-flex flex-column">
                <p class="fw-bold fs-1">Tùy biến giao diện báo cáo và lựa chọn các chức năng phù hợp với doanh nghiệp của
                    mình.</p>
                <div class=" border-2 border-bottom border-custom">
                    <p class="fw-bold fs-1 mt-1 mb-0">1. Linh hoạt theo mô hình kinh doanh</p>
                    <p class="fs-3">Dễ dàng tuỳ chỉnh để phù hợp với B2B, B2C, dịch vụ, bán lẻ hay giáo dục.</p>
                </div>
                <div class=" border-2 border-bottom border-custom">
                    <p class="fw-bold fs-1 mt-1 mb-0">2. Thích ứng theo quy mô doanh nghiệp</p>
                    <p class="fs-3">Phù hợp từ cá nhân, startup đến doanh nghiệp vừa và lớn, mở rộng không giới hạn.</p>
                </div>
                <div class=" border-2 border-bottom border-custom">
                    <p class="fw-bold fs-1 mt-1 mb-0">3. Ứng dụng thực tế cho nhiều ngành nghề</p>
                    <p class="fs-3">Marketing, Sales, đào tạo, chăm sóc khách hàng… tất cả trên một hệ thống thống nhất.
                    </p>
                </div>
            </div>
        </div>
    </div>


    {{-- 
    <div class="container">
        <div class="mt-6 p-5 border border-2 border-custom rounded-5 shadow-custom bg-white d-none">

            <div class="row mt-xl-5 hover-1-container d-none d-md-flex">
                <div
                    class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p class="fs-3">Khoá học trực tuyến được thiết kế bài bản, học mọi lúc mọi nơi. Nội dung thực tiễn, dễ
                        áp dụng, giúp học viên chủ động nâng cao kỹ năng theo lộ trình rõ ràng.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm"
                        href="https://online.hienu.vn/" role="button">Xem chi tiết
                    </a>
                </div>

                <div
                    class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Đào tạo Inhouse<br>Doanh nghiệp</p>
                    <p class="fs-3">Với những nội dung đào tạo chuyên sâu trực tiếp vào sản phẩm / dịch vụ của Doanh
                        nghiệp của bạn.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm z-1"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div
                    class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Đăng ký học theo<br>lớp / nhóm </p>
                    <p class="fs-3">Hình thức học tương tác cùng giảng viên và học viên khác. Phù hợp cho nhóm cá nhân
                        hoặc đội nhóm muốn học tập đồng bộ, trao đổi và thực hành hiệu quả.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div
                    class="col-md-6 col-lg-3 border-2 border-custom py-sm-4 py-md-5 ps-lg-4 ps-xxl-5 hover-1 position-relative">
                    <p class="fw-bold fs-2">Coaching Marketing</br> kèm 1:1</p>
                    <p class="fs-3">Huấn luyện cá nhân hoá theo mục tiêu riêng. Giảng viên đồng hành, tư vấn và giải
                        quyết trực tiếp các vấn đề thực tế của học viên.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-xl-4 px-lg-5 fs-3 rounded-4 fw-bold shadow-sm"
                        role="button">Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- Banner 1 -->
    <div class="bg-custom pt-6 p-5 mt-6 banner-1">
        <div class="container width-60">
            <h1 class="text-center fw-max-bold text-white fs-custom">Chia sẻ chính là cách<br class="d-none d-md-block">
                nhận được nhiều hơn</h1>
            <p class="mt-4 text-center text-white fs-4">Dựa trên tinh thần cống hiến, trách nhiệm và phụng sự hết mình
                cho cộng đồng, cho những thế hệ tiếp nối. Bạn sẽ cảm nhận được những sản phẩm chất lượng và đầy tử tế.
            </p>
        </div>
    </div>

    <!-- Lua chon goi dich vu -->
    <div class="container mt-6 width-60">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
                <a class="px-0 text-black">Chi phí dịch vụ CRM OM</a>
            </h1>
            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold">Chi phí dịch vụ CRM OM được xây dựng linh
                hoạt dựa trên hiện trạng và nhu cầu thực tế của từng doanh nghiệp. Tuỳ theo quy mô, mục tiêu và mức độ triển
                khai, bạn có thể lựa chọn giải pháp phù hợp nhất để tối ưu hiệu quả vận hành mà vẫn đảm bảo chi phí hợp lý.
            </p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row gx-4">
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Miễn phí</p>
                    <p class="text-center fst-italic">Đăng ký miễn phí dễ dàng</p>
                    <p class="fw-bold fs-2 mb-0">Đăng ký miễn phí dễ dàng</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Liên hệ để biết thêm chi tiết

                    </p>
                    {{-- <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng cơ bản
                    </p> --}}
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói chuyên nghiệp</p>
                    <p class="text-center fst-italic">Bắt đầu từ $15/tháng</p>
                    <p class="fw-bold fs-2 mb-0">Các tính năng quan trọng</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Liên hệ để biết thêm chi tiết
                    </p>
                    {{-- <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p> --}}
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói Phát triển</p>
                    <p class="text-center fst-italic">Nhận báo giá theo tính năng</p>
                    <p class="fw-bold fs-2 mb-0">Bổ sung tinh năng đặc thù</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Liên hệ để biết thêm chi tiết
                    </p>
                    {{-- <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p> --}}
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói cao cấp</p>
                    <p class="text-center fst-italic">Nhận báo giá trên dự án</p>
                    <p class="fw-bold fs-2 mb-0">Thiết kế CRM riêng</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Liên hệ để biết thêm chi tiết
                    </p>
                    {{-- <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25"
                            style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p> --}}
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-center mt-5">
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" role="button"
                style="width: 20rem;">Dùng thử miễn phí</a>
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" role="button"
                style="width: 20rem;">Tư vấn CRM</a>
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" role="button"
                style="width: 20rem;">Gặp trực tiếp</a>
        </div>
        <p class="fs-4 fst-italic text-center mt-5">Bạn có thể xem chi tiết các <a
                class="btn p-0 fs-4 text-decoration-underline">tính năng CRM OM</a> và quan trọng ở đây!</p>
    </div>

    <!-- Slider -->
    <div class="container mt-6 width-60">
        <div class="row justify-content-center">
            <h1
                class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75 mb-3">
                <a class="px-0 text-black">Mọi người nói gì về <br>
                    CRM OM</a>
            </h1>
        </div>

        <div id="carouselExampleIndicators1" class="carousel slide d-none">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt=""
                        width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                    aria-label="Slide 2">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt=""
                        width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt=""
                        width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt=""
                        width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt=""
                        width="70" height="70">
                </button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">"Quỳnh Lan</p>
                            <p class="fs-4">Tổng giám đốc Logitech VN</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“CRM OM giúp tôi nắm rõ toàn bộ hoạt động Marketing & Sales chỉ
                                trong một bảng điều khiển. Quyết định nhanh hơn và chính xác hơn rất nhiều.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Nhật Ánh</p>
                            <p class="fs-4">Giám đốc bán hàng AJ CORP</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Tôi đặc biệt hài lòng với khả năng đo lường và báo cáo tự động.
                                Mọi chỉ số đều rõ ràng, giúp tối ưu chiến dịch hiệu quả hơn.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Hoàng Nam</p>
                            <p class="fs-4">Founder - Thế Giới Phụ Tùng</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Hệ thống giúp đội ngũ Sales theo dõi khách hàng xuyên suốt,
                                không bỏ sót lead và cải thiện tỷ lệ chốt đơn rõ rệt.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Ngọc Anh</p>
                            <p class="fs-4">Giám Đốc Nhôm Kính Ngọc Anh</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Quy trình được chuẩn hoá và tự động hoá, giảm đáng kể sai sót
                                và thời gian xử lý công việc hàng ngày.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Hoàng Giang</p>
                            <p class="fs-4">Founder Ecobio-global</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“CRM OM dễ sử dụng, linh hoạt theo từng giai đoạn phát triển của
                                doanh nghiệp. Chi phí hợp lý nhưng mang lại giá trị rất cao.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Vĩnh Tưởng</p>
                            <p class="fs-4">Founder TSK Imperial</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“CRM OM có giao diện trực quan, dễ sử dụng nhưng rất thông minh.
                                Mọi thông tin được sắp xếp khoa học, giúp tôi làm việc nhanh hơn mà không cần mất thời gian
                                làm quen.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Ngọc Nhung</p>
                            <p class="fs-4">Founder G-Tek</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Nhờ hệ thống cảnh báo của CRM OM, tôi luôn phát hiện kịp thời
                                những chỉ số bất thường và cơ hội bị bỏ lỡ. Điều này giúp đội ngũ xử lý nhanh và hạn chế rủi
                                ro đáng kể trong việc theo dõi và chăm sóc khách hàng."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="prev">
                <span class="material-symbols-outlined text-black rounded-circle p-1 shadow-sm">
                    keyboard_arrow_left
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1"
                data-bs-slide="next">
                <span class="material-symbols-outlined text-black rounded-circle p-1 shadow-sm">
                    keyboard_arrow_right
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Slider Tenplate -->
    <div class="content">

        <div class="container width-60">
            <div class="slider-92911">
                <div class="mt-sm-3 mb-sm-4 mb-md-5 mt-md-4 text-center">
                    <ul class="thumbnail">
                        <li class="active"><a><img src="{{ asset('img/person_1_sm.jpg') }}" alt="Image"
                                    class="img-fluid"></a> </li>
                        <li><a><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a><img src="{{ asset('img/person_3_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a><img src="{{ asset('img/person_1_sm.jpg') }}" alt="Image" class="img-fluid"></a> </li>
                        <li><a><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                    </ul>
                </div>
                <div class="owl-carousel slide-one-item">



                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">"Quỳnh Lan</p>
                            <p class="fs-4">Tổng giám đốc Logitech VN</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“CRM OM giúp tôi nắm rõ toàn bộ hoạt động Marketing & Sales chỉ
                                trong một bảng điều khiển. Quyết định nhanh hơn và chính xác hơn rất nhiều.”
                            </p>
                        </div>
                    </div>

                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Nhật Ánh</p>
                            <p class="fs-4">Giám đốc bán hàng AJ CORP</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“Tôi đặc biệt hài lòng với khả năng đo lường và báo cáo tự động.
                                Mọi chỉ số đều rõ ràng, giúp tối ưu chiến dịch hiệu quả hơn.”
                            </p>
                        </div>
                    </div>

                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Hoàng Nam</p>
                            <p class="fs-4">Founder - Thế Giới Phụ Tùng</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“Hệ thống giúp đội ngũ Sales theo dõi khách hàng xuyên suốt,
                                không bỏ sót lead và cải thiện tỷ lệ chốt đơn rõ rệt.”
                            </p>
                        </div>
                    </div>

                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Ngọc Anh</p>
                            <p class="fs-4">Giám Đốc Nhôm Kính Ngọc Anh</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“Quy trình được chuẩn hoá và tự động hoá, giảm đáng kể sai sót
                                và thời gian xử lý công việc hàng ngày.”
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5 px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Hoàng Giang</p>
                            <p class="fs-4">Founder Ecobio-global</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“CRM OM dễ sử dụng, linh hoạt theo từng giai đoạn phát triển của
                                doanh nghiệp. Chi phí hợp lý nhưng mang lại giá trị rất cao.”
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5 px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Vĩnh Tưởng</p>
                            <p class="fs-4">Founder TSK Imperial</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“CRM OM có giao diện trực quan, dễ sử dụng nhưng rất thông minh.
                                Mọi thông tin được sắp xếp khoa học, giúp tôi làm việc nhanh hơn mà không cần mất thời gian
                                làm quen.”
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5 px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Ngọc Nhung</p>
                            <p class="fs-4">Founder G-Tek</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“Nhờ hệ thống cảnh báo của CRM OM, tôi luôn phát hiện kịp thời
                                những chỉ số bất thường và cơ hội bị bỏ lỡ. Điều này giúp đội ngũ xử lý nhanh và hạn chế rủi
                                ro đáng kể trong việc theo dõi và chăm sóc khách hàng."
                            </p>
                        </div>
                    </div>
                </div>


            </div>


        </div>
    </div>

    <!-- Accordion -->
    <div class="container width-60 mt-6">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
                <a class="px-0 text-black">Một số câu hỏi <br>
                    thường gặp</a>
            </h1>
        </div>

        <div class="accordion mt-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        CRM là gì?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-4">
                        CRM (Customer Relationship Management) là hệ thống quản lý thông tin khách hàng, giúp doanh nghiệp
                        theo dõi, chăm sóc và tối ưu quy trình Marketing & Sales.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false"
                        aria-controls="collapseTwo">
                        Doanh nghiệp nhỏ có cần sử dụng CRM không?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Có. CRM đặc biệt hữu ích cho doanh nghiệp nhỏ vì giúp quản lý tập trung, tránh thất thoát khách hàng
                        và tối ưu nguồn lực ngay từ đầu.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        CRM giúp ích gì cho Marketing & Sales?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        CRM giúp doanh nghiệp bám sát các chỉ số quan trọng thông qua hệ thống thống kê, phân tích và cảnh
                        báo thông minh. Nhờ đó, đội ngũ Marketing & Sales dễ dàng theo dõi hành vi khách hàng, tối ưu chăm
                        sóc, nâng cao tỷ lệ mua lại, kiểm soát tần suất mua hàng và gia tăng hiệu quả chuyển đổi.
                    </div>
                </div>


            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        CRM OM có thể tuỳ chỉnh theo doanh nghiệp không?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Có. CRM OM được thiết kế linh hoạt, cho phép tuỳ chỉnh quy trình, tiêu chí đo lường và báo cáo theo
                        nhu cầu thực tế của từng doanh nghiệp. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        CRM có giúp lập báo cáo không?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Có. CRM tự động tổng hợp dữ liệu và tạo báo cáo trực quan, giúp nhà quản lý dễ dàng theo dõi và đánh
                        giá hiệu quả kinh doanh. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Cảnh báo trong CRM OM hoạt động như thế nào? </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Hệ thống cảnh báo của CRM OM được thiết lập dựa trên các tiêu chí cụ thể như thời gian, trạng thái
                        công việc, chỉ số Marketing & Sales hoặc hành vi khách hàng. Khi có dấu hiệu bất thường, hệ thống sẽ
                        tự động gửi cảnh báo để người dùng kịp thời xử lý. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        CRM OM có điểm gì khác biệt nổi bật so với các CRM khác? </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        CRM OM được tối ưu chi tiết theo từng ngành nghề, phòng ban và quy trình vận hành đặc thù của mỗi
                        doanh nghiệp, giúp triển khai sát thực tế, dễ áp dụng và mang lại hiệu quả rõ ràng. </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        CRM OM có giao việc theo nhóm và cá nhân không?</button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Có. CRM OM cho phép giao việc linh hoạt cho từng cá nhân hoặc theo nhóm, đồng thời theo dõi tiến độ
                        và hiệu suất làm việc một cách minh bạch.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        CRM OM có cho phép nhiều người thao tác công việc chồng chéo trên cùng một file không?</button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Có. Hệ thống cho phép nhiều người cùng làm việc trên một dữ liệu và sẽ lưu lại toàn bộ lịch sử thay
                        đổi của từng tài khoản, đảm bảo kiểm soát, minh bạch và dễ dàng truy vết khi cần. </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection





