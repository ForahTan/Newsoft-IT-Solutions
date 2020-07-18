<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Jquery --}}
    <script src="{{ asset('vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <script src=" {{ asset('vendor/jquery-ui-1.12.1/jquery-ui.min.js') }}"></script>
    {{-- Bootstrap --}}
    <link href="{{ asset('vendor/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- Custom Style --}}
    <link href="{{ asset('css/styles.css?v='.time()) }}" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="{{ asset('vendor/fontawesome-5.10.2/css/all.min.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    @include('components.top-navbar')
    <div class="container-fluid">
        @yield('content')
        @yield('layouts.footer')
    </div>
    <script src="{{asset('js/animation.js?v='.time())}}"></script>
    <script src="{{asset('vendor/bootstrap-4.0.0-dist/js/bootstrap.min.js?v='.time())}}"></script>
</body>

</html>