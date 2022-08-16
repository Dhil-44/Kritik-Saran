
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.dashboard-admin')->html();
} elseif ($_instance->childHasBeenRendered('szSU7FC')) {
    $componentId = $_instance->getRenderedChildComponentId('szSU7FC');
    $componentTag = $_instance->getRenderedChildComponentTagName('szSU7FC');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('szSU7FC');
} else {
    $response = \Livewire\Livewire::mount('admin.dashboard-admin');
    $html = $response->html();
    $_instance->logRenderedChild('szSU7FC', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/dashboard-admin.blade.php ENDPATH**/ ?>