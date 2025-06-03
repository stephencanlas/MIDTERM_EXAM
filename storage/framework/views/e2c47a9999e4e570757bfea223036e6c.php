<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Academic System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Academic System</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('courses.index')); ?>">Courses</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('students.index')); ?>">Students</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('instructors.index')); ?>">Instructors</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('departments.index')); ?>">Departments</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Basti\Acad-System\resources\views/layouts/app.blade.php ENDPATH**/ ?>