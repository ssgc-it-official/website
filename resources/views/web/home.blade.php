@extends('layouts.homepage')
@section('content')
    <!-- Header Start -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <!-- header srea start -->
    <header class="header-one header-four header--sticky header-sticky-smooth">
        <!-- header top -->
        <div class="header-top overflow-visible">
            <div class="container-header">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-wrapper">
                            <!-- left area header top -->
                            <div class="left">
                                <!-- single map area -->
                                <div class="single-component info-con">
                                    <div class="icon">
                                        <i class="fal fa-clock"></i>
                                    </div>
                                    <div class="info">
                                        <span>Sun - Fri (9:00 - 5:00)</span>
                                    </div>
                                </div>
                                <!-- single map area -->
                                <!-- single map area -->
                                <div class="single-component info-con">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="info">
                                        <span><a href="call-to_00449922299.html">1199</a></span>
                                    </div>
                                </div>
                                <!-- single map area -->
                                <!-- single map area -->
                                <div class="single-component info-con">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <span>ST-4/B, Sir Shah Suleman Road</span>
                                    </div>
                                </div>
                                <!-- single map area -->
                            </div>
                            <!-- right area strat -->
                            <div class="right">
                                <ul class="social-wrapper-1 hover-bg-white">
                                    <li class="single"><a target="_blank" href="https://www.facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://x.com/"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://www.instagram.com/"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class="single"><a target="_blank" href="https://dribbble.com/"><i
                                                 class="fal fa-globe"></i></a></li>
                                </ul>

                                <div class="header-info ml--10">
                                    <ul class="tmp-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <img class="left-image" src="assets/images/others/en-us.png"
                                                     alt="Language Images">
                                                <span class="menu-item">English</span>
                                                <i class="right-icon fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="assets/images/others/fr.png"
                                                             alt="Language Images">
                                                        <span class="menu-item">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="left-image" src="assets/images/others/de.png"
                                                             alt="Language Images">
                                                        <span class="menu-item">Deutsch</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="header-info ml--5">
                                    <ul class="tmp-dropdown-menu switcher-language">
                                        <li class="has-child-menu">
                                            <a href="#">
                                                <span class="menu-item">USD</span>
                                                <i class="right-icon fa-solid fa-chevron-down"></i>
                                            </a>
                                            <ul class="sub-menu hover-reverse">
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">EUR</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-item">GBP</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header bottom -->
        <!-- header style hear -->
        <div class="header-main header-main-2">
            <div class="container-3">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-mid-one-wrapper wrapper-two">
                            <div class="logo-area">
                                <a href="index.html">
                                    <img src="assets/images/logo/02-main.svg" alt="logo">
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
                                <div class="cart-search-area">
                                    <!-- <a href="javascript:void(0)" class="cart-btn cart cart-icon hover-bg-light">
                                    <img src="assets/images/shop/cart.svg" alt="">
                                    <span class="bg-green">2</span>
                                </a> -->
                                    <a class="search-btn hover-bg-  light" href="#canvasSearch"
                                       data-bs-toggle="offcanvas">
                                        <img src="{{ asset('assets/images/shop/search.svg') }}" alt="">
                                    </a>
                                    <div class="dot-btn hover-bg-light">
                                        <!-- <img src="assets/images/shop/dot.svg" alt=""> -->
                                        <span class="offcanvas-trigger">
                                        <span class="offcanvas-bars">
                                            <span></span>
                                        <span></span>
                                        <span></span>
                                        </span>
                                        </span>
                                    </div>
                                </div>
                                <!-- single map area -->
                                <div class="single-component">
                                    <a href="{{ route('login') }}" wire:navigate class="tmp-btn btn-primary button-flip btn-sm">
                                        <span data-text="Get Started">Get Started</span>
                                    </a>
                                    <div class="menu-area d-block" id="menu-btn">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                                 viewBox="0 0 18 16" fill="none">
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
        </div>
        <!-- header style hearm end -->
    </header>
    <!-- header srea end -->


    <!-- Header End -->

    <!-- Banner Area Start -->
    <section class="tmp-banner-slider-area banner-five pagination-controler">
        <div class="swiper thumbBannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-five-main-wrapper banner-style-default bg-style slider-img-seven">
                        <div class="container-3">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="banner-three-wrapper pt--200">
                                        <span class="b_one-pre cw">
                                            Fueling Growth, Powering the Future
                                        </span>
                                        <h1 class="title-banner cw">
                                            Sui Southern <br> Gas Company Ltd.
                                        </h1>
                                        <p class="desc cw">We embrace innovative energy technologies and sustainable practices to deliver safe, reliable, and efficient gas solutions while building a cleaner, more sustainable future.</p>
                                        <div class="button-area-banner">
                                            <a href="contact.html" class="tmp-btn btn-primary hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Get Started</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                            <a href="contact.html"
                                               class="tmp-btn btn-border-white btn-border hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Buy Now</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="author-rating-area">
                                            <div class="author">
                                                <ul>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="0"><img
                                                            src="assets/images/banner/author-01.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="0"><img
                                                            src="assets/images/banner/author-02.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="0"><img
                                                            src="assets/images/banner/author-03.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="0"><img
                                                            src="assets/images/banner/author-04.webp" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="star-rating">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <p class="text cw">5.5K Review</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="warm"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-five-main-wrapper banner-style-default bg-style slider-img-ten">
                        <div class="container-3">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="banner-three-wrapper pt--200">
                                        <span class="b_one-pre cw">
                                            Innovate, Grow, and Transform Your World
                                        </span>
                                        <h1 class="title-banner cw">
                                            Building the Future With Confidence
                                        </h1>
                                        <p class="desc cw">Solar panels produce clean energy that emits no greenhouse
                                            gases or pollutants. This means cleaner air and a healthier environment.</p>
                                        <div class="button-area-banner">
                                            <a href="contact.html" class="tmp-btn btn-primary hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Get Started</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                            <a href="contact.html"
                                               class="tmp-btn btn-border-white btn-border hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Buy Now</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="author-rating-area">
                                            <div class="author">
                                                <ul>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                            src="assets/images/banner/author-01.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                            src="assets/images/banner/author-02.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                            src="assets/images/banner/author-03.webp" alt=""></li>
                                                    <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                            src="assets/images/banner/author-04.webp" alt=""></li>
                                                </ul>
                                            </div>
                                            <div class="star-rating">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <p class="text cw">5.5K Review</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="warm"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-five-main-wrapper banner-style-default bg-style slider-img-nine">
                        <div class="container-3">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="banner-three-wrapper pt--200">
                                        <span class="b_one-pre cw">
                                            Innovate, Grow, and Transform Your World
                                        </span>
                                        <h1 class="title-banner cw">
                                            Crafting Durable Spaces Innovation
                                        </h1>
                                        <p class="desc cw">Solar panels produce clean energy that emits no greenhouse
                                            gases or pollutants. This means cleaner air and a healthier environment.</p>
                                        <div class="button-area-banner">
                                            <a href="contact.html" class="tmp-btn btn-primary hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Get Started</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                            <a href="contact.html"
                                               class="tmp-btn btn-border-white btn-border hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Buy Now</span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="author-rating-area">
                                            <div class="author">
                                                <div class="author">
                                                    <ul>
                                                        <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                                src="assets/images/banner/author-01.webp" alt=""></li>
                                                        <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                                src="assets/images/banner/author-02.webp" alt=""></li>
                                                        <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                                src="assets/images/banner/author-03.webp" alt=""></li>
                                                        <li class="avatar" data-tooltip="John Jordan" tabindex="2"><img
                                                                src="assets/images/banner/author-04.webp" alt=""></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="star-rating">
                                                <ul>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <p class="text cw">5.5K Review</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="warm"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination-area2">
            <div class="container position-relative">
                <div class="banner-blog-thumbs">
                    <div class="swiper SlideThumb">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="banner-single-thumb">
                                    <div class="icon">
                                        <img src="assets/images/banner/icon-07.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Long-Term Guarantee</h2>
                                        <p>We offer durable service with a guarantee for years.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-single-thumb">
                                    <div class="icon">
                                        <img src="assets/images/banner/icon-08.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Fast & Easy Service</h2>
                                        <p>Our construction process is quick, and user-friendly.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="banner-single-thumb">
                                    <div class="icon">
                                        <img src="assets/images/banner/icon-09.svg" alt="">
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Quality You Can Trust</h2>
                                        <p>We ensure strong materials and lasting structure.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination tmp-swiper-dot dot-color-white dot-transparent"></div>
    </section>
    <!-- Banner Area End -->

    <!-- tmp footer area start -->
    <div class="tmp-footer-area footer-one footer-bg pt--200 mt--120">
        <div class="container-3">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="main-footer-one-area six pt--80 pb--60">

                        <!-- Company -->
                        <div class="single-footer-inner company">
                            <div class="body two">
                                <h3 class="footer-title">
                                    Company
                                    <img src="assets/images/footer/line-2.svg" alt="">
                                </h3>
                                <div class="use-full-link-wrapper">
                                    <a href="about.html" class="single hover-moving-primary">
                                        About Company
                                    </a>
                                    <a href="service.html" class="single hover-moving-primary">
                                        Services
                                    </a>
                                    <a href="clients.html" class="single hover-moving-primary">
                                        Our Projects
                                    </a>
                                    <a href="contact.html" class="single hover-moving-primary">
                                        Contact Info
                                    </a>
                                    <a href="pricing.html" class="single hover-moving-primary">
                                        Project Pricing
                                    </a>
                                    <a href="gallery.html" class="single hover-moving-primary">
                                        Work Gallery
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Services -->
                        <div class="single-footer-inner service">
                            <div class="body three">
                                <h3 class="footer-title">
                                    Services
                                    <img src="assets/images/footer/line-2.svg" alt="">
                                </h3>
                                <div class="use-full-link-wrapper">
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Structural Planning
                                    </a>
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Building Design
                                    </a>
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Project Documentation
                                    </a>
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Site Construction
                                    </a>
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Repair & Renovation
                                    </a>
                                    <a href="service-details.html" class="single hover-moving-primary">
                                        Quality Inspection
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div class="single-footer-inner contact">
                            <div class="body four">
                                <h3 class="footer-title">
                                    Need Help?
                                    <img src="assets/images/footer/line-2.svg" alt="">
                                </h3>
                                <div class="contactus-link-wrapper">
                                    <div class="single d-block">
                                        <p class="text">Call Us Directly</p>
                                        <div class="phone">
                                            <p>Phone:</p>
                                            <a href="call-to_254982156213.html" class="number hover-moving-primary">
                                                +254 (98) 2156 213
                                            </a>
                                        </div>
                                    </div>
                                    <div class="single d-block">
                                        <p class="text">Need Support?</p>
                                        <div class="phone">
                                            <p>Email:</p>
                                            <a href="mail-to_help%40constx.com.html"
                                               class="number hover-moving-primary">
                                                support@constx.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter -->
                        <div class="single-footer-inner newsletter">
                            <div class="body five">
                                <h3 class="footer-title">
                                    Subscribe Now
                                    <img src="assets/images/footer/line-2.svg" alt="">
                                </h3>
                                <div class="newsletter-area">
                                    <p class="desc mb--20">
                                        Subscribe for construction updates, project insights and industry news.
                                    </p>
                                    <form action="#" class="form">
                                        <div class="single-input-wrapper">
                                            <input type="email" name="email" placeholder="Enter your email" required>
                                            <button type="submit" class="form-btn tmp-btn btn-primary"
                                                    aria-label="Subscribe"><i class="fal fa-envelope"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Logo Area -->
                        <div class="single-footer-inner logo-area">
                            <div class="body one">
                                <div class="logo mb--25">
                                    <a href="index.html">
                                        <img src="assets/images/logo/02-main.svg" alt="">
                                    </a>
                                </div>
                                <p class="desc mb--10">
                                    We build strong, safe and innovative structures built to last.
                                </p>

                                <div class="social-share-wrapper-1 style-footer">
                                    <ul class="social-stylle-one justify-content-start mt--20">
                                        <li><a target="_blank" href="https://www.facebook.com/"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li><a target="_blank" href="https://x.com/"><i
                                                    class="fa-brands fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="https://www.instagram.com/"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                        <li><a target="_blank" href="https://www.linkedin.com/"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a target="_blank" href="https://www.tiktok.com/"><i
                                                    class="fa-brands fa-tiktok"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="copyright-area-one cg">
            <div class="container-3">
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="wrapper text-start">
                            <p>© Copyright
                                <span id="year"></span>
                                by <a class="hover-moving-primary" target="_blank"
                                      href="https://themeforest.net/user/inversweb">InversWeb</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="copyright-links">
                            <li>
                                <a class="hover-moving-primary" href="privacy-policy.html">Privacy policy</a>
                            </li>
                            <li>
                                <a class="hover-moving-primary" href="terms-condition.html">Terms and Condition</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tmp footer area end -->

    <!-- header style two -->

    <!-- side bar for desktop -->
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu" aria-label="close"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk d-none d-xl-block">
            <div class="thumbnail">
                <img src="assets/images/banner/04.webp" alt="elevate">
            </div>
            <div class="inner-content">
                <h4 class="title">We Build Building and Great Constructive Homes.</h4>
                <p class="disc">
                    We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly
                    master new technologies.
                </p>
                <div class="footer">
                    <h4 class="title">Got a project in mind?</h4>
                    <a href="contact.html" class="tmp-btn btn-seconday">Let's talk</a>
                </div>
            </div>
        </div>

        <!-- mobile menu area start -->
        <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu" id="mobile-menu-active">
                    <li class="has-droupdown">
                        <a href="#" class="main">Home</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="index.html">Construction Company</a></li>
                            <li><a class="mobile-menu-link" href="index-two.html">Renovation</a></li>

                            <li><a class="mobile-menu-link" href="index-three.html">Construction Service</a></li>
                            <li><a class="mobile-menu-link" href="index-four.html">Elevate Construction</a></li>
                            <li><a class="mobile-menu-link" href="index-five.html">Construction</a></li>
                            <li><a class="mobile-menu-link" href="index-six.html">Demo Construction</a></li>
                            <li><a class="mobile-menu-link" href="index-seven.html">Construction Shop </a></li>
                            <li><a class="mobile-menu-link" href="index-eight.html">Eco Build</a></li>
                            <li><a class="mobile-menu-link" href="index-nine.html">Building</a></li>
                            <li><a class="mobile-menu-link" href="index-ten.html">Horizon Constructions</a></li>


                            <li><a class="mobile-menu-link" href="index-eleven.html">Renovation Two</a></li>
                            <li><a class="mobile-menu-link" href="index-twelve.html">Factory Demo </a></li>
                            <li><a class="mobile-menu-link" href="index-thirteen.html">Renovation & Remodeling</a></li>
                            <li><a class="mobile-menu-link" href="index-fourteen.html">Architecture & Interior</a></li>
                            <li><a class="mobile-menu-link" href="index-fifteen.html">Construction Video</a></li>
                            <li><a class="mobile-menu-link" href="index-sixteen.html">Engineering Service</a></li>
                            <li><a class="mobile-menu-link" href="index-seventeen.html">Handyman Workshop</a></li>
                            <li><a class="mobile-menu-link" href="index-eighteen.html">Industrial Demo</a></li>
                            <li><a class="mobile-menu-link" href="index-nineteen.html">Investor Demo</a></li>
                            <li><a class="mobile-menu-link" href="index-twenty.html">Carpenter Demo</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Pages</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="about.html">About</a></li>
                            <li><a class="mobile-menu-link" href="service.html">Service</a></li>
                            <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                            <li><a class="mobile-menu-link" href="pricing.html">Pricing</a></li>
                            <li><a class="mobile-menu-link" href="application.html">Application</a></li>
                            <li><a class="mobile-menu-link" href="working-process.html">Working Process</a></li>
                            <li><a class="mobile-menu-link" href="safety.html">Safety</a></li>
                            <li><a class="mobile-menu-link" href="company-history.html">Company History</a></li>
                            <li><a class="mobile-menu-link" href="company-value.html">Company Value</a></li>
                            <li><a class="mobile-menu-link" href="gallery.html">Company Gallery</a></li>
                            <li><a class="mobile-menu-link" href="career.html">Career</a></li>
                            <li><a class="mobile-menu-link" href="career-details.html">Career Details</a></li>
                            <li><a class="mobile-menu-link" href="our-vision.html">Our Vision</a></li>
                            <li><a class="mobile-menu-link" href="clients.html">Our Clients</a></li>
                            <li><a class="mobile-menu-link" href="team.html">Team One</a></li>
                            <li><a class="mobile-menu-link" href="team-two.html">Team Two</a></li>
                            <li><a class="mobile-menu-link" href="team-three.html">Team Three</a></li>
                            <li><a class="mobile-menu-link" href="team-four.html">Team Four</a></li>
                            <li><a class="mobile-menu-link" href="team-details.html">Team Details</a></li>
                            <li><a class="mobile-menu-link" href="office-branch.html">Our Office Branch</a></li>
                            <li><a class="mobile-menu-link" href="award.html">Awards</a></li>
                            <li><a class="mobile-menu-link" href="shop.html">Shop</a></li>
                            <li><a class="mobile-menu-link" href="shop-details.html">Shop Details</a></li>
                            <li><a class="mobile-menu-link" href="cart.html">Cart</a></li>
                            <li><a class="mobile-menu-link" href="checkout.html">Checkout</a></li>
                            <li><a class="mobile-menu-link" href="sustainability.html">Sustainability</a></li>
                            <li><a class="mobile-menu-link" href="coming-soon.html">Coming Soon</a></li>
                            <li><a class="mobile-menu-link" href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Services</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="service.html">Service Default</a></li>
                            <li><a class="mobile-menu-link" href="service-two.html">Service Two Swiper</a></li>
                            <li><a class="mobile-menu-link" href="service-three.html">Service Card Style</a></li>
                            <li><a class="mobile-menu-link" href="service-three-four.html">Service Style Four</a></li>
                            <li><a class="mobile-menu-link" href="service-five.html">Service Swiper Flow</a></li>
                            <li><a class="mobile-menu-link" href="service-six.html">Service Style Fluid</a></li>

                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Service Details</a>
                                <ul class="submenu-third-lvl mm-collapse">

                                    <li><a class="mobile-menu-link" href="service-details.html">Service Details</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-two.html">Service Details
                                            Two</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-slide.html">Service Details
                                            Slide</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-gallery.html">Service Details
                                            Gallery</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-video.html">Service Details
                                            Video</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-popup-video.html">Style Video
                                            Popup</a></li>
                                    <li><a class="mobile-menu-link" href="service-details-classic.html">Style Classic
                                            <span class="invers-badge-card">Hot</span></a></li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Project</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="portfolio.html">Project One</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-two.html">Project Two</a></li>
                            <li><a class="mobile-menu-link" href="portfolio-three.html">Project Three</a></li>


                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Project Details</a>
                                <ul class="submenu-third-lvl mm-collapse">

                                    <li><a class="mobile-menu-link" href="portfolio-details.html">Project Details</a>
                                    </li>
                                    <li><a class="mobile-menu-link" href="portfolio-details-2.html">Project Details
                                            Two</a></li>
                                    <li><a class="mobile-menu-link" href="portfolio-details-gallery.html">Project
                                            Details Gallery</a></li>
                                    <li><a class="mobile-menu-link" href="portfolio-details-video.html">Project Details
                                            Video</a></li>
                                    <li><a class="mobile-menu-link" href="portfolio-details-slide.html">Project Details
                                            Slide</a></li>
                                    <li><a class="mobile-menu-link" href="portfolio-details-video-popup.html">Project
                                            Details Video Popup</a></li>

                                </ul>
                            </li>


                        </ul>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main">Blog</a>
                        <ul class="submenu">
                            <li><a class="mobile-menu-link" href="blog.html">Blog Grid</a></li>
                            <li><a class="mobile-menu-link" href="blog-list.html">Blog List</a></li>
                            <li><a class="mobile-menu-link" href="blog-list-2.html">Blog List Two</a></li>
                            <li><a class="mobile-menu-link" href="blog-list-3.html">Blog List Three</a></li>
                            <li><a class="mobile-menu-link" href="blog-bento.html">Blog Bento</a></li>
                            <li><a class="mobile-menu-link" href="blog-bento-2.html">Blog Bento Two</a></li>
                            <li><a class="mobile-menu-link" href="blog-bento-3.html">Blog Bento Three</a></li>
                            <li><a class="mobile-menu-link" href="blog-minimal.html">Blog Minimal</a></li>
                            <li class="has-droupdown third-lvl">
                                <a class="main" href="#">Blog Details</a>
                                <ul class="submenu-third-lvl mm-collapse">

                                    <li><a class="mobile-menu-link" href="blog-details.html">Blog Details</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-bg-image.html">Blog Details Bg
                                            Image</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-gallery.html">Blog Details
                                            Gallery</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-video.html">Blog Details
                                            Video</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-video-popup.html">Blog Details
                                            Video Popup</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-quote.html">Blog Details
                                            Quote</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-classic.html">Blog Details
                                            Classic</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-classic-video.html">Blog Classic
                                            Video</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-right-sidebar.html">Blog Details
                                            Sidebar</a></li>
                                    <li><a class="mobile-menu-link" href="blog-details-left-sidebar.html">Blog Details
                                            Left Sidebar</a></li>
                                    <li><a class="mobile-menu-link" href="#">Minimal Style<span
                                                class="invers-badge-card">Coming</span></a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html" class="main">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-share-wrapper-1 mt--40">
                <span class="short-title">Find With Us</span>
                <ul class="social-stylle-one justify-content-start mt--10">
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                </ul>
            </div>


        </div>
        <!-- mobile menu area end -->
    </div>

    <!-- side bar for desktop -->
    <div id="side-bar2" class="side-bar side-bar2">
        <!-- inner menu area desktop start -->
        <div class="inner-main-wrapper-desk style-one-sidebar d-none d-lg-block">
            <div class="header-area-wrapper">
                <a href="index.html" class="logo">
                    <img src="assets/images/logo/02.svg" alt="logo">
                </a>
                <a href="index.html" class="logo logo-yellow">
                    <img src="assets/images/logo/01.svg" alt="logo">
                </a>
                <button class="close-icon-menu" aria-label="close"><i class="far fa-times"></i></button>
            </div>
            <div class="header-bottom-qhick-action">
                <p class="disc">
                    Constx is a Construction & Renovation company website You can customize all.
                </p>
                <div class="info-list-wrapper">
                    <ul>
                        <li><a href="#"><i class="fa-solid fa-phone"></i><span class="hover-moving-primary">+66 55 66 88 99</span></a>
                        </li>
                        <li><a href="#"><i class="fa-regular fa-envelope"></i><span class="hover-moving-primary">example@gmail.com</span></a>
                        </li>
                    </ul>
                    <ul class="mt--20">
                        <li><a href="#"><i class="fa-solid fa-location-crosshairs"></i><span
                                    class="hover-moving-primary">122, New York USA</span></a></li>
                        <li><a href="#"><i class="fa-regular fa-clock-three"></i>(Mon–Sat: 9:00–6:00)</a></li>
                    </ul>
                </div>

                <nav class="side-bar-nav">
                    <ul class="navbar-nav">
                        <li>
                            <a class="hover-moving-primary" href="index.html">Home</a>
                        </li>
                        <li>
                            <a class="hover-moving-primary" href="service.html">Services</a>
                        </li>
                        <li>
                            <a class="hover-moving-primary" href="shop.html">Shop / Products</a>
                        </li>
                        <li>
                            <a class="hover-moving-primary" href="#projects">Our Projects</a>
                        </li>
                        <li>
                            <a class="hover-moving-primary" href="career.html">Career</a>
                        </li>
                    </ul>
                </nav>

                <div class="social-share-wrapper-1">
                    <span class="short-title">Find With Us</span>
                    <ul class="social-stylle-one justify-content-start mt--20">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>


    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <div id="anywhere-home" class="">
    </div>

    <!-- pre loader start -->
    <div id="elevate-load">
        <div class="loader-wrapper">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- pre loader end -->


    <!-- open-search -->
    <div class="offcanvas offcanvas-top offcanvas-search" id="canvasSearch">
        <button aria-label="action" class="btn-close-search" type="button" data-bs-dismiss="offcanvas"
                aria-label="Close">
            <i class="fa-solid fa-xmark-large"></i>
        </button>
        <div class="offcanvas-body">
            <div class="tmp-container w-xl">
                <div class="wrap-form">
                    <h4 class="title">
                        What are you looking for?
                    </h4>
                    <form action="#" class="form-search">
                        <fieldset class="input-search">
                            <input type="text" name="search" id="search" placeholder="Searching....">
                        </fieldset>
                        <div class="btn-submit1">
                            <button aria-label="action" type="submit" class="tmp-btn btn-primary btn-sm">
                                <span>
                                    <span class="btn-double-text" data-text="Search">Search</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="popular-searches">
                    <h5 class="title">
                        Popular Searches:
                    </h5>
                    <ul class="list d-flex align-items-center flex-wrap ">
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Building Repair</a></li>
                        <li><a href="#">Interior Work</a></li>
                        <li><a href="#">Home Renovation</a></li>
                        <li><a href="#">Architecture</a></li>
                    </ul>
                </div>
                <div class="tmp-line "></div>
                <div class="trending">
                    <h5 class="title">Popular Services</h5>
                    <div class="tmp-grid-layout lg-col-3 md-col-2">
                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-1.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Construction</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Residential Building Construction & Site
                                        Setup</a>
                                </h6>
                            </div>
                        </div>

                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-2.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Renovation</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Home Renovation, Remodeling & Repair
                                        Work</a>
                                </h6>
                            </div>
                        </div>

                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-3.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Interior</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Interior Decoration, False Ceiling &
                                        Design Work</a>
                                </h6>
                            </div>
                        </div>

                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-4.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Architecture</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Architectural Planning & 3D Building
                                        Modeling</a>
                                </h6>
                            </div>
                        </div>

                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-5.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Project</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Full Construction Project Management
                                        Service</a>
                                </h6>
                            </div>
                        </div>

                        <div
                            class="feature-post-item style-small d-flex align-items-center hover-image-rotate item-grid ">
                            <a href="service-details.html" class="img-style">
                                <img src="assets/images/blog/feature-item-small-6.webp" decoding="async" loading="lazy"
                                     width="123" height="92" alt="feature">
                            </a>
                            <div class="content">
                                <ul class="meta-feature text-caption-2 fw-7 text_secodary-color d-flex align-items-center mb_8 text-uppercase">
                                    <li>Service</li>
                                    <li><a href="#" class="text-uppercase">Repair</a></li>
                                </ul>
                                <h6 class="title">
                                    <a href="service-details.html" class="link">Structural Repair & Building Maintenance
                                        Service</a>
                                </h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.open-search -->



    <div class="scrollbar-v show-on-scroll"></div>
    <div class="float-text show-on-scroll">
        <span><a href="#">Scroll to top</a></span>
    </div>
@endsection
