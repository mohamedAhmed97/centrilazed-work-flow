 
 <?php $__env->startSection('content'); ?>

    <!------------------------ Start Contact Us--------------------------------->
    <div class="tourist-programs">
      <div class="container">
        <div class="tourism-section">
          <div class="titel-style text-center">
            <h1><?php echo e(trans('app.contact')); ?></h1>
          </div>

          <div class="contact">
            <div class="container">
              <div class="row">
                <br><br>
                <div class="col-md-6">
                  <div class="contact-left">
                    <br>
                    <p>
                        <?php echo $settings->intro; ?>

                    </p>
                    <div class="contact-info">
                      <address>
                        <strong><?php echo e(trans('app.address')); ?></strong>
                        <br>
                        <p>
                         <?php echo e($settings->address); ?>

                        </p>
                      </address>

                      <div class="phone-fax-email">
                        <p>
                          <strong>

                            <i class="fa fa-phone-square custom-fa"></i>
                            <span> <?php echo e($settings->phone); ?></span><br>
                          </strong>

                          <strong>

                            <i class="fa fa-fax custom-fa"></i>
                            <span> <?php echo e($settings->fax); ?></span><br>
                          </strong>

                          <strong>
                            <i class="fa fa-envelope custom-fa"></i>
                            <span> <?php echo e($settings->mail); ?></span><br>
                          </strong>
                        </p>
                      </div>
                    </div>


                    <ul class="social-list">
                      <li><a href=" https://wa.me/<?php echo e($settings->whatsapp); ?>"><i class="fa fa-whatsapp"></i></a></li>
                      <li><a href=" <?php echo e($settings->instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                      <li><a href=" <?php echo e($settings->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                      <li><a href=" <?php echo e($settings->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                      <li><a href=" <?php echo e($settings->snapchat); ?>"><i class="fa fa-snapchat-ghost"></i></a></li>
                      <li><a href="mailto:<?php echo e($settings->mail); ?>"><i class="fa fa-envelope"></i></a></li>
                      <li><a href=" <?php echo e($settings->vk); ?>"><i class="fa fa-vk"></i></a></li>
                      <li><a href=" <?php echo e($settings->youtube); ?>"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="contact-right">
                    <br>
                    <form action="/msg" method="post">
                           <?php echo e(csrf_field()); ?>

                      <input type="text" name="name" placeholder="<?php echo e(trans('app.name')); ?>" class="form-control">
                      <input type="text" name="email" placeholder="<?php echo e(trans('app.email')); ?>" class="form-control">
                      <input type="text" name="phone" placeholder="<?php echo e(trans('app.phone')); ?>" class="form-control">
                      <textarea name="msg" rows="5" placeholder="<?php echo e(trans('app.msg')); ?>.. " class="form-control"></textarea>

                      <div class="send-btn">
                          <button class="btn btn-lg btn-general btn-white btn-block"  role="button">
                        <?php echo e(trans('app.send')); ?>

                          </button>
                      </div>

                    </form>
                  </div>
                </div>

              </div>

              <br>

            </div>
          </div>

        </div>
      </div>
    </div>
    <!------------------------ End Contact Us--------------------------------->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>