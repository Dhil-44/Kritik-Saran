<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sending-form.pending-message')->html();
} elseif ($_instance->childHasBeenRendered('WxHvyHn')) {
    $componentId = $_instance->getRenderedChildComponentId('WxHvyHn');
    $componentTag = $_instance->getRenderedChildComponentTagName('WxHvyHn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WxHvyHn');
} else {
    $response = \Livewire\Livewire::mount('sending-form.pending-message');
    $html = $response->html();
    $_instance->logRenderedChild('WxHvyHn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/pending-message.blade.php ENDPATH**/ ?>