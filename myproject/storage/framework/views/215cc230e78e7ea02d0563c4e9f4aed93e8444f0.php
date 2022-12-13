
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('xu-li-cap-nhat-sinh-vien',['id'=>$sinhvien->id])); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="ten">MSSV</label>
      <input type="text" class="form-control" placeholder="Tên lớp học" name="mssv" value="<?php echo e($sinhvien->mssv); ?>">
    </div>
    <div class="form-group">
        <label for="ten">Họ tên</label>
        <input type="text" class="form-control" placeholder="Họ tên" name="ho_ten" value="<?php echo e($sinhvien->ho_ten); ?>">
    </div>
    <label for="ten">Lớp học</label>
    <select name="lop_hoc_id">
        <?php $__currentLoopData = $dsLopHoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lophoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>{
            <?php if($lophoc->id==$sinhvien->lop_hoc_id): ?>
            <option value="<?php echo e($lophoc->id); ?>" selected><?php echo e($lophoc->ten); ?></option>
            <?php else: ?>
            <option value="<?php echo e($lophoc->id); ?>" ><?php echo e($lophoc->ten); ?></option>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <div class="form-group">
        <label for="ten">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo e($sinhvien->email); ?>">
    </div>
    <div class="form-group">
        <label for="ten">Điểm trung bình</label>
        <input type="text" class="form-control" placeholder="Điểm trung bình" name="diem_tb" value="<?php echo e($sinhvien->diem_tb); ?>">
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>
<a href="/sinh-vien/danh-sach">Back</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\myproject\resources\views/sinhvien/capnhat.blade.php ENDPATH**/ ?>