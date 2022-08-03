
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-controller')->html();
} elseif ($_instance->childHasBeenRendered('7GpHa7L')) {
    $componentId = $_instance->getRenderedChildComponentId('7GpHa7L');
    $componentTag = $_instance->getRenderedChildComponentTagName('7GpHa7L');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('7GpHa7L');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('7GpHa7L', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/admin/data/user-table.blade.php ENDPATH**/ ?>