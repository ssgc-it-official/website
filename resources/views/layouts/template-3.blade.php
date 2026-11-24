<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
          content="A modern and responsive construction website template built for construction, interior design, handyman, plumber, renovation and maintenance businesses. Clean design, fast performance and SEO optimized for professional service websites.">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.svg') }}">
    <title>
        {{ filled($title ?? null) ? $title.' - '.config('app.name', 'Laravel') : config('app.name', 'Laravel') }}
    </title>

    <link rel="preload" as="style"
          href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900&display=swap"
          onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900&display=swap"
          onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900&display=swap">
    </noscript>

    <!-- fontawesome css -->
    <link rel="preload" href="{{ asset('assets/css/plugins/fontawesome.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/swiper.css') }}" as="style" onload="this.rel='stylesheet'">
    <!-- <link rel="preload" href="{{ asset('assets/css/plugins/aos.css') }}" as="style" onload="this.rel='stylesheet'"> -->
    <link rel="preload" href="{{ asset('assets/css/plugins/unicons.css') }}" as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/metismenu.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/magnific-popup.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/hover-revel.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/timepickers.min.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" href="{{ asset('assets/css/plugins/odometer.css') }}" as="style" onload="this.rel='stylesheet'">
    <!-- bootstrap css -->
    <link rel="preload" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" as="style"
          onload="this.rel='stylesheet'">
    <link rel="preload" as="image" href="{{ asset('assets/images/service/breadcrumb.webp') }}">

    <style>
        .slider-img-seven {
            background: url('{{ asset('assets/images/banner/12.webp') }}');
        }
    </style>

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body class="home-inner home-green">

<!-- Header Start -->
<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<!-- header srea start -->
<header class="header-one header-seven inner header--sticky header-sticky-smooth">
    <div class="bg_header-top-inner">
        <x-header-topbar/>
    </div>
    <!-- header style hear -->
    <div class="header-main header-main-2">
        <div class="row">
            <div class="col-lg-12">
                <div class="header-mid-one-wrapper wrapper-two">
                    <div class="logo-area shape-none">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('assets/images/logo/02.svg') }}" alt="logo">
                        </a>
                    </div>
                    <div class="nav-area">
                        <ul class="mainmenu">
                            @forelse($navItems as $item)
                                @include('partials.navbar-item', ['item' => $item])
                            @empty
                                <li class="nav-item">
                                    <a href="#" class="nav-link text-muted">No items published &mdash; Click to add</a>
                                </li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="header-right">
                        <!-- single map area -->
                        <div class="cart-search-area">

                            <a class="search-btn hover-bg-light" href="#canvasSearch" data-bs-toggle="offcanvas">
                                <img src="{{ asset('assets/images/shop/search.svg') }}" alt="">
                            </a>
                            <a href="javascript:void(0)" class="cart-btn cart cart-icon hover-bg-light">
                                <img src="{{ asset('assets/images/shop/cart.svg') }}" alt="">
                                <span class="bg-green">2</span>
                            </a>
                            <div class="dot-btn hover-bg-light">
                                    <span class="offcanvas-trigger">
                                            <span class="offcanvas-bars">
                                                <span></span>
                                    <span></span>
                                    <span></span>
                                    </span>
                                    </span>
                            </div>
                        </div>
                        <div class="single-component">
                            <a href="contact.html" class="tmp-btn btn-primary button-flip btn-sm">
                                <span data-text="Contact Us">Contact Us</span>
                            </a>
                            <div class="menu-area d-xl-none d-block" id="menu-btn">
                                <div class="icon radius-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16" viewBox="0 0 18 16"
                                         fill="none">
                                        <rect width="18" height="2" fill="#0C0A0A"></rect>
                                        <rect y="7" width="18" height="2" fill="#0C0A0A"></rect>
                                        <rect y="14" width="18" height="2" fill="#0C0A0A"></rect>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- single map area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header style hearm end -->
</header>
<!-- header srea end -->

<!-- Header End -->

{{ $slot }}

<x-footer/>
