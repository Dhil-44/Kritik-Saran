<div>
    <div class="card-body">
        <div class="space-y-4">
            <div>
                <h2 class="mb-3">Critics</h2>
                <?php $__currentLoopData = $critics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $critic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 mt-2 shadow-md">
                        <div class="card-header">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar me-2 avatar-rounded"
                                            style="background-image: url(http://127.0.0.1:8000/dist/img/image/logo-kal.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="card-title"><?php echo e($critic->getUser->name); ?></div>
                                        <div class="card-subtitle"><?php echo e($critic->created_at); ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" p-2">
                            <p align="justify"><?php echo e($critic->message); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/kategori/critic.blade.php ENDPATH**/ ?>