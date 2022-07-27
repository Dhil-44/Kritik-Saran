
<?php $__env->startSection('title', 'User Tables'); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.user-controller')->html();
<<<<<<< HEAD
} elseif ($_instance->childHasBeenRendered('Zo1Sum3')) {
    $componentId = $_instance->getRenderedChildComponentId('Zo1Sum3');
    $componentTag = $_instance->getRenderedChildComponentTagName('Zo1Sum3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Zo1Sum3');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('Zo1Sum3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
=======
} elseif ($_instance->childHasBeenRendered('0frwrGO')) {
    $componentId = $_instance->getRenderedChildComponentId('0frwrGO');
    $componentTag = $_instance->getRenderedChildComponentTagName('0frwrGO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('0frwrGO');
} else {
    $response = \Livewire\Livewire::mount('admin.user-controller');
    $html = $response->html();
    $_instance->logRenderedChild('0frwrGO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
>>>>>>> 9a58040558745c472847da07efe73dd1892c21f5
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.home.admin-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/admin/data/user-table.blade.php ENDPATH**/ ?>