
<?php $__env->startSection('content'); ?>
<h1>MSSV: <?php echo e($sinhvien->mssv); ?></h1>
<p>Họ tên: <?php echo e($sinhvien->ho_ten); ?></p>
<p>Lớp: <?php echo e($sinhvien->ho_ten); ?></p>
<p>Email: <?php echo e($sinhvien->email); ?></p>
<p>Điểm TB: <?php echo e($sinhvien->diem_tb); ?></p>
<a href="/sinh-vien/danh-sach">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\myproject\resources\views/sinhvien/chitiet.blade.php ENDPATH**/ ?>