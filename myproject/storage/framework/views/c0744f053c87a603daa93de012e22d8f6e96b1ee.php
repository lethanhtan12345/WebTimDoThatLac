
<?php $__env->startSection('content'); ?>
<?php if(session('username')): ?>
  <div class="alert alert-warning">
    <?php echo e(session('usernameerror')); ?>

  </div> 
<?php endif; ?>
<form class="row g-3 needs-validation" novalidate  method="POST" action="<?php echo e(route('admin-quan-xu-li-them-nguoi-dung')); ?>">
    <?php echo csrf_field(); ?>
    <div class="col-12">
      <label for="yourUsername" class="form-label">Tên đăng nhập</label>
      <div class="input-group has-validation">     
        <input type="text" name="username" class="form-control" id="yourUsername" required>
        <div class="invalid-feedback">Please choose a username.</div>
      </div>
      <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span style="color: red"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Mật khẩu</label>
      <input type="password" name="password" class="form-control" id="yourPassword" required>
      <div class="invalid-feedback">Please enter your password!</div>
      <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span style="color: red"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>


    <div class="col-12">
      <label for="yourName" class="form-label">Số điện thoại</label>
      <input type="text" name="sdt" class="form-control" id="yourName" required>
      <div class="invalid-feedback">Please, enter your phone!</div>
      <?php $__errorArgs = ['sdt'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span style="color: red"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-12">
      <label for="yourEmail" class="form-label">Email</label>
      <input type="email" name="email" class="form-control" id="yourEmail" required>
      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span style="color: red"><?php echo e($message); ?></span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="col-12" >
      <select name="chucvu">
          <option value="User">User</option>
          <option value=" Admin">Admin</option>
      </select>                
  </div>
    
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit">Tạo tài khoản</button>
    </div>
    
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/themnguoidung.blade.php ENDPATH**/ ?>