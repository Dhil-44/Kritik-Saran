<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard-admin')->html();
} elseif ($_instance->childHasBeenRendered('WSbIv1q')) {
    $componentId = $_instance->getRenderedChildComponentId('WSbIv1q');
    $componentTag = $_instance->getRenderedChildComponentTagName('WSbIv1q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WSbIv1q');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard-admin');
    $html = $response->html();
    $_instance->logRenderedChild('WSbIv1q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/dashboard-admin.blade.php ENDPATH**/ ?>