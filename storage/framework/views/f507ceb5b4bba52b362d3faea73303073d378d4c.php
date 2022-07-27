<div>
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Table User</h3>

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
                            <tr class="py-0">
                                <th>#</th>
                                <th>User</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Logo</th>
                                <th class="text-center">
                                    
                                    <button type="button" class="btn btn-success btn-sm" wire:click="openModal()">
                                        <i class="fas fa-add"></i>
                                        Create new
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><span class="tag tag-primary"><?php echo e($user->role); ?></span></td>
                                    <td><?php echo e(__($user->logo) > 0 ? 'Ada logo' : 'NO LOGO'); ?></td>
                                    <td class="text-center py-0 align-middle">
                                        <div class="btn-group btn-group-sm">
                                            <button data-toggle="modal" wire:click="editUser(<?php echo e($user); ?>)"
                                                class="btn btn-warning"><i class="fas fa-pen"></i></button>
                                            <button type="button" wire:click="deleteUser(<?php echo e($user->id); ?>)"
                                                class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <h3 class="text-danger text-center">Data Not Found!</h3>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        
        <?php echo $__env->make('admin.home.modal.create-new-user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.home.modal.edit-user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/admin/user-controller.blade.php ENDPATH**/ ?>