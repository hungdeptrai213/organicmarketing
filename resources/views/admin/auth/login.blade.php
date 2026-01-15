@extends('layouts.app')

@section('title', 'Đăng nhập Admin - ' . config('app.name', 'OM'))

@section('content')
<div class="container width-60 mt-6">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="fw-max-bold fs-custom mb-4 text-center">Đăng nhập Admin</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('admin.login.attempt') }}" class="border border-custom border-2 rounded-5 shadow-custom p-4">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Mật khẩu</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Ghi nhớ đăng nhập
                    </label>
                </div>
                <button type="submit" class="btn btn-primary w-100 fw-bold">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>
@endsection
