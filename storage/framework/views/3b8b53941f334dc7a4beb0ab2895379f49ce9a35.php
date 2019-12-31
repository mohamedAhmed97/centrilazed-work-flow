<?php $__env->startSection('content'); ?>

<!------------------------ Start Medical Tourism--------------------------------->
<div class="tourist-programs">
    <div class="container">
        <div class="tourism-section">
            <div class="titel-style text-center">
                <h1><?php echo e(trans('app.Educational & Medical Tourist')); ?></h1>
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
                    <img src="img/m1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('app.Educational Tourism')); ?></h5>
                        <form class="form-edit" action="/eduReq" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?> *" required/>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?> *" required/>
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.email')); ?> *" />
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="major" class="form-control" placeholder="<?php echo e(trans('app.major')); ?> *" required/>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="country" class="form-control" placeholder="<?php echo e(trans('app.nationalty')); ?>" />
                                </div>

                                <div class="col">
                                    <input type="text" name="from" class="form-control" placeholder="<?php echo e(trans('app.from')); ?>" />
                                </div>
                                <div class="col">
                                    <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.to')); ?>" />
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="notes"  cols="30" rows="3"  placeholder="<?php echo e(trans('app.notes')); ?>"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-info btn-block"><?php echo e(trans('app.send')); ?></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card text-center">
                    <img src="img/m2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e(trans('app.Medical Tourism')); ?> </h5>
                        <form class="form-edit" action="/medReq" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="text" name="name" class="form-control" placeholder="<?php echo e(trans('app.name')); ?> *" required/>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="phone" class="form-control" placeholder="<?php echo e(trans('app.phone')); ?> *" required/>
                                </div>

                                <div class="col-sm-12">
                                    <input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('app.email')); ?> *" />
                                </div>

                                <div class="col-sm-12">
                                    <select name="treatment" class="form-control" required>
                                        <option value=""><?php echo e(trans('app.treatment')); ?> *</option>
                                        <option value="Cosmetic treatment"><?php echo e(trans('app.Cosmetic')); ?></option>
                                        <option value="Organic treatment"><?php echo e(trans('app.Organic')); ?></option>
                                        <option value="Physical treatment"><?php echo e(trans('app.Physical')); ?></option>
                                    </select>
                                </div>

                                <div class="col-sm-12">
                                    <input type="text" name="country" class="form-control" placeholder="<?php echo e(trans('app.nationalty')); ?>" />
                                </div>

                                <div class="col">
                                    <input type="text" name="from" class="form-control" placeholder="<?php echo e(trans('app.from')); ?>" />
                                </div>
                                <div class="col">
                                    <input type="text" name="to" class="form-control" placeholder="<?php echo e(trans('app.to')); ?>" />
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control" name="notes"  cols="30" rows="3"  placeholder="<?php echo e(trans('app.notes')); ?>"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-info btn-block"><?php echo e(trans('app.send')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!------------------------ Start Medical Tourism--------------------------------->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>