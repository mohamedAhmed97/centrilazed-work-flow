<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Edit Settings
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordEN->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordEN->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordEN->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordEN->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordEN->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordEN->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordEN->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordEN->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordEN->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordEN->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordEN->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordEN->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordEN->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordEN->whatsapp); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="1">
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
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                          <div class="box-body">
                            <div class="form-group">
                                <label >الهاتف</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordEN->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >الفاكس</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordEN->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label >البريد الإليكترونى</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordEN->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >نبذة</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordEN->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label >فريق العمل</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordEN->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >العنوان</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordEN->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >الموقع</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordEN->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >اللوجو</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordEN->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordEN->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordEN->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordEN->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordEN->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordEN->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordEN->whatsapp); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="2">
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