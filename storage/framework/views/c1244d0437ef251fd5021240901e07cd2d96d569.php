<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>T</b>H</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Tour</b>Hana</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">


                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo e(asset('img/profile/'. Auth::user()->photo)); ?>" class="user-image" alt="User Image">
                                <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo e(asset('img/profile/'. Auth::user()->photo)); ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo e(Auth::user()->name); ?>

                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!--<div class="pull-left">-->
                                    <!--  <a href="#" class="btn btn-default btn-flat">Profile</a>-->
                                    <!--</div>-->
                                    <div class="pull-right">
                                        <a class="btn btn-default btn-flat" href="<?php echo e(route('logout')); ?>"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>