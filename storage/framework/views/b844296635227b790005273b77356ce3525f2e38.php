
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sending-form.sending-all-message')->html();
} elseif ($_instance->childHasBeenRendered('2gEMY1e')) {
    $componentId = $_instance->getRenderedChildComponentId('2gEMY1e');
    $componentTag = $_instance->getRenderedChildComponentTagName('2gEMY1e');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2gEMY1e');
} else {
    $response = \Livewire\Livewire::mount('sending-form.sending-all-message');
    $html = $response->html();
    $_instance->logRenderedChild('2gEMY1e', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/sending-message.blade.php ENDPATH**/ ?>