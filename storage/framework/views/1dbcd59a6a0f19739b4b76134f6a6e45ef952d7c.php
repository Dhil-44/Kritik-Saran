
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.annoucement')->html();
} elseif ($_instance->childHasBeenRendered('QU8sHHH')) {
    $componentId = $_instance->getRenderedChildComponentId('QU8sHHH');
    $componentTag = $_instance->getRenderedChildComponentTagName('QU8sHHH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QU8sHHH');
} else {
    $response = \Livewire\Livewire::mount('kategori.annoucement');
    $html = $response->html();
    $_instance->logRenderedChild('QU8sHHH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/kategori/annoucements.blade.php ENDPATH**/ ?>