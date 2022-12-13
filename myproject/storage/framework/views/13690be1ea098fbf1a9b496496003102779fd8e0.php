
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
  <?php $__currentLoopData = $listTinTuc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tintuc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <a href="/admin/chi-tiet/<?php echo e($tintuc->id); ?>">
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
        <h3 class="card-title"><?php echo e($tintuc->created_at); ?></h3>    
      </div>
    </div>
  </a>               
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/start/nhatdo.blade.php ENDPATH**/ ?>