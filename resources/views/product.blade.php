<!DOCTYPE html>
<!--
    Name: AmDesk - Help Center HTML template for your digital products
    Version: 1.0.1
    Author: dexad, nK
    Website: https://nkdev.info/
    Purchase: https://themeforest.net/user/_nk/portfolio
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2019.
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Amdesk | Single Product</title>

    <meta name="description" content="Amdesk - Help Center HTML template for your digital products">
    <meta name="keywords" content="helpdesk, forum, template, HTML template, responsive, clean">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700%7cMaven+Pro:400,500,700" rel="stylesheet"><!-- %7c -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fancybox -->
    <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css">

    <!-- Pe icon 7 stroke -->
    <link rel="stylesheet" href="assets/vendor/pixeden-stroke-7-icon/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <!-- Swiper -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/swiper/dist/css/swiper.min.css">

    <!-- Bootstrap Select -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">

    <!-- Dropzone -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/dropzone/dist/min/dropzone.min.css">

    <!-- Quill -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/quill/dist/quill.snow.css">

    <!-- Font Awesome -->
    <script defer src="assets/vendor/fontawesome-free/js/all.js"></script>
    <script defer src="assets/vendor/fontawesome-free/js/v4-shims.js"></script>

    <!-- Amdesk -->
    <link rel="stylesheet" href="assets/css/amdesk.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- END: Styles -->

    <!-- jQuery -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>


</head>


<body>




<!--
    START: Navbar

    Additional Classes:
        .dx-navbar-sticky || .dx-navbar-fixed
        .dx-navbar-autohide
        .dx-navbar-dropdown-triangle
        .dx-navbar-dropdown-dark - only <ul>
        .dx-navbar-expand || .dx-navbar-expand-lg || .dx-navbar-expand-xl
