

<?php $__env->startSection('content'); ?>
<form class="row g-3 needs-validation"  method="POST" action="<?php echo e(route('xu-li-them-tin')); ?>"  enctype="multipart/form-data" id="themtin">
                    <?php echo csrf_field(); ?>
                    

                    <div class="col-12" >
                      <label for="yourPassword" class="form-label" style="color: aliceblue">Loại tin</label>
                        <select name="loai_tin">
                            <option value="Tin tìm">Tin tìm</option>
                            <option value=" Tin nhặt">Tin nhặt</option>
                        </select>                
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Tiêu đề</label>
                      <input type="text" name="tieu_de" class="form-control" id="" required>
                      <?php $__errorArgs = ['tieu_de'];
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
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Nôi dung</label>
                      <input type="textfield" name="noi_dung" class="form-control" id="" required>
                      <?php $__errorArgs = ['noi_dung'];
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
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Ảnh</label>
                      <input type="file" name="anhupload" class="form-control" id="yourPassword" required>                 
                    </div>

                    <div class="col-12" >
                        <select name="danh_muc">
                            
                            <?php $__currentLoopData = $listdanhmuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value=<?php echo e($danhmuc->ten_danh_muc); ?>><?php echo e($danhmuc->ten_danh_muc); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                
                    </div>
                                       
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng tin</button>
                    </div>
                    
                  </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $('#themtin').submit(function(e){
    e.preventDefault(e);
    Swal.fire({
  title: 'Mầy chắc chưa?',
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: 'chắc',
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire('Saved!', '', 'success')
    
  } else if (result.isDenied) {
    Swal.fire('Changes are not saved', '', 'info')
  }
})
  })
  
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/adminwebtimdo/themtin.blade.php ENDPATH**/ ?>