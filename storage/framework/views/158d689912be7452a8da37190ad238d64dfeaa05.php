<div class="page-body">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-3 mt-4">
                <div class="list-group">
                    <?php if(\Illuminate\Support\Facades\Auth::user()->role != 'user'): ?>
                        <button class="btn btn-success" wire:click="openModalNews()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24"
                                 height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
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
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card card-lg my-4">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <h1 id=""><?php echo e($new->title); ?></h1>
                                </div>
                                <div class="col-auto mb-2">
                                    <button wire:click="openDetailNews(<?php echo e($new); ?>)" class="btn btn-outline-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-tabler icon-tabler-align-justified"
                                             width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor"
                                             fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <line x1="4" y1="6" x2="20" y2="6"></line>
                                            <line x1="4" y1="12" x2="20" y2="12"></line>
                                            <line x1="4" y1="18" x2="16" y2="18"></line>
                                        </svg>
                                        Show more
                                    </button>
                                </div>
                            </div>
                            <img src="<?php echo e($new->gambar); ?>" class="img-thumbnail  bg-light" alt="">
                            
                            <p align="justify" class="mt-2"><?php echo e($new->body); ?></p>
                            <p>
                                <a href="d-block"><?php echo e($new->link); ?></a>
                            </p>
                            <span class="fs-5 mt-5"><?php echo e($new->created_at); ?></span>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="">
                    <?php echo e($news->links()); ?>

                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('user.home.modal.create-news-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('user.home.modal.show-detail-news-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>
<?php $__env->startPush('scripts'); ?>
    <script>

        window.addEventListener('openModalNews', () => {
            $('.openModalNews').modal('show')
        })
        window.addEventListener('closeModalNews', () => {
            $('.openModalNews').modal('hide')
        })
        window.addEventListener('show-detail', (e) => {
            $('#show-detail').modal('show')
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/livewire/news/news.blade.php ENDPATH**/ ?>