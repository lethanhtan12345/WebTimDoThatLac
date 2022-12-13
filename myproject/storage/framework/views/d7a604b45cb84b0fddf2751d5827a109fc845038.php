
<?php $__env->startSection('content'); ?>
<form class="row g-3 needs-validation" novalidate  method="POST" action="<?php echo e(route('xu-li-cap-nhat-nguoi-dung',['id'=>$NguoiDung->id])); ?>">
    <?php echo csrf_field(); ?>
    
    <div class="col-12">
      <label for="yourUsername" class="form-label" style="color: aliceblue">Tên đăng nhập</label>
      <div class="input-group has-validation">    
        <input type="text" name="username" class="form-control" id="" required value="<?php echo e($NguoiDung->username); ?>" readonly >
        <div class="invalid-feedback">Please choose a username.</div>
      </div>
    </div>

    


    <div class="col-12">
      <label for="yourName" class="form-label"style="color: aliceblue">Số điện thoại</label>
      <input type="text" name="sdt" class="form-control" id="yourName" required value="<?php echo e($NguoiDung->sdt); ?>">
      <div class="invalid-feedback">Please, enter your phone!</div>
    </div>

    <div class="col-12">
      <label for="yourEmail" class="form-label"style="color: aliceblue"> Email</label>
      <input type="email" name="email" class="form-control" id="yourEmail" required value="<?php echo e($NguoiDung->email); ?>">
      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
    </div>

    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Cập nhật</button>
    </div>
  </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('nguoidung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/adminwebtimdo/capnhatnguoidung.blade.php ENDPATH**/ ?>