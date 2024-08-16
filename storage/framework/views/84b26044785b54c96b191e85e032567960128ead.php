<?php $__env->startSection('content'); ?>
    <div class="mt-2 mb-4">
        <h1 class="title1 ">Crypto swap Settings</h1>
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
    <div class="mb-5 row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <form action="<?php echo e(route('exchangefee')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class=" form-group">
                                <h5 class="">Exchange Fee</h5>
                                <input type="text" name="fee" value="<?php echo e($moresettings->fee); ?>" class=" form-control "
                                    id="">
                            </div>
                            <?php if($settings->currency != '$'): ?>
                                <div class=" form-group">
                                    <h5 class=""><?php echo e($settings->s_currency); ?>/USD Rate</h5>
                                    <input type="number" name="rate" value="<?php echo e($moresettings->currency_rate); ?>"
                                        step=".0" class=" form-control " placeholder="450">
                                    <small class="">This rate will be used to calculate your users crypto
                                        equivilent in your chosen currency.</small>
                                </div>
                            <?php endif; ?>
                            <div class=" form-group text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3">
                        <div class=" table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                    <tr>
                                        <th scope="col">Asset Name</th>
                                        <th scope="col">Asset Symbol</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php echo $__env->make('admin.Settings.Crypto.assets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <small class="">Be sure that non of your users have balances greater than 0 in
                                thier asset account before you disable the asset.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $('#cryptoyes').on('click', function() {
            // let truevalue = $('#cryptoyes').val()
            let uurl = "<?php echo e(url('admin/dashboard/useexchange')); ?>" + '/' + 'true';
            $.ajax({
                url: uurl,
                type: 'GET',

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

        $('#cryptono').on('click', function() {
            // let truevalue = $('#cryptoyes').val()
            let uurl = "<?php echo e(url('admin/dashboard/useexchange')); ?>" + '/' + 'false';
            $.ajax({
                url: uurl,
                type: 'GET',

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Settings/Crypto/pageview.blade.php ENDPATH**/ ?>