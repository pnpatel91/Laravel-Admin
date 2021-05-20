
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('/')); ?>" class="brand-link">
        <img src="<?php echo e(auth()->user()->getImageUrlAttribute()); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo e(auth()->user()->name); ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Manage
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view role')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.role.index')); ?>" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Role & Permission</p>
                            </a>
                        </li>
                        <?php endif; ?> 
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view hobby')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/hobby')); ?>" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Hobby</p>
                            </a>
                        </li>
                        <?php endif; ?> 
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view category')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/category')); ?>" class="nav-link">
                                <i class="fas fa-th nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <?php endif; ?> 
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view user')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/user')); ?>" class="nav-link">
                                <i class="fas fa-users nav-icon"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/profile')); ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout').submit();" class="nav-link">
                        <i class="nav-icon fas fa-power-off text-danger"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form action="<?php echo e(route('logout')); ?>" method="post" id="logout">
                        <?php echo csrf_field(); ?>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\xampp\htdocs\blog-laravel-7\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>