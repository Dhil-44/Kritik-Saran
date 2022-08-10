<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('user.header-footer.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page-wrapper">
        <div class="container-xl">
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            All News
                        </h2>
                    </div>
                </div>
            </div>
        </div>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('news.news')->html();
} elseif ($_instance->childHasBeenRendered('1bzUyDV')) {
    $componentId = $_instance->getRenderedChildComponentId('1bzUyDV');
    $componentTag = $_instance->getRenderedChildComponentTagName('1bzUyDV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('1bzUyDV');
} else {
    $response = \Livewire\Livewire::mount('news.news');
    $html = $response->html();
    $_instance->logRenderedChild('1bzUyDV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <?php echo $__env->make('user.header-footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/news-page.blade.php ENDPATH**/ ?>