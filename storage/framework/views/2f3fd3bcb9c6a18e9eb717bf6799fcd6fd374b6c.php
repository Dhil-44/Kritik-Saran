<div class="modal-body p-0 m-0">
    <section style="background-color: #ffffff;">
        <div class="container">
            <div class="row d-flex justify--content-center">
                <div class="col-md-12 col-lg-10 col-xl-10 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-start align-items-center">
                                <img class="rounded-circle shadow-1-strong me-3" id="img-user" src="<?php echo e($logo); ?>"
                                    alt="avatar" width="60" height="60" />
                                <div>
                                    <h6 class="fw-bold text-primary mb-1" id="name-user">
                                        <?php echo e($name); ?>

                                    </h6>
                                    <p class="text-muted small mb-0" id="post_at-user">
                                        <?php echo e($updated_at); ?>

                                    </p>
                                </div>
                            </div>
                            <p class="mt-3 mb-4 pb-2" id="message-user"><?php echo e($message); ?></p>
                            <div class="document">
                                <a href="">
                                    <?php echo e($file); ?>

                                </a>
                            </div>
                        </div>
                        <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                            <div class="d-flex flex-start w-100">
                                <img class="rounded-circle shadow-1-strong me-3" src="<?php echo e(auth('web')->user()->logo); ?>"
                                    alt="avatar" width="40" height="40" />
                                <div class="form-outline w-100">
                                    <textarea class="form-control" wire:model="comment" id="" rows="4" style="background: #fff;">
                                    </textarea>
                                    <label class="form-label" for="textAreaExample">Message</label>

                                    <span class="text-danger">
                                        <?php $__errorArgs = ['comment'];
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
                            </div>
                            <div class="float-end mt-2 pt-1">
                                <button type="button" wire:click="postComment()"
                                    class="btn btn-green btn-sm px-1 py-1">
                                    Post comment
                                </button>
                                <button type="button" wire:click="$set('comment','')"
                                    class="btn btn-outline-red btn-sm px-1 py-1">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-9 mt-1 offset-md-1">
                    <div class="card text-dark">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Recent comments</h4>
                            <p class="fw-light mb-1 pb-1">Latest Comments section by users</p>
                        </div>
                        <hr class="my-0" />
                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $co): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="card-body p-4">
                                <div class="d-flex flex-start">
                                    <img class="rounded-circle shadow-1-strong me-3" src="<?php echo e($co->user->logo); ?>"
                                        alt="avatar" width="60" height="60" />
                                    <div>
                                        <h6 class="fw-bold mb-1"><?php echo e($co->user->name); ?></h6>
                                        <div class="d-flex align-items-center mb-3">
                                            <p class="mb-0">
                                                <?php echo e($co->post_at); ?>

                                            </p>
                                        </div>
                                        <p class="mb-0"><?php echo e($co->message); ?></p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-0" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mt-1">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal-footer">
        <button type="button" wire:click="clear()" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/user/reply-submission.blade.php ENDPATH**/ ?>