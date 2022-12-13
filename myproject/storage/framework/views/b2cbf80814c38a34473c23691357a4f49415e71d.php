
<?php $__env->startSection('content'); ?>
<h1>DANH SÁCH SINH VIÊN</h1>
<a href="/sinh-vien/them">Thêm mới</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">MSSV</th>
        <th scope="col">Họ tên</th>
        <th scope="col">Lớp</th>
        <th scope="col">Email</th>
        <th scope="col">Điểm TB</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listSinhVien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sinhvien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($sinhvien->id); ?></th>
            <td><?php echo e($sinhvien->mssv); ?></td>
            <td><?php echo e($sinhvien->ho_ten); ?></td>
            <td><?php echo e($sinhvien->lopHoc->ten); ?></td>
            <td><?php echo e($sinhvien->email); ?></td>
            <td><?php echo e($sinhvien->diem_tb); ?></td>   
            <td><a href="/sinh-vien/chi-tiet/<?php echo e($sinhvien->id); ?>" class="btn btn-primary">Xem</a></td>
            <td><a href="/sinh-vien/cap-nhat/<?php echo e($sinhvien->id); ?>" class="btn btn-success">Cập nhật</a></td>
            <td><a href="/sinh-vien/xoa/<?php echo e($sinhvien->id); ?>" class="btn btn-warning">Xóa</a></td> 
                   
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\myproject\resources\views/sinhvien/danhsach.blade.php ENDPATH**/ ?>