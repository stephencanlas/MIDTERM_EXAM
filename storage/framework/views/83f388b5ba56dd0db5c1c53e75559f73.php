

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Courses</h4>
        <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">Add Course</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Instructor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($course->id); ?></td>
                    <td><?php echo e($course->title); ?></td>
                    <td><?php echo e($course->instructor->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('courses.show', $course)); ?>" class="btn btn-sm btn-info">View</a>
                        <a href="<?php echo e(route('courses.edit', $course)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('courses.destroy', $course)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Delete this course?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4">No courses available.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Basti\Acad-System\resources\views/courses/index.blade.php ENDPATH**/ ?>