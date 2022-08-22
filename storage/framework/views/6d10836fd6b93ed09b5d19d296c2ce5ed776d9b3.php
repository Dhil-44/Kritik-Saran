
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.news-controller')->html();
} elseif ($_instance->childHasBeenRendered('XCh9bkZ')) {
    $componentId = $_instance->getRenderedChildComponentId('XCh9bkZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('XCh9bkZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('XCh9bkZ');
} else {
    $response = \Livewire\Livewire::mount('admin.news-controller');
    $html = $response->html();
    $_instance->logRenderedChild('XCh9bkZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/news-tables.blade.php ENDPATH**/ ?>