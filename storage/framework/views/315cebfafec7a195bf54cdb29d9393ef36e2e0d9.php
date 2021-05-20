<?php $__env->startSection('content'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">BM Blog</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>

<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="input-group mb-3">
                    <input type="text" name="search" value="<?php echo e(request('search')); ?>"
                    class="form-control" placeholder="Search By post title">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="row ">

        <div class="col-md-8 ">
            <div class="container-fluid px-0">
                <div class="row ">
                    <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-12 mb-3 ">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo e($post->image_url); ?>" class="img-fluid mb-3" alt="Post Image">
                                <h3><?php echo e($post->title); ?></h3>
                                <p>Post <small><i><?php echo e($post->date); ?></i></small> by <b><?php echo e($post->user->name); ?></b></p>
                                <p><?php echo e(Str::limit($post->content, 400, '...')); ?></p>
                                <a href="<?php echo e(url("post/$post->id")); ?>" class="btn btn-primary">View Detail &raquo;</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h3>There is no posts.</h3>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Category</h3>
            <ul>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a href="<?php echo e(url("/?category=$category->id")); ?>" class="btn btn-link">
                            <?php echo e($category->name); ?> (<?php echo e($category->posts->count()); ?>)
                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php echo e($posts->appends(['search'=>request('search'), 'category'=>request('category')])->links()); ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/client/page/index.blade.php ENDPATH**/ ?>