<?php $__env->startSection('content'); ?>
<!-- Start Slider -->
    <div class="custom-slider">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carousel-edit">
          <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($loop->first): ?>
            <div class="carousel-item active">
                <img src="<?php echo e(asset('img/'.$img->img)); ?>" class="d-block w-100" alt="..." />
            </div>
          <?php else: ?>
          <div class="carousel-item ">
                <img src="<?php echo e(asset('img/'.$img->img)); ?>" class="d-block w-100" alt="..." />
            </div>
          <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- End Slider -->
    
<!------------------------ Start Info--------------------------------->

    <div class="tourist-programs">
      <div class="container">

        <!-- Start Drop -->
        <!-- Example single danger button -->
        <div class="btn-group btn-block">
          <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
              <?php echo e(trans('app.chooseyourtrip')); ?>

          </button>
          <div class="dropdown-menu btn-block">
            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item" href="/trip/<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
        <!-- End Drop -->

        <div class="row">
          <div class="col-md-12 details">
            <div>
              <h5><?php echo e(trans('app.details')); ?></h5>
                    <?php echo $record->details; ?>


              <!-- Start Book Now -->

              <div class="book-now">
                <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                          data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         <?php echo e(trans('app.Register on This Trip')); ?>

                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                      data-parent="#accordionExample">
                      <div class="card-body">
                        <div class="card text-center">

                          <div class="card-body">
                             <form class="form-edit" action="/tripReq" method="post">
 <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?>" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?>" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.email')); ?>" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="adults" class="form-control" placeholder="<?php echo e(trans('app.individuals')); ?>" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="children" class="form-control" placeholder="<?php echo e(trans('app.children')); ?>" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="date" name="startdate" class="form-control" placeholder="<?php echo e(trans('app.startdate')); ?>" readonly />
                                </div>

                                <div class="col-sm-12">
                                    <input type="date" name="endname" class="form-control" placeholder="<?php echo e(trans('app.endtdate')); ?>" readonly />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="state" class="form-control" placeholder="<?php echo e(trans('app.state')); ?>" readonly />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="cities" class="form-control" placeholder="<?php echo e(trans('app.cities')); ?>" />
                                </div>

                                <div class="col">
                                    <input type="text" name="from" class="form-control" placeholder="<?php echo e(trans('app.from')); ?>" readonly />
                                </div>
                                <div class="col">
                                    <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.to')); ?>" readonly />
                                </div>
                            </div>
 <input type="hidden" name="trip_id" value="<?php echo e($record->id); ?>"/>
         <input type="submit" class="btn btn-outline-info btn-block"
                               value=" <?php echo e(trans('app.send')); ?>" />
                        </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- End Book Now -->

            </div>
          </div>


          <!-- Start Icon -->
          <div class="wrapper">
            <a href=" https://wa.me/<?php echo e($settings->whatsapp); ?>"><i class="fa fa-whatsapp"></i></a>

                <a href=" <?php echo e($settings->instagram); ?>"><i class="fa fa-instagram"></i></a>

                <a href=" <?php echo e($settings->facebook); ?>"><i class="fa fa-facebook"></i></a>

                <a href=" <?php echo e($settings->twitter); ?>"><i class="fa fa-twitter"></i></a>

                <a href=" <?php echo e($settings->snapchat); ?>"><i class="fa fa-snapchat-ghost"></i></a>

                <a href="mailto:<?php echo e($settings->mail); ?>"><i class="fa fa-envelope"></i></a>
                
                <a href=" <?php echo e($settings->vk); ?>"><i class="fa fa-vk"></i></a>

                <a href=" <?php echo e($settings->youtube); ?>"><i class="fa fa-youtube-play"></i></a>
          </div>
          <!-- End Icon -->
        </div>
      </div>
    </div>
             
<!------------------------ Start Info--------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>