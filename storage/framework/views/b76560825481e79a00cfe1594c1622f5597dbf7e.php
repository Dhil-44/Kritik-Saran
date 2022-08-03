
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.suggestion')->html();
} elseif ($_instance->childHasBeenRendered('y2GKXdl')) {
    $componentId = $_instance->getRenderedChildComponentId('y2GKXdl');
    $componentTag = $_instance->getRenderedChildComponentTagName('y2GKXdl');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('y2GKXdl');
} else {
    $response = \Livewire\Livewire::mount('kategori.suggestion');
    $html = $response->html();
    $_instance->logRenderedChild('y2GKXdl', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/home/kategori/suggestion.blade.php ENDPATH**/ ?>