@extends('layouts.guest')

@section('content')
    {{-- <div class="row h-100 justify-content-center">
        <div class="col-xxl-5 col-lg-7 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a class="d-flex align-items-center" href="/"><img src="{{ asset($data_lembaga->getLogo()) }}"
                            class="me-2" alt="Logo">
                        <h4 class="mt-2">{{ $data_lembaga->nama_lembaga }}</h4>
                    </a>
                </div>
                <h1 class="auth-title">Masuk</h1>
                <p class="auth-subtitle mb-5">Masuk ke Menu Guru</p>

                <form action="{{ route('guru.login') }}" method="POST">
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
                <div class="text-center mt-5 text-lg fs-4"> --}}
                    {{-- <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p> --}}
                    {{-- <p><a class="font-bold" href="{{ route('password.request') }}">Lupa password</a>.</p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                  <div class="icon-logo pb-4 d-flex justify-content-center">
                    <img src="{{ asset($data_lembaga->getLogo()) }}" height="70px" alt="logo">
                  </div>
                  <h4 class="d-flex justify-content-center">Hello! let's get started</h4>
                  <h6 class="font-weight-light d-flex justify-content-center">Masuk ke Menu Guru</h6>
                  <form class="pt-3" action="{{ route('guru.login') }}" method="POST">
                    @csrf
                    <div class="form-group @error('username') is-invalid @enderror position-relative has-icon-left mb-4">
                      <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username" name="username">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                      @error('username')
                      <div class="parsley-error filled" id="parsley-id-5" aria-hidden="false"><span
                              class="parsley-required">{{ $message }}</span></div>
                    @enderror
                    </div>
                    <div class="form-group @error('password') is-invalid @enderror position-relative has-icon-left mb-4">
                      <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                        <div class="parsley-error filled" id="parsley-id-5" aria-hidden="false"><span
                            class="parsley-required">{{ $message }}</span></div>
                        @enderror
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">LOG IN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          Keep me signed in
                        </label>
                      </div>
                      <a href="{{ route('password.request') }}" class="auth-link text-black">Lupa password?</a>
                    </div>
                    {{-- <div class="text-center mt-4 font-weight-light">
                      Don't have an account? <a href="register.html" class="text-primary">Create</a>
                    </div> --}}
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>

@endsection
