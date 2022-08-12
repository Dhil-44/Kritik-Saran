<div class="container-fluid">
    
    <div class="row">
        <div class="col-2 mt-2 shadow-lg" style="max-height: 57vh">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>Category</b></div>
            <div class="list-group list-group-flush card">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" wire:click.prevent="group(<?php echo e($user); ?>)"
                        class="list-group-item  list-group-item-action text-black list-group-item-light p-3"><?php echo e(__($user->name)); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="col-8">
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
                                                    <?php for($i = 1; $i <= $submissions->count(); $i++): ?>
                                                        <option style="text-align: center" value="<?php echo e($i); ?>">
                                                            <?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                            </div>

                                            <div class="col-2" style="margin-left: 10px;">
                                                <select name="" class="form-control form-control-sm"
                                                    id="" style="text-align: center">
                                                    <option value="lastet">latest</option>
                                                    <option value="oldest">oldest</option>
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
                                        style="background-image: url(<?php echo e(asset('dist/img/image/logo-kal.jpg')); ?>)"></span>
                                </div>
                                <div class="col" style="font-family:'Roboto Medium'">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <div class="row">
                                                <h3 class="col-auto"><b><?php echo e($submission->getUser->name); ?></b></h3>
                                                <p class="col-auto text-muted"
                                                    style="margin-top: 3px; margin-left:-7px;">
                                                    <?php echo e($submission->getUserTarget->name); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="row">
                                                <?php if(auth('web')->id() === $submission->id_user_pengirim): ?>
                                                    <div class="col-auto btn-group">
                                                        <button wire:click="editFeed(<?php echo e($submission); ?>)"
                                                            class="btn btn-sm border-0 text-warning">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="icon icon-tabler icon-tabler-edit" width="24"
                                                                height="24" viewBox="0 0 24 24" stroke-width="2"
                                                                stroke="currentColor" fill="none"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z" fill="none">
                                                                </path>
                                                                <path
                                                                    d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1">
                                                                </path>
                                                                <path
                                                                    d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z">
                                                                </path>
                                                                <path d="M16 5l3 3"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="fs-5 mb-2" style="margin-top: -9px;"><?php echo e($submission->created_at); ?>

                                    </div>
                                    <div class="text">
                                        <p align="justify" class="" style="margin-right: 7px;">
                                            <?php echo e($submission->message); ?>

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
        <div class="col-2 mt-2">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>News</b></div>
            <div class="card" style="height: 35rem">
                <div class="card-body card-body-scrollable px-1 card-body-scrollable-shadow">
                    <div class="divide-y">
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card mb-2 hover-shadow-lg">
                                <div class="card-img-top img-responsive img-responsive-21x9"
                                    style="background-image: url(<?php echo e($new->gambar); ?>)">
                                </div>
                                
                                
                                
                                <div class="card-body px-1">
                                    <h2 class=""><?php echo e($new->title); ?></h2>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>


        </div>
        <?php echo $__env->make('user.home.modal.create-feed-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(function() {
            window.addEventListener('openCreateFeedMsg', function(e) {
                $('.create_submission').modal('show')
            })
            window.addEventListener('closeModalFeedMsg', (e) => {
                $('.create_submission').modal('hide')
            })
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/home/home-feed-message.blade.php ENDPATH**/ ?>