

<?php $__env->startSection('title', auth()->user()->name); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center mb-5">
                        <img class="profile-user-img img-fluid img-circle" src="<?php echo e(auth()->user()->getImageUrlAttribute()); ?>"
                            alt="User profile picture">
                    </div>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"> <b>Name</b> </div>
                                <div class="col"> <?php echo e(auth()->user()->name); ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"> <b>Email</b> </div>
                                <div class="col"> <?php echo e(auth()->user()->email); ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"> <b>Date of birth</b> </div>
                                <div class="col"> <?php echo e(auth()->user()->dateOfBirth); ?> </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col"> <b>Biography</b> </div>
                                <div class="col"> <?php echo auth()->user()->biography; ?> </div>
                            </div>
                        </li>
                    </ul>

                    <a href="<?php echo e(route('admin.profile.edit')); ?>" class="btn btn-primary"><b>Edit</b></a>
                    <a href="<?php echo e(route('admin.profile.edit.password')); ?>" class="btn btn-warning"><b>Change Password</b></a>
                </div>

                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/profile/index.blade.php ENDPATH**/ ?>