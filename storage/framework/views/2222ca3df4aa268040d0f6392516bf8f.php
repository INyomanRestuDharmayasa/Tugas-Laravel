<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #cfe9ff, #ffffff);
            min-height: 100vh;
        }
        .card {
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            border-radius: 15px;
        }
        .btn-primary {
            background-color: #2b67f6;
            border: none;
        }
        .btn-primary:hover {
            background-color: #1f4eb8;
        }
    </style>
</head>
<body class="d-flex flex-column justify-content-center align-items-center p-4">
    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\kampus-laravel\resources\views/layout.blade.php ENDPATH**/ ?>