

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Role</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="<?php echo e(route('admin.role.update', ['role' => $role->id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo e($role->name); ?>" <?php echo e($role->isDisabled()); ?>

                                class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Permission: </label>
                        </div>
                        <div class="row">
                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3">
                                <div class="form-group form-check">
                                    <input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"
                                        id="<?php echo e(Str::slug($permission->name)); ?>"
                                        <?php echo e($role->isDisabled()); ?>

                                        <?php echo e($role->isChecked($permission)); ?>

                                        class="form-check-input">
                                    <label class="form-check-label <?php echo e($permission->isDeleteLabel()); ?>"
                                        for="<?php echo e(Str::slug($permission->name)); ?>">
                                        <?php echo e(Str::title($permission->name)); ?>

                                    </label>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php if (! ($role->isAdmin())): ?>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <?php endif; ?>
                        <a href="<?php echo e(route('admin.role.index')); ?>" class="btn btn-secondary">Back</a>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Technical Task\resources\views/admin/role/edit.blade.php ENDPATH**/ ?>