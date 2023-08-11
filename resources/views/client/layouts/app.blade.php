<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freebw.com/templates/oragnive-v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Dec 2022 14:09:06 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Home 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="client/assets/images/icons/favicon.png" />

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/fonts/linearicons-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/slick/slick.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/lightbox2/css/lightbox.min.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="client/assets/vendor/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="client/assets/vendor/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="client/assets/vendor/revolution/css/settings.css">

    <link rel="stylesheet" type="text/css" href="client/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="client/assets/css/main.css">

</head>

<body class="animsition">

<header class="header-v1">

    @include('client.layouts.nav')

    <div class="wrap-header-mobile">

        <div class="logo-mobile">
            <a href="index.html"><img src="client/assets/images/icons/logo-01.png" alt="IMG-LOGO"></a>
        </div>

        <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click m-r-15">
            <div class="h-full flex-m">
                <div class="icon-header-item flex-c-m trans-04 js-show-modal-search">
                    <img src="client/assets/images/icons/icon-search.png" alt="SEARCH">
                </div>
            </div>
            <div class="wrap-cart-header h-full flex-m m-l-5 menu-click">
                <div class="icon-header-item flex-c-m trans-04 icon-header-noti" data-notify="2">
                    <img src="client/assets/images/icons/icon-cart-2.png" alt="CART">
                </div>
                <div class="cart-header menu-click-child trans-04">
                    <div class="bo-b-1 bocl15">

                        <div class="flex-w flex-str m-b-25">
                            <div class="size-w-15 flex-w flex-t">
                                <a href="product-single.html"
                                   class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                    <img src="client/assets/images/item-cart-01.jpg" alt="PRODUCT">
                                </a>
                                <div class="size-w-17 flex-col-l">
                                    <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                        Cheery
                                    </a>
                                    <span class="txt-s-101 cl9">
                                            18$
                                        </span>
                                    <span class="txt-s-109 cl12">
                                            x2
                                        </span>
                                </div>
                            </div>
                            <div class="size-w-14 flex-b">
                                <button class="lh-10">
                                    <img src="client/assets/images/icons/icon-close.png" alt="CLOSE">
                                </button>
                            </div>
                        </div>

                        <div class="flex-w flex-str m-b-25">
                            <div class="size-w-15 flex-w flex-t">
                                <a href="product-single.html"
                                   class="wrap-pic-w bo-all-1 bocl12 size-w-16 hov3 trans-04 m-r-14">
                                    <img src="images/item-cart-02.jpg" alt="PRODUCT">
                                </a>
                                <div class="size-w-17 flex-col-l">
                                    <a href="product-single.html" class="txt-s-108 cl3 hov-cl10 trans-04">
                                        Asparagus
                                    </a>
                                    <span class="txt-s-101 cl9">
                                            12$
                                        </span>
                                    <span class="txt-s-109 cl12">
                                            x1
                                        </span>
                                </div>
                            </div>
                            <div class="size-w-14 flex-b">
                                <button class="lh-10">
                                    <img src="images/icons/icon-close.png" alt="CLOSE">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex-w flex-sb-m p-t-22 p-b-12">
                            <span class="txt-m-103 cl3 p-r-20">
                                Subtotal
                            </span>
                        <span class="txt-m-111 cl6">
                                48$
                            </span>
                    </div>
                    <div class="flex-w flex-sb-m p-b-31">
                            <span class="txt-m-103 cl3 p-r-20">
                                Total
                            </span>
                        <span class="txt-m-111 cl10">
                                48$
                            </span>
                    </div>
                    <a href="checkout.html" class="flex-c-m size-a-8 bg10 txt-s-105 cl13 hov-btn2 trans-04">
                        check out
                    </a>
                </div>
            </div>
        </div>

        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
        </div>
    </div>

    <div class="menu-mobile">
        <ul class="main-menu-m">
            <li>
                <a href="index.html">Home</a>
                <ul class="sub-menu-m">
                    <li><a href="index.html">Homepage 1</a></li>
                    <li><a href="home-02.html">Homepage 2</a></li>
                    <li><a href="home-03.html">Homepage 3</a></li>
                    <li><a href="home-04.html">Homepage 4</a></li>
                    <li><a href="home-05.html">Homepage 5</a></li>
                    <li><a href="home-06.html">Homepage 6</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
            <li>
                <a href="#">Page</a>
                <ul class="sub-menu-m">
                    <li><a href="about-01.html">About 1</a></li>
                    <li><a href="about-02.html">About 2</a></li>
                    <li><a href="coming-soon.html">Coming Soon</a></li>
                    <li><a href="error.html">404 Error</a></li>
                    <li><a href="checkout.html">CheckOut</a></li>
                    <li><a href="account.html">My Account</a></li>
                    <li><a href="account-lost-pass.html">My Account Lost Pass</a></li>
                    <li><a href="account-register.html">My Account Register</a></li>
                    <li><a href="wishlist.html">Wishlist</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
            <li>
                <a href="shop-sidebar-grid.html">Shop</a>
                <ul class="sub-menu-m">
                    <li><a href="shop-sidebar-grid.html">Shop Sidebar Grid</a></li>
                    <li><a href="shop-sidebar-list.html">Shop Sidebar List</a></li>
                    <li><a href="shop-product-grid.html">Shop Product Grid</a></li>
                    <li><a href="shop-product-list.html">Shop Product List</a></li>
                    <li><a href="product-single.html">Product Single</a></li>
                    <li><a href="shop-cart.html">Shop Cart</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
            <li>
                <a href="blog-list.html">Blog</a>
                <ul class="sub-menu-m">
                    <li><a href="blog-list.html">Blog List</a></li>
                    <li><a href="blog-grid-01.html">Blog Grid 1</a></li>
                    <li><a href="blog-grid-02.html">Blog Grid 2</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
            <li>
                <a href="gallery-01.html">Gallery</a>
                <ul class="sub-menu-m">
                    <li><a href="gallery-01.html">Gallery 1</a></li>
                    <li><a href="gallery-02.html">Gallery 2</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
            <li>
                <a href="contact-01.html">Contact</a>
                <ul class="sub-menu-m">
                    <li><a href="contact-01.html">Contact 1</a></li>
                    <li><a href="contact-02.html">Contact 2</a></li>
                </ul>
                <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
            </li>
        </ul>
    </div>

    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
        <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
            <span class="lnr lnr-cross"></span>
        </button>
        <div class="container-search-header">
            <form class="wrap-search-header flex-w">
                <button class="flex-c-m trans-04">
                    <span class="lnr lnr-magnifier"></span>
                </button>
                <input class="plh1" type="text" name="search" placeholder="Search...">
            </form>
        </div>
    </div>
