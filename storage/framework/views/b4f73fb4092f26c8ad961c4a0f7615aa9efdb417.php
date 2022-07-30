
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.submission-controller')->html();
} elseif ($_instance->childHasBeenRendered('NOzhPh0')) {
    $componentId = $_instance->getRenderedChildComponentId('NOzhPh0');
    $componentTag = $_instance->getRenderedChildComponentTagName('NOzhPh0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NOzhPh0');
} else {
    $response = \Livewire\Livewire::mount('admin.submission-controller');
    $html = $response->html();
    $_instance->logRenderedChild('NOzhPh0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/admin/data/submission-table.blade.php ENDPATH**/ ?>