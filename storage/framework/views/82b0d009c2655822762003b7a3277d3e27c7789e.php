
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.critic')->html();
} elseif ($_instance->childHasBeenRendered('zdgPx7p')) {
    $componentId = $_instance->getRenderedChildComponentId('zdgPx7p');
    $componentTag = $_instance->getRenderedChildComponentTagName('zdgPx7p');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('zdgPx7p');
} else {
    $response = \Livewire\Livewire::mount('kategori.critic');
    $html = $response->html();
    $_instance->logRenderedChild('zdgPx7p', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/home/kategori/critics.blade.php ENDPATH**/ ?>