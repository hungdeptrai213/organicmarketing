<nav class="navbar navbar-expand-lg bg-body py-0 position-sticky top-0 z-3 px-0 non-e-learning-nav">
    <div class="container border-bottom border-custom border-2">
        <a class="navbar-brand py-0" href="{{ url('/') }}">
            <img src="{{ asset('img/Logo Organic Marketing small (1).png') }}" alt="Logo nhỏ" class="d-md-none p-2" style="max-height: 80px;">
            <img src="{{ asset('img/Logo Organic Marketing (3).png') }}" alt="Logo lớn" class="d-none d-md-block my-md-3 py-md-3 py-lg-0 big-logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav fw-max-bold" style="font-family: Montserrat, sans-serif;">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }} fs-1 me-lg-3 me-xl-5 my-nav" aria-current="page" href="{{ url('/') }}">Học</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('quan-tri') ? 'active' : '' }} fs-1 me-lg-3 me-xl-5 my-nav" href="{{ url('/quan-tri') }}">Quản trị</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chia-se*') ? 'active' : '' }} fs-1 me-lg-3 me-xl-5 my-nav" href="{{ url('/chia-se') }}">Chia sẻ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('chuyen-nghe') ? 'active' : '' }} fs-1 me-lg-3 me-xl-5 my-nav" href="{{ url('/chuyen-nghe') }}">Chuyện nghề</a>
                </li>
                <div class="d-sm-flex d-lg-none my-3">
                    <button type="button" class="btn btn-primary me-2 p-xl-4 p-lg-3 fs-4 fw-bold rounded-4" data-consult-open="hoc">Tư vấn học</button>
                    <button type="button" class="btn btn-primary p-xl-4 p-lg-3 fs-4 fw-bold rounded-4" data-consult-open="crm">Tư vấn CRM</button>
                </div>
            </ul>
        </div>

        <div class="d-flex two-button">
            <button type="button" class="btn btn-primary me-2 p-lg-3 p-xl-4 fs-4 rounded-4 fw-bold" data-consult-open="hoc">Tư vấn học</button>
            <button type="button" class="btn btn-primary p-lg-3 p-xl-4 fs-4 rounded-4 fw-bold" data-consult-open="crm">Tư vấn CRM</button>
        </div>
    </div>
</nav>
