<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Trips
        </h1>

    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>                                    
                                    <th>location</th>                                    
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
                                <tr>
                                    <td><?php echo e($record->name); ?> </td>
                                    <td><?php echo e($record->location); ?> </td>
                                    <td><a data-toggle="modal" data-target="#modal-default<?php echo e($record->id); ?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="/delete/trip/<?php echo e($record->id); ?> "><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
                                            <form role="form" action='/edit/trip' method="post" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label >Name</label>
                                                        <input name="name" type="text" class="form-control"value="<?php echo e($record->name); ?> " >
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Location</label>
                                                        <input name="location" type="text" class="form-control" value="<?php echo e($record->location); ?> ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Category</label>
                                                        <select class="form-control"  name="cat_id">
                                                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($record->cat_id == $cat->id ): ?>
                                                            <option selected value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                                            <?php else: ?>
                                                            <option value="<?php echo e($cat->id); ?>"><?php echo e($cat->name); ?></option>
                                                            <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Text</label>
                                                        <textarea name="text"  class="form-control textarea" ><?php echo $record->details; ?> </textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Image</label>
                                                        <input  class="form-control" name="img" type="file" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label >Discount</label>
                                                        <?php if($record->discount == 1): ?>
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
                                                        <?php else: ?>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="discount"  value="1" > Has Discount
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input type="radio" name="discount" checked value="0">No Discount
                                                            </label>
                                                        </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <input type="hidden" value="<?php echo e($record->id); ?>" name="id">
                                                <!-- /.box-body -->
                                                <div class="box-footer">
                                                    <input type="submit" value="Save" class="btn btn-primary" name="upload" />
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