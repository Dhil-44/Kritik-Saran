<div wire:ignore.self class="modal fade create_submission" tabindex="-1" aria-hidden="true" style="display: none"
     data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Submission Form</h5>
                <button type="button" class="btn-close" wire:click="closeModal()"></button>
            </div>
            <form wire:submit.prevent="createSubmission" class="">
                <div class="row">
                    <div class="col-9">
                        <div class="modal-body">
                            <div class="form-group mb-3 row">
                                <label class=" col-2 col-form-label"><span class="text-danger">*</span> Assign
                                    to</label>
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
                                <label class="col-2 col-form-label"> <span class="text-danger">*</span> Category</label>
                                <div class="col">
                                    <select class="form-select" wire:model="id_cat">
                                        <option>choose</option>
                                        
                                        
                                        
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
                                <label class="col-2 col-form-label"><span class="text-danger">*</span> Message</label>
                                <div class="col" wire:ignore>
                                    <textarea wire:model="message" id="summernote" rows="8"
                                              class="form-control"></textarea>
                                </div>
                            </div>

                            
                            <div class="form-group mb-3 row">
                                <label class="form-label col-2 col-form-label">Attachments <span
                                        class="text-muted fs-5">(optional)</span> </label>
                                <div class="col">
                                    <input type="file" wire:model="fill_name" class="form-control sm:form-control">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-2 mt-3 md-2">
                        <div class="form-group" style="margin-top: 5px;">
                            <button type="submit" class="btn btn-green form-control">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                    <path
                                        d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5"></path>
                                </svg>
                                Submit
                            </button>
                            <button type="button" class="btn btn-red form-control"  wire:click="closeModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/user/home/modal/create-feed-message.blade.php ENDPATH**/ ?>