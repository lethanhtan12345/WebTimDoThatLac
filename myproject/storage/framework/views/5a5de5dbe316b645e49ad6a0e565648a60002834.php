
<?php $__env->startSection('content'); ?>
<form class="row g-3 needs-validation"  method="POST" action="<?php echo e(route('admin-quan-ly-xu-li-them-tin')); ?>"  enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    
    <div class="col-12" >
      <label for="yourPassword" class="form-label">Tên người đăng</label>
      <select name="username">
          
          <?php $__currentLoopData = $listNguoiDung; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nguoidung): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <option value=<?php echo e($nguoidung->username); ?>><?php echo e($nguoidung->username); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>                
  </div>

    <div class="col-12" >
      <label for="yourPassword" class="form-label">Loại tin</label>
        <select name="loai_tin">
            <option value="Tin tìm">Tin tìm</option>
            <option value=" Tin nhặt">Tin nhặt</option>
        </select>                
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Tiêu đề</label>
      <input type="text" name="tieu_de" class="form-control" id="" required>
    </div>

    <div class="col-12">
      <label for="yourPassword" class="form-label">Nôi dung</label>
      <input type="textfield" name="noi_dung" class="form-control" id="" required>
    </div>
    
    <div class="col-12">
      <label for="yourPassword" class="form-label">Ảnh</label>
      <input type="file" name="anhupload" class="form-control" id="yourPassword" required>                 
    </div>

    <div class="col-12" >
      <label for="yourPassword" class="form-label">Danh mục</label>
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
<?php echo $__env->make('quanly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/quanly/themtin.blade.php ENDPATH**/ ?>