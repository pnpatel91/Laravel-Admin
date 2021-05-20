<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Technical Task')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('public/public/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/ckeditor/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(asset('public/plugins/ckeditor/samples/js/sample.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    
    

    <!-- Styles -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('public/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link href="<?php echo e(asset('public/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/plugins/ckeditor/samples/css/samples.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
    <link href="<?php echo e(asset('public/plugins/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css')); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />

    <style>
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="app">

        <main style="margin: 30px 0;">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Technical Task\resources\views/layouts/app.blade.php ENDPATH**/ ?>