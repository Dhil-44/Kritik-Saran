
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.suggestion')->html();
} elseif ($_instance->childHasBeenRendered('HUblZSW')) {
    $componentId = $_instance->getRenderedChildComponentId('HUblZSW');
    $componentTag = $_instance->getRenderedChildComponentTagName('HUblZSW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HUblZSW');
} else {
    $response = \Livewire\Livewire::mount('kategori.suggestion');
    $html = $response->html();
    $_instance->logRenderedChild('HUblZSW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/user/home/kategori/suggestion.blade.php ENDPATH**/ ?>