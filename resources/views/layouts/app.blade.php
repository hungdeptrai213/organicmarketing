<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'OM'))</title>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom-option.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if(request()->is('admin*'))
        <style>
            .admin-shell {
                display: flex;
                gap: 24px;
                padding: 24px;
            }
            .admin-sidebar {
                width: 220px;
                flex: 0 0 220px;
                position: sticky;
                top: 100px;
                align-self: flex-start;
            }
            .admin-sidebar .nav-link {
                color: #1b1b1b;
                border: 1px solid #1b1b1b;
                border-radius: 12px;
                padding: 10px 12px;
                margin-bottom: 10px;
            }
            .admin-sidebar .nav-link.active {
                background: #1b1b1b;
                color: #fff;
            }
            .admin-content {
                flex: 1;
                min-width: 0;
            }
            @media (max-width: 992px) {
                .admin-shell {
                    flex-direction: column;
                    padding: 16px;
                }
                .admin-sidebar {
                    width: 100%;
                    position: static;
                }
            }
        </style>
    @endif
</head>
<body class="@yield('body-class', 'overflow-x-hidden')">

    @include('partials.header')

    @if(request()->is('admin*'))
        <div class="admin-shell">
            @include('admin.partials.sidebar')
            <div class="admin-content">
                @yield('content')
            </div>
        </div>
    @else
        @yield('content')

        <!-- Popup tư vấn -->
        <div class="modal fade" id="consultStudyModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 rounded-5">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" class="btn btn-light position-absolute top-0 end-0 m-3 rounded-circle" data-bs-dismiss="modal" aria-label="Đóng">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="custom-bg-4 p-5 d-flex justify-content-center flex-column rounded-5 form-2-container shadow-sm">
                            <p class="text-center fs-1 fw-bold">Đăng ký tư vấn học</p>
                            <p class="text-center fs-2 fw-bolder">Thông tin của bạn</p>
                            <form class="form-2 ms-auto me-auto consultation-form" action="{{ route('consult.submit', ['type' => 'hoc']) }}" method="POST" data-type="hoc">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Họ và tên" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Số điện thoại" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <textarea name="content" placeholder="Nội dung bạn muốn học" class="w-100 p-2 bg-transparent border-0 shadow-sm rounded-4 fs-4 ps-3" required></textarea>
                                </div>
                                <div class="alert alert-success d-none consult-success" role="alert"></div>
                                <div class="alert alert-danger d-none consult-error" role="alert"></div>
                                <button type="submit" class="btn btn-primary w-100 fw-bold rounded-4 fs-4 consult-submit-btn">Gửi yêu cầu tư vấn</button>
                            </form>
                            <p class="text-center fs-5 mt-4 fst-italic">SDT | Zalo - 082.688.6868 - Minh Hiếu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="consultCrmModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 rounded-5">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" class="btn btn-light position-absolute top-0 end-0 m-3 rounded-circle" data-bs-dismiss="modal" aria-label="Đóng">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="custom-bg-4 p-5 d-flex justify-content-center flex-column rounded-5 form-2-container shadow-sm">
                            <p class="text-center fs-1 fw-bold">Đăng ký tư vấn CRM</p>
                            <p class="text-center fs-2 fw-bolder">Thông tin của bạn</p>
                            <form class="form-2 ms-auto me-auto consultation-form" action="{{ route('consult.submit', ['type' => 'crm']) }}" method="POST" data-type="crm">
                                @csrf
                                <div class="mb-3">
                                    <input type="text" name="name" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Họ và tên" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="phone" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Số điện thoại" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control p-2 shadow-sm rounded-4 fs-4 ps-3" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <textarea name="note" placeholder="Ghi chú" class="w-100 p-2 bg-transparent border-0 shadow-sm rounded-4 fs-4 ps-3" required></textarea>
                                </div>
                                <div class="alert alert-success d-none consult-success" role="alert"></div>
                                <div class="alert alert-danger d-none consult-error" role="alert"></div>
                                <button type="submit" class="btn btn-primary w-100 fw-bold rounded-4 fs-4 consult-submit-btn">Gửi yêu cầu tư vấn</button>
                            </form>
                            <p class="text-center fs-5 mt-4 fst-italic">SDT | Zalo - 082.688.6868 - Minh Hiếu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endif

 

    @include('partials.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/Js-custom.js') }}"></script>
    <script src="{{ asset('js/custom-option.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

            document.querySelectorAll('[data-consult-open]').forEach((btn) => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const target = btn.getAttribute('data-consult-open');
                    const modalId = target === 'crm' ? 'consultCrmModal' : 'consultStudyModal';
                    const modalEl = document.getElementById(modalId);
                    if (modalEl) {
                        const modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                        modal.show();
                    }
                });
            });

            document.querySelectorAll('.consultation-form').forEach((form) => {
                form.addEventListener('submit', async (event) => {
                    event.preventDefault();
                    const submitBtn = form.querySelector('.consult-submit-btn');
                    const successBox = form.querySelector('.consult-success');
                    const errorBox = form.querySelector('.consult-error');
                    if (successBox) successBox.classList.add('d-none');
                    if (errorBox) errorBox.classList.add('d-none');
                    const formData = new FormData(form);

                    if (submitBtn) {
                        submitBtn.disabled = true;
                        submitBtn.dataset.originalText = submitBtn.dataset.originalText || submitBtn.textContent;
                        submitBtn.textContent = 'Đang gửi...';
                    }

                    try {
                        const res = await fetch(form.action, {
                            method: 'POST',
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': csrfToken,
                                'Accept': 'application/json',
                            },
                            body: formData,
                        });

                        const data = await res.json();
                        if (res.ok && data?.ok) {
                            form.reset();
                            if (successBox) {
                                successBox.textContent = data.message || 'Gửi yêu cầu thành công!';
                                successBox.classList.remove('d-none');
                            }
                        } else {
                            const msg = data?.message || 'Gửi yêu cầu thất bại. Vui lòng thử lại.';
                            if (errorBox) {
                                errorBox.textContent = msg;
                                errorBox.classList.remove('d-none');
                            }
                        }
                    } catch (error) {
                        if (errorBox) {
                            errorBox.textContent = 'Có lỗi xảy ra, vui lòng thử lại.';
                            errorBox.classList.remove('d-none');
                        }
                    }

                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.textContent = submitBtn.dataset.originalText || 'Gửi yêu cầu tư vấn';
                    }
                });
            });
        });
    </script>
    @stack('scripts')
</body>
</html>
