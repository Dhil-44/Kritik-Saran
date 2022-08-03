
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('kategory'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('kategori.critic')->html();
} elseif ($_instance->childHasBeenRendered('yaYtSoE')) {
    $componentId = $_instance->getRenderedChildComponentId('yaYtSoE');
    $componentTag = $_instance->getRenderedChildComponentTagName('yaYtSoE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('yaYtSoE');
} else {
    $response = \Livewire\Livewire::mount('kategori.critic');
    $html = $response->html();
    $_instance->logRenderedChild('yaYtSoE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/kategori/critics.blade.php ENDPATH**/ ?>