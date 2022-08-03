
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard-admin')->html();
} elseif ($_instance->childHasBeenRendered('bVM2Cyi')) {
    $componentId = $_instance->getRenderedChildComponentId('bVM2Cyi');
    $componentTag = $_instance->getRenderedChildComponentTagName('bVM2Cyi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bVM2Cyi');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard-admin');
    $html = $response->html();
    $_instance->logRenderedChild('bVM2Cyi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/dashboard-admin.blade.php ENDPATH**/ ?>