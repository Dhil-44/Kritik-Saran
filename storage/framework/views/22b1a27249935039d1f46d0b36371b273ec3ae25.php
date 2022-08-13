<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="<?php echo e(asset('dist/css/tabler.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('dist/css/tabler.min.css')); ?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo e(asset('dist/img/image/icon-logo.jpg')); ?>" type="image/x-icon"/>
    <script src="<?php echo e(asset('dist/libs/iJabo/ijabo.min.css')); ?>"></script>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>

<?php echo $__env->yieldContent('content'); ?>
<script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/tabler.js')); ?>"></script>
<script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>
<script src="<?php echo e(asset('dist/libs/iJabo/ijabo.min.js')); ?>"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php echo \Livewire\Livewire::scripts(); ?>

<script>
    window.addEventListener("showToastr", function (event) {
        alert('adadd')
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
<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/tampilan-utama.blade.php ENDPATH**/ ?>