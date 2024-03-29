<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app_modules.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('layouts.components.message')
        @include('layouts.include.nav')
        <main class="py-4">
            <div class="container d-flex">
                @include('layouts.include.aside')
                @yield('content')
            </div>
        </main>

    </div>
    <!-- Scripts -->
{{--    <script src="{{ asset('js/ckeditor5-build-classic/ckeditor.js')  }}"></script>--}}
    <script src="../node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>
    <script src="../node_modules/@ckeditor/ckeditor5-vue/dist/ckeditor.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
