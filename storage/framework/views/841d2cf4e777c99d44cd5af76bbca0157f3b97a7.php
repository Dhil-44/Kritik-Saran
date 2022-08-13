<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark" href="<?php echo e(route('user-tables')); ?>">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Users</span>
                <span class="info-box-number"><?php echo e(__($users)); ?></span>
            </div>
            <!-- /.info-box-content -->
        </a>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box text-dark" href="<?php echo e(route('submission-tables')); ?>">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-comments"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Submissions</span>
                <span class="info-box-number">
                    <?php echo e(__($subms )); ?>

                </span>
            </div>
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box text-dark" href="<?php echo e(route('feed-tables')); ?>">
            <span class="info-box-icon bg-red elevation-1"><i class="fas fa-edit"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Feed</span>
                <span class="info-box-number">
                    <?php echo e(__(0)); ?>

                </span>
            </div>
        </a>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box text-dark" href="<?php echo e(route('news-tables')); ?>">
            <span class="info-box-icon bg-green elevation-1"><i class="fas fa-newspaper"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">News</span>
                <span class="info-box-number">
                    <?php echo e(__($news)); ?>

                </span>
            </div>
        </a>
    </div>

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/admin/dashboard-admin.blade.php ENDPATH**/ ?>