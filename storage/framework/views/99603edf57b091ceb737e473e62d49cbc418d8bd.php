<div>
    <div class="card-body">
        <div class="space-y-4">
            <div>
                <h2 class="mb-3">Pending Message</h2>
                <?php $__currentLoopData = $subs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card mb-3 mt-2 shadow-md">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="avatar me-2 avatar-rounded"
                                        style="background-image: url(http://127.0.0.1:8000/dist/img/image/logo-kal.jpg)"></span>
                                </div>
                                <div class="col-auto">
                                    <div class="row">
                                        <div class="card-title col-auto"><?php echo e($sub->getUser->name); ?></div>
                                        <span class="badge bg-red col-auto mt-1"><?php echo e(__($sub->status)); ?></span>
                                        <div class="card-subtitle "><?php echo e($sub->created_at); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ribbon">
                                <button class="btn btn-blue btn-sm"
                                    wire:click="publish(<?php echo e($sub['id']); ?>,<?php echo e($sub); ?>)">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-message-forward" width="24"
                                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4">
                                        </path>
                                        <path d="M13 9l2 2l-2 2"></path>
                                        <path d="M15 11h-6"></path>
                                    </svg>
                                    publish
                                </button>
                            </div>

                        </div>
                        <div class=" p-2">
                            <p align="justify"><?php echo e($sub->message); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($subs->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/sending-form/pending-message.blade.php ENDPATH**/ ?>