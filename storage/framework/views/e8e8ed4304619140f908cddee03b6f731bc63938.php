<?php $__env->startSection('title', 'Post Edit'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="<?php echo e(url('admin/post')); ?>" class="btn btn-secondary mb-3">
                Back
            </a>
        </div>
        <div class="col-md-12">

            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card card-body">
                <form action="<?php echo e(url("admin/post/$post->id/edit")); ?>" method="post" enctype="multipart/form-data" >
                    <?php echo csrf_field(); ?>
                    
                    <?php echo method_field('put'); ?>
                    <div class="form-group">
                        <label>Post Title</label>
                    <input type="text" name="title" value="<?php echo e($post->title); ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Post Content</label>
                        <textarea name="content" rows="10" class="form-control">
                            <?php echo e($post->content); ?>

                        </textarea>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category_id[]" multiple>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>" 
                                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($cat->id ===  $category->id ? 'selected' : null); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                >
                                <?php echo e($category->name); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Post Image</label>
                        <input type="file" name="image[]" multiple class="form-control-file">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>