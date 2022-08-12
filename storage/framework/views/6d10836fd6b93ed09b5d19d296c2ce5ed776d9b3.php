<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.news-controller')->html();
} elseif ($_instance->childHasBeenRendered('BNp9nqD')) {
    $componentId = $_instance->getRenderedChildComponentId('BNp9nqD');
    $componentTag = $_instance->getRenderedChildComponentTagName('BNp9nqD');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BNp9nqD');
} else {
    $response = \Livewire\Livewire::mount('admin.news-controller');
    $html = $response->html();
    $_instance->logRenderedChild('BNp9nqD', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/news-tables.blade.php ENDPATH**/ ?>