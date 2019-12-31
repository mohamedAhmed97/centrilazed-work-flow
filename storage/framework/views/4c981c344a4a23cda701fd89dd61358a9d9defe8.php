<?php $__env->startSection('content'); ?>

<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1><?php echo e($cat->name); ?></h1>
            </div>
        </div>

        <?php if($message = Session::get('success')): ?>
        <script >
            $(function () {
                Swal.fire({
                    type: 'success',
                    title: '<?php echo e(trans('app.thanks')); ?>',
                    showConfirmButton: false,
                    timer: 2500
                })
            });
        </script>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('app.please enter your data')); ?></h5>
                        <form class="form-edit" action="/planReq" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?> *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?> *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.email')); ?> *">
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="adults" class="form-control" placeholder="<?php echo e(trans('app.individuals')); ?> *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="children" class="form-control" placeholder="<?php echo e(trans('app.children')); ?> *" required>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="startdate" class="form-control" placeholder="<?php echo e(trans('app.startdate')); ?> *" id="datepicker" required />
                                    </div>

                    <div class="col-sm-12">
                        <input type="text" name="enddate" class="form-control" placeholder="<?php echo e(trans('app.enddate')); ?> *" id="datepicker2" required />
                                        </div>

                                        <div class="col-sm-12">
                                            <input type="text" name="state" class="form-control" placeholder="<?php echo e(trans('app.country')); ?> *" required>
                                        </div>

                                        <div class="col-sm-12">
                                            <input type="text" name="cities" class="form-control" placeholder="<?php echo e(trans('app.cities')); ?>" >
                                        </div>


                                        <div class="col">
                                            <input type="text" name="from" class="form-control" placeholder="<?php echo e(trans('app.from')); ?>">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.to')); ?>">
                                        </div>


                                    </div>
                                    <input type="submit" class="btn btn-outline-info btn-block"
                                           value=" <?php echo e(trans('app.send')); ?>" />
                                    </form>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e(trans('app.resdyprograms')); ?></h5>
                            </div>
                        </div>
                        <div class="img-hover">
                            <ul>
                                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="imageContainer">
                                    <div class="trip-info">
                                        <h4><?php echo e($record->name); ?></h4>
                                        <a href="/info/<?php echo e($record->id); ?>" class="badge badge-info"><?php echo e($record->location); ?></a>
                                    </div>
                                    <img src="<?php echo e(asset('img/'.$record->img)); ?>">
                                    <a href="/info/<?php echo e($record->id); ?>" class="overlayText">
                                        <?php echo e($record->name); ?>

                                    </a>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!------------------------ Start Medical Tourism--------------------------------->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>