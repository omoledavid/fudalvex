@php
    if ($settings->redirect_url != null or !empty($settings->redirect_url)) {
        header("Location: $settings->redirect_url", true, 301);
        exit();
    };
    function formatPhoneNumber($phoneNumber)
{
	$phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

	if (strlen($phoneNumber) > 10) {
		$countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
		$areaCode = substr($phoneNumber, -10, 3);
		$nextThree = substr($phoneNumber, -7, 3);
		$lastFour = substr($phoneNumber, -4, 4);

		$phoneNumber = '+' . $countryCode . ' (' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 10) {
		$areaCode = substr($phoneNumber, 0, 3);
		$nextThree = substr($phoneNumber, 3, 3);
		$lastFour = substr($phoneNumber, 6, 4);

		$phoneNumber = '(' . $areaCode . ') ' . $nextThree . '-' . $lastFour;
	} else if (strlen($phoneNumber) == 7) {
		$nextThree = substr($phoneNumber, 0, 3);
		$lastFour = substr($phoneNumber, 3, 4);

		$phoneNumber = $nextThree . '-' . $lastFour;
	}

	return $phoneNumber;
}

@endphp
@extends('snappy.layouts.header')
@section('title', $settings->site_title)
@section('content')
    @include('snappy.layouts.partials.banner')
    <section class="contact-section contact-section1 section-padding section-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Contact Info Tabs-->
                    <div class="contact-info">
                        <div class="row ">
                            <!-- contact-content Start -->
                            <div class="col-md-4">
                                <div class="contact-content">
                                    <div class="contact-header contact-form">
                                        <h2>Get In Touch</h2>
                                    </div>
                                    <div class="contact-list">
                                        <ul>
{{--                                            <li>--}}
{{--                                                <div class="contact-thumb"><i class="fa fa-map-marker"--}}
{{--                                                                              aria-hidden="true"></i></div>--}}
{{--                                                <div class="contact-text">--}}
{{--                                                    <p>Address:<span>{{$settings->contact_email}}</span></p>--}}
{{--                                                </div>--}}
{{--                                            </li>--}}
                                            <li>
                                                <div class="contact-thumb"><i class="fa fa-phone"
                                                                              aria-hidden="true"></i></div>
                                                <div class="contact-text">
                                                    <p>Call Us
                                                        :<span>{{formatPhoneNumber($settings->phone)}}</span></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="contact-thumb"><i class="fa fa-envelope-o"
                                                                              aria-hidden="true"></i></div>
                                                <div class="contact-text">
                                                    <p>Mail Us :<span>{{$settings->contact_email}}</span></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- contact-content End -->
                            <!--Form Column-->
                            <div class="form-column col-md-8 col-sm-12 ">
                                <!-- Contact Form -->
                                <div class="contact-form ">
                                    <h2>Send Message Us</h2>


                                    <form action="https://indexfxpro.com/contact" method="post">
                                        <input type="hidden" name="_token"
                                               value="F9MnkiYjqwthVhfMvquzLVyu1ykMEMStBvZmWDuR">
                                        <div class="row clearfix">
                                            <div class="col-md-6  col-xs-12 form-group">
                                                <input type="text" name="name" placeholder="Your Name*" required="">
                                            </div>

                                            <div class="col-md-6  col-xs-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address*"
                                                       required="">
                                            </div>

                                            <div class=" col-md-12   form-group">
                                                <textarea name="message" placeholder="Your Message..."></textarea>
                                            </div>

                                            <div class=" col-md-12 form-group">
                                                <button class="theme-btn btn-style-one" type="submit"
                                                        name="submit-form">Send Message
                                                </button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <!--End Comment Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
