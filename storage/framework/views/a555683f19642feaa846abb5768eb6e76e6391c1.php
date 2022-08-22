
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.submission-controller')->html();
} elseif ($_instance->childHasBeenRendered('kGTHlZu')) {
    $componentId = $_instance->getRenderedChildComponentId('kGTHlZu');
    $componentTag = $_instance->getRenderedChildComponentTagName('kGTHlZu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kGTHlZu');
} else {
    $response = \Livewire\Livewire::mount('admin.submission-controller');
    $html = $response->html();
    $_instance->logRenderedChild('kGTHlZu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/submission-table.blade.php ENDPATH**/ ?>