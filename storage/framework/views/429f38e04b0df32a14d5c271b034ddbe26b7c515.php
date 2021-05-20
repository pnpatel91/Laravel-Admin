<?php $__env->startSection('title', auth()->user()->name); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center mb-5">
                        <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                            alt="User profile picture">
                    </div>

                    <form method="post" action="<?php echo e(route('admin.profile.update.password')); ?>">
                        <?php echo csrf_field(); ?>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col"> <b>Old Password</b> </div>
                                    <div class="col">
                                        <input type="password" name="old_password" value="<?php echo e(old('old_password')); ?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col"> <b>New Password</b> </div>
                                    <div class="col">
                                        <input type="password" name="new_password" value="<?php echo e(old('new_password')); ?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button type="submit" class="btn btn-primary"><b>Change</b></button>
                        <a href="<?php echo e(route('admin.profile.index')); ?>" class="btn btn-secondary"><b>Back</b></a>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/profile/edit_password.blade.php ENDPATH**/ ?>