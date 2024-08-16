<div>
    <div class="row">
        <div class="col-12">

            <h3 class="text-info">This section describes how you want to use your website.</h3>
            <form action="">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center" wire:loading wire:target='updateModule'>
                        <progress max="100"></progress>
                        <p class="m-0">Loading, please wait...</p>
                    </div>
                    <div class="mt-4 col-md-6">
                        <h5 class="">Investment:</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="investment"
                                    wire:click="updateModule('investment','true')"
                                    <?php echo e($mod['investment'] == 'true' ? 'checked' : ''); ?>>
                                <span class="selectgroup-button">Enabled</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="investment"
                                    wire:click="updateModule('investment','false')"
                                    <?php echo e($mod['investment'] == 'false' ? '' : 'checked'); ?>>
                                <span class="selectgroup-button">Disabled</span>
                            </label>
                        </div>
                        <div class="mt-2 pr-3">
                            <small class="">All features relating to user investment will be
                                displayed on user dashboard(buying of plan and earning profit etc..).</small>
                        </div>
                    </div>

                    <div class="mt-4 col-md-6">
                        <h5 class="">Crypto Swap:</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="cryptoswap"
                                    wire:click="updateModule('cryptoswap','true')"
                                    <?php echo e($mod['cryptoswap'] ? 'checked' : ''); ?>>
                                <span class="selectgroup-button">Enabled</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" class="selectgroup-input" name="cryptoswap"
                                    wire:click="updateModule('cryptoswap','false')"
                                    <?php echo e($mod['cryptoswap'] ? '' : 'checked'); ?>>
                                <span class="selectgroup-button">Disabled</span>
                            </label>
                        </div>
                        <div class="mt-2">
                            <small class="">If enabled, the system will display all
                                functionalities about crypto swapping on user dashboard.</small>
                        </div>
                    </div>















































                    



















                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/livewire/admin/software-module.blade.php ENDPATH**/ ?>