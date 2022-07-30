<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="<?php echo e(asset('dist/img/image/icon-logo.jpg')); ?>">
    <title>Login</title>

    <link href="<?php echo e(asset('dist/css/tabler.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>


<body>
    <div class="page page-center">
        <div class="container-tight py-4">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('auth.login-controller')->html();
} elseif ($_instance->childHasBeenRendered('G6u6Dpg')) {
    $componentId = $_instance->getRenderedChildComponentId('G6u6Dpg');
    $componentTag = $_instance->getRenderedChildComponentTagName('G6u6Dpg');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('G6u6Dpg');
} else {
    $response = \Livewire\Livewire::mount('auth.login-controller');
    $html = $response->html();
    $_instance->logRenderedChild('G6u6Dpg', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <script src="<?php echo e(asset('dist/js/tabler.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/jquery.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script>
        $('#show-hide').click(function() {
            $(this).attr('type', 'text');
        })
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/auth/form-login.blade.php ENDPATH**/ ?>