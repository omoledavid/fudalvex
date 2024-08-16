<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->site_name }} | @yield('title')</title>
    <link rel="icon" href="{{ asset('storage/' . $settings->favicon) }}" type="image/png" />

    <script src="unpkg.com/metaapi.cloud-sdk/index.js"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('dash/js/plugin/webfont/webfont.min.js') }}"></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('dash/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/fonts.min.css') }}">
    @php
        $theme = $settings->website_theme == 'blue.css' ? 'atlantis.min.css' : $settings->website_theme;
    @endphp
    <link rel="stylesheet" href="{{ asset('dash/css/' . $theme) }}">
    <link rel="stylesheet" href="{{ asset('dash/css/customs.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/css/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.datatables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }} "></script>
    <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
    <script>
        // Add your client ID and secret
        var PAYPAL_CLIENT = '{{ $settings->pp_ci }}';
        var PAYPAL_SECRET = '{{ $settings->pp_cs }}';
        // Point your server to the PayPal API
        var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
    </script>
    <script src="https://www.paypal.com/sdk/js?client-id={{ $settings->pp_ci }}"></script>
    @section('styles')
    @show
    @livewireStyles
</head>

<body data-background-color="light">
    <script>
        {!! $settings->tawk_to !!}
    </script>
    <div class="wrapper">
        @include('millage.user.topmenu')
        @include('millage.user.sidebar')

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="text-center row copyright text-align-center">
                        <p>All Rights Reserved &copy; {{ $settings->site_name }} {{ date('Y') }}</p> <br>
                        @if ($settings->google_translate == 'on')
                            <div class="text-center">
                                <div id="google_translate_element"></div>
                            </div>
                        @endif
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script src="{{ asset('dash/js/core/jquery.3.2.1.min.js')}} "></script> --}}
    <script src="{{ asset('dash/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('dash/js/core/bootstrap.min.js') }} "></script>
    <!-- jQuery UI -->
    <script src="{{ asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <!-- jQuery Scrollbar -->
    <script src="{{ asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }} "></script>
    <!-- jQuery Sparkline -->
    <script src="{{ asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }} "></script>
    <!-- Sweet Alert -->
    <script src="{{ asset('dash/js/plugin/sweetalert/sweetalert.min.js') }} "></script>
    <!-- Bootstrap Notify -->
    <script src="{{ asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }} "></script>

    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs4/dt-1.10.21/af-2.3.5/b-1.6.3/b-flash-1.6.3/b-html5-1.6.3/b-print-1.6.3/r-2.2.5/datatables.min.js">
    </script>
    <script src="{{ asset('themes/purposeTheme/assets/js/scriptfile.js') }}"></script>
    <script src="{{ asset('dash/js/atlantis.min.js') }}"></script>
    <script src="{{ asset('dash/js/atlantis.js') }}"></script>

    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    @section('scripts')
    @show
    @livewireScripts
</body>

</html>
