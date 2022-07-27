
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-controller')->html();
} elseif ($_instance->childHasBeenRendered('0frwrGO')) {
    $componentId = $_instance->getRenderedChildComponentId('0frwrGO');
    $componentTag = $_instance->getRenderedChildComponentTagName('0frwrGO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0frwrGO');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('0frwrGO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/user-table.blade.php ENDPATH**/ ?>