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
        <div class="page-body">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-3 mt-4">
                        <div class="list-group">
                            <?php if(\Illuminate\Support\Facades\Auth::user()->role != 'user'): ?>
                                <button class="btn btn-success">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                        <path d="M16 5l3 3"></path>
                                    </svg>
                                    Create News
                                </button>
                            <?php endif; ?>

                        </div>
                    </div>
                    <div class="col-lg-10 col-xl-9">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('news.news')->html();
} elseif ($_instance->childHasBeenRendered('tvekT1t')) {
    $componentId = $_instance->getRenderedChildComponentId('tvekT1t');
    $componentTag = $_instance->getRenderedChildComponentTagName('tvekT1t');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('tvekT1t');
} else {
    $response = \Livewire\Livewire::mount('news.news');
    $html = $response->html();
    $_instance->logRenderedChild('tvekT1t', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('user.header-footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/home/news-page.blade.php ENDPATH**/ ?>