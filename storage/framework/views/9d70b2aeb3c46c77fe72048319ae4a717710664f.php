<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Category
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/category' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="lang" type="hidden" value="1">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 ar">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/category' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >الأسم</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>الصورة</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="lang" type="hidden" value="2">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="أضف" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>         <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>