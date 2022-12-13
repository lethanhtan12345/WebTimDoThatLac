
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('css'); ?>
<style>
  img:hover{
    transform: scale(1.3);
    z-index: 2;
  }
  img{
    transition: 1s;
  }
</style>  
<?php $__env->stopSection(); ?> 


<div class="col-lg-7">
    <div class="card" style="border-radius: 30px" >
      <div class="card-body">
        
        <br>
        <h2 class="card-title"><?php echo e($tintuc->username); ?></h2>
        <br>
        <h4 class="card-title"><?php echo e($tintuc->tieu_de); ?></h4>             
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo e(URL::to('/')); ?>/hinhanh/<?php echo e($tintuc->anh); ?>" class="d-block w-100" alt="hinhanh">
            </div>
          </div>
        </div>
        <h4 class="card-title"><?php echo e($tintuc->noi_dung); ?></h4>
        <h3 class="card-title"><?php echo e($tintuc->created_at); ?></h3>    
      </div>
    </div>             
         
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/adminwebtimdo/chitiet.blade.php ENDPATH**/ ?>