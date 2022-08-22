
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.feed-controller')->html();
} elseif ($_instance->childHasBeenRendered('taVk1wK')) {
    $componentId = $_instance->getRenderedChildComponentId('taVk1wK');
    $componentTag = $_instance->getRenderedChildComponentTagName('taVk1wK');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('taVk1wK');
} else {
    $response = \Livewire\Livewire::mount('admin.feed-controller');
    $html = $response->html();
    $_instance->logRenderedChild('taVk1wK', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/feed-table.blade.php ENDPATH**/ ?>