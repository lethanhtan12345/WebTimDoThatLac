
<?php $__env->startSection('content'); ?>
<h1>DANH SÁCH LỚP HỌC</h1>
<a href="/lop-hoc/them">Thêm mới</a>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Ngày Tạo</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $listLopHoc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lophoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <th scope="row"><?php echo e($lophoc->id); ?></th>
            <td><?php echo e($lophoc->ten); ?></td>
            <td><?php echo e($lophoc->created_at); ?></td>
            <td><a href="/lop-hoc/chi-tiet/<?php echo e($lophoc->id); ?>" class="btn btn-primary">Xem</a></td>
            <td><a href="/lop-hoc/cap-nhat/<?php echo e($lophoc->id); ?>" class="btn btn-primary">Cập nhật</a></td>
            <td><a href="<?php echo e(route('xoa-lop-hoc',['id'=>$lophoc->id])); ?>" class="btn btn-warning">Xóa</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
        
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/lophoc/danhsach.blade.php ENDPATH**/ ?>