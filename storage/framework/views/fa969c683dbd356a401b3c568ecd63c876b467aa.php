<?php if( session('lang') == 'en'): ?>
<?php
$setting = $settingEN;
?>
<?php elseif( session('lang') == 'ar'): ?>
<?php
$setting = $settingAR;
?>
<?php elseif( session('lang') == 'tr'): ?>
<?php
$setting = $settingTR;
?>
<?php elseif( session('lang') == 'ro'): ?>
<?php
$setting = $settingRO;
?>
<?php elseif( session('lang') == 'pr'): ?>
<?php
$setting = $settingPR;
?>
<?php else: ?>
<?php
$setting = $settingEN;
?>
<?php endif; ?>
<!DOCTYPE html>

<?php if( session('lang') == 'ar' || session('lang') == 'pr' ): ?>
<html len="en" dir="rtl">
    
    <?php else: ?>
    <html len="en" dir="ltr">
        <?php endif; ?>
<head>

  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Titel Page -->
  <title><?php echo e(trans('app.brand')); ?></title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
   <link rel="shortcut icon" type="img/png" href="<?php echo e(asset('img/'.$setting->logo)); ?>">
  <?php if( session('lang') == 'ar' || session('lang') == 'pr'): ?>
<link rel="stylesheet" href="<?php echo e(asset('css/rtl.css')); ?>">  
  <?php endif; ?>
  <!-- Fontawesome  -->
  <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">
  <!-- Animation Css -->
  <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
  <!-- Hover Master -->
  <link rel="stylesheet" href="<?php echo e(asset('css/hover-min.css')); ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,700&display=swap" rel="stylesheet">
   <!-- jquery-ui -->
  <link rel="stylesheet" href="<?php echo e(asset('jquery-ui-1.12.1.custom/jquery-ui.min.css')); ?>">
  <!-- Css Link -->
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  <?php if( session('lang') == 'ar' || session('lang') == 'pr'): ?>
  <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/custom-rtl.css')); ?>">  
  <?php endif; ?>

</head>

<body>
    <?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('template.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>