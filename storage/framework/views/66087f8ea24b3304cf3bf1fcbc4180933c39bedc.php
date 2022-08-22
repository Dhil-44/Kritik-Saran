
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.submission-controller')->html();
} elseif ($_instance->childHasBeenRendered('U369tGs')) {
    $componentId = $_instance->getRenderedChildComponentId('U369tGs');
    $componentTag = $_instance->getRenderedChildComponentTagName('U369tGs');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('U369tGs');
} else {
    $response = \Livewire\Livewire::mount('admin.submission-controller');
    $html = $response->html();
    $_instance->logRenderedChild('U369tGs', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/data/submission-table.blade.php ENDPATH**/ ?>