-->
<nav class="dx-navbar dx-navbar-top dx-navbar-collapse dx-navbar-sticky dx-navbar-expand-lg dx-navbar-dropdown-triangle dx-navbar-autohide">
    <div class="container">

        <a href="index.blade.php" class="dx-nav-logo">
            <img src="assets/images/logo.svg" alt="" width="88px">
        </a>


        <button class="dx-navbar-burger">
            <span></span><span></span><span></span>
        </button>

        <div class="dx-navbar-content">

            <ul class="dx-nav dx-nav-align-left">

        <li class="dx-drop-item active">
            <a href="store.blade.php">
                Store
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="store.blade.php">
                Store
            </a>
        </li>
        <li class=" active">
            <a href="product.blade.php">
                Product
            </a>
        </li>
        <li>
            <a href="checkout.blade.php">
                Checkout
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="blog.blade.php">
                Blog
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="blog.blade.php">
                Blog
            </a>
        </li>
        <li>
            <a href="single-post.blade.php">
                Single Post
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="help-center.blade.php">
                Help Center
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="help-center.blade.php">
                Help Center
            </a>
        </li>
        <li class="dx-drop-item">
            <a href="documentations.blade.php">
                Documentations
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="documentations.blade.php">
                Documentations
            </a>
        </li>
        <li>
            <a href="single-documentation.blade.php">
                Single documentation
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="articles.blade.php">
                Knowledge Base
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="articles.blade.php">
                Knowledge Base
            </a>
        </li>
        <li>
            <a href="single-article-category.blade.php">
                Single Article Category
            </a>
        </li>
        <li>
            <a href="single-article.blade.php">
                Single Article
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="forums.blade.php">
                Forums
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="forums.blade.php">
                Forums
            </a>
        </li>
        <li>
            <a href="topics.blade.php">
                Topics
            </a>
        </li>
        <li>
            <a href="single-topic.blade.php">
                Single Topic
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="ticket.blade.php">
                Ticket System
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="ticket.blade.php">
                Ticket System
            </a>
        </li>
        <li>
            <a href="ticket-submit.blade.php">
                Submit Ticket
            </a>
        </li>
        <li>
            <a href="ticket-submit-2.blade.php">
                Submit Ticket 2
            </a>
        </li>
        <li>
            <a href="single-ticket.blade.php">
                Single Ticket
            </a>
        </li>
                </ul>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="account.html">
                Account
            </a>
        </li>
        <li>
            <a href="account-licenses.blade.php">
                Licenses
            </a>
        </li>
        <li>
            <a href="account-settings.blade.php">
                Settings
            </a>
        </li>
                </ul>
        </li>
            </ul>

            <ul class="dx-nav dx-nav-align-right">
                <li>
                    <div class="dropdown dx-dropdown dx-dropdown-checkout">
                        <a class="dx-nav-icon" href="#" role="button" id="dropdownCheckout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dx-nav-badge">2</span>
                            <span class="icon dx-icon-bag"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownCheckout">
                            <table class="dx-table dx-table-checkout">
                                <tbody>
                                    <tr>
                                        <th scope="row" class="dx-table-checkout-img">
                                            <a href="product.blade.php"><img src="assets/images/product-1-sm.png" alt=""></a>
                                        </th>
                                        <td class="dx-table-checkout-title">
                                            <a href="product.blade.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                                        </td>
                                        <td class="dx-table-checkout-price">
                                            <div class="dx-table-checkout-price">$59</div>
                                        </td>
                                        <td class="dx-table-checkout-delete">
                                            <a href="#"><span class="icon pe-7s-close"></span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="dx-table-checkout-img">
                                            <a href="product.blade.php"><img src="assets/images/product-2-sm.png" alt=""></a>
                                        </th>
                                        <td class="dx-table-checkout-title">
                                            <a href="product.blade.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                                        </td>
                                        <td class="dx-table-checkout-price">
                                            <div class="dx-table-checkout-price">$39</div>
                                        </td>
                                        <td class="dx-table-checkout-delete">
                                            <a href="#"><span class="icon pe-7s-close"></span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between dx-box-content pt-0 pb-0 mt-15 mnb-6">
                                <span>Total Payment:</span><span><strong>$98</strong></span>
                            </div>
                            <div class="dx-box-content">
                                <a href="checkout.blade.php" class="dx-btn dx-btn-md dx-btn-block">Checkout</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>
                <li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;" class="dx-btn dx-btn-md dx-btn-transparent">Sign Up</a></span>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="dx-navbar dx-navbar-fullscreen">
    <div class="container">
        <button class="dx-navbar-burger">
            <span></span><span></span><span></span>
        </button>
        <div class="dx-navbar-content">

            <ul class="dx-nav dx-nav-align-left">

        <li class="dx-drop-item active">
            <a href="store.blade.php">
                Store
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="store.blade.php">
                Store
            </a>
        </li>
        <li class=" active">
            <a href="product.blade.php">
                Product
            </a>
        </li>
        <li>
            <a href="checkout.blade.php">
                Checkout
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="blog.blade.php">
                Blog
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="blog.blade.php">
                Blog
            </a>
        </li>
        <li>
            <a href="single-post.blade.php">
                Single Post
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="help-center.blade.php">
                Help Center
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="help-center.blade.php">
                Help Center
            </a>
        </li>
        <li class="dx-drop-item">
            <a href="documentations.blade.php">
                Documentations
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="documentations.blade.php">
                Documentations
            </a>
        </li>
        <li>
            <a href="single-documentation.blade.php">
                Single documentation
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="articles.blade.php">
                Knowledge Base
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="articles.blade.php">
                Knowledge Base
            </a>
        </li>
        <li>
            <a href="single-article-category.blade.php">
                Single Article Category
            </a>
        </li>
        <li>
            <a href="single-article.blade.php">
                Single Article
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="forums.blade.php">
                Forums
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="forums.blade.php">
                Forums
            </a>
        </li>
        <li>
            <a href="topics.blade.php">
                Topics
            </a>
        </li>
        <li>
            <a href="single-topic.blade.php">
                Single Topic
            </a>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="ticket.blade.php">
                Ticket System
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="ticket.blade.php">
                Ticket System
            </a>
        </li>
        <li>
            <a href="ticket-submit.blade.php">
                Submit Ticket
            </a>
        </li>
        <li>
            <a href="ticket-submit-2.blade.php">
                Submit Ticket 2
            </a>
        </li>
        <li>
            <a href="single-ticket.blade.php">
                Single Ticket
            </a>
        </li>
                </ul>
        </li>
                </ul>
        </li>
        <li class="dx-drop-item">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="account.html">
                Account
            </a>
        </li>
        <li>
            <a href="account-licenses.blade.php">
                Licenses
            </a>
        </li>
        <li>
            <a href="account-settings.blade.php">
                Settings
            </a>
        </li>
                </ul>
        </li>
            </ul>

            <ul class="dx-nav dx-nav-align-right">

                <li>
                    <a class="dx-nav-icon" href="checkout.blade.php">
                        <span class="dx-nav-badge">2</span>
                        <span class="icon dx-icon-bag"></span>
                    </a>
                </li>
                <li>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
                </li>
                <li>
                    <span><a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;" class="dx-btn dx-btn-md dx-btn-transparent">Sign Up</a></span>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- END: Navbar -->



    <div class="dx-main">


