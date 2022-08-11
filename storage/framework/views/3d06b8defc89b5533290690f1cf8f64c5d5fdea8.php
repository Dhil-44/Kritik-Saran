<div class="col-md-12 col-lg-12 ">
    <!-- Cards with tabs component -->
    <div class="card-tabs ">
        <!-- Cards navigation -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#tab-top-1" class="nav-link hover-shadow-lg" data-bs-toggle="tab" aria-selected="true"
                   role="tab">
                    Critics</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab-top-2" class="nav-link  hover-shadow-lg" data-bs-toggle="tab" aria-selected="false"
                   role="tab" tabindex="-1">Suggestions</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab-top-3" class="nav-link  hover-shadow-lg" data-bs-toggle="tab" aria-selected="false"
                   role="tab" tabindex="-1">Announcements</a>
            </li>
            <li class="nav-item col-auto ms-auto" role="presentation">
                <button class="btn btn-success d-none d-sm-inline-block" wire:click="openModalCreateModal()"
                        style="background: #2e7d32;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-forward" width="24"
                         height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                         stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5"></path>
                        <path d="M3 6l9 6l9 -6"></path>
                        <path d="M15 18h6"></path>
                        <path d="M18 15l3 3l-3 3"></path>
                    </svg>
                    Send Message
                </button>
            </li>

        </ul>
        <div class="tab-content">
            <!-- Content of card #1 -->
            <div id="tab-top-1" class="card tab-pane show active" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Critics</div>
                    <?php $__currentLoopData = App\Models\Submission::category(1, 'id_user_pengirim'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3 mt-2 shadow-md">
                            <div class="card-header">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar me-2 avatar-rounded"
                                                  style="background-image: url(http://127.0.0.1:8000/dist/img/image/gedungkalbis.png)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="card-title"><?php echo e($data->getUser->name); ?></div>
                                            <div class="card-subtitle"><?php echo e($data->created_at); ?></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" p-2">
                                <p align="justify"><?php echo e($data->message); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- Content of card #2 -->
            <div id="tab-top-2" class="card tab-pane" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Suggestions</div>
                    <?php $__currentLoopData = App\Models\Submission::category(2, 'id_user_pengirim'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3 mt-2 shadow-md">
                            <div class="card-header">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar me-2 avatar-rounded"
                                                  style="background-image: url(http://127.0.0.1:8000/dist/img/image/gedungkalbis.png)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="card-title"><?php echo e($data->getUser->name); ?></div>
                                            <div class="card-subtitle"><?php echo e($data->created_at); ?></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" p-2">
                                <p align="justify"><?php echo e($data->message); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- Content of card #3 -->
            <div id="tab-top-3" class="card tab-pane" role="tabpanel">
                <div class="card-body">
                    <div class="card-title">Message Announcements</div>
                    <?php $__currentLoopData = App\Models\Submission::category(3, 'id_user_pengirim'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3 mt-2 shadow-md">
                            <div class="card-header">
                                <div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="avatar me-2 avatar-rounded"
                                                  style="background-image: url(http://127.0.0.1:8000/dist/img/image/gedungkalbis.png)"></span>
                                        </div>
                                        <div class="col">
                                            <div class="card-title"><?php echo e($data->getUser->name); ?></div>
                                            <div class="card-subtitle"><?php echo e($data->updated_at); ?></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class=" p-2">
                                <p align="justify"><?php echo e($data->message); ?></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('user.home.modal.create-submission-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->startPush('scripts'); ?>
    <script>
        window.addEventListener('hide_modal_create_sub', function (e) {
            $('.create_submission').modal('hide');
        })
        window.addEventListener('openModalCreateModal', () => {
            $('.create_submission').find('span.text-danger').html('')
            $('.create_submission').modal('show')
        })
        window.addEventListener('closeModal', (e) => {
            $('.create_submission').modal('hide');
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\User\Kritik-Saran\resources\views/livewire/sending-form/sending-all-message.blade.php ENDPATH**/ ?>