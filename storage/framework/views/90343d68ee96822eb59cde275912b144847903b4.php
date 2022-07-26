<div wire:ignore.self class="modal fade create_submission" id="modal-large" tabindex="-1" aria-hidden="true"
    aria-labelledby="exampleModalLabel" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submission Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="createSubmission">
                <div class="modal-body">
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Assign to</label>
                        <div class="col">
                            <select class="form-select" wire:model="id_user_target">
                                <option>To</option>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->email); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <?php $__errorArgs = ['id_user_target'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>

                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Category</label>
                        <div class="col">
                            <select class="form-select" wire:model="id_cat">
                                <option>choose</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($ct->id); ?>"> <?php echo e(__($ct->name_cat)); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <?php $__errorArgs = ['id_cat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger">
                                <?php echo e($message); ?>

                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Message</label>
                        <div class="col">
                            <textarea wire:model="message" id="summernote" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    
                    <div class="form-group mb-3 row">
                        <label class="form-label col-3 col-form-label">Attachments</label>
                        <div class="col">
                            <input type="file" wire:model="fill_name" class="form-control sm:form-control">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
<<<<<<< HEAD
                    
=======
>>>>>>> 5e710d45966034f458a1aa171e3bad38e9fff2e5
                    <button type="submit" data-bs-dismiss="modal" class="btn btn-green">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/modal/create-submission-form.blade.php ENDPATH**/ ?>