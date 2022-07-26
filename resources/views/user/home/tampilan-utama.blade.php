<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('dist/img/image/icon-logo.jpg') }}" type="image/x-icon" />
    @livewireStyles
    <style>
        body {
            /* height: 1000px; */
        }
    </style>
</head>

<body>
    {{-- @include('header-footer.navbar') --}}
    @yield('content')
    {{-- <script src="{{ asset('dist/libs/tycy/tynymce.js') }}" defer></script> --}}
    <script src="{{ asset('dist/js/jquery.js') }}"></script>
    <script src="{{ asset('dist/js/tabler.js') }}"></script>
    <script src="{{ asset('dist/js/tabler.min.js') }}"></script>

    @stack('scripts')
    @livewireScripts
</body>

</html>
