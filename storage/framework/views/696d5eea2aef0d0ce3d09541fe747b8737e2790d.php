
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

} elseif ($_instance->childHasBeenRendered('G7S0ofV')) {
    $componentId = $_instance->getRenderedChildComponentId('G7S0ofV');
    $componentTag = $_instance->getRenderedChildComponentTagName('G7S0ofV');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('G7S0ofV');
} else {
    $response = \Livewire\Livewire::mount('news.news');
    $html = $response->html();
    $_instance->logRenderedChild('G7S0ofV', $response->id(), \Livewire\Livewire::getRootElementTagName($html));

}
echo $html;
?>
    </div>
    <?php echo $__env->make('user.header-footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('user.home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/news-page.blade.php ENDPATH**/ ?>