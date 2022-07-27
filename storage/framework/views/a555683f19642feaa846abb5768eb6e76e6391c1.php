
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.submission-controller')->html();
} elseif ($_instance->childHasBeenRendered('6Q1895h')) {
    $componentId = $_instance->getRenderedChildComponentId('6Q1895h');
    $componentTag = $_instance->getRenderedChildComponentTagName('6Q1895h');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6Q1895h');
} else {
    $response = \Livewire\Livewire::mount('admin.submission-controller');
    $html = $response->html();
    $_instance->logRenderedChild('6Q1895h', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/submission-table.blade.php ENDPATH**/ ?>