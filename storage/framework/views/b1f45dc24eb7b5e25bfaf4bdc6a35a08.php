

<?php $__env->startSection('content'); ?>
    <h4>Department Details</h4>

    <div class="mb-3">
        <strong>ID:</strong> <?php echo e($department->id); ?>

    </div>

    <div class="mb-3">
        <strong>Name:</strong> <?php echo e($department->name); ?>

    </div>

    <a href="<?php echo e(route('departments.edit', $department)); ?>" class="btn btn-warning">Edit</a>
    <a href="<?php echo e(route('departments.index')); ?>" class="btn btn-secondary">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Basti\Acad-System\resources\views/departments/show.blade.php ENDPATH**/ ?>