<header class="dx-header dx-box-5">
    <div class="bg-image bg-image-parallax">
        <img src="assets/images/bg-header-2.png" class="jarallax-img" alt="">
        <div style="background-color: rgba(27, 27, 27, .8);"></div>
    </div>

    <div class="container mnb-8">
        <h1 class="h4 mb-10 text-white text-center">Quantial – Moving Upon Signs Moveth Lesser</h1>


<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-center">

    <li><a href="index.blade.php">Home</a></li>


    <li><a href="store.blade.php">Store</a></li>

    <li>Quantial – Moving Upon Signs Moveth Lesser</li>


</ul>
<!-- END: Breadcrumbs -->

    </div>
</header>

<div class="dx-box-5 pb-100 bg-grey-6">
    <div class="container">
        <div class="row vertical-gap md-gap">
            <div class="col-lg-8">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-gallery p-10">
                        <a href="assets/images/product-1-lg.png" data-fancybox="images" class="dx-gallery-item">
                            <span class="dx-gallery-item-overlay"><span class="icon pe-7s-exapnd2"></span></span>
                            <img src="assets/images/product-1.png" class="dx-img" alt="">
                        </a>
                        <!-- START: Slider Gallery

                                Additional Classes:
        .dx-slider-arrows (clone arrows)

    Additional Attributes:
        data-swiper-speed                (numbers)
        data-swiper-space                (numbers)
        data-swiper-autoPlay             (numbers)
        data-swiper-slides               (numbers)
        data-swiper-slidesAuto           (true or false)
        data-swiper-arrows-clone         (true or false)
        data-swiper-grabCursor           (true or false)
        data-swiper-lazy                 (true or false)
        data-swiper-breakpoints          (true or false)
        data-swiper-arrows               (true or false)
        data-swiper-pagination           (true or false)
        data-swiper-pagination-dynamic   (true or false)
        data-swiper-pagination-scrollbar (true or false)
        data-swiper-autoHeight           (true or false)
        data-swiper-freeMode             (true or false)
        data-swiper-loop                 (true or false)

                        -->
                        <div class="swiper-container dx-slider dx-slider-gallery mt-10"
                            data-swiper-speed="800"
                            data-swiper-space="10"
                            data-swiper-slides="4"
                            data-swiper-pagination-scrollbar="true">

                            <div class="swiper-wrapper">


                                <div class="swiper-slide">
                                    <a href="assets/images/product-2-lg.png" data-fancybox="images" class="dx-gallery-item">
                                        <span class="dx-gallery-item-overlay dx-gallery-item-overlay-sm"><span class="icon pe-7s-exapnd2"></span></span>
                                        <img src="assets/images/product-2-md.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="assets/images/product-3-lg.png" data-fancybox="images" class="dx-gallery-item">
                                        <span class="dx-gallery-item-overlay dx-gallery-item-overlay-sm"><span class="icon pe-7s-exapnd2"></span></span>
                                        <img src="assets/images/product-3-md.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="assets/images/product-4-lg.png" data-fancybox="images" class="dx-gallery-item">
                                        <span class="dx-gallery-item-overlay dx-gallery-item-overlay-sm"><span class="icon pe-7s-exapnd2"></span></span>
                                        <img src="assets/images/product-4-md.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="assets/images/product-5-lg.png" data-fancybox="images" class="dx-gallery-item">
                                        <span class="dx-gallery-item-overlay dx-gallery-item-overlay-sm"><span class="icon pe-7s-exapnd2"></span></span>
                                        <img src="assets/images/product-5-md.png" alt="">
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="assets/images/product-6-lg.png" data-fancybox="images" class="dx-gallery-item">
                                        <span class="dx-gallery-item-overlay dx-gallery-item-overlay-sm"><span class="icon pe-7s-exapnd2"></span></span>
                                        <img src="assets/images/product-6-md.png" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="swiper-scrollbar"></div>
                        </div>
                    </div>
                    <div class="dx-box-content pt-20 pb-0 d-md-block d-lg-none">
                        <div class="row vertical-gap xs-gap justify-content-between">
                            <div class="col col-sm-5 col-md-4">
                                <a href="checkout.blade.php" class="dx-btn dx-btn-lg dx-btn-block">Buy Now $49</a>
                            </div>
                            <div class="col col-sm-5 col-md-4">
                                <a href="#" class="dx-btn dx-btn-lg dx-btn-dark dx-btn-block">Live Preview</a>
                            </div>
                        </div>
                    </div>
                    <ul class="nav dx-tab mt-35" role="tablist">
                        <li>
                            <a class="active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                        </li>
                        <li>
                            <a id="changelog-tab" data-toggle="tab" href="#changelog" role="tab" aria-controls="changelog" aria-selected="false">Changelog</a>
                        </li>
                        <li>
                            <a href="documentation.html">Documentation <span class="icon fas fa-external-link-alt"></span></a>
                        </li>
                        <li>
                            <a href="articles.blade.php">Knowledge Base <span class="icon fas fa-external-link-alt"></span></a>
                        </li>
                    </ul>
                    <div class="dx-blog-post">
                        <div class="dx-blog-post-box">
                            <div class="tab-content dx-tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                    <p class="mnt-5 mb-40">One after fowl own let over replenish spirit. Created together tree you're given creeping. Image gathered they're meat whose i us rule fish Morning you're wherein. Brought without Image darkness fifth isn't signs may. Divide cattle forth hath living.</p>
                                    <img src="assets/images/product-2.png" alt="" class="dx-img mb-50">

                                    <h3 class="h5">Features List</h3>
                                    <ul class="dx-blog-post-list mnb-8">
                                        <li>Fish he moveth of.</li>
                                        <li>Forth life. Had give.</li>
                                        <li>Cattle. Two and second.</li>
                                        <li>Good make his.</li>
                                        <li>Our deep great good.</li>
                                        <li>I you're Meat. Fourth a.</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="changelog" role="tabpanel" aria-labelledby="changelog-tab">
                                    <div class="dx-changelog mt-4">
                                        <div class="h5">Ver 1.1.0 - 9 Oct 2018</div>
                                        <ul>
                                            <li class="dx-changelog-fix"><span class="dx-changelog-badge">Fix</span>Divided living signs, our wherein cattle. Air moving herb</li>
                                            <li class="dx-changelog-add"><span class="dx-changelog-badge">Add</span>Bring can't You'll fourth forth forth. Fowl man earth</li>
                                            <li class="dx-changelog-add"><span class="dx-changelog-badge">Add</span>Make over whales forth third living creeping all greater god</li>
                                            <li class="dx-changelog-imp"><span class="dx-changelog-badge">Imp</span>So isn't after divide fly to</li>
                                            <li class="dx-changelog-del"><span class="dx-changelog-badge">Del</span>She'd. Their green greater very face seas were years let</li>
                                        </ul>
                                    </div>
                                    <div class="dx-changelog">
                                        <div class="h5">Ver 1.0.1 - 17 Sep 2018</div>
                                        <ul>
                                            <li class="dx-changelog-fix"><span class="dx-changelog-badge">Fix</span>I every years his fill spirit. You. Days his deep</li>
                                        </ul>
                                    </div>
                                    <div class="dx-changelog">
                                        <div class="h5">Ver 1.0.0 - 11 Sep 2018</div>
                                        <ul>
                                            <li class="dx-changelog-up"><span class="dx-changelog-badge">Up</span>Fifth years air thing second day Fruit so give give</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dx-separator"></div>
                        <div class="dx-blog-post-box pt-30 pb-30">
                            <ul class="dx-blog-post-info mnt-15 mnb-1">
                                <li>Date: 11 Sep 2018</li>
                                <li>Views: 163</li>
                            </ul>
                            <ul class="dx-social-links dx-social-links-style-2 mt-15">
                                <li>
                                    <a href="#" class="dx-social-twitter"><span class="icon fab fa-twitter"></span> Twitter</a>
                                </li>
                                <li>
                                    <a href="#" class="dx-social-facebook"><span class="icon fab fa-facebook"></span> Facebook</a>
                                </li>
                                <li>
                                    <a href="#" class="dx-social-google"><span class="icon fab fa-google"></span> Google</a>
                                </li>
                                <li>
                                    <a href="#" class="dx-social-pinterest"><span class="icon fab fa-pinterest"></span> Pinterest</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dx-box mt-55">
                    <h2 class="h4 mb-45">Comments:</h2>

                    <div class="dx-comment">
                        <div>
                            <div class="dx-comment-img">
                                <img src="assets/images/avatar-1.png" alt="">
                            </div>
                            <div class="dx-comment-cont">
                                <a href="#" class="dx-comment-name">John Leonard</a>
                                <a href="#" class="dx-comment-reply">Reply</a>
                                <div class="dx-comment-text">
                                    <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                </div>
                                <div class="dx-comment-date">12 Feb 2018 7:40 pm</div>
                            </div>
                        </div>
                        <div class="dx-comment">
                            <div>
                                <div class="dx-comment-img">
                                    <img src="assets/images/avatar-2.png" alt="">
                                </div>
                                <div class="dx-comment-cont">
                                    <a href="#" class="dx-comment-name">Mercy Shields</a>
                                    <a href="#" class="dx-comment-reply">Reply</a>
                                    <div class="dx-comment-text">
                                        <p class="mb-0">In at nunc sodales lorem blandit egestas. Suspendisse molestie fringilla purus, eget sagittis nunc ornare sit amet. Praesent vitae ligula eu massa rutrum hendrerit non facilisis nulla interdum ut.</p>
                                    </div>
                                    <div class="dx-comment-date">14 Feb 2018 8:29 am</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dx-comment">
                        <div>
                            <div class="dx-comment-img">
                                <img src="assets/images/avatar-3.png" alt="">
                            </div>
                            <div class="dx-comment-cont">
                                <a href="#" class="dx-comment-name">Maria Anthony</a>
                                <a href="#" class="dx-comment-reply">Reply</a>
                                <div class="dx-comment-text">
                                    <p class="mb-0">Donec libero sapien, dapibus id blandit sit amet, iaculis sed ligula. Morbi cursus maximus elementum. Phasellus viverra lacinia sapien sagittis tristique.</p>
                                </div>
                                <div class="dx-comment-date">18 Feb 2018 7:13 pm</div>
                            </div>
                        </div>
                    </div>

                    <form action="#" class="dx-form mt-50">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input class="form-control form-control-style-3" type="text" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control form-control-style-3" type="text" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control form-control-style-3" name="name" rows="8" cols="80" placeholder="Comment..."></textarea>
                            </div>
                            <div class="col-12">
                                <button type="button" name="button" class="dx-btn dx-btn-lg">Post a comment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dx-sticky dx-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">
                    <div class="d-none d-lg-block mb-40">
                        <div class="row vertical-gap xs-gap justify-content-between">
                            <div class="col">
                                <a href="checkout.blade.php" class="dx-btn dx-btn-lg dx-btn-block">Buy Now $49</a>
                            </div>
                            <div class="col">
                                <a href="#" class="dx-btn dx-btn-lg dx-btn-dark dx-btn-block">Live Preview</a>
                            </div>
                        </div>
                    </div>


