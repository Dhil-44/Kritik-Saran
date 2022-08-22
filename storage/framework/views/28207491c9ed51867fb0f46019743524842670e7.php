
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
    if (!isset($_instance)) {
        $html = \Livewire\Livewire::mount('admin.dashboard-admin')->html();
    } elseif ($_instance->childHasBeenRendered('4zMG4YZ')) {
        $componentId = $_instance->getRenderedChildComponentId('4zMG4YZ');
        $componentTag = $_instance->getRenderedChildComponentTagName('4zMG4YZ');
        $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
        $_instance->preserveRenderedChild('4zMG4YZ');
    } else {
        $response = \Livewire\Livewire::mount('admin.dashboard-admin');
        $html = $response->html();
        $_instance->logRenderedChild('4zMG4YZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
    }
    echo $html;
    ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/dashboard-admin.blade.php ENDPATH**/ ?>
