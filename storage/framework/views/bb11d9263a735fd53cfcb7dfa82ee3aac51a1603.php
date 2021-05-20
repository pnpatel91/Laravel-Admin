<?php $__env->startSection('title'); ?>
<?php echo e($category->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="col-md-12">
        <a href="<?php echo e(url('admin/category')); ?>" class="btn btn-secondary mb-3">
            Back
        </a>
        <div class="card card-body">
            <p>Name: <?php echo e($category->name); ?></p>
            <p>Description: <?php echo e($category->description); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/category/show.blade.php ENDPATH**/ ?>