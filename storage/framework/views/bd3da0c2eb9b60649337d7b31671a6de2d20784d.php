<div class="row">
    <div class="col-md-12">
        <h4>Configuration</h4>
        <hr>
    </div>
    <div class="col-md-12">
        <form action="javascript:void(0)" method="POST" id="emailform">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class=" form-row">
                <div class="form-group col-md-12">
                    <div class="">
                        <h5 class="">Mail Server</h5>
                        <div class="selectgroup">
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="sendmailserver" value="sendmail"
                                    class="selectgroup-input" checked="">
                                <span class="selectgroup-button">Sendmail</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="server" id="smtpserver" value="smtp"
                                    class="selectgroup-input">
                                <span class="selectgroup-button">SMTP</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="">Email From</h5>
                    <input type="email" name="emailfrom" class="form-control  " value="<?php echo e($settings->emailfrom); ?>"
                        required>
                </div>
                <div class="form-group col-md-6">
                    <h5 class="">Email From Name</h5>
                    <input type="text" name="emailfromname" class="form-control  "
                        value="<?php echo e($settings->emailfromname); ?>" required>
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="">SMTP Host</h5>
                    <input type="text" name="smtp_host" class="form-control   smtpinput"
                        value="<?php echo e($settings->smtp_host); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="">SMPT Port</h5>
                    <input type="text" name="smtp_port" class="form-control   smtpinput"
                        value="<?php echo e($settings->smtp_port); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="">SMPT Encryption</h5>
                    <input type="text" name="smtp_encrypt" class="form-control   smtpinput"
                        value="<?php echo e($settings->smtp_encrypt); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="">SMPT Username</h5>
                    <input type="text" name="smtp_user" class="form-control   smtpinput"
                        value="<?php echo e($settings->smtp_user); ?>">
                </div>
                <div class="form-group col-md-6 smtp d-none">
                    <h5 class="">SMPT Password</h5>
                    <input type="text" name="smtp_password" class="form-control   smtpinput"
                        value="<?php echo e($settings->smtp_password); ?>">
                </div>
            </div>
            <hr>

















































        </form>
    </div>
</div>


<?php if($settings->mail_server == 'sendmail'): ?>
    <script>
        document.getElementById("sendmailserver").checked = true;
    </script>
<?php else: ?>
    <script>
        document.getElementById("smtpserver").checked = true;
    </script>
<?php endif; ?>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/admin/Settings/AppSettings/email.blade.php ENDPATH**/ ?>