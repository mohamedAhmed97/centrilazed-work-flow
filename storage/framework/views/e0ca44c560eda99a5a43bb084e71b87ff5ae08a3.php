<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
        </h1>

    </section>

     <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>                                    
                                    <th>E-Mail</th>                                    
                                    <th>Phone</th>                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <tr>
                                    <td><?php echo e($record->name); ?></td>
                                    <td><?php echo e($record->email); ?></td>
                                    <td><?php echo e($record->phone); ?></td>
                                    <td><a data-toggle="modal" data-target="#modal-default<?php echo e($record->id); ?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                 </td>
                                </tr>

                            <div class="modal fade" id="modal-default<?php echo e($record->id); ?>">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Choose New Image</h4>
                                        </div>


                                        <div class="modal-body">
                                        <form role="form" action='/edit/user' method="post" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label >Name</label>
                                <input name="name" type="text" class="form-control" value="<?php echo e($record->name); ?>">
                            </div>
                            <div class="form-group">
                                <label >E-Mail</label>
                                <input name="mail" type="mail" class="form-control" value="<?php echo e($record->email); ?>">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input name="password" type="password" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <label >Phone</label>
                                <input name="phone" type="text" class="form-control" value="<?php echo e($record->phone); ?>">
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input name="address" type="text" class="form-control"  value="<?php echo e($record->address); ?>">
                            </div>
                            <div class="form-group">
                                <label >Photo</label>
                                <img style="height: 100px;border-radius: 50%" src="<?php echo e(asset('img/profile/'.$record->photo)); ?>" />
                                <input name="img" class="form-control" type="file" >
                            </div>

                            <div class="form-group">
                                <label >Gender</label>
                                <?php if($record->gender == 1): ?>
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
                                <?php else: ?>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender"  value="1" > Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" checked  value="0">Female
                                    </label>
                                </div>

                                <?php endif; ?>
                            </div>
                            <!-- /.box-body -->
                            <input name="deleted" value="0"  type="hidden" >
                            <input name="id" value="<?php echo e($record->id); ?>"  type="hidden" >
                            <div class="box-footer">
                                <input type="submit" value="Submit" class="btn btn-primary" name="upload"/>
                            </div>
                    </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>