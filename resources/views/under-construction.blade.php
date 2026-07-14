<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@lang('messages.under_construction_title')</title>
    <meta name="robots" content="noindex">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
</head>

<body>
    <main class="d-flex flex-column align-items-center justify-content-center text-center min-vh-100 px-3">
        {{-- <img src="{{ asset(app()->getLocale() === 'en' ? 'img/home/logo_en.svg' : 'img/home/logo.svg') }}" alt="logo" class="mb-4" style="max-width: 220px; width: 60%; height: auto;"> --}}

        <h1 class="mb-3">@lang('messages.under_construction_title')</h1>
        <p class="mb-4">@lang('messages.under_construction_body')</p>

        <div class="d-flex gap-3">
            <a class="text-decoration-none" href="{{ route('lang.switch', 'zh') }}">中文</a>
            <a class="text-decoration-none" href="{{ route('lang.switch', 'en') }}">English</a>
        </div>
    </main>
</body>

</html>
