
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('content'); ?>
    <div class="wrapper ">
        <aside class="navbar navbar-vertical navbar-expand-lg bg-success" style="overflow: hidden;">
            <div class="container-fluid  mt-3">
                <div class="row">
                    <div class="col offset-2 mb-2">
                        <img class="rounded-circle" src="<?php echo e(asset('dist/img/image/gedungkalbis.png')); ?>"
                            style="width:70%; height:125%;" alt="cac">
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="navbar-collapse" id="navbar-menu">
                        <ul class="navbar-nav pt-lg-3">
                            <li class="nav-item <?php echo e(request()->is('inbox') ? 'active bg-dark rounded-pill' : ''); ?>">
                                <a class="nav-link text-white" href="<?php echo e(route('inbox.message')); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-location" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Sent messages
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(request()->is('critics') ? 'active bg-dark rounded-pill' : ''); ?>">
                                <a class="nav-link text-white" href="<?php echo e(route('critics')); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />
                                            <line x1="12" y1="8" x2="12" y2="11" />
                                            <line x1="12" y1="14" x2="12" y2="14.01" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Critics
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item <?php echo e(request()->is('suggestions') ? 'active bg-dark rounded-pill' : ''); ?>">
                                <a class="nav-link text-white" href="<?php echo e(route('suggestions')); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="2" />
                                            <path
                                                d="M3 12h4m5 -9v4m5 5h4m-9 5v4m-4.5 -13.5l1 1m8 -1l-1 1m0 7l1 1m-8 -1l-1 1" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Suggestions
                                    </span>
                                </a>
                            </li>

                            <li class="nav-item <?php echo e(request()->is('announcements') ? 'active bg-dark rounded-pill' : ''); ?>">
                                <a class="nav-link text-white" href="<?php echo e(route('announcements')); ?>">
                                    <span class="nav-link-icon d-md-none d-lg-inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path
                                                d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                            <rect x="9" y="3" width="6" height="4"
                                                rx="2" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Announcements
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <?php echo $__env->make('user.header-footer.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <header class="navbar navbar-light mt-4 d-none d-lg-flex d-print-none">
            <div class="container-xl">
                <h2 class="text-dark">Welcome, <strong><?php echo e(Auth::user()->name); ?></strong> </h2>
            </div>
        </header>

        <div class="page-wrapper">
            <div class="container-xl">
                <div class="page-header">
                    <div class="col-md-10">
                        <?php echo $__env->yieldContent('kategory'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/profile.blade.php ENDPATH**/ ?>