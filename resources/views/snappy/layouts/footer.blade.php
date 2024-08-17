<footer id="contact" class="footer-area">
    <!--footer area start-->
    <div class="footer-bottom">
        <div class="footer-support-bar">
            <!-- Footer Support List Start -->
            <div class="footer-support-list">
                <ul>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="footer-thumb"><i class="fa fa-headphones"></i></div>
                        <div class="footer-content">
                            <p>24/7 Customer Support</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="2s">
                        <div class="footer-thumb"><i class="fa fa-envelope"></i></div>
                        <div class="footer-content">
                            <p><a href="contact.php">{{ $settings->contact_email }}</a></p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="3s">
                        <div class="footer-thumb"><i class="fa fa-comments-o"></i></div>
                        <div class="footer-content">
                            <p>Friendly Support Ticket</p>
                        </div>
                    </li>
                    <li class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="4s">
                        <div class="footer-thumb"><i class="fa fa-phone"></i></div>
                        <div class="footer-content">
                            <p>{{ $settings->phone }}</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Footer Support End -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 wow fadeInLeft" data-wow-duration="3s">
                    <p class="copyright-text">

                    </p>
                </div>
                <div class="col-md-4 col-sm-9 wow bounceInDown" data-wow-duration="3s">
                    <p class="copyright-text">
                        © Copyright 2012 -
                        <script>
                            document.write(new Date().getFullYear());
                        </script> {{ $settings->site_name }}. All right reserved
                    </p>
                </div>
                <div class="col-md-4 col-sm-3 wow fadeInRight" data-wow-duration="3s">

                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="scroll-top back-to-top" data-original-title="" title="">
        <i class="fa fa-angle-up"></i>
    </div>
</footer>



<style type="text/css">
    li.export-main {
        visibility: hidden;
    }
</style>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A') }} "></script>
<!--jquery script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery.js') }} "></script>

<script src="{{ asset('themes/snappyTheme/assets/front/js/bootstrap.min.js') }} "></script>
<!-- Gmap Load Here -->
<script src="{{ asset('themes/snappyTheme/assets/front/js/gmaps.js') }} "></script>
<!-- Map Js File Load -->
<script src="{{ asset('themes/snappyTheme/assets/front/js/map-script048704870487.html?color=ea0117') }} "></script>
<!-- Highlight script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/highlight.min.js') }} "></script>
<!--Jquery Ui Slider script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery-ui-slider.min.js') }} "></script>
<!--Circleful Js File Load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery.circliful.js') }} "></script>
<!--CounterUp script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery.counterup.min.js') }} "></script>
<!-- Ripples  script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery.ripples-min.js') }} "></script>
<!--Slick Nav Js File Load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/jquery.slicknav.min.js') }} "></script>
<!--Lightcase Js File Load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/lightcase.js') }} "></script>
<!--particle Js File Load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/particles.min.js') }} "></script>
<!--particle custom Js File Load-->
{{--<script src="{{ asset('themes/snappyTheme/assets/front/js/particles-custom.js') }} "></script>--}}
<script>
    particlesJS('particles-js',

        {
            "particles": {
                "number": {
                    "value": 150,
                    "density": {
                        "enable": true,
                        "value_area": 800
                    }
                },
                "color": {
                    "value": "#77b047"
                },
                "shape": {
                    "type": "image",
                    "stroke": {
                        "width": 0,
                        "color": "#77b047"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "{{ asset('storage/' . $settings->favicon) }}",

                        "width": 300,
                        "height": 300
                    }
                },
                "opacity": {
                    "value": 0.9,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                        "enable": false,
                        "rotateX": 600,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 80,
                        "duration": 2,
                        "opacity": 8,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true,
            "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
            }
        }

    );
</script>
<!--RainDrops script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/raindrops.js') }} "></script>
<!--Easing script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/easing-min.js') }} "></script>
<!--Slick Slider Js File Load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/slick.min.js') }} "></script>
<!--Swiper script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/swiper.min.js') }} "></script>
<!--WOW script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/wow.min.js') }} "></script>
<!--WayPoints script load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/waypoints.min.js') }} "></script>
<script type="text/javascript" src="{{ asset('themes/snappyTheme/assets/js/ion.rangeSlider.js') }} "></script>
<script type="text/javascript">
    $(window).load(function() {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();
    });
</script>
<!--Main js file load-->
<script src="{{ asset('themes/snappyTheme/assets/front/js/main.js') }} "></script>

<script src="{{ asset('themes/snappyTheme/assets/front/2/js/main.js') }} "></script>
<!--swal alert message-->

<!--end swal alert message-->
@include('snappy.layouts.partials.flashNotification')
    <!-- GetButton.io widget -->

<!-- /GetButton.io widget -->

</body>

</html>
