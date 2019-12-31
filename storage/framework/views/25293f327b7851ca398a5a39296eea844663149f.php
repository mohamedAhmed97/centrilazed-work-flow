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
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link hvr-wobble-vertical" href="/programs  "><?php echo e(trans('app.offers')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-wobble-vertical" href="/about"><?php echo e(trans('app.about')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link hvr-wobble-vertical" href="/contact"><?php echo e(trans('app.contact')); ?></a>
                        </li>
                        <li class="nav-item">
                            <?php if( session('lang') == 'ar'): ?>
                            <a class="nav-link hvr-wobble-vertical" href="/lang/enar">English</a>
                            <?php else: ?>
                            <a class="nav-link hvr-wobble-vertical" href="/lang/ar">Arabic</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>   
            </div>
        </nav>
    </div>
    <!------------------------ End Header ------------------------------------>