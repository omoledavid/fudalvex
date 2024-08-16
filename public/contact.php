<?php include('home/partials/header.php') ?>
<section class="wow fadeIn no-padding main-slider height-100 mobile-height cover-background" style="background: url('asset/images/cover_aapl.jpg'); background-repeat: no-repeat">
    <div class="opacity-full-dark bg-footer-2"></div>
    <div class="container full-screen position-relative">
        <div class="slider-typography text-left">
            <div class="slider-text-middle-main">
                <div class="slider-text-middle">
                    <div class="col-lg-10 col-md-10 col-sm-10 center-col text-center">
                        <h2 class="alt-font text-white font-weight-600 letter-spacing-minus-1 text-extra-dark-gray">Customer Service Center</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 center-col margin-eight-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="cf-message alt-font font-weight-600 text-extra-dark-gray text-uppercase">Contact Customer Service</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-sm-10 col-xs-10 center-col last-paragraph-no-margin padding-60px-top padding-60px-bottom">
                <center>
                    <p class="alert alert-primary" style="background-color: #fdfdfd; font-size: 2.5rem">Message Received</p>
                </center>
                <form action="#" method="post" id="modal-details">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="success-project-contact-form" class="no-margin-lr"></div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" id="name" placeholder="Name *" class="bg-transparent border-color-extra-dark-gray input-border-bottom" required />
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" id="phone" placeholder="Mobile *" class="border-color-extra-dark-gray input-border-bottom" required />
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="email" id="email" placeholder="E-mail *" class="border-color-extra-dark-gray input-border-bottom" required />
                        </div>
                        <div class="col-md-12">
                            <textarea name="comment" placeholder="Message...." rows="6" class="border-color-extra-dark-gray input-border-bottom" required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <a class="btn btn-black btn-medium popup-with-zoom-anim wow fadeInUp" data-wow-delay="0.6s" href="#modal-popup2">proceed <i class="fa fa-arrow-right text-white"></i></a>
                            <div id="modal-popup2" class="zoom-anim-dialog mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-top-header text-center modal-popup-main text-white padding-50px-all">
                                <span class="text-orange text-uppercase alt-font text-extra-large font-weight-500 margin-15px-bottom display-block">Are you are human?</span>
                                <div class="margin-four text-medium letter-spacing-3 alt-font text-white text-uppercase margin-70px-bottom sm-margin-50px-bottom xs-margin-30px-bottom display-inline-block padding-five-all">96823</div>

                                <button type="submit" name="contactus" class="btn btn-deep-pink md-raised border-radius-2 btn-medium" form="modal-details">Confirm <i class="fa fa-arrow-right text-white"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include('home/partials/footer.php') ?>