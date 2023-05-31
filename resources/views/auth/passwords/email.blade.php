@extends('layouts.guest')

@section('content')
    <div class="row h-100 justify-content-center">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a class="d-flex align-items-center" href="/"><img src="{{ asset($data_lembaga->getLogo()) }}"
                            class="me-2" alt="Logo">
                        <h4 class="mt-2">{{ $data_lembaga->nama_lembaga }}</h4>
                    </a>
                </div>
                <h1 class="auth-title">Forgot Password</h1>
                <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div
                        class="form-group @error('email')
                    is-invalid
               @enderror position-relative has-icon-left mb-4">
                        <input type="email" class="form-control form-control-xl" name="email" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('email')
                            <div class="parsley-error filled" id="parsley-id-5" aria-hidden="false"><span
                                    class="parsley-required">{{ $message }}</span></div>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Log
                            in</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
