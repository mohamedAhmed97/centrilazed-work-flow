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
            <div class="col-md-4">
                english
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
              <div class="col-md-4">
                  turkish
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordTR->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordTR->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordTR->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordTR->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordTR->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordTR->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordTR->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordTR->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordTR->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordTR->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordTR->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordTR->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordTR->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordTR->whatsapp); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="3">
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
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordRO->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordRO->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label >Mail</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordRO->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordRO->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label >About Team</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordRO->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordRO->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordRO->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordRO->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordRO->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordRO->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordRO->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordRO->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordRO->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordRO->whatsapp); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="4">
                        <input name="lang" type="hidden" value="4">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6 ">
                فارسى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                          <div class="box-body">
                            <div class="form-group">
                                <label >Phone</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordPR->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >Fax</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordPR->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label > Email</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordPR->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >Intro</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordPR->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label > TEam</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordPR->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordPR->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >Location</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordPR->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >Logo</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordPR->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordPR->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordPR->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordPR->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordPR->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordPR->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordPR->whatsapp); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <input name="id" type="hidden" value="5">
                        <input name="lang" type="hidden" value="5">
                        <input name="deleted" value="0"  type="hidden" >
                        <div class="box-footer">
                            <input type="submit" value="أضف" class="btn btn-primary" name="upload"/>
                        </div>
                    </form>
                </div>
            </div>
             <div class="col-md-6 ar">
                 عربى
                <!-- general form elements -->
                <div class="box box-primary">
                    <form role="form" action='/edit/setting' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                          <div class="box-body">
                            <div class="form-group">
                                <label >الهاتف</label>
                                <input class="form-control" type="text" name="phone" value="<?php echo e($recordAR->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >الفاكس</label>
                                <input class="form-control" type="text" name="fax" value="<?php echo e($recordAR->fax); ?>">
                            </div>
                            <div class="form-group">
                                <label >البريد الإليكترونى</label>
                                <input name="email" type="mail" class="form-control" value="<?php echo e($recordAR->mail); ?>">
                            </div>
                            <div class="form-group">
                                <label >نبذة</label>
                                <textarea name="intro"  class="form-control textarea" ><?php echo $recordAR->intro; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label >فريق العمل</label>
                                <textarea name="team"  class="form-control textarea" ><?php echo $recordAR->team; ?></textarea>
                            </div>
                          <div class="form-group">
                                <label >العنوان</label>
                                <input name="address" type="text" class="form-control" value="<?php echo e($recordAR->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >الموقع</label>
                                <input name="location" type="text" class="form-control" value="<?php echo e($recordAR->location); ?>">
                            </div>
                            <div class="form-group">
                                <label >اللوجو</label>
                                <input name="img" type="file" class="form-control" >
                            </div>             
                           <div class="form-group">
                                <label >Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="<?php echo e($recordAR->facebook); ?>">
                            </div>
                           <div class="form-group">
                                <label >Instegram</label>
                                <input class="form-control" type="text" name="instegram" value="<?php echo e($recordAR->instegram); ?>">
                            </div>
                           <div class="form-group">
                                <label >Twitter</label>
                                <input class="form-control" type="text" name="twitter" value="<?php echo e($recordAR->twitter); ?>">
                            </div>
                           <div class="form-group">
                                <label >Youtube</label>
                                <input class="form-control" type="text" name="youtube" value="<?php echo e($recordAR->youtube); ?>">
                            </div>
                           <div class="form-group">
                                <label >VK</label>
                                <input class="form-control" type="text" name="vk" value="<?php echo e($recordAR->vk); ?>">
                            </div>
                           <div class="form-group">
                                <label >Snapchat</label>
                                <input class="form-control" type="text" name="snapchat" value="<?php echo e($recordAR->snapchat); ?>">
                            </div>  
                           <div class="form-group">
                                <label >Whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" value="<?php echo e($recordAR->whatsapp); ?>">
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