<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Detail Information
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">Created</div>
        <span>11 February 2018</span>
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">Licenses</div>
        <span>Standard,</span> <span>Extended</span>
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">File Types</div>
        <span>PHP Files,</span> <span>CSS Files,</span> <span>JS Files</span>
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">Compatible With</div>
        <span>WPML,</span> <span>Visual Composer 4.12.x</span>
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">Software Version</div>
        <span>WordPress 4.7.x,</span>
        <span>WordPress 4.6.1,</span>
        <span>WordPress 4.6,</span>
        <span>WordPress 4.5.x,</span>
        <span>WordPress 4.5.2,</span>
        <span>WordPress 4.5.1,</span>
        <span>WordPress 4.5</span>
    </div>
    <div class="dx-widget-information">
        <div class="dx-widget-information-title">Features</div>
        <span>Responsive,</span> <span>Well Documented,</span> <span>Widget Ready</span>
    </div>
</div>


<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Related Products
    </div>
    <a href="product.blade.php" class="dx-widget-products">
        <span class="dx-widget-products-img"><img src="assets/images/product-1-sm.png" alt=""></span>
        <span class="dx-widget-products-text">
            <span class="dx-widget-products-title">Sensific – Saying Beast Lesser for in Fruitful</span>
            <span class="dx-widget-products-price">$59</span>
        </span>
    </a>
    <a href="product.blade.php" class="dx-widget-products">
        <span class="dx-widget-products-img"><img src="assets/images/product-2-sm.png" alt=""></span>
        <span class="dx-widget-products-text">
            <span class="dx-widget-products-title">Minist – Subdue Above for Signs Dry is Have Great</span>
            <span class="dx-widget-products-price">$39</span>
        </span>
    </a>
    <a href="product.blade.php" class="dx-widget-products">
        <span class="dx-widget-products-img"><img src="assets/images/product-3-sm.png" alt=""></span>
        <span class="dx-widget-products-text">
            <span class="dx-widget-products-title">Desty – She'd Under Light Over Multiply Stars Winged</span>
            <span class="dx-widget-products-price">$99</span>
        </span>
    </a>
    <a href="product.blade.php" class="dx-widget-products">
        <span class="dx-widget-products-img"><img src="assets/images/product-4-sm.png" alt=""></span>
        <span class="dx-widget-products-text">
            <span class="dx-widget-products-title">Silies – Grass Living Fly Subdue After Fruitful</span>
            <span class="dx-widget-products-price">$99</span>
        </span>
    </a>
    <a href="product.blade.php" class="dx-widget-products">
        <span class="dx-widget-products-img"><img src="assets/images/product-5-sm.png" alt=""></span>
        <span class="dx-widget-products-text">
            <span class="dx-widget-products-title">Interra – Evening Were Set Beginning Image That One</span>
            <span class="dx-widget-products-price">$59</span>
        </span>
    </a>
