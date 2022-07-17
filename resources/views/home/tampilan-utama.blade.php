<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('dist/img/image/logo-kalbis.jpg') }}" type="image/x-icon" />
    @livewireStyles
    <style>
        body {
            height: 1000px;
        }
    </style>
</head>

<body>
    {{-- @include('header-footer.navbar') --}}
    @yield('content')
    <div class="container">
    </div>

    <script src="{{ asset('dist/js/tabler.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.js') }}"></script>
    @livewireScripts
</body>

</html>
