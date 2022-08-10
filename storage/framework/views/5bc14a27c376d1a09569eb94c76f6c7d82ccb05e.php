<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.feed-controller')->html();
} elseif ($_instance->childHasBeenRendered('DV76Rpb')) {
    $componentId = $_instance->getRenderedChildComponentId('DV76Rpb');
    $componentTag = $_instance->getRenderedChildComponentTagName('DV76Rpb');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('DV76Rpb');
} else {
    $response = \Livewire\Livewire::mount('admin.feed-controller');
    $html = $response->html();
    $_instance->logRenderedChild('DV76Rpb', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/feed-table.blade.php ENDPATH**/ ?>