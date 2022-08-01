<div class="col-md-12 col-lg-12">
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
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Kritik-Saran\resources\views/livewire/sending-form/sending-all-message.blade.php ENDPATH**/ ?>