
<?php $__env->startSection('content'); ?>

        <section class="section">         
          <div class="card">
            <div class="card-body">
              <br>
              <h5 class="card-title"><?php echo e($tintuc->username); ?></h5> 
              <h5 class="card-title"><?php echo e($tintuc->tieu_de); ?></h5>            
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo e(URL::to('/')); ?>/hinhanh/<?php echo e($tintuc->anh); ?>" class="d-block w-50" alt="hinhanh">
                  </div>
                </div>
              </div>
              <h3  style="font-size: 18px"><?php echo e($tintuc->noi_dung); ?></h3> 
              <h5 class="card-title"><?php echo e($tintuc->created_at); ?></h5>   
            </div>           
          </div>                 
        </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('start', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\LT_PHP\WebTimDo\myproject\resources\views/start/chitiet.blade.php ENDPATH**/ ?>