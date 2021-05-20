

<?php $__env->startSection('title', 'Hobby Create'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(url('admin/hobby')); ?>" class="btn btn-secondary mb-3">
                Back
            </a>
        </div>
        <div class="col-md-12">

            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card card-body">
                <form action="<?php echo e(url('admin/hobby')); ?>" method="post">
                    <?php echo csrf_field(); ?> 
                    <div class="form-group">
                        <label>Name of hobby</label>
                        <input id="hobby_name" type="text" class="form-control " name="hobby_name" value="<?php echo e(old('hobby_name')); ?>" required autocomplete="name" autofocus="" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label>Age first started</label>
                        <input type="number" max="100" min="1" name="age_first_started" value="<?php echo e(old('age_first_started')); ?>" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/hobby/create.blade.php ENDPATH**/ ?>