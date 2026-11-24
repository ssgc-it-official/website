<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A modern and responsive construction website template built for construction, interior design, handyman, plumber, renovation and maintenance businesses. Clean design, fast performance and SEO optimized for professional service websites.">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.svg') }}">

    <title>Sui Southern Gas Company Ltd.</title>

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900&amp;display=swap" onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900&amp;display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900&amp;display=swap">
    </noscript>

    <!-- Font Awesome CSS -->
    <link rel="preload" href="{{ asset('assets/css/plugins/fontawesome.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/swiper.css') }}" as="style" onload="this.rel='stylesheet'">
    <!-- <link rel="preload" href="{{ asset('assets/css/plugins/aos.css') }}" as="style" onload="this.rel='stylesheet'"> -->
    <link rel="preload" href="{{ asset('assets/css/plugins/unicons.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/metismenu.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/hover-revel.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/timepickers.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/odometer.css') }}" as="style" onload="this.rel='stylesheet'">

    <!-- Bootstrap CSS -->
    <link rel="preload" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" as="image" href="{{ asset('assets/images/banner/12.webp') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>



<body class="home-five home-green">

@yield('content')

<!-- jQuery JS -->
<script src="{{ asset('assets/js/plugins/jquery-3.7.1.min.js') }}" defer></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/vendor/jqueryui.js') }}" defer></script>

<!-- Swiper JS -->
<script src="{{ asset('assets/js/plugins/swiper.js') }}" defer></script>

<!-- MetisMenu JS -->
<script src="{{ asset('assets/js/plugins/metismenu.js') }}" defer></script>

<!-- Waypoint JS -->
<script src="{{ asset('assets/js/vendor/waypoint.js') }}" defer></script>

<!-- WAW -->
<script src="{{ asset('assets/js/vendor/waw.js') }}" defer></script>

<!-- Magnific Popup JS -->
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}" defer></script>

<!-- SAL Animation -->
<script src="{{ asset('assets/js/vendor/sal.min.js') }}" defer></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}" defer></script>

<!-- Contact Form JS -->
<script src="{{ asset('assets/js/plugins/contact-form.js') }}" defer></script>

<!-- Smooth Scroll JS -->
<script src="{{ asset('assets/js/plugins/smooth-scroll.js') }}" defer></script>

<!-- GSAP JS -->
<!--
<script src="{{ asset('assets/js/plugins/gsap.min.js') }}" defer></script>
<script src="{{ asset('assets/js/plugins/scrolltigger.js') }}" defer></script>
<script src="{{ asset('assets/js/plugins/split-text.js') }}" defer></script>
-->

<!-- Scroll Parallax JS -->
<script src="{{ asset('assets/js/plugins/scroll-paralax.js') }}" defer></script>

<!-- Odometer JS -->
<script src="{{ asset('assets/js/plugins/odometer.js') }}" defer></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}" defer></script>

<!-- Header Style Two End -->

</body>
</html>
