
<?php $__env->startSection('content'); ?>
<form class="row g-3 needs-validation" novalidate  method="POST" action="<?php echo e(route('admin-xu-li-cap-nhat-danh-muc',['id'=>$danhmuc->id])); ?>" >
    <?php echo csrf_field(); ?>
    <div class="col-12">
      <label for="yourUsername" class="form-label">Danh mục</label>
      <div class="input-group has-validation">     
        <input type="text" name="ten_danh_muc" class="form-control" id="" value="<?php echo e($danhmuc->ten_danh_muc); ?>">
      </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Cập nhật</button>
      </div>
    
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/capnhatdanhmuc.blade.php ENDPATH**/ ?>