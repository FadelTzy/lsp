<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/finaxo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 08:38:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Finaxo - Business and Finance HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Finaxo - Business and Finance HTML5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,500,700%7CMontserrat:500,700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('finaxo/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('finaxo/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('finaxo/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature) -->
    <link rel="stylesheet" href="{{ asset('finaxo/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('finaxo/css/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('finaxo/css/animate/animate.min.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('finaxo/css/style.css') }}" />
    @yield('css')

</head>

<body>

    <x-vheader></x-vheader>

    @yield('content')

    <x-vfooter></x-vfooter>

    <!--=================================
    Back To Top -->
    <div id="back-to-top" class="back-to-top">
        <a href="#"><i class="fas fa-angle-up"></i> </a>
    </div>
    <!--=================================
    Back To Top -->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('finaxo/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('finaxo/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('finaxo/js/counter/jquery.countTo.js') }}"></script>
    <script src="{{ asset('finaxo/js/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/swiperanimation/SwiperAnimation.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/easy-pie-chart/easy-pie-chart.js') }}"></script>
    <script src="{{ asset('finaxo/js/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('finaxo/js/apexcharts/charts.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('finaxo/js/custom.js') }}"></script>
    @stack('js')

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/finaxo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Mar 2022 08:38:32 GMT -->

</html>
