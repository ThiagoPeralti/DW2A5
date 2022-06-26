

<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($id != null): ?>
        <p>Exibindo produto id: <?php echo e($id); ?></p>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\thiag\Desktop\IFSP\5° Semestre\Desenvolvimento Web II\hdcevents\resources\views/product.blade.php ENDPATH**/ ?>