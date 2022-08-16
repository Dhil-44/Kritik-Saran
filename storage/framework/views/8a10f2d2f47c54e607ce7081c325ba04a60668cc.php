<div class="modal fade editUser" wire:ignore.self tabindex="-1" id="edit-modal-user" style="display: none;"
     aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateUser()">
                    <div class="form-group">
                        <label for="">Nama User</label>
                        <input type="text" class="form-control" placeholder="Nama user" wire:model="upd_name_user">
                        <span class="text-danger"> <?php $__errorArgs = ['upd_name_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="Email" wire:model="upd_email">
                        <span class="text-danger"> <?php $__errorArgs = ['upd_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="roleUser">Role</label>
                        <select wire:model="upd_role" id="roleUser" class="form-control">
                            <option value="">Role</option>
                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($rl); ?>"
                                        class="<?php if($rl == $upd_role): ?> selected <?php else: ?> <?php endif; ?>">
                                    <?php echo e($rl); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                        <span class="text-danger">
                            <?php $__errorArgs = ['upd_role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" wire:model="upd_logo" name="logo" class="custom-file-input"
                                       id="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                        </div>
                        <?php $__errorArgs = ['upd_logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-red">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>


                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <img src="<?php echo e($logo); ?>" alt=" logo-<?php echo e($upd_name_user); ?>">
                            </div>
                            <div class="col">
                                <?php if($upd_logo): ?>
                                    <p class="fs-2 text-center my-0"><b>Preview Gambar</b></p>
                                    <img src="<?php echo e($upd_logo->temporaryUrl()); ?>" alt="" class="img-fluid">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group modal-footer justify-content-end">
                        <button type="submit" class="btn btn-success btn">Save</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('closeEditModal', () => {
            $('.editUser').modal('hide');
        })
        window.addEventListener('openEditOpen', (e) => {
            $('.editUser').modal('show');
        })
        window.addEventListener('openModal', () => {
            $('.createUser').modal('show');
            $('.createUser').find('span').html('');
        })
        window.addEventListener('closeAddUserModal', (e) => {
            $('.createUser').modal('hide');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/home/modal/edit-user.blade.php ENDPATH**/ ?>