<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-3 d-inline">
        <h1 class="title1 d-inline mr-4">App Settings</h1>
    </div>
    <?php if (isset($component)) { $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Alert::class, []); ?>
<?php $component->withName('admin.alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e)): ?>
<?php $component = $__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e; ?>
<?php unset($__componentOriginal431821226313d25f12c6b9e5d4f97b7033ed596e); ?>
<?php endif; ?>
    <?php if(count($errors) > 0): ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" clsass="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <i class="fa fa-warning"></i> <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="mt-2 mb-5 row">
        <div class="col-12">
            <div class="card p-md-5 p-2 shadow-lg ">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#module" class="nav-link active" data-toggle="tab">Modules</a>
                    </li>
                    <li class="nav-item">
                        <a href="#info" class="nav-link " data-toggle="tab">Website Information</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pref" class="nav-link" data-toggle="tab">Preference</a>
                    </li>
                    <li class="nav-item">
                        <a href="#email" class="nav-link" data-toggle="tab">Email</a>
                    </li>
                    <li class="nav-item">
                        <a href="#display" class="nav-link" data-toggle="tab">Theme/Display</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="module">
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.software-module', [])->html();
} elseif ($_instance->childHasBeenRendered('k1RDomM')) {
    $componentId = $_instance->getRenderedChildComponentId('k1RDomM');
    $componentTag = $_instance->getRenderedChildComponentTagName('k1RDomM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('k1RDomM');
} else {
    $response = \Livewire\Livewire::mount('admin.software-module', []);
    $html = $response->html();
    $_instance->logRenderedChild('k1RDomM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    </div>
                    <div class="tab-pane fade" id="info">
                        <?php echo $__env->make('admin.Settings.AppSettings.webinfo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="tab-pane fade" id="pref">
                        <?php echo $__env->make('admin.Settings.AppSettings.webpreference', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="tab-pane fade" id="email">
                        <?php echo $__env->make('admin.Settings.AppSettings.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="tab-pane fade" id='display'>
                        <?php echo $__env->make('admin.Settings.AppSettings.theme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('#updatepreference').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "<?php echo e(route('updatepreference')); ?>",
                type: 'POST',
                data: $('#updatepreference').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },

            });
        });
    </script>
    <script>
        $('.select2').select2();
        document.getElementById("themeForm").addEventListener('submit', function() {
            document.getElementById("themeBtn").disabled = true;
            var element = document.getElementById("loadingTheme");
            element.classList.remove("d-none");
        });

        function changecurr() {
            var e = document.getElementById("select_c");
            var selected = e.options[e.selectedIndex].id;
            document.getElementById("s_c").value = selected;
            console.log(selected);
        }
    </script>
    <script>
        let sendmail = document.querySelector('#sendmailserver');
        let smtp = document.querySelector('#smtpserver');
        let smtptext = document.querySelectorAll('.smtp');
        //console.log(sendmail);
        sendmail.addEventListener('click', sortform);
        smtp.addEventListener('click', sortform);

        if (smtp.checked) {
            smtptext.forEach(smtps => {
                smtps.classList.remove('d-none');
                smtps.setAttribute('required', '');
            });
        }

        function sortform() {
            if (sendmail.checked) {
                smtptext.forEach(element => {
                    element.classList.add('d-none');
                    element.removeAttribute('required', '');
                });
            }
            if (smtp.checked) {
                smtptext.forEach(smtps => {
                    smtps.classList.remove('d-none');
                    smtps.setAttribute('required', '');
                });
            }
        }

        // Submit email preference form
        $('#emailform').on('submit', function() {
            //alert('love');
            $.ajax({
                url: "<?php echo e(route('updateemailpreference')); ?>",
                type: 'POST',
                data: $('#emailform').serialize(),
                success: function(response) {
                    if (response.status === 200) {
                        $.notify({
                            // options
                            icon: 'flaticon-alarm-1',
                            title: 'Success',
                            message: response.success,
                        }, {
                            // settings
                            type: 'success',
                            allow_dismiss: true,
                            newest_on_top: false,
                            placement: {
                                from: "top",
                                align: "right"
                            },
                            offset: 20,
                            spacing: 10,
                            z_index: 1031,
                            delay: 5000,
                            timer: 1000,
                            animate: {
                                enter: 'animated fadeInDown',
                                exit: 'animated fadeOutUp'
                            },

                        });
                    } else {

                    }
                },
                error: function(error) {
                    console.log(error);
                },
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Settings/AppSettings/show.blade.php ENDPATH**/ ?>