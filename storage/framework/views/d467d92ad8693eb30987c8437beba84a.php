

<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Instructors</h4>
        <a href="<?php echo e(route('instructors.create')); ?>" class="btn btn-primary">Add Instructor</a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($instructor->id); ?></td>
                    <td><?php echo e($instructor->name); ?></td>
                    <td><?php echo e($instructor->department->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('instructors.show', $instructor)); ?>" class="btn btn-sm btn-info">View</a>
                        <a href="<?php echo e(route('instructors.edit', $instructor)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('instructors.destroy', $instructor)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Delete this instructor?')">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4">No instructors found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Basti\Acad-System\resources\views/instructors/index.blade.php ENDPATH**/ ?>