</header>

{{--@include('client.layouts.welcome')--}}

{{--OUR PRODUCT--}}
@include('client.layouts.show-product')

{{-- SALE--}}
<section class="sec-deal bg-img1" style="background-image: url('client/assets/images/bg-01.jpg');">
    <div class="flex-w flex-m how-pos2-parent">
        <img class="how-pos2 respon4 dis-none-xl" src="client/assets/images/other-03.png" alt="IMG">
        <div class="size-w-3 txt-center wrap-pic-max-s w-full-lg">
            <img src="client/assets/images/other-02.png" alt="IMG">
        </div>
        <div class="size-w-4 p-t-105 p-b-90 p-r-15 respon3">
            <div class="size-a-1 flex-col-l-m p-b-35">
                <div class="txt-m-201 cl10 how-pos1-parent m-b-14">
                    Best Price For You
                    <div class="how-pos1">
                        <img src="client/assets/images/icons/symbol-02.png" alt="IMG">
                    </div>
                </div>
                <h3 class="txt-l-101 cl3 respon1">
                    deal of the day
                </h3>
            </div>
            <div class="p-b-32">
                <a href="#" class="txt-m-105 cl6 hov-cl10 trans-04">
                    Roasted corn
                </a>
                <div class="txt-m-105 p-t-15 p-b-22">
                        <span class="cl9">
                            20$
                        </span>
                    <span class="cl10">
                            Now Only 15$
                        </span>
                </div>
                <p class="txt-s-102 cl9">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type.
                </p>
            </div>
            <div class="flex-w coutdown100 p-b-22" data-year="0" data-month="0" data-date="10" data-hours="23"
                 data-minutes="0" data-seconds="0" data-timezone="auto">
                <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 days">
                            10
                        </span>
                    <span class="txt-m-106 cl9">
                            days
                        </span>
                </div>
                <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 hours">
                            25
                        </span>
                    <span class="txt-m-106 cl9">
                            hours
                        </span>
                </div>
                <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 minutes">
                            56
                        </span>
                    <span class="txt-m-106 cl9">
                            mins
                        </span>
                </div>
                <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
                        <span class="txt-l-102 cl6 seconds">
                            42
                        </span>
                    <span class="txt-m-106 cl9">
                            secs
                        </span>
                </div>
            </div>
            <div class="flex-w">
                <a href="shop-sidebar-grid.html"
                   class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
                    Shop now
                    <span class="lnr lnr-chevron-right m-l-7"></span>
                    <span class="lnr lnr-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>

