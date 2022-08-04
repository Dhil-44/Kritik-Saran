<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="<?php echo e(asset('dist/css/tabler.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/tabler.min.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('dist/img/image/icon-logo.jpg')); ?>" type="image/x-icon" />
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    
    <?php echo $__env->yieldContent('content'); ?>
    <script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/tabler.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/tampilan-utama.blade.php ENDPATH**/ ?>