</div>


<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Subscribe to Newsletter
    </div>
    <div class="dx-widget-subscribe">
        <div class="dx-widget-text">
            <p>Join the newsletter to receive news, updates, new products and freebies in your inbox.</p>
        </div>
        <form action="#" class="dx-form dx-form-group-inputs">
            <input type="email" name="" value="" aria-describedby="emailHelp" class="form-control form-control-style-2" placeholder="Your Email Address">
            <button class="dx-btn dx-btn-lg dx-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
        </form>
    </div>
</div>


<div class="dx-widget dx-box dx-box-decorated">
    <form action="#" class="dx-form dx-form-group-inputs">
        <input type="text" name="" value="" class="form-control form-control-style-2" placeholder="Search...">
        <button class="dx-btn dx-btn-lg dx-btn-grey dx-btn-grey-style-2 dx-btn-icon"><span class="icon fas fa-search"></span></button>
    </form>
</div>

                </div>
            </div>
        </div>
    </div>
</div>



        <!-- START: Footer -->
<footer class="dx-footer">
    <div class="dx-box-1">
        <div class="container">
            <div class="row vertical-gap lg-gap">

                <div class="col-sm-6 col-lg-3">

<div class="dx-widget-footer">
    <div class="dx-widget-title">
        <a href="index.blade.php" class="dx-widget-logo">
            <img src="assets/images/logo.svg" alt="" width="88px">
        </a>
    </div>
    <div class="dx-widget-text">
        <p class="mb-0">&copy; 2019 <span class="dib">All rights reserved.</span> <span class="dib">Dexad &amp; nK.</span></p>
    </div>
    <div class="dx-widget-text">
        <ul class="dx-social-links mnt-3">
            <li><a href="#"><span class="fab fa-behance-square"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
            <li><a href="#"><span class="fab fa-github"></span></a></li>
        </ul>
    </div>
