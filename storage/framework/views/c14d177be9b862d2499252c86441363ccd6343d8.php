<script src="<?php echo e(asset('js/jquery-3.4.1.min.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 

<!-------------------------- Start Overlay -------------------------->
<div id="bac-body">
    <div id="overlay"></div>
    <!------------------------ Start Header ---------------------------------->
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="/index"><img src="<?php echo e(asset('img/'.$setting->logo)); ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse   navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> 
                            <a class="nav-link hvr-wobble-vertical" href="/programs"><?php echo e(trans('app.offers')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-wobble-vertical" href="/about"><?php echo e(trans('app.about')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-wobble-vertical" href="/contact"><?php echo e(trans('app.contact')); ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <?php echo e(trans('app.lang')); ?>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/lang/en">English</a>
                                <a class="dropdown-item" href="/lang/ar">عربى</a>
                                <a class="dropdown-item" href="/lang/ro">русский</a>
                                <a class="dropdown-item" href="/lang/tr">TÜRKÇE</a>
                                <a class="dropdown-item" href="/lang/pr">فارسی</a>
                               
                            </div>
                        </li>
                  
                    </ul>
                </div>   
            </div>
        </nav>
    </div>
     <!------------------------ End Header ------------------------------------>