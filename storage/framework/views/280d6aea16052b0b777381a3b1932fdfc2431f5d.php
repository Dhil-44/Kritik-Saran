
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.suggestion')->html();
} elseif ($_instance->childHasBeenRendered('uEzulBZ')) {
    $componentId = $_instance->getRenderedChildComponentId('uEzulBZ');
    $componentTag = $_instance->getRenderedChildComponentTagName('uEzulBZ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uEzulBZ');
} else {
    $response = \Livewire\Livewire::mount('kategori.suggestion');
    $html = $response->html();
    $_instance->logRenderedChild('uEzulBZ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/home/kategori/suggestion.blade.php ENDPATH**/ ?>