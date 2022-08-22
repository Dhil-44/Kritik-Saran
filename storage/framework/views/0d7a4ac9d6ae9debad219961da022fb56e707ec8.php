
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.feed-controller')->html();
} elseif ($_instance->childHasBeenRendered('fRdzmgL')) {
    $componentId = $_instance->getRenderedChildComponentId('fRdzmgL');
    $componentTag = $_instance->getRenderedChildComponentTagName('fRdzmgL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fRdzmgL');
} else {
    $response = \Livewire\Livewire::mount('admin.feed-controller');
    $html = $response->html();
    $_instance->logRenderedChild('fRdzmgL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/feed-table.blade.php ENDPATH**/ ?>