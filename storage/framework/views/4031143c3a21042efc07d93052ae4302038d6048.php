
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.annoucement')->html();
} elseif ($_instance->childHasBeenRendered('BDWyg6O')) {
    $componentId = $_instance->getRenderedChildComponentId('BDWyg6O');
    $componentTag = $_instance->getRenderedChildComponentTagName('BDWyg6O');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('BDWyg6O');
} else {
    $response = \Livewire\Livewire::mount('kategori.annoucement');
    $html = $response->html();
    $_instance->logRenderedChild('BDWyg6O', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/home/kategori/annoucements.blade.php ENDPATH**/ ?>