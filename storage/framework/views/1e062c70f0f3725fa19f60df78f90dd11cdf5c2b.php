<div>
    <div class="card-body">
        <div class="space-y-4">
            <div>
                <h2 class="mb-3">Suggestions</h2>
                <?php $__currentLoopData = $suggestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $suggestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 mt-2 shadow-md">
                        <div class="card-header">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar me-2 avatar-rounded"
                                            style="background-image: url(http://127.0.0.1:8000/dist/img/image/logo-ao.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="card-title"><?php echo e($suggestion->getUser->name); ?></div>
                                        <div class="card-subtitle"><?php echo e($suggestion->created_at); ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" p-2">
                            <p align="justify"><?php echo e($suggestion->message); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/kategori/suggestion.blade.php ENDPATH**/ ?>