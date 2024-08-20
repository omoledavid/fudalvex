<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.plans.system-plans', [])->html();
} elseif ($_instance->childHasBeenRendered('WdpSqIH')) {
    $componentId = $_instance->getRenderedChildComponentId('WdpSqIH');
    $componentTag = $_instance->getRenderedChildComponentTagName('WdpSqIH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('WdpSqIH');
} else {
    $response = \Livewire\Livewire::mount('admin.plans.system-plans', []);
    $html = $response->html();
    $_instance->logRenderedChild('WdpSqIH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Plans/plans.blade.php ENDPATH**/ ?>