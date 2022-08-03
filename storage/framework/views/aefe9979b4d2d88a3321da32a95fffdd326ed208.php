
<?php $__env->startSection('title', 'Kalbis | Critics and Suggestions'); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('header-footer.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Submission Form</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-3 row">
                                <label class="form-label col-3 col-form-label">Assign to</label>
                                <div class="col">
                                    <select class="form-select">
                                        <option>Choose</option>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label class="form-label col-3 col-form-label">Category</label>
                                <div class="col">
                                    <?php
                                        $categories = ['Suggestion', 'Critic', 'Announcement'];
                                    ?>
                                    <select class="form-select">
                                        <option>--Choose category--</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($ct); ?>"> <?php echo e($ct); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="form-label col-3 col-form-label">Message</label>
                                <div class="col">
                                    <textarea name="" id="" cols="3" rows="3" class="form-control">

                                    </textarea>

                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="form-label col-3 col-form-label">Attachments</label>
                                <div class="col">
                                    <input type="file" class="form-control sm:form-control">
                                </div>
                            </div>


                            <div class="form-footer" > 
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.tampilan-utama', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Kritik-Saran\resources\views/home/submission-form.blade.php ENDPATH**/ ?>