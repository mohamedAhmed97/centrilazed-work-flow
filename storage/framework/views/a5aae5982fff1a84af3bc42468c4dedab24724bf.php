 
 <?php $__env->startSection('content'); ?>
    <!------------------------ Start About Us--------------------------------->
    <div class="tourist-programs">
      <div class="container">
        <div class="tourism-section">
          <div class="titel-style text-center">
            <h1><?php echo e(trans('app.about')); ?></h1>
          </div>

          <div class="about">
            <div class="row">
              <div class="col-md-6 text-center">
                <img src="<?php echo e(asset('img/visa.png')); ?>">
              </div>
              <div class="col-md-6"></div>
            </div>
          </div>

          <div class="info-about">
            <div>
              <h1><?php echo e(trans('app.aboutcom')); ?></h1>
              <p>
              <?php echo $records->intro; ?>

              </p>
            </div>

            <div>
              <h1><?php echo e(trans('app.aboutteam')); ?></h1>
              <p>
               <?php echo $records->team; ?>

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!------------------------ Start About Us--------------------------------->

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>