
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.suggestion')->html();
} elseif ($_instance->childHasBeenRendered('dw6fY5t')) {
    $componentId = $_instance->getRenderedChildComponentId('dw6fY5t');
    $componentTag = $_instance->getRenderedChildComponentTagName('dw6fY5t');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('dw6fY5t');
} else {
    $response = \Livewire\Livewire::mount('kategori.suggestion');
    $html = $response->html();
    $_instance->logRenderedChild('dw6fY5t', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/kategori/suggestion.blade.php ENDPATH**/ ?>