<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Add Trip
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-4">
                english
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/trip' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control"  name="cat_id">
                                       <?php $__currentLoopData = $catsen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Text</label>
                                <textarea name="text"  class="form-control textarea" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label >Discount</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="1" checked> Has Discount
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="0">No Discount
                                    </label>
                                </div>
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
            <div class="col-md-4">
                Turkish
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/trip' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control"  name="cat_id">
                                       <?php $__currentLoopData = $catstr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Text</label>
                                <textarea name="text"  class="form-control textarea" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label >Discount</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="1" checked> Has Discount
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="0">No Discount
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="lang" type="hidden" value="3">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                russian
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/trip' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control"  name="cat_id">
                                       <?php $__currentLoopData = $catsru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Text</label>
                                <textarea name="text"  class="form-control textarea" ></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label >Discount</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="1" checked> Has Discount
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="0">No Discount
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="lang" type="hidden" value="4">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 ar">
                عربى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/trip' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >الأسم</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >المكان</label>
                                <input name="location" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label > القسم</label>
                                <select class="form-control"  name="cat_id">
                                      <?php $__currentLoopData = $catsar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >النص</label>
                                <textarea name="text" class="form-control textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label >خصم</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="1" checked> يوجد خصم
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="0">لا يوجد خصم 
                                    </label>
                                </div>
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
            <div class="col-md-6 ar">
                فارسى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/add/trip' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label > Category</label>
                                <select class="form-control"  name="cat_id">
                                      <?php $__currentLoopData = $catspr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="text" class="form-control textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input  class="form-control" name="img" type="file" >
                            </div>
                            <div class="form-group">
                                <label >Offer</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="1" checked> يوجد خصم
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="discount"  value="0">لا يوجد خصم 
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="lang" type="hidden" value="5">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>         <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>