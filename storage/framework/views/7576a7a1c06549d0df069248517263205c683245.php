 <div class="row">
     <div class="col-lg-6">
         <form method="post" action="<?php echo e(route('theme.update')); ?>" enctype="multipart/form-data" id="themeForm">
             <?php echo csrf_field(); ?>
             <div class="form-row">
                 <div class="form-group col-12">
                     <label>Upload new User dashboard Theme (zip file)</label>
                     <input type="file" name='theme' class="form-control" required>
                     <?php $__errorArgs = ['theme'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                         <span class="text-danger d-block mt-2"><?php echo e($message); ?></span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     <?php if(session()->has('error')): ?>
                         <span class="text-danger d-block mt-2"><?php echo e(session('error')); ?></span>
                     <?php endif; ?>
                 </div>
                 <div class="form-group col-12">
                     <button type="submit" class="px-4 btn btn-primary btn-sm" id="themeBtn">Save</button>
                 </div>
             </div>
         </form>
         <div class="mt-2 d-none" id="loadingTheme">
             <progress max="100"></progress>
             <p>Please wait while the theme is being uploaded, do not refresh this...</p>
         </div>
     </div>
     <div class="col-lg-6">
         <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.choose-theme', [])->html();
} elseif ($_instance->childHasBeenRendered('6dgZlAS')) {
    $componentId = $_instance->getRenderedChildComponentId('6dgZlAS');
    $componentTag = $_instance->getRenderedChildComponentTagName('6dgZlAS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('6dgZlAS');
} else {
    $response = \Livewire\Livewire::mount('admin.choose-theme', []);
    $html = $response->html();
    $_instance->logRenderedChild('6dgZlAS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
     </div>
 </div>
 <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.theme-display', [])->html();
} elseif ($_instance->childHasBeenRendered('TqYutfM')) {
    $componentId = $_instance->getRenderedChildComponentId('TqYutfM');
    $componentTag = $_instance->getRenderedChildComponentTagName('TqYutfM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('TqYutfM');
} else {
    $response = \Livewire\Livewire::mount('admin.theme-display', []);
    $html = $response->html();
    $_instance->logRenderedChild('TqYutfM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Settings/AppSettings/theme.blade.php ENDPATH**/ ?>