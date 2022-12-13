
<?php $__env->startSection('content'); ?>
<h1>Tên lớp học: <?php echo e($lophoc->ten); ?></h1>
<p>Ngày thêm: <?php echo e($lophoc->created_at); ?></p>
<a href="/lop-hoc/danh-sach">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\myproject\resources\views/lophoc/chitiet.blade.php ENDPATH**/ ?>