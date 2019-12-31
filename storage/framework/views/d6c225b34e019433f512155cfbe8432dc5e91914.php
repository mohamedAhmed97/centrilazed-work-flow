

    <!------------------------ Start Footer --------------------------------->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <a href="/">
              <img src="<?php echo e(asset('img/'.$setting->logo)); ?>">
            </a>
          </div>

          <div class="col-md-3">
            <div class="footer-info">
              <?php echo e(str_limit($setting->intro,200)); ?>

            </div>
          </div>

          <div class="col-md-3">
            <div class="footer-info">
              <ul>
                <li><i class="fa fa-phone"></i> <a href="tel:<?php echo e($setting->phone); ?>"><?php echo e($setting->phone); ?></a> </li>
                <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo e($setting->mail); ?>"><?php echo e($setting->mail); ?></a> </li>
                <li><i class="fa fa-map-marker"></i> <a href="<?php echo e($setting->location); ?>"><?php echo e($setting->address); ?></a> </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="footer-info footer-info-icon">
              <ul>
                <li><a href=" https://wa.me/<?php echo e($setting->whatsapp); ?>"><i class="fa fa-whatsapp"></i></a></li>
                      <li><a href=" <?php echo e($setting->instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                      <li><a href=" <?php echo e($setting->facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                      <li><a href=" <?php echo e($setting->twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                      <li><a href=" <?php echo e($setting->snapchat); ?>"><i class="fa fa-snapchat-ghost"></i></a></li>
                      <li><a href="mailto:<?php echo e($setting->mail); ?>"><i class="fa fa-envelope"></i></a></li>
                      <li><a href=" <?php echo e($setting->vk); ?>"><i class="fa fa-vk"></i></a></li>
                      <li><a href=" <?php echo e($setting->youtube); ?>"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!------------------------ End Footer --------------------------------->
  </div>
  <!-------------------------- End Overlay -------------------------->

<!-- jQuery For Bootstrap -->
  <script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
  <!-- Popper.js -->
  <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
  <!-- Bootstrap Js -->
  <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <!-- WOW JS -->
  <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
  <script>
    new WOW().init();
  </script>
  <!-- Js Src -->
  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>

</html>