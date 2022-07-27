
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard-admin')->html();
} elseif ($_instance->childHasBeenRendered('sPXs5LX')) {
    $componentId = $_instance->getRenderedChildComponentId('sPXs5LX');
    $componentTag = $_instance->getRenderedChildComponentTagName('sPXs5LX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('sPXs5LX');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard-admin');
    $html = $response->html();
    $_instance->logRenderedChild('sPXs5LX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/dashboard-admin.blade.php ENDPATH**/ ?>