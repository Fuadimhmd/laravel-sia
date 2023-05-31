@extends('layouts.guest')

@section('content')
    <div class="row h-100 justify-content-center">
        <div class="col-xxl-5 col-lg-7 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a class="d-flex align-items-center" href="/"><img src="{{ asset($data_lembaga->getLogo()) }}"
                            class="me-2" alt="Logo">
                        <h4 class="mt-2">{{ $data_lembaga->nama_lembaga }}</h4>
                    </a>
                </div>
                <h1 class="auth-title">Masuk</h1>
                <p class="auth-subtitle mb-5">Masuk ke Menu Admin</p>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div
                        class="form-group @error('username')
                             is-invalid
                        @enderror position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl text-secondary" placeholder="Username"
                            name="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('username')
                            <div class="parsley-error filled" id="parsley-id-5" aria-hidden="false"><span
                                    class="parsley-required">{{ $message }}</span></div>
                        @enderror
                    </div>
                    <div
                        class="form-group @error('password')
                        is-invalid
                   @enderror position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl text-secondary" name="password"
                            placeholder="Password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                            <div class="parsley-error filled" id="parsley-id-5" aria-hidden="false"><span
                                    class="parsley-required">{{ $message }}</span></div>
                        @enderror
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">
                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    {{-- <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p> --}}
                    <p><a class="font-bold" href="{{ route('password.request') }}">Lupa password</a>.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
