<?php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };
   function formatPhoneNumber($phoneNumber)
{
	$phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

	if (strlen($phoneNumber) > 10) {
		$countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
		$areaCode = substr($phoneNumber, -10, 3);
		$nextThree = substr($phoneNumber, -7, 3);
		$lastFour = substr($phoneNumber, -4, 4);

		$phoneNumber = '+' . $countryCode . ' (' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 10) {
		$areaCode = substr($phoneNumber, 0, 3);
		$nextThree = substr($phoneNumber, 3, 3);
		$lastFour = substr($phoneNumber, 6, 4);

		$phoneNumber = '(' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 7) {
		$nextThree = substr($phoneNumber, 0, 3);
		$lastFour = substr($phoneNumber, 3, 4);

		$phoneNumber = $nextThree . '-' . $lastFour;
	}

	return $phoneNumber;
}

?>

<?php $__env->startSection('title', $settings->site_title); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('snappy.sections.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.accessAccount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.howItWorks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.aboutUs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.ourServices', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.topStocks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.plans', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.marketAnalysis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.referer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.topInvestors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.counter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.testimonies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.marketChart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('snappy.sections.paymentMethod', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('snappy.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/index.blade.php ENDPATH**/ ?>