</div>

                </div>
                <div class="col-sm-6 col-lg-3">

<div class="dx-widget-footer">
    <div class="dx-widget-title">
        Useful Links
    </div>
    <ul class="dx-widget-list">
        <li><a href="store.blade.php">Store</a></li>
        <li><a href="checkout.blade.php">Checkout</a></li>
        <li><a href="forums.blade.php">Forums</a></li>
        <li><a href="blog.blade.php">Blog</a></li>
    </ul>
    <ul class="dx-widget-list">
        <li><a href="help-center.blade.php">Help Center</a></li>
        <li>
            <a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;">Sign Up</a>
        </li>
        <li>
            <a data-fancybox data-touch="false" data-close-existing="true" data-src="#login" href="javascript:;">Log In</a>
        </li>
    </ul>
</div>

                </div>
                <div class="col-sm-6 col-lg-3">

<div class="dx-widget-footer">
    <div class="dx-widget-title">
        Latest Products
    </div>
    <div class="dx-widget-portfolio">
        <a href="product.blade.php">Quantial – Moving Upon Signs Moveth Lesser</a>
        <a href="product.blade.php">Sensific – Saying Beast Lesser for in Fruitful</a>
        <a href="product.blade.php">Minist – Subdue Above for Signs Dry is Have Great</a>
    </div>
