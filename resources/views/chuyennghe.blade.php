@extends('layouts.app')

@section('title', config('app.name', 'OM') . ' - Chuyện nghề')

@section('content')
    <!-- Banner -->
    <div class="mt-6">
        <div class="container width-60">
            <div class="row justify-content-center">
                <h1 class="text-center fw-max-bold text-black fs-custom mon-alt fst-italic position-relative custom-bg">
                    <a class="px-0 text-black">Những chia sẻ từ<br class="d-none d-md-block"> những trải nghiệm vô giá!</a>
                </h1>
                <p class="mt-3 text-sm-start text-md-center text-black fs-4">
                    Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì<br class="d-none d-md-block">
                    Organic Marketing vẫn đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
                </p>
            </div>
        </div>
    </div>

    <!-- Search -->
    <div class="container mt-5">
        <form class="d-flex border border-2 border-custom rounded-5 shadow-custom p-3 search-1" role="search">
            <input class="form-control bg-transparent text-center fs-1 fw-bold" type="search" placeholder="Bạn muốn nghe gì nào?" aria-label="Search"/>
            <button class="btn me-2" type="submit"><i class="fa-solid fa-magnifying-glass fs-2"></i></button>
        </form>
        <div class="row mt-5 justify-content-center">
            <div class="col-md-4 col-lg-24 mb-3">
                <p class="text-decoration-underline text-center fs-3">Lĩnh vực:</p>
                <div class="custom-select w-100">
                    <select>
                        <option value="0">Select car:</option>
                        <option value="1" selected>Audi</option>
                        <option value="2">BMW</option>
                        <option value="3">Citroen</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-lg-24 mb-3">
                <p class="text-decoration-underline text-center fs-3">Chủ đề:</p>
                <div class="custom-select w-100">
                    <select>
                        <option value="0">Select car:</option>
                        <option value="1" selected>Audi</option>
                        <option value="2">BMW</option>
                        <option value="3">Citroen</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 col-lg-24 mb-3">
                <p class="text-decoration-underline text-center fs-3">Tác giả:</p>
                <div class="custom-select w-100">
                    <select>
                        <option value="0">Select car:</option>
                        <option value="1" selected>Audi</option>
                        <option value="2">BMW</option>
                        <option value="3">Citroen</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Podcast list -->
    <div class="container mt-5">
        <div class="row gx-5 mt-4">
            <!-- Left -->
            <div class="col-md-9 d-flex flex-column">
                @for ($i = 0; $i < 6; $i++)
                    <div class="border border-2 border-custom rounded-5 shadow-custom px-lg-5 py-4 row m-0 mb-5">
                        <div class="col-md-9 mb-3">
                            <p class="fs-3 fw-bold">Nguồn cảm hứng đến từ những câu chuyện. Đó là những gì Organic Marketing vẫn
                                đang và sẽ tiếp tục chia sẻ nhiều hơn nữa.
                            </p>
                            
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#videoModal">
                                    <i class="fa-solid fa-circle-play fs-custom-2 font-color-custom"></i>
                                </button>
                                <div class="bg-black w-100 mx-3" style="height: 3px;"> . </div>
                            </div>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-transparent border-0">
                                        <div class="modal-header d-none">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="ratio ratio-16x9">
                                                <iframe class="rounded-5 embed-responsive-item" src="//www.youtube.com/embed/ePbKGoIGAXY"
                                                    title="YouTube video"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen>
                                                </iframe>
                                            </div>
                                        </div>
                                        <div class="modal-footer d-none">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="col-md-3">
                            <div class="d-flex flex-wrap flex-row-reverse">
                                <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="50" height="50">
                                <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="50" height="50">
                                <img class="rounded-circle mx-2" src="{{ asset('img/Screenshot (1216).png') }}" alt="" width="50" height="50">
                            </div>
        
                            <div class="d-flex flex-wrap mt-4 flex-row-reverse">
                                <p class="text-center fs-4 ms-4 mb-1 fst-italic">#Minh Hiếu</p>
                                <p class="text-center fs-4 ms-4 mb-1 fst-italic">#Phạm Hùng</p>
                                <p class="text-center fs-4 ms-4 mb-1 fst-italic">#Marketing</p>
                                <p class="text-center fs-4 ms-4 mb-1 fst-italic">#Sale</p>
                                <p class="text-center fs-4 ms-4 mb-1 fst-italic">#Bất động sản</p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Right side -->
            <div class="col-lg-3">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 mb-5">
                <img src="{{ asset('img/441400452_949802063555552_4379178154103149160_n.jpg') }}" alt="" class="rounded-5 shadow-custom w-100 mb-5">
            </div>
        </div>
    </div>
@endsection
