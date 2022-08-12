
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.feed-controller')->html();
} elseif ($_instance->childHasBeenRendered('DpwFegu')) {
    $componentId = $_instance->getRenderedChildComponentId('DpwFegu');
    $componentTag = $_instance->getRenderedChildComponentTagName('DpwFegu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DpwFegu');
} else {
    $response = \Livewire\Livewire::mount('admin.feed-controller');
    $html = $response->html();
    $_instance->logRenderedChild('DpwFegu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/feed-table.blade.php ENDPATH**/ ?>