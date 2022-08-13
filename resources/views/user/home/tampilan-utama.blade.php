<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/libs/iJabo/ijabo.min.css')}}" rel="stylesheet"></link>
    <link rel="shortcut icon" href="{{ asset('dist/img/image/icon-logo.jpg') }}" type="image/x-icon"/>
    @livewireStyles
</head>
<body>
{{-- @include('header-footer.navbar') --}}
@yield('content')
<script src="{{ asset('dist/js/jquery.js') }}"></script>
<script src="{{asset('dist/libs/iJabo/ijabo.min.js')}}"></script>
<script src="{{ asset('dist/js/tabler.js') }}"></script>
<script src="{{ asset('dist/js/tabler.min.js') }}"></script>

@stack('scripts')
@livewireScripts
<script>
    window.addEventListener("showToastr", function (event) {
        toastr.remove();
        if (event.detail.type === 'info') {
            toastr.info(event.detail.message)
        } else if (event.detail.type === 'success') {
            toastr.success(event.detail.message)
        } else if (event.detail.type === 'error') {
            toastr.error(event.detail.message)
        } else if (event.detail.type === 'warning') {
            toastr.warning(event.detail.message)
        } else {
            return false
        }
    })
</script>
</body>
</html>
