<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data_lembaga->nama_lembaga }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/template/dist/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template/dist/assets/css/pages/auth.css') }}">
    <link rel="icon" href="{{ asset($data_lembaga->getLogo()) }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('/plugin/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugin/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugin/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('/plugin/css/vertical-layout-light/style.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('/plugin/images/favicon.png') }}"> --}}
</head>

<body>
    <div id="auth">
        <main>
            @yield('content')
        </main>
    </div>
</body>

<script src="{{ asset('/plugin/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('/plugin/js/off-canvas.js') }}"></script>
<script src="{{ asset('/plugin/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('/plugin/js/template.js') }}"></script>
<script src="{{ asset('/plugin/js/settings.js') }}"></script>
<script src="{{ asset('/plugin/js/todolist.js') }}"></script>
</html>
