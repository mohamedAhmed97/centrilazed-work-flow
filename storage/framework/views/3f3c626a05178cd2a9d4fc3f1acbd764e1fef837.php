 
 <?php $__env->startSection('content'); ?>

    <!------------------------ Start Sider ----------------------------------->
  <div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($loop->first): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($record->id); ?>" class="active"></li>
                      <?php else: ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($record->id); ?>"></li>
         <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ol>
      <div class="carousel-inner">
          <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($loop->first): ?>
        <div class="carousel-item active">
          <img src="<?php echo e(asset('img/'.$record->img)); ?>" class="d-block w-100">
        </div>
         <?php else: ?>
          <div class="carousel-item ">
               <img src="<?php echo e(asset('img/'.$record->img)); ?>" class="d-block w-100">
            </div>
          <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <!------------------------ End Sider ------------------------------------>

  <!-------------------------- Start Wave -------------------------->
  <section class="wave"></section>
  <!-------------------------- End Wave -------------------------->

    <!------------------------ Start Tourist --------------------------------->
    <div class="tourist">
      <div class="container">
        <div class="row wow bounceInDown">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-1">
              <a href="/tourism">
                <img src="<?php echo e(asset('img/tr1.png')); ?>" class=" img-thumbnail">
                <h1><?php echo e(trans('app.Tourist Programs & Camping')); ?></h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div class="row wow bounceInLeft delay-1s">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-2">
              <a href="/medical">
                <img src="<?php echo e(asset('img/tr2.png')); ?>"  class=" img-thumbnail">
                <h1 class="custom-h1"><?php echo e(trans('app.Educational & Medical Tourist')); ?></h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>

        <div class="row wow bounceInRight delay-1s">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="custom-img-1">
              <a href="/visa">
                <img src="<?php echo e(asset('img/tr3.png')); ?>"  class=" img-thumbnail">
                <h1><?php echo e(trans('app.visa')); ?></h1>
              </a>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
    </div>
    <!------------------------ Start Tourist --------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>