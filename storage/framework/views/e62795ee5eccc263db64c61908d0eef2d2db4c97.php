 
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
      <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(asset('img/profile/'. Auth::user()->photo)); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Manage Website</li>
            <li>
                <a href="/">
                    <i class="fa fa-home"></i> <span>Preview Site</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/siteAdmin/add/addSlider"><i class="fa fa-circle-o"></i> Add </a></li>
                    <li><a href="/siteAdmin/show/slider"><i class="fa fa-circle"></i> Show / Edit </a></li>

                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera-retro"></i>
                    <span>Trip Slider</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/siteAdmin/add/addTripSlider"><i class="fa fa-circle-o"></i> Add </a></li>
                    <li><a href="/siteAdmin/show/tripSlider"><i class="fa fa-circle"></i> Show / Edit </a></li>

                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Category</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/siteAdmin/add/addCategory"><i class="fa fa-circle-o"></i> Add </a></li>
                    <li><a href="/siteAdmin/show/category"><i class="fa fa-circle"></i> Show / Edit </a></li>

                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-map-o"></i>
                    <span>Trip</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/siteAdmin/add/addTrip"><i class="fa fa-circle-o"></i> Add </a></li>
                    <li><a href="/siteAdmin/show/trip"><i class="fa fa-circle"></i> Show / Edit </a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/siteAdmin/add/addUser"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li><a href="/siteAdmin/show/user"><i class="fa fa-circle"></i> Show / Edit  </a></li>

                </ul>
            </li>
           <li>
                <a href="/siteAdmin/contactMsg">
                    <i class="fa fa-envelope"></i> <span>Contact Messages</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/medicalReq">
                    <i class="fa fa-stethoscope"></i> <span>Medical Requests</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/educationalReq">
                    <i class="fa fa-edit"></i> <span>Educational Requests</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/tripReq">
                    <i class="fa fa-plane"></i> <span>Trip Requests</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/planReq">
                    <i class="fa fa-file-text-o"></i> <span>Plan Requests</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/visaReq">
                    <i class="fa fa-globe"></i> <span>Visa Requests</span>
                </a>
            </li>
           <li>
                <a href="/siteAdmin/siteSettings">
                    <i class="fa fa-cogs"></i> <span>Site Settings</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>