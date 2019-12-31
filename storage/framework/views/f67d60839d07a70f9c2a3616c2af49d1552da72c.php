
<?php $__env->startSection('content'); ?>
<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1><?php echo e(trans('app.offers')); ?></h1>
            </div>
        </div>

        <div class="tourist">
            <div class="container">
                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="row wow bounceInDown">
                    <div class="col-md-12">
                        <div class="custom-img-1">
                            <h4 class="titel-pro"><?php echo e($record->name); ?></h4>
                            <a href="/info/<?php echo e($record->id); ?>">
                                <img src="<?php echo e(asset('img/'.$record->img)); ?>" class=" img-thumbnail">
                                <h1><?php echo e($record->name); ?></h1>
                            </a>
                            <a href="/info/<?php echo e($record->id); ?>" class="link-info"><?php echo e(trans('app.more')); ?><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

    </div>
</div>
<!------------------------ Start Medical Tourism--------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>