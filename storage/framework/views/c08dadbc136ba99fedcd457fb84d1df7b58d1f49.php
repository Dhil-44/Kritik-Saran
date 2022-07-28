
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.annoucement')->html();
} elseif ($_instance->childHasBeenRendered('im3aNiu')) {
    $componentId = $_instance->getRenderedChildComponentId('im3aNiu');
    $componentTag = $_instance->getRenderedChildComponentTagName('im3aNiu');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('im3aNiu');
} else {
    $response = \Livewire\Livewire::mount('kategori.annoucement');
    $html = $response->html();
    $_instance->logRenderedChild('im3aNiu', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/annoucements.blade.php ENDPATH**/ ?>