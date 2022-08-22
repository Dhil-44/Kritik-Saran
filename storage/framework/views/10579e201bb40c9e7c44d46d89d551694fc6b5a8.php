<nav class="navbar navbar-expand-lg navbar-light   shadow-sm sticky-top">
    <div class="container-lg">
        <div class="row">
            <div class="col-lg-6 d-md-flex d-sm-flex col-sm-112 flex-sm-row">
                <a class="navbar-brand " href="<?php echo e(route('home-page')); ?>#">
                    <img src="<?php echo e(asset('dist/img/image/Logo-kalbis-utama.png')); ?>" alt="kalbis" style="width:30%;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="col-lg-6">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto fs-4">
                        <li class="nav-item ">
                            <a class="nav-link <?php echo e(request()->is('home-page') ? 'active bg-dark text-white py-0 ' : ''); ?>"
                                aria-current="page" href="<?php echo e(route('home-page')); ?>">
                                <h4 class="mt-2 text-uppercase">Home</h4>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo e(request()->is('news-page') ? 'active bg-dark text-white py-0 ' : ''); ?>"
                                aria-current="page" href="<?php echo e(route('news-page')); ?>">
                                <h4 class="mt-2 text-uppercase">News</h4>
                            </a>
                        </li>
                        <?php if(auth('web')->user()->role != 'admin'): ?>
                            <li class="nav-item status">
                                <a class="nav-link <?php echo e(request()->is('inbox') ? 'active bg-dark text-white py-0' : ''); ?>"
                                    href="<?php echo e(route('inbox.message')); ?>">
                                    <h4 class="mt-2 position-relative">Inbox
                                        <span class="badge badge-pill bg-red position-relative mb-2"></span>
                                    </h4>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if(auth('web')->user()->role == 'admin'): ?>
                            <li class="nav-item">
                                <a class="nav-link text-dark border-success py-0 ms-1"
                                    href="<?php echo e(route('admin/home')); ?>#">
                                    <h4 class="mt-2 text-uppercase">Backend
                                    </h4>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('signout')); ?>#">
                                <h4 class="mt-2 text-uppercase">Sign out</h4>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</nav>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/user/header-footer/navbar.blade.php ENDPATH**/ ?>