
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-controller')->html();
} elseif ($_instance->childHasBeenRendered('Kq2nxiA')) {
    $componentId = $_instance->getRenderedChildComponentId('Kq2nxiA');
    $componentTag = $_instance->getRenderedChildComponentTagName('Kq2nxiA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Kq2nxiA');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('Kq2nxiA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/user-table.blade.php ENDPATH**/ ?>