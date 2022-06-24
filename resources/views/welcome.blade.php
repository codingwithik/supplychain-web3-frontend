@extends('layouts.app')

@section('content')

    <!-- home slider start -->
    <section class="pt-0 poster-section-6">
        <div class="poster-image slider-for custome-arrow classic-arrow-1">
            <div>
                <img src="assets/images/vegetable/poster/1.png" class="img-fluid blur-up lazyload" alt="">
            </div>

            <div>
                <img src="assets/images/vegetable/poster/2.png" class="img-fluid blur-up lazyload" alt="">
            </div>

            <div>
                <img src="assets/images/vegetable/poster/3.png" class="img-fluid blur-up lazyload" alt="">
            </div>
        </div>

        <div class="background-circle">
            <img src="assets/images/vegetable/poster/circle.png" class="img-fluid blur-up lazyload" alt="">
        </div>

        <div class="slider-nav image-show">
            <div>
                <div class="poster-img">
                    <img src="assets/images/vegetable/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>

            <div>
                <div class="poster-img">
                    <img src="assets/images/vegetable/poster/t2.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>

            <div>
                <div class="poster-img">
                    <img src="assets/images/vegetable/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="left-side-contain">
            <div class="banner-left">
                <h4>Sale <span class="theme-color">35% Off</span></h4>
                <h1>Fresh & Tasty <span>Corn Cobe</span></h1>
                <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
                <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
                <p class="poster-details">Lorem Ipsum is simply dummy text of typesetting.</p>
                <div class="banner-btn-grup">
                    <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                        class="btn btn-solid-default">Shop Now</button>
                </div>
            </div>
        </div>

        <div class="right-side-contain">
            <div class="social-image">
                <a href="https://www.facebook.com/" target="new">
                    <h6>Facebook</h6>
                </a>
            </div>

            <div class="social-image">
                <a href="https://www.instagram.com/" target="new">
                    <h6>Instagram</h6>
                </a>
            </div>

            <div class="social-image">
                <a href="https://twitter.com/" target="new">
                    <h6>Twitter</h6>
                </a>
            </div>
        </div>
    </section>
    <!-- home slider end -->

    <!-- Custome services Section Start -->
    <section class="service-section">
        <div class="container">
            <div class="row g-4 g-sm-3">
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#customer"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Customer Servcies</h3>
                            <span class="font-light">Top notch customer service.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#shop"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Pickup At Any Store</h3>
                            <span class="font-light">Free shipping on orders over $65.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#secure-payment"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Secured Payment</h3>
                            <span class="font-light">We accept all major credit cards.</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="service-wrap">
                        <div class="service-icon">
                            <svg>
                                <use xlink:href="assets/svg/icons.svg#return"></use>
                            </svg>
                        </div>
                        <div class="service-content">
                            <h3 class="mb-2">Free Returns</h3>
                            <span class="font-light">30-days free return policy.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Custome services Section End -->

    <!-- banner section start -->
    <section class="ratio_landscape banner-style-2">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-5 col-lg-4 col-md-6 custom-col">
                    <div class="collection-banner text-center">
                        <div class="banner-img">
                            <img src="assets/images/vegetable/banner/1.jpg" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">26% <span>OFF</span></span>
                        </div>
                        <a href="shop-left-sidebar.html" class="contain-banner contain-center bottom-0">
                            <div class="banner-content with-bg">
                                <h2 class="mb-2">Lemons</h2>
                                <span>BUY ONE GET ONE FREE</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 order-lg-0 order-md-1 order-0">
                    <div class="collection-banner text-center collection-center p-0">
                        <div class="banner-img">
                            <img src="assets/images/vegetable/percentage.jpg" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="contain-banner contain-center bottom-0">
                            <div class="banner-content p-2">
                                <h6 class="theme-color mb-2">Get Rewarded</h6>
                                <h2>Earn 10% </h2>
                                <h2>Back Reward</h2>
                                <p class="mt-2">Valid online & in-store with select styles.</p>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn btn-solid-default">Learn more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-4 col-md-6 custom-col">
                    <div class="collection-banner text-center">
                        <div class="banner-img">
                            <img src="assets/images/vegetable/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                        </div>
                        <div class="banner-detail">
                            <a href="javacript:void(0)" class="heart-wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <span class="font-dark-30">26% <span>OFF</span></span>
                        </div>
                        <a href="shop-left-sidebar.html" class="contain-banner contain-center bottom-0">
                            <div class="banner-content with-bg">
                                <h2 class="mb-2">kiwi </h2>
                                <span>BUY ONE GET ONE FREE</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- New Arrival Section Start -->
    <section class="ratio_asos">
        <div class="container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-sm-12 p-0">
                    <div class="title text-center">
                        <h5>Just For You</h5>
                        <h2>Fresh Fruits</h2>
                    </div>
                    <div class="product-wrapper slide-6">
                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="shop-left-sidebar.html">
                                        <img src="assets/images/vegetable/fresh/1.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$49.00<span class="font-light">$52.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Fresh Beat</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>1 KG</li>
                                        <li>500 G</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/vegetable/fresh/2.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-black">New</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$20.00<span class="font-light">$15.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Beautiful Cauliflower</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>250 G</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/vegetable/fresh/3.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-black">New</span>
                                        <span class="label label-theme">50% Off</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$50.00<span class="font-light">$42.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Eggplant</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>1 KG</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/vegetable/fresh/4.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-theme">50% Off</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$55.00<span class="font-light">$52.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Red Tomato</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>2 KG</li>
                                        <li>800 G</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/vegetable/fresh/5.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$60.00<span class="font-light">$52.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Organic Onion</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>300 G</li>
                                        <li>500 G</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box">
                                <div class="img-wrapper hover-image">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/vegetable/fresh/6.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="">
                                    </a>
                                    <div class="label-block">
                                        <span class="label label-theme">20% Off</span>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html" class="wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <h3 class="theme-color">$80.00<span class="font-light">$75.00</span></h3>
                                    <a href="product-left-sidebar.html" class="font-default">
                                        <h5>Fresh Organic Ginger Big Size</h5>
                                    </a>
                                    <ul class="size-box">
                                        <li>1 KG</li>
                                        <li>500 G</li>
                                    </ul>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Section End -->

    <!-- Product Section Start -->
    <section class="ratio_90">
        <div class="container">
            <div class="row">
                <div class="product-wrapper slide-6">
                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/1.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail"><a href="javascript:void(0)">
                                    <h5>Fresh Plum</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/2.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail"><a href="javascript:void(0)">
                                    <h5>Fresh Muskmelon</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/3.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a href="javascript:void(0)">
                                    <h5>Fresh Water Melon</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/4.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail"><a href="javascript:void(0)">
                                    <h5>Fresh Apricote</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/5.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail"><a href="javascript:void(0)">
                                    <h5>Fresh Black Berry</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="product-box product-box6">
                            <div class="img-wrapper squre-image">
                                <div class="front-img">
                                    <img class="img-fluid bg-img blur-up lazyload" alt=""
                                        src="assets/images/vegetable/fruit/6.jpg">
                                </div>
                                <div class="labels label-block theme-color">
                                    <span class="label-7">50% off</span>
                                </div>
                                <div class="cart-info cart-bag">
                                    <div class="cart-contain">
                                        <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                            data-bs-target="#addtocart">
                                            <i data-feather="shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail"><a href="javascript:void(0)">
                                    <h5>Fresh Natural Fruits</h5>
                                </a>
                                <ul class="rating mt-1">
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner section 2 start -->
    <section class="ratio2_1 section-b-space">
        <div class="container">
            <div class="row gy-3">
                <div class="col-xl-9 col-lg-8">
                    <div class="timer-banner text-center">
                        <img src="assets/images/vegetable/percentage.jpg" class="bg-img blur-up lazyload" alt="">
                        <img src="assets/images/vegetable/1234.png" class="img-fluid veg-image" alt="">
                        <img src="assets/images/vegetable/circle.png" class="round-circle" alt="">
                        <div class="coupon-code theme-color">
                            DGR548548
                        </div>
                        <div class="discount-offer">
                            <h5>New Festival Offer
                                <span class="theme-color">70% OFF
                                    <span class="wishlist-icon mt-2">
                                        <i class="fas fa-heart"></i>
                                    </span>
                                </span>
                            </h5>
                        </div>

                        <div class="timer">
                            <ul class="light-color">
                                <li>
                                    <div class="counter">
                                        <div>
                                            <h2 id="days1"></h2>Days
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter">
                                        <div>
                                            <h2 id="hours1"></h2>Hour
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter">
                                        <div>
                                            <h2 id="minutes1"></h2>Min
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="counter">
                                        <div>
                                            <h2 id="seconds1"></h2>Sec
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="banner-btn-grup">
                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                class="btn btn-solid-default">Shop Now</button>
                        </div>

                        <div class="social-media">
                            <div class="social-icon">
                                <img src="assets/images/social-icon/1.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Facebook</h6>
                            </div>

                            <div class="social-icon">
                                <img src="assets/images/social-icon/2.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Instagram</h6>
                            </div>

                            <div class="social-icon">
                                <img src="assets/images/social-icon/3.png" class="img-fluid blur-up lazyload" alt="">
                                <h6>Twitter</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 small-banner">
                    <div class="collection-banner text-center collection-center">
                        <img src="assets/images/vegetable/offer/2.jpg" class="bg-img blur-up lazyload" alt="">
                        <div>
                            <h6 class="theme-color mb-2">New Headphone</h6>
                            <h2>50% Cash </h2>
                            <h2>Back Reward</h2>
                            <p class="mt-2 mb-0 font-light">Limited offer </p>
                            <p class="font-light mb-0"> Buy now!!</p>
                            <button onclick="location.href = 'shop-left-sidebar.html';" type="button"
                                class="btn btn-solid-default mt-4">Shop now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section 2 end -->

    <!-- Promo Code Section Start -->
    <section class="code-section pt-0">
        <div class="overlay-color">
            <div class="container">
                <div class="row px-0">
                    <div class="col-lg-8 col-md-8">
                        <div class="code-contain">
                            <div class="code-image">
                                <img src="assets/images/vegetable/percent.png" class="img-fluid blur-up lazyload"
                                    alt="">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <h6>30% Offer Today First 50 Customer : USE PROMO CODE <span>VEG45652</span></h6>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 d-flex">
                        <div class="text-md-end text-center mt-md-0 mt-3 w-100">
                            <button type="button" class="btn btn-size default-white">OPEN PRODICT PAGE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Code Section End -->

    <!-- New Arrival Section Start -->
    <section class="ratio_asos category-style-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="title text-center">
                        <h5>Just For You</h5>
                        <h2>Fresh Fruits</h2>
                    </div>
                </div>

                <div class="product-wrapper slide-4">
                    <div>
                        <div class="category-image-fruit">
                            <img src="assets/images/vegetable/category/1.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="category-contain">
                                <img src="assets/images/vegetable/category/1.png" class="blur-up lazyload" alt="">
                            </div>

                            <div class="category-text">
                                <h2>Citrus</h2>
                                <h5>Healthy Fruits</h5>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="category-image-fruit">
                            <img src="assets/images/vegetable/category/2.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="category-contain">
                                <img src="assets/images/vegetable/category/2.png" class=" blur-up lazyload" alt="">
                            </div>

                            <div class="category-text">
                                <h2>Stone Fruit</h2>
                                <h5>Healthy Fruits</h5>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="category-image-fruit">
                            <img src="assets/images/vegetable/category/3.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="category-contain">
                                <img src="assets/images/vegetable/category/3.png" class=" blur-up lazyload" alt="">
                            </div>

                            <div class="category-text">
                                <h2>Tropical</h2>
                                <h5>Healthy Fruits</h5>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="category-image-fruit">
                            <img src="assets/images/vegetable/category/4.jpg" class="img-fluid blur-up lazyload" alt="">
                            <div class="category-contain">
                                <img src="assets/images/vegetable/category/4.png" class=" blur-up lazyload" alt="">
                            </div>

                            <div class="category-text">
                                <h2>Berries</h2>
                                <h5>Healthy Fruits</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New Arrival Section End -->

    <!-- tab banner section start -->
    <section class="tab-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title text-center">
                        <h5>Special Offer</h5>
                        <h2>Hurry up!</h2>
                    </div>
                    <div class="tab-wrap">

                        <div class="tab-content" id="myTabContent">
                            <div class="offer-wrap product-style-1">
                                <div class="row g-xl-4 g-3">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-list">
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">
                                                        $57.00
                                                        <span class="font-light">$54.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Fresh And Tasty Red cabbage Per Piece</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/2.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">
                                                        $42.00
                                                        <span class="font-light">$39.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Rad Testy Fresh Tomato</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/3.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">
                                                        $25.00
                                                        <span class="font-light">$20.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Standard Come</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 product-banner">
                                        <div class="product-box bg-image">
                                            <div class="img-wrapper bg-trans">
                                                <div class="label-block">
                                                    <span class="label label-black">New</span>
                                                </div>
                                                <a href="javascript:void(0)">
                                                    <img src="assets/images/vegetable/offer-1/big.png"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                    <img src="assets/images/vegetable/circle.png" class="round-circle"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-details text-center">
                                                <h3 class="theme-color">
                                                    $600.00
                                                    <span class="font-light ml-1">$945.00</span>
                                                </h3>
                                                <a href="javascript:void(0)" class="font-default" tabindex="-1">
                                                    <h5 class="mx-auto">Juicy Lemone</h5>
                                                </a>
                                                <ul class="rating mt-1">
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star theme-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-list">
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/4.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">
                                                        $70.00
                                                        <span class="font-light">$68.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Fresh And Tasty Red cabbage Per Piece</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/5.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">$14.00<span class="font-light">$10.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Fresh And Tasty Red cabbage Per Piece</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-box product-box-4">
                                                <div class="img-wrapper bg-trans">
                                                    <a href="product-left-sidebar.html" class="text-center">
                                                        <img src="assets/images/vegetable/offer-1/6.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-details">
                                                    <h3 class="theme-color">
                                                        $50.00
                                                        <span class="font-light">$45.00</span>
                                                    </h3>
                                                    <a href="product-left-sidebar.html" class="font-default">
                                                        <h5>Fresh And Tasty Red cabbage Per Piece</h5>
                                                    </a>
                                                    <ul class="rating mt-1">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tab banner section end -->

    <!-- Blog Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-3 text-center mt-0">
                        <h2>Our News & Update</h2>
                        <h5 class="theme-color">Our Blog</h5>
                    </div>
                </div>

                <div class="product-wrapper slide-3">
                    <div class="product-style-4 ratio2_3">
                        <div class="blog-header">
                            <div class="blog-image">
                                <img src="assets/images/vegetable/update/1.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="blog-date gradient-color">
                                    <div class="date-hover">
                                        <div>
                                            <h2>16</h2>
                                            <h3>MAY</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <h2 class="theme-color">Flowers</h2>
                            <h5 class="theme-color">New Offer -56% Discount</h5>
                            <h4>Fresh</h4>
                            <h4 class="brand-name">Latest Night Lamp From $35</h4>
                            <button onclick="location.href = 'blog-details.html';" type="button"
                                class="btn default-theme">Read More <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>

                    <div class="product-style-4 ratio2_3">
                        <div class="blog-header">
                            <div class="blog-image">
                                <img src="assets/images/vegetable/update/2.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="blog-date gradient-color">
                                    <div class="date-hover">
                                        <div>
                                            <h2>16</h2>
                                            <h3>MAY</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <h2 class="theme-color">Flowers</h2>
                            <h5 class="theme-color">New Offer -56% Discount</h5>
                            <h4>Fresh</h4>
                            <h4 class="brand-name">Latest Night Lamp From $35</h4>
                            <button onclick="location.href = 'blog-details.html';" type="button"
                                class="btn default-theme">Read More <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>

                    <div class="product-style-4 ratio2_3">
                        <div class="blog-header">
                            <div class="blog-image">
                                <img src="assets/images/vegetable/update/3.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="blog-date gradient-color">
                                    <div class="date-hover">
                                        <div>
                                            <h2>16</h2>
                                            <h3>MAY</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-footer">
                            <h2 class="theme-color">Flowers</h2>
                            <h5 class="theme-color">New Offer -56% Discount</h5>
                            <h4>Fresh</h4>
                            <h4 class="brand-name">Latest Night Lamp From $35</h4>
                            <button onclick="location.href = 'blog-details.html';" type="bhhutton"
                                class="btn default-theme">Read More <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Subscribe Section Start -->
    <section class="subscribe-section-light section-b-space">
        <div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6">
                        <div class="subscribe-details">
                            <h2 class="mb-3 theme-color">Subscribe Our News</h2>
                            <h6>Subscribe and receive our newsletters to follow the news about our fresh and fantastic
                                Shoes Products.</h6>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                        <div class="subsribe-input">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address"
                                    aria-label="Recipient's username">
                                <button class="btn btn-solid-default" type="button">Button</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- brand section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-slider">
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/1.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/2.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/3.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/4.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/5.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/6.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                        <div>
                            <div class="brand-image">
                                <img src="assets/images/brand/4.png" class="img-fluid blur-up lazyload"
                                    alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand section end -->

    <!-- footer start -->
    <footer class="footer-sm-space">
        <div class="main-footer">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-contact">
                            <div class="brand-logo">
                                <a href="index.html" class="footer-logo">
                                    <svg class="svg-icon">
                                        <use class="fill-color" xlink:href="assets/svg/icons.svg#logo"></use>
                                    </svg>
                                    <img src="assets/images/logo.png" class="img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                            <ul class="contact-lists">
                                <li>
                                    <span>
                                        <b>phone:</b> <span class="font-light"> + 185659635</span>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <b>Address:</b>
                                        <span class="font-light"> 1418 Riverwood Drive, Suite 3245
                                            Cottonwood, CA 96052, United States</span>
                                    </span>
                                </li>
                                <li>
                                    <span>
                                        <b>Email:</b>
                                        <span class="font-light"> Voxo123@gmail.com</span>
                                    </span>

                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>About us</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="index.html" class="font-dark">Home</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shop</a>
                                    </li>
                                    <li>
                                        <a href="about-us.html" class="font-dark">About Us</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Blog</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>New Categories</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Latest Shoes</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Branded Jeans</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">New Jackets</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Colorfull Hoodies</a>
                                    </li>
                                    <li>
                                        <a href="shop-left-sidebar.html" class="font-dark">Shiner Goggles</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="footer-links">
                            <div class="footer-title">
                                <h3>Get Help</h3>
                            </div>
                            <div class="footer-content">
                                <ul>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Orders</a>
                                    </li>
                                    <li>
                                        <a href="user-dashboard.html" class="font-dark">Your Account</a>
                                    </li>
                                    <li>
                                        <a href="order-tracking.html" class="font-dark">Track Orders</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html" class="font-dark">Your Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="faq.html" class="font-dark">Shopping FAQs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-sm-6 d-none d-sm-block">
                        <div class="footer-newsletter">
                            <h3>Got Qustion ? Call Us 24/7</h3>
                            <div class="footer-number">
                                <div class="footer-number-image">
                                    <img src="assets/images/shoes/other/headphone.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </div>

                                <div class="footer-number-container">
                                    <h3>+91 98765 43210</h3>
                                </div>
                            </div>

                            <div class="footer-details">
                                <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ab
                                    dolorem nulla
                                    impedit saepe esse et? Ea, totam recusandae doloribus ipsa esse voluptate quis nisi?
                                    Voluptate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-footer">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-md-6">
                        <ul>
                            <li class="font-dark">We accept:</li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/1.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/2.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/3.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="assets/images/payment-icon/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="payment icon"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0 font-dark">© 2022, Voxo Theme. Made with heart by Pixelstrap</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- Quick view modal start -->
    <div class="modal fade quick-view-modal" id="quick-view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="quick-view-image">
                                <div class="quick-view-slider ratio_veg">
                                    <div>
                                        <img src="assets/images/vegetable/fresh/1.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/2.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/3.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/4.jpg"
                                            class="img-fluid bg-img blur-up lazyload" alt="product">
                                    </div>
                                </div>
                                <div class="quick-nav">
                                    <div>
                                        <img src="assets/images/vegetable/fresh/1.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/2.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/3.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                    <div>
                                        <img src="assets/images/vegetable/fresh/4.jpg"
                                            class="img-fluid blur-up lazyload" alt="product">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-right veg-product-right">
                                <div>
                                    <h2 class="mb-2">Beautiful and Fresh Bookey</h2>
                                    <ul class="rating mt-1">
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star theme-color"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </ul>
                                    <ul class="price mt-3">
                                        <li>
                                            <div class="form-check p-0 mb-3">
                                                <div class="form-check ps-0">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault">
                                                    <label class="form-check-label fw-bold"
                                                        for="flexCheckDefault">1KG</label>
                                                    <span class="ms-2">$65.54 <del
                                                            class="font-light mx-2">$58.31</del><span
                                                            class="theme-color">20% OFF</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-check p-0">
                                                <div class="form-check ps-0">
                                                    <input class="checkbox_animated check-it" type="checkbox"
                                                        id="flexCheckDefault1">
                                                    <label class="form-check-label fw-bold"
                                                        for="flexCheckDefault1">2KG</label>
                                                    <span class="ms-2">$68.54 <del
                                                            class="font-light mx-2">$58.31</del><span
                                                            class="theme-color">20% OFF</span></span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="product-details">
                                        <h4>product details</h4>
                                        <ul>
                                            <li>
                                                <span class="font-light">Display type :</span> Tomato
                                            </li>
                                            <li>
                                                <span class="font-light">Mechanism:</span> Vegitable
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-btns">
                                        <a href="cart.html" class="btn btn-solid-default btn-sm">Add to cart</a>
                                        <a href="product-left-sidebar.html" class="btn btn-solid-default btn-sm">View
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Newsletter modal start -->
    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter modal end -->

    <!-- Coockie Section Start -->
    <div class="cookie-bar-section veg-cookiebar">
        <div class="content">
            <img src="assets/images/cookie.png" alt="">
            <p class="font-light">This website use cookies to ensure you get the best experience on our website.</p>
            <div class="cookie-buttons">
                <button class="btn default-theme" id="button">I understand</button>
            </div>
        </div>
    </div>
    <!-- Coockie Section End -->

    <!-- Cart Successful Start -->
    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.html"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="product-left-sidebar.html">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Successful End -->

    <!-- theme Setting Start -->
    <div class="theme-setting">
        <ul>
            <li>
                <button id="darkButton" class="btn btn-sm dark-buttton">Dark</button>
            </li>
            <li>
                <button class="btn btn-sm rtl-button">RTL</button>
            </li>
            <li class="color-picker">
                <input type="color" class="form-control form-control-color" id="ColorPicker1" value="#51983c"
                    title="Choose your color">
            </li>
        </ul>
    </div>
    <!-- theme Setting End -->

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->


@endsection
