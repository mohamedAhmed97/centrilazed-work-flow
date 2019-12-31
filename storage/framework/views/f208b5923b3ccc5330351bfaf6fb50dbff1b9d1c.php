<?php $__env->startSection('content'); ?>

<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1><?php echo e(trans('app.visa')); ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <img src="<?php echo e(asset('img/visa11.png')); ?>" class="card-img-top" />
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
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('app.visa')); ?></h5>
                        <form class="form-edit" action="/visaReq" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?> *" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?> *" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.mail')); ?> *"  />
                                </div>

                                <div class="col-sm-12">
                                    <input type="number" name="adults" class="form-control" placeholder="<?php echo e(trans('app.individuals')); ?> *" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="number" name="children" class="form-control" placeholder="<?php echo e(trans('app.children')); ?> *" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="startdate" class="form-control" placeholder="<?php echo e(trans('app.startdate')); ?> *" id="datepicker" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="enddate" class="form-control" placeholder="<?php echo e(trans('app.enddate')); ?> *" id="datepicker2" required />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="state" class="form-control" placeholder="<?php echo e(trans('app.gotocountry')); ?> *" required />
                                </div>
                                
                                <div class="col-sm-12">
                                    <input type="text" name="cities" class="form-control" placeholder="<?php echo e(trans('app.nationalty')); ?> *" required />
                                </div>
                                
                                <div class="col-sm-12">
                                    <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.location')); ?> *" required />
                                </div>

                            </div>
                            <input type="submit" class="btn btn-outline-info btn-block"
                                   value=" <?php echo e(trans('app.send')); ?>"   />
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="text-center">
                    <img src="img/visa.png" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>