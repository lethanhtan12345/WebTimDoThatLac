
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('xu-li-cap-nhat-lop-hoc',['id'=>$lophoc->id])); ?>" method="post">
<?php echo csrf_field(); ?>
  <div class="form-outline mb-4">
    <label for="ten">Tên lớp học</label>
    <input type="text" class="form-control" placeholder="Tên lớp học" name="ten">    
  </div>
  <br>
  <button type="submit" class="btn btn-primary btn-block mb-4">Sửa</button>
</form>
<br>
<a href="/lop-hoc/danh-sach">Back</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\myproject\resources\views/lophoc/capnhat.blade.php ENDPATH**/ ?>