<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data_lembaga->nama_lembaga }}</title>
    <link rel="stylesheet" href="{{ asset('vendor/template/dist/assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/template/dist/assets/css/pages/auth.css') }}">
    <link rel="icon" href="{{ asset($data_lembaga->getLogo()) }}" type="image/x-icon">
</head>

<body>
    <div id="auth">
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
