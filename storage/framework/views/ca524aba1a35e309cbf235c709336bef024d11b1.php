<section class="sale-section section-padding">
    <div class="container">
        <div class="section-header wow slideInLeft" data-wow-duration="2s">
            <h2 style="color: white;">Our Legitimacy</h2>
            <p class="icon-norb"><img src="<?php echo e(asset('storage/' . $settings->favicon)); ?>" style="position: inherit;z-index: 1; width: 4rem;" alt="icon"></p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card" style="width: 100%; display: flex; flex-direction: row;">
                    <img class="card-img-left" data-toggle="modal" data-target="#cert" src="<?php echo e(asset('themes/snappyTheme/assets/images/certification.jpg')); ?>" alt="Card image cap" style="width: 50%; height: auto; object-fit: cover; margin-right: 1rem;">
                    <div class="card-body">
                        <h5 class="card-title cert">Certified Cryptocurrency Experts</h5>
                        <p class="card-text">As certified cryptocurrency experts, we provide trusted guidance and innovative strategies, ensuring secure and informed decisions in the dynamic world of digital currencies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="width: 100%; display: flex; flex-direction: row;">
                    <img class="card-img-left" data-toggle="modal" data-target="#letter" src="<?php echo e(asset('themes/snappyTheme/assets/images/letter.jpg')); ?>" alt="Card image cap" style="width: 50%; height: auto; object-fit: cover; margin-right: 1rem;">
                    <div class="card-body">
                        <h5 class="card-title cert">Letter of Guarantee</h5>
                        <p class="card-text">A Letter of Guarantee ensures customers receive their profit after investment, providing assurance of timely payment and security within the agreed timeframe.</p>
                    </div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width: 768px) {
                .card {
                    flex-direction: column;
                }
                .card-img-left {
                    width: 100%;
                    margin-right: 0;
                }
                .card-body {
                    padding-top: 1rem;
                }
            }
        </style>

        <!-- certification Modal -->
        <div class="modal fade" id="cert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Certified Cryptocurrency Experts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo e(asset('themes/snappyTheme/assets/images/certification.jpg')); ?>"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div><!-- certification Modal -->
        <div class="modal fade" id="letter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Letter of Guarantee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="<?php echo e(asset('themes/snappyTheme/assets/images/letter.jpg')); ?>"/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\Users\David\Documents\Personal\work\broker\resources\views/snappy/sections/certification.blade.php ENDPATH**/ ?>