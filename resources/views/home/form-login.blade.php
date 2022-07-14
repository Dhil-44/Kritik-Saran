<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('dist/css/tabler.css') }}" rel="stylesheet">
    @livewireStyles
</head>


<body>
    <div class="page page-center">
        <div class="container-tight py-4">
            @livewire('auth.login-controller')
        </div>
    </div>
    <script src="{{ asset('dist/js/tabler.min.js') }}"></script>
    @livewireScripts
</body>

</html>