</div>

                </div>
                <div class="col-sm-6 col-lg-3">

<div class="dx-widget-footer">
    <div class="dx-widget-title">
        Latest Posts
    </div>
    <a href="single-post.blade.php" class="dx-widget-post">

        <span class="dx-widget-post-text">
            <span class="dx-widget-post-title">The Big Thing in Design</span>
            <span class="dx-widget-post-date">25 Sep 2018</span>
        </span>

    </a>
    <a href="single-post.blade.php" class="dx-widget-post">

        <span class="dx-widget-post-text">
            <span class="dx-widget-post-title">Will Coding Ever Rule the World?</span>
            <span class="dx-widget-post-date">24 Sep 2018</span>
        </span>

    </a>
</div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END: Footer -->

    </div>

    <div class="dx-popup dx-popup-signin" id="login">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-signin-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Log In</h1>

        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                    <span class="fas fa-leaf mr-20"></span><span>Log in with Envato</span>
                </a>
            </div>
            <div class="dx-form-group-md">
                <div class="dx-signin-or">OR</div>
            </div>
            <div class="dx-form-group-md">
                <input type="text" class="form-control form-control-style-4" placeholder="Username Or Email">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Password">
            </div>
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Log In</a>
            </div>
            <div class="dx-form-group-md">
                <div class="d-flex justify-content-between">
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#reset-password" href="javascript:;">Reset your password</a>
                    <a data-fancybox data-touch="false" data-close-existing="true" data-src="#signup" href="javascript:;">Sign Up</a>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="dx-popup dx-popup-signin" id="signup">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="10" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-popup-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Sign Up</h1>

        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup dx-btn-envato d-flex align-items-center justify-content-center">
                    <span class="fas fa-leaf mr-20"></span><span>Sign Up with Envato</span>
                </a>
            </div>
            <div class="dx-form-group-md">
                <div class="dx-signin-or">OR</div>
            </div>
            <div class="dx-form-group-md">
                <input type="text" class="form-control form-control-style-4" placeholder="Username">
            </div>
            <div class="dx-form-group-md">
                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Password">
            </div>
            <div class="dx-form-group-md">
                <input type="password" class="form-control form-control-style-4" placeholder="Confirm password">
            </div>
            <div class="dx-form-group-md">
                <a href="account.html" class="dx-btn dx-btn-block dx-btn-popup">Sign Up</a>
            </div>
        </form>
    </div>
