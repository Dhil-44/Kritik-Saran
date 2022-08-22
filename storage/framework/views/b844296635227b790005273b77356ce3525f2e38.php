
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sending-form.sending-all-message')->html();
} elseif ($_instance->childHasBeenRendered('pNyyxWr')) {
    $componentId = $_instance->getRenderedChildComponentId('pNyyxWr');
    $componentTag = $_instance->getRenderedChildComponentTagName('pNyyxWr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('pNyyxWr');
} else {
    $response = \Livewire\Livewire::mount('sending-form.sending-all-message');
    $html = $response->html();
    $_instance->logRenderedChild('pNyyxWr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/sending-message.blade.php ENDPATH**/ ?>