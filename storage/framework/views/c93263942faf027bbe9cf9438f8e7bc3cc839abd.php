
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sending-form.sending-all-message')->html();
} elseif ($_instance->childHasBeenRendered('WhISbNw')) {
    $componentId = $_instance->getRenderedChildComponentId('WhISbNw');
    $componentTag = $_instance->getRenderedChildComponentTagName('WhISbNw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WhISbNw');
} else {
    $response = \Livewire\Livewire::mount('sending-form.sending-all-message');
    $html = $response->html();
    $_instance->logRenderedChild('WhISbNw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/kategori/sending-message.blade.php ENDPATH**/ ?>