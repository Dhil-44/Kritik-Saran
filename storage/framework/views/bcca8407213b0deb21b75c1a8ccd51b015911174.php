
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('sending-form.pending-message')->html();
} elseif ($_instance->childHasBeenRendered('9QQ9dkP')) {
    $componentId = $_instance->getRenderedChildComponentId('9QQ9dkP');
    $componentTag = $_instance->getRenderedChildComponentTagName('9QQ9dkP');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9QQ9dkP');
} else {
    $response = \Livewire\Livewire::mount('sending-form.pending-message');
    $html = $response->html();
    $_instance->logRenderedChild('9QQ9dkP', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/kategori/pending-message.blade.php ENDPATH**/ ?>