<div>
    <div class="card-body">
        <div class="space-y-4">
            <div>
                <h2 class="mb-3">Annoucements</h2>
                <?php $__currentLoopData = $annoucements;
                $__env->addLoop($__currentLoopData);
                foreach ($__currentLoopData as $annoucement) : $__env->incrementLoopIndices();
                    $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 mt-2 shadow-md">
                        <div class="card-header">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="avatar me-2 avatar-rounded" style="background-image: url(http://127.0.0.1:8000/dist/img/image/logo-ao.jpg)"></span>
                                    </div>
                                    <div class="col">
                                        <div class="card-title"><?php echo e($annoucement->getUser->name); ?></div>
                                        <div class="card-subtitle"><?php echo e($annoucement->created_at); ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class=" p-2">
                            <p align="justify"><?php echo e($annoucement->message); ?></p>
                        </div>
                    </div>
                <?php endforeach;
                $__env->popLoop();
                $loop = $__env->getLastLoop(); ?>
            </div>
            >>>>>>> d196025a2a88ae582ac12010bb24d56ac933a379
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/kategori/annoucement.blade.php ENDPATH**/ ?>
