<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($settings->site_name); ?> | <?php echo $__env->yieldContent('title'); ?></title>
    <!--Favicon add-->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('storage/' . $settings->favicon)); ?> ">
    <!--bootstrap Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!--font-awesome Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- Lightcase  Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/lightcase.css')); ?>" rel="stylesheet">
    <!--WOW Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/animate.min.css')); ?>" rel="stylesheet">
    <!--Slick Slider Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/slick.css')); ?>" rel="stylesheet">
    <!--Slick Nav Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/slicknav.min.css')); ?>" rel="stylesheet">
    <!--Swiper  Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/swiper.min.css')); ?>" rel="stylesheet">
    <!--Style Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/style.css')); ?>" rel="stylesheet">
    <!-- Theam Color Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/css/color048704870487.css?color=ea0117')); ?>" rel="stylesheet">
    <!--Responsive Css-->
    <link href="<?php echo e(asset('themes/snappyTheme/assets/front/css/responsive.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('themes/snappyTheme/assets/css/ion.rangeSlider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/snappyTheme/assets/css/ranger-style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('themes/snappyTheme/assets/css/ion.rangeSlider.skinFlat.css')); ?>">
    <style>
        .price-table {
            margin-bottom: 45px;
        }
    </style>
    <script src="<?php echo e(asset('themes/snappyTheme/assets/js/jquery.min.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('themes/snappyTheme/assets/front/2/css/style.css')); ?>">

</head>

<body data-spy="scroll">
<!-- Start Pre-Loader-->

<!-- <div id="preloader">
    <div data-loader="circle-side"></div>
</div> -->
<!-- End Preload -->
<div class="animation-element">
    <!-- End Pre-Loader -->
    <!--support bar  top start-->


    <div class="support-bar-top wow slideInLeft" data-wow-duration="2s" id="raindrops-green">


        <!-- Header start -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <a href="mailto:<?php echo e($settings->contact_email); ?>">
                            <i class="fa fa-envelope email" aria-hidden="true"></i> <?php echo e($settings->contact_email); ?>

                        </a>
                        <a href="tel:<?php echo e($settings->phone); ?>"> <i class="fa fa-phone" aria-hidden="true"></i> <?php echo e($settings->phone); ?></a>
                    </div>
                </div>

                <div class="container" style="max-width: 100%; padding: 0;">
                    <div
                        style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
                        <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                            <iframe
                                src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=light&amp;pref_coin_id=1505&amp;invert_hover="
                                width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0"
                                frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center bounceIn">
                    <div class="contact-admin">
                        <a href="<?php echo e(url('/login')); ?>"><i class="fa fa-user"></i> LOGIN </a>
                        <a href="<?php echo e(url('/register')); ?>"><i class="fa fa-user-plus"></i> REGISTER</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->
        <?php //include('whatsapp.php') ?>
    </div>
</div>

<!--support bar  top end-->
<!--main menu section start-->
<nav class="main-menu wow slideInRight" data-wow-duration="2s">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <a href="./">
                        <img src="<?php echo e(asset('storage/' . $settings->logo)); ?>">
                    </a>
                </div>
            </div>
            <div class="col-md-9 text-right">
                <ul id="header-menu" class="header-navigation">
                    <?php echo $__env->make('snappy.layouts.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!--main menu section end-->
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('snappy.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/layouts/header.blade.php ENDPATH**/ ?>