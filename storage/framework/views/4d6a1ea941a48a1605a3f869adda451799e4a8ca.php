<div>
    <div class="row mr-2">
        <button wire:click="openModalFeed()" class="btn btn-success ml-auto mb-1"><i class="fa fa-plus"></i> Create
            news
        </button>
    </div>
    <div class="row">
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12 col-lg-6 col-xl-4 mb-2">
                <div class="card mb-1">
                    <img class="card-img-top" id="trans" src="<?php echo e($new->gambar); ?>" alt="Dist Photo 3"
                        style="opacity: 0.4;">
                    <div class="card-img-overlay">
                        <h5 class="card-title text-black text-bold"><?php echo e($new->title); ?></h5>
                        <p class="card-text pb-1 pt-1 text-black">
                            <?php echo e(Str::limit($new->body, 200)); ?>

                        </p>
                        </p>
                        <a href="#" class="text-black" style="max-height: 50px;"><?php echo e($new->created_at); ?></a>
                    </div>
                </div>
                <div class="">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary" wire:click="delete(<?php echo e($new->id); ?>)">Hapus</button>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <?php echo $__env->make('user.home.modal.create-news-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('openModalNews', () => {
            $('#modal-news').modal('show');
        })
        window.addEventListener('closeModalNews', () => {
            $('#modal-news').modal('hide');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/livewire/admin/news-controller.blade.php ENDPATH**/ ?>