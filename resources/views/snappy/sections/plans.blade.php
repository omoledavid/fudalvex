<section class="section-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center section-padding padding-bottom-0 wow slideInLeft"
                     data-wow-duration="2s">
                    <div class="section-header">
                        <h2>Our awesome <span> plans</span></h2>
                        <p class="icon-norb"><img src="{{ asset('storage/' . $settings->favicon) }}"
                                                  style="position: inherit;z-index: 1; width: 4rem;" alt="icon"></p>
                    </div>
                    <p>Select An Investment Package And Join Thousands Of Investors Already On The Platform To Start
                        Earning</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($plans as $plan)
                <div class="col-md-3 col-sm-6 pricing-list-botom-margin wow zoomIn" data-wow-duration="3s">
                    <!-- Pricing  List1 Start -->
                    <div class="pricing-list1">
                        <div class="pricing-header1">
                            <h5>{{ $plan->name }}</h5>
                            <p>Minimum return {{ $plan->minr }} %</p>
                            <p>Maximum return {{ $plan->maxr }} %</p>
                        </div>
                        <div class="price-range">
                            <div class="row">
                                <div class="col-md-6 text-left col-sm-6 col-xs-6">
                                    <div class="min-price">
                                        <h6>Minimum<span
                                                class="color-text">{{ $settings->currency }}{{ $plan->min_price }} </span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right col-sm-6 col-xs-6">
                                    <div class="min-price">
                                        <h6>Maximum<span
                                                class="color-text">{{ $settings->currency }}{{ $plan->max_price }}</span>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="plan_id" value="1">
                        <div class="price-range">
                            <div class="row">
                                <a style="width: 100%; white-space: normal;" href="{{url('/login')}}"
                                   class="btn btn-primary">START INVESTING NOW</a>
                            </div>
                        </div>

                        <!--<a href="pricing-list.html">Order Now!</a>-->
                    </div>
                    <!-- Pricing List1 End -->
                </div>
            @endforeach
        </div>
    </div>
</section>
