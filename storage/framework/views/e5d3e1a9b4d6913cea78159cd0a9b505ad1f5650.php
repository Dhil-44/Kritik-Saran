
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-controller')->html();
} elseif ($_instance->childHasBeenRendered('XCbWJtJ')) {
    $componentId = $_instance->getRenderedChildComponentId('XCbWJtJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('XCbWJtJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XCbWJtJ');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('XCbWJtJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/user-table.blade.php ENDPATH**/ ?>