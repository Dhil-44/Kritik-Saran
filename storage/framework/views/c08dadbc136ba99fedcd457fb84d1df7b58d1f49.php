
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.annoucement')->html();
} elseif ($_instance->childHasBeenRendered('N5NQ9DH')) {
    $componentId = $_instance->getRenderedChildComponentId('N5NQ9DH');
    $componentTag = $_instance->getRenderedChildComponentTagName('N5NQ9DH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('N5NQ9DH');
} else {
    $response = \Livewire\Livewire::mount('kategori.annoucement');
    $html = $response->html();
    $_instance->logRenderedChild('N5NQ9DH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/annoucements.blade.php ENDPATH**/ ?>