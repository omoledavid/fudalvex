<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };

?>

<?php $__env->startSection('title', $settings->site_title); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('snappy.layouts.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo e($settings->site_name); ?> is an online investment platform focused on cryptocurrency and forex trading (currency pairs). Cryptocurrency and forex trading presents you with financial opportunities, more than you can imagine and we've created a platform to help you realize
                    that imagination.
                </div>
                <div><br></div>
                <div class="col-md-12">We provide you with top-rated investment opportunity in cryptocurrency and forex trading that is made possible by our highly skilled analysts and traders. We are confident in our ability to deliver as we have promised. There are no risks
                    involved as we properly and meticulously analyze our investments and ensure that they yield profit, which for our customers, means, there are no risks for you. We keep a secure, safe and stable trading environment that is implemented
                    to guard against losses and provide a soothing and easy-going environment for our customers.
                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('snappy.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/about.blade.php ENDPATH**/ ?>