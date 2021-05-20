
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(url('/')); ?>" class="brand-link">
        <img src="<?php echo e(auth()->user()->getImageUrlAttribute()); ?>" alt="<?php echo e(auth()->user()->name); ?>" class="brand-image img-circle elevation-3"
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
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/profile')); ?>" class="nav-link">
                                <i class="fas fa-user nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view hobby')): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(url('admin/hobby')); ?>" class="nav-link">
                                <i class="fas fa-file-alt nav-icon"></i>
                                <p>Hobby</p>
                            </a>
                        </li>
                        <?php endif; ?> 
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
</aside><?php /**PATH C:\xampp\htdocs\Technical Task\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>