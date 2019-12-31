<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add User
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/user' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >E-Mail</label>
                                <input name="mail" type="mail" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input name="phone" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Photo</label>
                                <input name="img" class="form-control" type="file" >
                            </div>

                            <div class="form-group">
                                <label >Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender"  value="1" checked> Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender"  value="0">Female
                                    </label>
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <input name="deleted" value="0"  type="hidden" >
                            <div class="box-footer">
                                <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>         <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>