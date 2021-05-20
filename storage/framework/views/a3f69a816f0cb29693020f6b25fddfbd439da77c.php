<?php $__env->startSection('title', 'All Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- Create and Search (Start) -->
        <div class="row">
            <div class="col-md-12">
                <?php echo $__env->make('message.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create category')): ?>
            <div class="col-md-6">
                <a href="<?php echo e(url('admin/category/create')); ?>" class="btn btn-primary mb-3">
                    <i class="fas fa-plus-circle"></i> Create
                </a>
            </div>
            <?php endif; ?>
            <div class="col-md-6">
                <form>
                    <div class="input-group input-group">
                        <input type="text" name="search" value="<?php echo e(request('search')); ?>"
                        class="form-control float-right" placeholder="Search">
            
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Create and Search (End) -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body p-0">
                    <table class="table">
                        <tr>
                            <td>No</td>
                            <td>Name</td>
                            <td>Description</td>
                            <td>Actions</td>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($category->id); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e(Str::limit($category->description, 50 )); ?> </td>
                            <td>
                                <a href="<?php echo e(url("admin/category/$category->id")); ?>" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit category')): ?>
                                <a href="<?php echo e(url("admin/category/$category->id/edit")); ?>" class="btn btn-success btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <?php endif; ?> 
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete category')): ?>
                                <a href="<?php echo e(url("admin/category/$category->id/delete")); ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="4">
                                <h3>This is no Category <?php echo e(request('search') ?? ''); ?></h3>
                            </td>
                        </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/category/index.blade.php ENDPATH**/ ?>