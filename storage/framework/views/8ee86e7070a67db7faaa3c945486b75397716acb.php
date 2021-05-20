<?php $__env->startSection('title', 'Post All'); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create post')): ?>
            <a href="<?php echo e(url('admin/post/create')); ?>" class="btn btn-primary mb-3">
                <i class="fas fa-plus-circle"></i> Create
            </a>
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <form>
                <div class="input-group input-group" >
                    <input type="text" name="search" class="form-control float-right" placeholder="Search">
                    
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <?php echo e($post->title); ?>

                    </div>
                    <div class="card-body">
                        
                        
                        <?php echo e(Str::limit($post->content, 200)); ?>

                    </div>
                    <div class="card-footer">
                        <div class="float-right">
                            <a href="<?php echo e(url("admin/post/$post->id")); ?>" class="btn btn-info">
                                <i class="fas fa-eye"></i>
                            </a>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit post')): ?>
                            <a href="<?php echo e(url("admin/post/$post->id/edit")); ?>" class="btn btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                            <?php endif; ?> 
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete post')): ?>
                            <a href="<?php echo e(url("admin/post/$post->id/delete")); ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-12">
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/post/index.blade.php ENDPATH**/ ?>