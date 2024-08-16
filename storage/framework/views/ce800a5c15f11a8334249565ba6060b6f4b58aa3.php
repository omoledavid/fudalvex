<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('9e76L63')) {
    $componentId = $_instance->getRenderedChildComponentId('9e76L63');
    $componentTag = $_instance->getRenderedChildComponentTagName('9e76L63');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9e76L63');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('9e76L63', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Users/users.blade.php ENDPATH**/ ?>