
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.critic')->html();
} elseif ($_instance->childHasBeenRendered('LAfX5Ni')) {
    $componentId = $_instance->getRenderedChildComponentId('LAfX5Ni');
    $componentTag = $_instance->getRenderedChildComponentTagName('LAfX5Ni');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LAfX5Ni');
} else {
    $response = \Livewire\Livewire::mount('kategori.critic');
    $html = $response->html();
    $_instance->logRenderedChild('LAfX5Ni', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\KritikSaran\resources\views/user/home/kategori/critics.blade.php ENDPATH**/ ?>