{{--FILL--}}
<section class="sec-product2 bg0 p-t-113 p-b-35">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                <div class="p-r-20 p-rl-0-xl">

                    <div class="wrap-slick2">
                        <div class="p-b-20 p-rl-15">
                                <span class="txt-m-107 cl9">
                                    new form the farm
                                </span>
                            <div class="flex-w flex-t p-t-5">
                                <h4 class="size-w-5 m-r-20">
                                        <span class="txt-l-103 cl6">
                                            organic
                                        </span>
                                    <span class="txt-l-104 cl3">
                                            special
                                        </span>
                                </h4>
                                <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                            </div>
                        </div>
                        <div class="slick2">
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-09.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Cabbage
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                21$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-10.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Carrot
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                17$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-11.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Onion
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                9$
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-11.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Onion
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                9$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-09.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Cabbage
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                21$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-10.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Carrot
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                17$
                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                <div class="p-rl-10 p-rl-0-xl">

                    <div class="wrap-slick2">
                        <div class="p-b-20 p-rl-15">
                                <span class="txt-m-107 cl9">
                                    agricultural products
                                </span>
                            <div class="flex-w flex-t p-t-5">
                                <h4 class="size-w-5 m-r-20">
                                        <span class="txt-l-103 cl6">
                                            organic
                                        </span>
                                    <span class="txt-l-104 cl3">
                                            popular
                                        </span>
                                </h4>
                                <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                            </div>
                        </div>
                        <div class="slick2">
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-12.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Potato
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                24$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-13.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Eggplant
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                18$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-14.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Peas
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                35$
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-13.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Eggplant
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                18$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-14.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Peas
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                35$
                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                <div class="p-l-20 p-rl-0-xl">

                    <div class="wrap-slick2">
                        <div class="p-b-20 p-rl-15">
                                <span class="txt-m-107 cl9">
                                    costumer needs
                                </span>
                            <div class="flex-w flex-t p-t-5">
                                <h4 class="size-w-5 m-r-20">
                                        <span class="txt-l-103 cl6">
                                            organic
                                        </span>
                                    <span class="txt-l-104 cl3">
                                            random
                                        </span>
                                </h4>
                                <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                            </div>
                        </div>
                        <div class="slick2">
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-15.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Asparagus
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                12$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-16.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Orange
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                39$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-17.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Cheery
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                30$
                                            </span>
                                    </div>
                                </a>
                            </div>
                            <div class="item-slick2 p-all-15">

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-16.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Orange
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                39$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-15.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Asparagus
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                12$
                                            </span>
                                    </div>
                                </a>

                                <a href="product-single.html"
                                   class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                    <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                        <img src="images/product-17.jpg" alt="IMG-PRODUCT">
                                    </div>
                                    <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
                                            <span class="txt-m-103 cl3">
                                                Cheery
                                            </span>
                                        <div class="how-line1 m-t-14 m-b-19"></div>
                                        <span class="txt-m-104 cl9">
                                                30$
                                            </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--ABOUT OUR--}}
<div class="sec-testimonials bg12 p-t-120 p-b-80 how-pos3-parent how-pos4-parent">
    <img class="how-pos3 dis-none-xl" src="images/other-04.png" alt="IMG">
    <img class="how-pos4 dis-none-xl" src="images/other-05.png" alt="IMG">
    <div class="container">

        <div class="wrap-slick3">
            <div class="slick3">
                <div class="item-slick3">
                    <div class="flex-col-c-m">
                        <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                            <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                <img src="images/avatar-01.jpg" alt="AVATAR">
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Christina Cox
                                    </span>
                                <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                            <p class="txt-center txt-s-104 cl6 size-w-8">
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                on the Internet tend to repeat predefined chunks as necessary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                combined with a handful of model sentence structures, to generate Lorem Ipsum which
                                looks reasonable. The generated Lorem Ipsum is therefore always free from
                                repetition, injected humour, or non-characteristic words etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-slick3">
                    <div class="flex-col-c-m">
                        <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                            <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                <img src="images/avatar-01.jpg" alt="AVATAR">
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Christina Cox
                                    </span>
                                <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                            <p class="txt-center txt-s-104 cl6 size-w-8">
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                on the Internet tend to repeat predefined chunks as necessary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                combined with a handful of model sentence structures, to generate Lorem Ipsum which
                                looks reasonable. The generated Lorem Ipsum is therefore always free from
                                repetition, injected humour, or non-characteristic words etc.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item-slick3">
                    <div class="flex-col-c-m">
                        <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                            <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                <img src="images/avatar-01.jpg" alt="AVATAR">
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <div class="flex-col-c-m p-t-33 p-b-25">
                                    <span class="txt-l-105 cl3 txt-center p-b-9">
                                        Christina Cox
                                    </span>
                                <span class="fs-16 cl11 txt-center">
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                        <i class="fa fa-star m-rl-1"></i>
                                    </span>
                            </div>
                        </div>
                        <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                            <p class="txt-center txt-s-104 cl6 size-w-8">
                                If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators
                                on the Internet tend to repeat predefined chunks as necessary, making this the first
                                true generator on the Internet. It uses a dictionary of over 200 Latin words,
                                combined with a handful of model sentence structures, to generate Lorem Ipsum which
                                looks reasonable. The generated Lorem Ipsum is therefore always free from
                                repetition, injected humour, or non-characteristic words etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-slick3-dots p-t-50"></div>
        </div>
    </div>
