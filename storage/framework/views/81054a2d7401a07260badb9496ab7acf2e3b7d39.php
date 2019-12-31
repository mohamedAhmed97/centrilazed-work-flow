 

<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Plan Trip Request
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
                                    <th>Mobile</th>
                                    <th>Mail</th>
                                    <th>Adults</th>
                                    <th>Children</th>
                                    <th>Budget </th>
                                    <th>Date / Time </th>
                                    <th>States </th>
                                    <th>Cities </th>
                                    <th>Location </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($record->name); ?></td>
                                    <td><?php echo e($record->mobile); ?></td>
                                    <td><?php echo e($record->mail); ?></td>
                                    <td><?php echo e($record->adults); ?></td>
                                    <td><?php echo e($record->children); ?></td>
                                    <td><?php echo e($record->budget_from . " : " .$record->budget_to); ?></td>  
                                    <td><?php echo $record->start_date . " <br> " .$record->end_date; ?></td>  
                                    <td><?php echo e($record->state); ?></td>
                                    <td><?php echo e($record->cites); ?></td>
                                    <td><?php echo e($record->location); ?></td>

                                </tr>
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