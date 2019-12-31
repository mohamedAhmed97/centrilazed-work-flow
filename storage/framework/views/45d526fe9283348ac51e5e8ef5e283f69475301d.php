
<?php $__env->startSection('content'); ?>

<!------------------------ Start Tourist Programs--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1><?php echo e(trans('app.programs')); ?></h1>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3">
                <a href="/trips/<?php echo e($record->id); ?>">
                    <div class="card">
                        <img src="<?php echo e(asset('img/'.$record->img)); ?>" class="card-img-top">
                        <div class="card-body">
                            <h1><?php echo e($record->name); ?></h1>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


    </div>
</div>
<!------------------------ Start Tourist Programs--------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>