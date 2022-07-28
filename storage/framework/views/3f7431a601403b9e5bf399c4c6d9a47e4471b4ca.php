<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.header-footer.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="mask flex-center" style="background-size:cover; height:300px; background:rgb(33, 109, 50)">
        <div class="container">
            <div class="white-text text-center py-4" style="visibility: visible; animation-name: fadeInUp;">
                <img src="http://cac.kalbis.ac.id/frontend/img/logos/logo kalbis putih.png" alt="thumbnail"
                    class="mx-auto d-block" style="width: 100px">
                
                
                <h1 class="text-center font-weight-bold">
                    <strong>Kalbis Critics and Suggestions</strong>
                </h1>
            </div>
        </div>
    </div>

    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('home.home-page')->html();
} elseif ($_instance->childHasBeenRendered('hW6tOA0')) {
    $componentId = $_instance->getRenderedChildComponentId('hW6tOA0');
    $componentTag = $_instance->getRenderedChildComponentTagName('hW6tOA0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hW6tOA0');
} else {
    $response = \Livewire\Livewire::mount('home.home-page');
    $html = $response->html();
    $_instance->logRenderedChild('hW6tOA0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo $__env->make('user.header-footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/content-home.blade.php ENDPATH**/ ?>