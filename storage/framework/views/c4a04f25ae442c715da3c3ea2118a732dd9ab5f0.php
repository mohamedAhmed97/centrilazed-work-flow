 
 <?php $__env->startSection('content'); ?>

    <!------------------------ Start Medical Tourism--------------------------------->
    <div class="tourist-programs">
      <div class="container">
        <div class="tourism-section">
          <div class="titel-style text-center">
            <h1><?php echo e($cat->name); ?></h1>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title"><?php echo e(trans('app.please enter your data')); ?></h5>
                <form class="form-edit" action="/planReq" method="post">
                     <?php echo e(csrf_field()); ?>

                  <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.email')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="adults" class="form-control" placeholder="<?php echo e(trans('app.individuals')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="children" class="form-control" placeholder="<?php echo e(trans('app.children')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="date" name="startdate" class="form-control" placeholder="<?php echo e(trans('app.startdate')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="date" name="enddate" class="form-control" placeholder="<?php echo e(trans('app.enddate')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="state" class="form-control" placeholder="<?php echo e(trans('app.state')); ?>">
                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="cities" class="form-control" placeholder="<?php echo e(trans('app.cities')); ?>">
                    </div>

                   
                    <div class="col">
                        <input type="text" name="from" class="form-control" placeholder="<?php echo e(trans('app.from')); ?>">
                    </div>
                    <div class="col">
                        <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.to')); ?>">
                    </div>


                    <div class="select-img">
                      <ul>
                          <li><input type="checkbox" name="location" id="cb1" />
                          <label for="cb1"><img src="<?php echo e(asset('img/trips1.jpg')); ?>" /></label>
                        </li>

                        <li><input type="checkbox" name="location" id="cb2" />
                          <label for="cb2"><img src="<?php echo e(asset('img/trips2.jpg')); ?>" /></label>

                        </li>
                        <li><input type="checkbox" name="location"  id="cb3" />
                          <label for="cb3"><img src="<?php echo e(asset('img/trips3.jpg')); ?>" /></label>

                        </li>
                      </ul>

                      <!-- <div class="trips-address">
                        <a href="#">Trips Address</a>
                      </div> -->
                    </div>

                  </div>
                   <input type="submit" class="btn btn-outline-info btn-block"
                               value=" <?php echo e(trans('app.send')); ?>" />
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title"><?php echo e(trans('app.resdyprograms')); ?></h5>
              </div>
            </div>
            <div class="img-hover">
              <ul>
        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="imageContainer">
                  <div class="trip-info">
                    <h4><?php echo e($record->name); ?></h4>
                    <a href="/info/<?php echo e($record->id); ?>" class="badge badge-info"><?php echo e($record->location); ?></a>
                  </div>
                  <img src="<?php echo e(asset('img/'.$record->img)); ?>">
                  <a href="/info/<?php echo e($record->id); ?>" class="overlayText">
                   <?php echo e($record->name); ?>

                  </a>
                </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!------------------------ Start Medical Tourism--------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>