</div>

<div class="dx-popup dx-popup-signin" id="reset-password">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-popup-content dx-signin text-center">
        <h1 class="h3 text-white mb-30">Reset Password</h1>

        <form action="#" class="dx-form">
            <div class="dx-form-group-md">
                <input type="email" class="form-control form-control-style-4" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="dx-form-group-md">
                <button class="dx-btn dx-btn-block dx-btn-popup">Reset My Password</button>
            </div>
        </form>
    </div>
</div>

<div id="subscribe" class="dx-popup dx-popup-modal dx-popup-subscribe">
    <button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="Close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></button>
    <div class="dx-box dx-box-decorated">
        <div class="dx-box-content">
            <h6 class="mnt-5 mnb-5">Subscribe to Newsletter</h6>
        </div>
        <div class="dx-separator"></div>
        <div class="dx-box-content">
            <p class="mnt-5 fs-15">Join the newsletter to receive news, updates, new products and freebies in your inbox.</p>
            <form action="#" class="dx-form dx-form-group-inputs">
                <input type="email" name="" value="" aria-describedby="emailHelp" class="form-control form-control-style-2" placeholder="Your Email Address">
                <button class="dx-btn dx-btn-lg dx-btn-icon"><span class="icon fas fa-paper-plane"></span></button>
            </form>
        </div>
    </div>
</div>




<!-- START: Scripts -->

<!-- Object Fit Images -->
<script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>

<!-- Popper -->
<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Fancybox -->
<script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

<!-- Cleave -->
<script src="assets/vendor/cleave.js/dist/cleave.min.js"></script>

<!-- Validator -->
<script src="assets/vendor/validator/validator.min.js"></script>

<!-- Sticky Kit -->
<script src="assets/vendor/sticky-kit/dist/sticky-kit.min.js"></script>

<!-- Jarallax -->
<script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>

<!-- Isotope -->
<script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>

<!-- ImagesLoaded -->
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

<!-- Swiper -->
<script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>

<!-- Gist Embed -->
<script src="assets/vendor/gist-embed/gist-embed.min.js"></script>

<!-- Bootstrap Select -->
<script src="assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

<!-- Dropzone -->
<script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

<!-- Quill -->
<script src="assets/vendor/quill/dist/quill.min.js"></script>

<!-- The Amdesk -->
<script src="assets/js/amdesk.min.js"></script>
<script src="assets/js/amdesk-init.js"></script>
<!-- END: Scripts -->



</body>
</html>
