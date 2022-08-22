
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.news-controller')->html();
} elseif ($_instance->childHasBeenRendered('YuGfLf5')) {
    $componentId = $_instance->getRenderedChildComponentId('YuGfLf5');
    $componentTag = $_instance->getRenderedChildComponentTagName('YuGfLf5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YuGfLf5');
} else {
    $response = \Livewire\Livewire::mount('admin.news-controller');
    $html = $response->html();
    $_instance->logRenderedChild('YuGfLf5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/news-tables.blade.php ENDPATH**/ ?>