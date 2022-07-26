
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.submission-controller')->html();
} elseif ($_instance->childHasBeenRendered('WkMkuVh')) {
    $componentId = $_instance->getRenderedChildComponentId('WkMkuVh');
    $componentTag = $_instance->getRenderedChildComponentTagName('WkMkuVh');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WkMkuVh');
} else {
    $response = \Livewire\Livewire::mount('admin.submission-controller');
    $html = $response->html();
    $_instance->logRenderedChild('WkMkuVh', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/submission-table.blade.php ENDPATH**/ ?>