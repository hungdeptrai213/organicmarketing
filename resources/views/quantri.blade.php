@extends('layouts.app')

@section('title', config('app.name', 'OM') . ' - Quản trị')

@section('content')
    <!-- Slider 2 -->
    <div class="container mt-6">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <h1 class="fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg ">
                        <a class="px-0 text-black">Grow faster and<br class="d-sm-block d-md-none d-lg-block"> work faster</a>
                </h1>
                
                <p class="mt-3 text-black fs-1 fw-bold">
                    Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì Organic Marketing vẫn đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
                </p>  
            
                <div class="d-flex my-sm-4 my-md-5">
                    <a class="btn btn-primary py-sm-2 px-sm-3 p-md-4 fs-4 rounded-4 fw-bold" href="#" role="button">Dùng thử</a>
                    <a class="btn btn-primary py-sm-2 px-sm-3 p-md-4 fs-4 rounded-4 fw-bold ms-4" href="#" role="button">Tư vấn CRM</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/VeNvatPJ3Tw" title="YouTube video"
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
    
            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold ">Khi thông tin càng rõ ràng, mọi quyết định bạn đưa ra càng
                chính xác.
                Khi nắm trong tay hệ thống quản trị CRM OM, bạn sẽ dễ dàng cập nhật những thông tin quan trọng tại mọi thời
                điểm và cùng với đó là những cảnh báo chính xác dựa trên những tiêu chí doanh nghiệp.
            </p>
    
            <div class="col-lg-8 mt-4 position-relative">
                <div class="position-relative radar">
                    <img src="{{ asset('img/website Radar 2.png') }}" alt="" class=" position-absolute rotate-item w-100">
                    <img src="{{ asset('img/website Radar Circle 2.png') }}" alt="" class="w-100 ">
                </div>
                <div class="radar-button">
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill ads-button">ADS</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill sales-button">Sales</button>
                    <button type="button" class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill vh-button">Vận
                        hành</button>
                    <button type="button"
                        class="btn btn-primary position-absolute fs-4 px-4 py-md-3 rounded-pill luong-button">Lương</button>
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
    
            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold">Hệ thống CRM OM tối ưu trên mọi thiết bị mang lại trải
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
            <h1
                class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
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
                <p class="fw-bold fs-1">Tùy biến giao diện báo cáo và lựa chọn các chức năng phù hợp với doanh nghiệp của mình.</p>
                <div class=" border-2 border-bottom border-custom">
                        <p class="fw-bold fs-1 mt-1 mb-0">Make Sense of Customer Data</p>
                        <p class="fs-3">With a unified view of every customer and powerful reporting, you’ll have all the insights you need to build better customer relationships at every.</p>
                </div>
                <div class=" border-2 border-bottom border-custom">
                        <p class="fw-bold fs-1 mt-1 mb-0">Make Sense of Customer Data</p>
                        <p class="fs-3">With a unified view of every customer and powerful reporting, you’ll have all the insights you need to build better customer relationships at every.</p>
                </div>
                <div class=" border-2 border-bottom border-custom">
                        <p class="fw-bold fs-1 mt-1 mb-0">Make Sense of Customer Data</p>
                        <p class="fs-3">With a unified view of every customer and powerful reporting, you’ll have all the insights you need to build better customer relationships at every.</p>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div class="container">
        <div class="mt-6 p-5 border border-2 border-custom rounded-5 shadow-custom bg-white d-none">
            <div class="row mt-5 hover-1-container">
                <div class="col-3 fs-3 border-2 border-custom py-5 ps-6 hover-1 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p>Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-4 px-6 fs-3 rounded-4 fw-bold shadow-sm"
                        href="https://online.hienu.vn/" role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-3 fs-3 border-2 border-custom py-5 ps-6 hover-1 position-relative">
                    <p class="fw-bold fs-2">Video quay sẵn<br>E-Learning</p>
                    <p>Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-4 px-6 fs-3 rounded-4 fw-bold shadow-sm z-1" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-3 fs-3 border-2 border-custom py-5 ps-6 hover-1 position-relative">
                    <p class="fw-bold fs-2">Đăng ký học theo<br>lớp / nhóm </p>
                    <p>Tất cả các sản phẩm khóa học video quay sẵn được biên tập chuyên sâu và chuyên nghiệp.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-4 px-6 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>

                <div class="col-3 fs-3 border-2 border-custom py-5 ps-6 hover-1 position-relative">
                    <p class="fw-bold fs-2">Coaching<br>kèm 1:1</p>
                    <p>Bạn sẽ được xây dựng một lộ trình riêng cho mục tiêu kinh doanh hay học tập của mình.</p>
                    <a class="btn btn-secondary mt-3 me-2 py-4 px-6 fs-3 rounded-4 fw-bold shadow-sm" href="#"
                        role="button">Xem chi tiết
                    </a>
                </div>
            </div>
        </div>
    </div>
        

    <!-- Banner 1 -->
    <div class="bg-custom pt-6 p-5 mt-6 banner-1">
        <div class="container width-60">
            <h1 class="text-center fw-max-bold text-white fs-custom">Chia sẻ chính là cách<br class="d-none d-md-block"> nhận được nhiều hơn</h1>
            <p class="mt-4 text-center text-white fs-4">Dựa trên tinh thần cống hiến, trách nhiệm và phụng sự hết mình
                cho cộng đồng, cho những thế hệ tiếp nối. Bạn sẽ cảm nhận được những sản phẩm chất lượng và đầy tử tế.
            </p>
        </div>
    </div>

    <!-- Lua chon goi dich vu -->
    <div class="container mt-6 width-60">
        <div class="row justify-content-center">
            <h1
                class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75">
                <a class="px-0 text-black">Quản lý dễ dàng<br>
                    trên mọi thiết bị</a>
            </h1>

            <p class="mt-3 text-sm-start text-md-center text-black fs-3 fw-bold">Hệ thống CRM OM tối ưu trên mọi thiết bị mang lại trải nghiệm tuyệt đối cho từng vị trí chuyên môn và yêu cầu đặc thù. 
                Từ máy tính bàn, laptop, máy tính bảng cho đến các thiết bị di động. Giờ đây việc quan trị doanh nghiệp dễ dàng hơn bao giờ hết khi bạn chủ động hơn bao giờ hết khi có hệ thống CRM này.
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
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói chuyên nghiệp</p>
                    <p class="text-center fst-italic">Bắt đầu từ $15/tháng cho mỗi chỗ ngồi</p>
                    <p class="fw-bold fs-2 mb-0">Các tính năng quan trọng</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói Phát triển</p>
                    <p class="text-center fst-italic">Nhận báo giá trên tính năng cụ thể</p>
                    <p class="fw-bold fs-2 mb-0">Bổ sung tinh năng đặc thù</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                </div>
            </div>
    
            <div class="col-md-6 col-lg-3 mb-3">
                <div class="fs-3 rounded-5 p-45 bg-white border border-2 border-custom h-100">
                    <p class="fw-bold fs-2 text-center mb-0">Gói cao cấp</p>
                    <p class="text-center fst-italic">Nhận báo giá trên dự án cụ thể</p>
                    <p class="fw-bold fs-2 mb-0">Thiết kế CRM riêng</p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                    <p class="fs-2 mb-0 "> <span class="material-symbols-outlined me-3 h-25" style="transform: scale(1.5) ;">
                            check
                        </span>Các tính năng phổ biến
                    </p>
                </div>
            </div>
        </div>

        <div class="d-flex flex-wrap justify-content-center mt-5">
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" href="#" role="button" style="width: 20rem;">Dùng thử miễn phí</a>
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" href="#" role="button" style="width: 20rem;" >Tư vấn CRM</a>
            <a class="btn btn-secondary fs-4 px-4 rounded-4 fw-bold shadow-sm mx-3 mb-4" href="#" role="button" style="width: 20rem;">Gặp trực tiếp</a>
        </div>
        <p class="fs-4 fst-italic text-center mt-5">Bạn có thể xem chi tiết các <a class="btn p-0 fs-4 text-decoration-underline" >tính năng CRM OM</a> và quan trọng ở đây!</p>
    </div>

    <!-- Slider -->
    <div class="container mt-6 width-60">
        <div class="row justify-content-center">
            <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg w-75 mb-3">
                <a class="px-0 text-black">Quản lý dễ dàng<br>
                    trên mọi thiết bị</a>
            </h1>
        </div>
    
        <div id="carouselExampleIndicators1" class="carousel slide d-none">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                    aria-label="Slide 2">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="70" height="70">
                </button>
                <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="4"
                    aria-label="Slide 3">
                    <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="70" height="70">
                </button>
            </div>
            
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-8">
                            <p class="fs-4 custom-justify">“Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
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
                        <li class="active"><a href="#"><img src="{{ asset('img/person_1_sm.jpg') }}" alt="Image" class="img-fluid"></a> </li>
                        <li><a href="#"><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('img/person_3_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                        <li><a href="#"><img src="{{ asset('img/person_1_sm.jpg') }}" alt="Image" class="img-fluid"></a> </li>
                        <li><a href="#"><img src="{{ asset('img/person_2_sm.jpg') }}" alt="Image" class="img-fluid"></a></li>
                    </ul>
                </div>
                <div class="owl-carousel slide-one-item">
    
                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“1 Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
    
                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“2 Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>
    
                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“3 Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>

                    <div class="row px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“4 Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
                            </p>
                        </div>
                    </div>

                    <div class="row mt-5 px-sm-3 px-md-0">
                        <div class="col-sm-12 col-lg-4 divider">
                            <p class="fw-bold fs-4 mb-0">Minh Hiếu</p>
                            <p class="fs-4">Founder Organic Marketing</p>
                        </div>
                        <div class="col-sm-12 col-lg-8">
                            <p class="fs-4 custom-justify">“5 Miễn phí hôm nay, sẵn sàng cho ngày mai.
                                Bạn có thể trải nghiệm hệ thống quản trị CRM OM trước khi đưa ra quyết định lựa chọn và gắn bó lâu dài.
                                Chỉ cần nâng cấp tài khoản miễn phí của bạn để tận hưởng các tính năng CRM nâng cao bất cứ khi nào bạn muốn. Không gián đoạn, không di chuyển dữ liệu.”
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
                <a class="px-0 text-black">Quản lý dễ dàng<br>
                    trên mọi thiết bị</a>
            </h1>
        </div>

        <div class="accordion mt-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Học tập sẽ mang lại lợi ích gì cho tổ chức của bạn?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body fs-4">
                        Bằng việc am hiểu thị trường, thấu hiểu khách hàng mục tiêu và mong muốn của doanh nghiệp, Hienu vận dụng hiệu quả
                        khả năng tư duy sáng tạo và quy trình làm việc chuyên nghiệp để khám phá những ý tưởng sáng tạo đột phá, tạo dựng
                        những giá trị cho thương hiệu, nâng cao hiệu quả kinh doanh cho khách hàng.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                     <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Học tập sẽ mang lại lợi ích gì cho tổ chức của bạn?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Bằng việc am hiểu thị trường, thấu hiểu khách hàng mục tiêu và mong muốn của doanh nghiệp, Hienu vận dụng hiệu quả
                        khả năng tư duy sáng tạo và quy trình làm việc chuyên nghiệp để khám phá những ý tưởng sáng tạo đột phá, tạo dựng
                        những giá trị cho thương hiệu, nâng cao hiệu quả kinh doanh cho khách hàng.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                     <button class="accordion-button fs-4 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Học tập sẽ mang lại lợi ích gì cho tổ chức của bạn?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Bằng việc am hiểu thị trường, thấu hiểu khách hàng mục tiêu và mong muốn của doanh nghiệp, Hienu vận dụng hiệu quả
                        khả năng tư duy sáng tạo và quy trình làm việc chuyên nghiệp để khám phá những ý tưởng sáng tạo đột phá, tạo dựng
                        những giá trị cho thương hiệu, nâng cao hiệu quả kinh doanh cho khách hàng.
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    

@endsection
