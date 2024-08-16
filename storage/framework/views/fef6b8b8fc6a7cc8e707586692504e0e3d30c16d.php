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
                    Privacy and policy
                </div>
                <div><br></div>
                <div class="col-md-12">
                    <?php echo $terms->description; ?>

                </div>
            </div>
        </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('snappy.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/privacy.blade.php ENDPATH**/ ?>