</div>

{{--BLOG--}}
<section class="sec-blog bg0 p-t-145 p-b-45">
    <div class="container">
        <div class="size-a-1 flex-col-c-m p-b-70">
            <div class="txt-center txt-m-201 cl10 how-pos1-parent m-b-14">
                Keep Updated With Us
                <div class="how-pos1">
                    <img src="images/icons/symbol-02.png" alt="IMG">
                </div>
            </div>
            <h3 class="txt-center txt-l-101 cl3 respon1">
                From our blog
            </h3>
        </div>
        <div class="row">
            <div class="col-md-6 p-b-50">
                <div class="p-r-15 p-r-0-lg">
                    <a href="blog-single.html" class="wrap-pic-w hov4">
                        <img src="images/blog-01.jpg" alt="BLOG">
                    </a>
                    <div class="flex-w p-t-30">
                        <div class="size-a-4 bg10 flex-col-c-m m-r-34">
                                <span class="txt-l-106 cl0 p-b-4">
                                    18
                                </span>
                            <span class="txt-m-108 cl0 p-b-5">
                                    June
                                </span>
                        </div>
                        <div class="size-w-9">
                            <h4 class="p-b-13">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    There are many variations of passages of Lorem Ipsum available
                                </a>
                            </h4>
                            <p class="txt-s-101 cl6 p-b-21">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
                            </p>
                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-b-50">
                <div class="p-l-15 p-l-0-lg">
                    <a href="blog-single.html" class="wrap-pic-w hov4">
                        <img src="images/blog-02.jpg" alt="BLOG">
                    </a>
                    <div class="flex-w p-t-30">
                        <div class="size-a-4 bg10 flex-col-c-m m-r-34">
                                <span class="txt-l-106 cl0 p-b-4">
                                    20
                                </span>
                            <span class="txt-m-108 cl0 p-b-5">
                                    October
                                </span>
                        </div>
                        <div class="size-w-9">
                            <h4 class="p-b-13">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    There are many variations of passages of Lorem Ipsum available
                                </a>
                            </h4>
                            <p class="txt-s-101 cl6 p-b-21">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod titncidunt ut laoreet dolore magna aliquam erat volutpat. Ut ...
                            </p>
                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="sec-logo bg0">
    <div class="container">
        <div class="flex-w flex-sa-m bo-t-1 bocl13 p-tb-60">
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-07.png" alt="IMG">
            </a>
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-08.png" alt="IMG">
            </a>
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-09.png" alt="IMG">
            </a>
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-10.png" alt="IMG">
            </a>
            <a href="#" class="dis-block how2 p-rl-15 m-tb-20">
                <img class="trans-04" src="images/icons/symbol-11.png" alt="IMG">
            </a>
        </div>
    </div>
</div>


@include('client.layouts.footer')

<div class="btn-back-to-top bg0-hov" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="lnr lnr-chevron-up"></span>
        </span>
</div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="client/assets/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="client/assets/vendor/animsition/js/animsition.min.js"></script>

<script src="client/assets/vendor/bootstrap/js/popper.js"></script>
<script src="client/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<script src="client/assets/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="client/assets/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="client/assets/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="client/assets/js/revo-custom.js"></script>

<script src="client/assets/vendor/select2/select2.min.js"></script>

<script src="client/assets/vendor/daterangepicker/moment.min.js"></script>
<script src="client/assets/vendor/daterangepicker/daterangepicker.js"></script>

<script src="client/assets/vendor/slick/slick.min.js"></script>
<script src="client/assets/js/slick-custom.js"></script>

<script src="client/assets/vendor/parallax100/parallax100.js"></script>

<script src="client/assets/vendor/lightbox2/js/lightbox.min.js"></script>

<script src="client/assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="client/assets/vendor/sweetalert/sweetalert.min.js"></script>

<script src="client/assets/vendor/countdowntime/moment.min.js"></script>
<script src="client/assets/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="client/assets/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="client/assets/vendor/countdowntime/jquery.countdown.min.js"></script>
<script src="client/assets/vendor/countdowntime/countdowntime.js"></script>

<script src="client/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="client/assets/js/main.js"></script>
</body>

<!-- Mirrored from freebw.com/templates/oragnive-v1/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Dec 2022 14:09:13 GMT -->

</html>
