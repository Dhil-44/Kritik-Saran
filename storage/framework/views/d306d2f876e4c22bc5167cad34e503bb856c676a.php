<div class="container-fluid">
    
    <div class="row">
        <div class="col-2 mt-2 shadow-lg" style="max-height: 240px">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>Category</b></div>
            <div class="list-group list-group-flush card">
                <a class="list-group-item list-group-item-action text-black list-group-item-light p-3" href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action text-dark list-group-item-light p-3" href="#!">Shortcuts</a>
                <a class="list-group-item list-group-item-action text-black list-group-item-light p-3" href="#!">Shortcuts</a>
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
                                                <select wire:model="paginate" class="form-control form-control-sm" style="width: 40px">
                                                    <?php for($i  = 5; $i <= 30; $i+=5): ?>
                                                        <option style="text-align: center" value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                                    <?php endfor; ?>
                                                </select></div>

                                            <div class="col-2" style="margin-left: 10px;">
                                                <select name="" class="form-control form-control-sm" id="" style="text-align: center">
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
                                                                               class="icon icon-tabler icon-tabler-search"
                                                                               width="24" height="24"
                                                                               viewBox="0 0 24 24" stroke-width="2"
                                                                               stroke="currentColor" fill="none"
                                                                               stroke-linecap="round"
                                                                               stroke-linejoin="round">
                                                                               <path stroke="none" d="M0 0h24v24H0z"
                                                                                     fill="none"></path>
                                                                               <circle cx="10" cy="10" r="7"></circle>
                                                                               <line x1="21" y1="21" x2="15"
                                                                                     y2="15"></line>
                                                                            </svg>
                                        </span>
                                                </div>
                                            </div>
                                            <button class="btn btn-green" wire:click="openModal()">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                     class="icon icon-tabler icon-tabler-pencil-plus" width="24"
                                                     height="24"
                                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                     fill="none"
                                                     stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M8 20l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4h4z"></path>
                                                    <path d="M13.5 6.5l4 4"></path>
                                                    <path d="M16 18h4m-2 -2v4"></path>
                                                </svg>
                                                Add new feed
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <?php $__currentLoopData = $feeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card shadow-sm mt-2 hover-shadow-lg" style="border-radius: 20px">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                <span class="avatar me-1 avatar-rounded avatar-md"
                                      style="background-image: url(<?php echo e(asset('dist/img/image/logo-kal.jpg')); ?>)"></span>
                                </div>
                                <div class="col" style="font-family:'Roboto Medium' ">
                                    <div class=""><h3><b><?php echo e($feed->title); ?></b></h3></div>
                                    <div class="fs-5 mb-2 -mt-1" style="margin-top: -9px;"><?php echo e($feed->created_at); ?></div>
                                    <div class="text">
                                        <p align="justify" class="" style="margin-right: 7px;">
                                            <?php echo e($feed->body); ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="mt-2 fs-3 ">
                <?php echo e($feeds->links()); ?>

            </div>
        </div>
        <div class="col-2 mt-2">
            <div class="text-bold fs-2 mx-auto px-0 py-2"><b>Announcement</b></div>
            <div class="card" style="height: 35rem">
                <div class="card-body card-body-scrollable px-1 card-body-scrollable-shadow">
                    <div class="divide-y">
                        <?php for($i =0; $i<=10; $i++): ?>
                            <div class="card mb-2 hover-shadow-lg">
                                <div class="card-img-top img-responsive img-responsive-21x9"
                                     style="background-image: url(<?php echo e(asset('dist/img/image/group-people.jpg')); ?>)"></div>
                                <div class="card-body px-1">
                                    <h2 class="">judul annoument disni</h2>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>


        </div>
        <?php echo $__env->make('user.home.modal.create-feed-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>
<?php $__env->startPush('scripts'); ?>
    <script>

        $(function () {
            window.addEventListener('openCreateFeedMsg', function (e) {
                $('.create_feed_message').modal('show')
            })
            window.addEventListener('closeModalFeedMsg', (e) => {
                $('.create_feed_message').modal('hide')
            })
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/home/home-feed-message.blade.php ENDPATH**/ ?>