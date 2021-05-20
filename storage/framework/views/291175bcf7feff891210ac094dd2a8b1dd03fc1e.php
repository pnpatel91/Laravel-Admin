<?php $__env->startSection('title', 'Category Edit'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            
            <a href="<?php echo e(url('admin/category')); ?>" class="btn btn-secondary mb-3">
                Back
            </a>
        </div>
        <div class="col-md-12">

            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card card-body">
                <form action="<?php echo e(url("admin/category/$category->id/edit")); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Category Description</label>
                        <textarea name="description" rows="3" class="form-control">
                            <?php echo e($category->description); ?>

                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>