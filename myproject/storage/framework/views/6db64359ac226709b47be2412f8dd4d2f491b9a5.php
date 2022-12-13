

<?php $__env->startSection('content'); ?>



  <section class="section" class="section profile">

      <h2 style="color: aliceblue">Thông tin người dùng</h2>     
      <div class="card" style="width: 500px">
        <div class="card-body">
          
          <br>
          <h5 type="">Tên đăng nhập :  <?php echo e($account->username); ?></h5>  
          <br>       
          <h5 type="">Số điện thoại : <?php echo e($account->sdt); ?></h5>     
          <br>     
          <h5 type="">Email : <?php echo e($account->email); ?></h5>
                   
        </div>           
      </div> 
   
      
      <a href="/admin/cap-nhat-nguoi-dung/<?php echo e($account->id); ?>" class="btn btn-primary">Cập nhật</a>    
  </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('nguoidung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/adminwebtimdo/taikhoan.blade.php ENDPATH**/ ?>