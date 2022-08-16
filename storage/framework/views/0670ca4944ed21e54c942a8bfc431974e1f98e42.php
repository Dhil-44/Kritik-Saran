<div class="modal fade editSubmission" wire:ignore.self tabindex="-1" id="modal-lg" style="display: none;"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="updateSubmission">
                    <div class="form-group">
                        <label for="">Category</label>
                        <input type="text" class="form-control" disabled wire:model="id_cat">
                        <span class="text-danger"> <?php $__errorArgs = ['id_cat'];
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
                        <label for="">Pengirim </label>
                        <input type="text" class="form-control" disabled wire:model="id_user_pengirim">
                        <span class="text-danger"> <?php $__errorArgs = ['id_user_pengirim'];
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
                        <label for="">Pengirim </label>
                        <input type="text" class="form-control" disabled placeholder="Penerima"
                            wire:model="id_user_target">
                        <span class="text-danger"> <?php $__errorArgs = ['id_user_target'];
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
                        <label for="">Message</label>
                        <textarea wire:model="message" class="form-control" rows="4">
                        </textarea>
                        <span class="text-danger"> <?php $__errorArgs = ['message'];
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

                    <div class="form-group modal-footer justify-content-between">
                        <button type="button" class="btn btn-danger btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/admin/home/modal/edit-submission.blade.php ENDPATH**/ ?>