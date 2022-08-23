<div class="">
    <div class="row px-2">
        <div class="col-2 mt-2 shadow-lg" style="max-height: 26em">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>Category</b></div>
            <div class="list-group list-group-flush card">
                <button type="button" wire:click.prevent="all()"
                    class="list-group-item list-group-item-action text-black list-group-item-light p-3"><?php echo e(__('ALL')); ?></button>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" wire:click.prevent="group(<?php echo e($user); ?>)"
                        class="list-group-item  list-group-item-action text-black list-group-item-light text-uppercase p-3"><?php echo e(__($user->name)); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-lg-8 col-sm-8">
            <div class="col-12 mt-2">
                <div class="example no_toc_section example-bg card px-1 py-2">
                    <div class="example-content">
                        <div class="example-column example-column-2">
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-1" style="margin-left: 10px;">
                                                <select wire:model="paginate" class="form-control form-control-sm"
                                                    style="width: 40px">
                                                    <?php for($i = 5; $i <= 60; $i += 15): ?>
                                                        <option style="text-align: center" value="<?php echo e($i); ?>">
                                                            <?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>
                                            <div class="col-2" style="margin-left: 10px;">
                                                <select name="order" wire:model="order"
                                                    class="form-control form-control-sm" id=""
                                                    style="text-align: center;">
                                                    <option value="desc">latest</option>
                                                    <option value="asc">oldest</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-auto ms-auto d-print-none">
                                        <div class="d-flex">
                                            <div class="me-3 d-none d-md-block">
                                                <div class="input-icon">
                                                    <input type="text" wire:model="search" class="form-control"
                                                           placeholder="Search…">
                                                    <span class="input-icon-addon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             class="icon icon-tabler icon-tabler-search" width="24"
                                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                                             stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <circle cx="10" cy="10" r="7">
                                                            </circle>
                                                            <line x1="21" y1="21" x2="15"
                                                                  y2="15"></line>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <?php $__currentLoopData = $submissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow-sm my-2 hover-shadow-lg" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar me-1 avatar-rounded avatar-md"
                                        style="background-image: url(<?php echo e($submission->getUser->logo); ?>)"></span>
                                </div>
                                <div class="col" style="font-family:'Roboto Medium'">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <div class="row">
                                                <h3 class="col-auto text-uppercase">
                                                    <b><?php echo e($submission->getUser->name); ?></b>
                                                </h3>
                                                <p class="col-auto text-muted"
                                                   style="margin-top: 3px; margin-left:-7px;">
                                                    <?php echo e($submission->getUserTarget->name); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="row">
                                                <div class="col-auto btn-group ">
                                                    <button wire:click="onItemReplyorEdit(<?php echo e($submission); ?>)"
                                                        class="btn btn-sm border-1 btn-outline-green">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon icon-tabler icon-tabler-arrow-up-right"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            stroke-width="2" stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                            </path>
                                                            <line x1="17" y1="7" x2="7"
                                                                y2="17"></line>
                                                            <polyline points="8 7 17 7 17 16"></polyline>
                                                        </svg>
                                                        Detail
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fs-5 mb-2" style="margin-top: -9px;"><?php echo e($submission->updated_at); ?>

                                    </div>
                                    <div class="text">
                                        <p class="" style="margin-right: 7px; text-align:justify;">
                                            <?php echo e(Str::limit($submission->message, 200)); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-2 fs-3 ">
                <?php echo e($submissions->links()); ?>

            </div>
        </div>
        
        <div class="col-2 mt-2 shadow-lg " style="max-height:32rem;">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>News</b></div>
            <div class="card" style="height: 28rem;">
                <div class="card-body card-body-scrollable px-1 card-body-scrollable-shadow">
                    <div class="divide-y">
                        
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-2 hover-shadow-lg"
                                wire:click="openDetailThisNews(<?php echo e($new); ?>)">
                                <div class="card-img-top img-responsive img-responsive-21x9"
                                     style="background-image: url(<?php echo e($new->gambar); ?>)">
                                </div>
                                <div class="card-body px-1">
                                    <h4 class=""><?php echo e($new->title); ?></h4>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

        </div>
        <?php echo $__env->make('user.home.modal.replyOnSubmission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('user.home.modal.show-detail-news-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php echo $__env->make('user.header-footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('openModalReplySub', (e) => {
            $('#modal-reply-sub').modal('show')
        })
        window.addEventListener('showDetail', (e) => {
            $('#show-detail').modal('show')
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/home/home-feed-message.blade.php ENDPATH**/ ?>