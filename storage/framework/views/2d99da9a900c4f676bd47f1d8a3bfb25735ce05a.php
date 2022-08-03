<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="<?php echo e(asset('dist/css/tabler.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('dist/img/image/logo-kalbis.jpg')); ?>" type="image/x-icon" />
    <?php echo \Livewire\Livewire::styles(); ?>

    <style>
        body {
            /* height: 1000px; */
        }
    </style>
</head>

<body>
    
    <?php echo $__env->yieldContent('content'); ?>

    <div class="container">
    </div>
    <?php echo Toastr::message(); ?>

    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/home/tampilan-utama.blade.php ENDPATH**/ ?>