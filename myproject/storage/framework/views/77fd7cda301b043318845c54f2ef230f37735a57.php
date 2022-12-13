
<?php $__env->startSection('content'); ?>
<form class="row g-3 needs-validation"  method="POST" action="<?php echo e(route('xu-li-cap-nhat-tin-tuc',['id'=>$tintuc->id])); ?>"  enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                      <label for="yourUsername" class="form-label"style="color: aliceblue">Tên đăng nhập</label>
                      <div class="input-group has-validation">
                       
                        <input type="text" name="username" class="form-control" id="yourUsername" required value="<?php echo e($tintuc->username); ?>" readonly>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12" >
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Loại tin</label>
                        <select name="loai_tin">
                          <?php $__currentLoopData = $listLoaiTin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loaitin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          {
                            <?php if($tintuc->loai_tin==$loaitin): ?>
                            {
                              <option value="<?php echo e($loaitin); ?>" selected><?php echo e($loaitin); ?></option>
                            }                                                           
                            <?php else: ?>
                            <option value="<?php echo e($loaitin); ?>"><?php echo e($loaitin); ?></option>
                            <?php endif; ?>
                          }
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Tiêu đề</label>
                      <input type="text" name="tieu_de" class="form-control" id="" required value="<?php echo e($tintuc->tieu_de); ?>" >
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Nội dung</label>
                      <input type="textfield" name="noi_dung" class="form-control" id="" required value="<?php echo e($tintuc->noi_dung); ?>">
                    </div>
                    
                    <div class="col-12">
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Ảnh</label>
                      <input type="file" name="anhupload" class="form-control" id="yourPassword"  value="<?php echo e($tintuc->anhupload); ?>">                 
                    </div>

                    <div class="col-12" >
                      <label for="yourPassword" class="form-label"style="color: aliceblue">Danh mục</label>
                        <select name="danh_muc">
                            
                            <?php $__currentLoopData = $listDanhMuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $danhmuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            {
                              <?php if($tintuc->danh_muc==$danhmuc): ?>
                              {
                                <option value="<?php echo e($danhmuc); ?>" selected><?php echo e($danhmuc); ?></option>
                              }
                                                             
                              <?php else: ?>
                              <option value="<?php echo e($danhmuc); ?>"><?php echo e($danhmuc); ?></option>
                              <?php endif; ?>
                            }
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>                
                    </div>
                                       
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Cập nhật tin </button>
                    </div>
                    
                  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nguoidung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/adminwebtimdo/capnhattintuc.blade.php ENDPATH**/ ?>