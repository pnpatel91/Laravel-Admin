<?php $__env->startSection('title'); ?>
    <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="col-md-12">
            <a href="<?php echo e(url('admin/post')); ?>" class="btn btn-secondary mb-3">
                Back
            </a>
            <div class="card">
                <div class="card-header">
                    <?php echo e($post->title); ?>

                </div>
                <div class="card-body">
                <?php $__currentLoopData = $post->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <img src="<?php echo e($image->post_image_link); ?>" alt="">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <p>
                    <?php echo e($post->content); ?>

                </p>
                </div>
                <div class="card-footer">
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categroy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($categroy->name); ?> 
                        <?php if(!$loop->last): ?>
                            |
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br><hr>
                    Posted by <?php echo e($post->user->name); ?> on <b><?php echo e($post->created_at->diffForHumans()); ?></b>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/post/show.blade.php ENDPATH**/ ?>