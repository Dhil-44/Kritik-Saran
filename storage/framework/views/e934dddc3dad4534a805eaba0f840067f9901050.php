<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('dist/css/tabler.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('dist/img/image/logo-kalbis.jpg')); ?>" type="image/x-icon" />
    <title>Error Page result</title>
</head>

<body>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">404</div>
                <p class="empty-title">Oops… You just found an error page</p>
                <p class="empty-subtitle text-muted">
                    We are sorry but the page you are looking for was not found
                </p>
                <div class="empty-action">
                    <a href="<?php echo e(route('home-page')); ?>" class="btn btn-green">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <line x1="5" y1="12" x2="11" y2="18"></line>
                            <line x1="5" y1="12" x2="11" y2="6"></line>
                        </svg>
                        Take me back
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/errors/404.blade.php ENDPATH**/ ?>