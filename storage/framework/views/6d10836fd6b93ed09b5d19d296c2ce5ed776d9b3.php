
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.news-controller')->html();
} elseif ($_instance->childHasBeenRendered('2LbyqoQ')) {
    $componentId = $_instance->getRenderedChildComponentId('2LbyqoQ');
    $componentTag = $_instance->getRenderedChildComponentTagName('2LbyqoQ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2LbyqoQ');
} else {
    $response = \Livewire\Livewire::mount('admin.news-controller');
    $html = $response->html();
    $_instance->logRenderedChild('2LbyqoQ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/news-tables.blade.php ENDPATH**/ ?>