<div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table Submission</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" wire:model="search" class="form-control float-right"
                                   placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Category</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Sent at</th>
                            <th>File</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $submissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $submission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e(__($loop->iteration)); ?></td>
                                <td><?php echo e(__($submission->getUser->name)); ?></td>
                                <td><?php echo e(__($submission->getUserTarget->name)); ?></td>
                                <td>
                                    <span class="tag tag-warning"><?php echo e(__($submission->getCategory->name_cat)); ?></span>
                                </td>
                                <td>
                                    <span class="d-inline-block text-truncate " data-bs-toggle="tooltip"
                                          data-bs-placement="top" title=" <?php echo e(__($submission->message)); ?>"
                                          style="max-width: 100px;">
                                            <?php echo e(__($submission->message)); ?>

                                    </span>
                                </td>
                                <td class="">
                                    <span
                                        class="float-right badge <?php echo e($submission->status == 'public' ? 'bg-blue': 'bg-danger'); ?>">
                                        <?php echo e(__($submission->status)); ?>

                                    </span>
                                </td>

                                <td><?php echo e(__($submission->created_at)); ?></td>
                                <td>
                                    <a href="<?php echo e($submission->filename ?? ''); ?>">lihat</a>
                                </td>
                                <td class="text-center py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <button type="button" wire:click="editSubmission(<?php echo e($submission); ?>)"
                                                class="btn btn-info">
                                            <i class="fas fa-pen"></i>
                                        </button>
                                        <button class="btn btn-danger" type="button"
                                                onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
                                                wire:click="deleteSubmission(<?php echo e($submission->id); ?>)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tbody>
                            <h3 class="text-danger text-center">No Data Found!</h3>
                            </tbody>
                        <?php endif; ?>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.home.modal.edit-submission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('showUpdateModal', () => {
            $('.editSubmission').modal('show');
        })
        window.addEventListener('closeUpdateModal', () => {
            $('.editSubmission').modal('hide');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/admin/submission-controller.blade.php ENDPATH**/ ?>