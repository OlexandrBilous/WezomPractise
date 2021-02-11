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

    <title>Amdesk | Account</title>

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

        <li class="dx-drop-item">
            <a href="store.blade.php">
                Store
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="store.blade.php">
                Store
            </a>
        </li>
        <li>
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
        <li class="dx-drop-item active">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">

        <li class=" active">
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
                    <div class="dropdown dx-dropdown dx-dropdown-signin">
                        <a class="dx-nav-signin" href="account.html" role="button" id="dropdownSignin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dx-nav-signin-img"><img src="assets/images/avatar-1.png" alt=""></span>
                            <span class="dx-nav-signin-name">John Leonard</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownSignin">
                            <li>
                                <a href="account.html"><span class="icon pe-7s-user"></span> Account</a>
                            </li>
                            <li>
                                <a href="account-licenses.blade.php"><span class="icon pe-7s-download"></span> Items & Licenses</a>
                            </li>
                            <li>
                                <a href="account-settings.blade.php"><span class="icon pe-7s-config"></span> Settings</a>
                            </li>
                            <li>
                                <a href="#"><span class="icon pe-7s-back"></span> Logout</a>
                            </li>
                        </ul>
                    </div>
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

        <li class="dx-drop-item">
            <a href="store.blade.php">
                Store
            </a><ul class="dx-navbar-dropdown">

        <li>
            <a href="store.blade.php">
                Store
            </a>
        </li>
        <li>
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
        <li class="dx-drop-item active">
            <a href="account.html">
                Account
            </a><ul class="dx-navbar-dropdown">

        <li class=" active">
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

            <ul class="dx-nav dx-nav-align-right justify-content-between">

                <li>
                    <span>
                        <a class="dx-nav-signin" href="account.html">
                            <span class="dx-nav-signin-img"><img src="assets/images/avatar-1.png" alt=""></span>
                            <span class="dx-nav-signin-name">John Leonard</span>
                        </a>
                    </span>
                </li>
                <li>
                    <a class="dx-nav-icon mnt-8" href="checkout.blade.php">
                        <span class="dx-nav-badge">2</span>
                        <span class="icon dx-icon-bag"></span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- END: Navbar -->



    <div class="dx-main">


<header class="dx-header dx-box-5">
    <div class="container">
        <div class="bg-image bg-image-parallax">
            <img src="assets/images/bg-header-5.png" class="jarallax-img" alt="">
            <div style="background-color: rgba(27, 27, 27, .8);"></div>
        </div>

        <div class="container mnb-8">
            <h1 class="h4 mb-10 text-white text-center">Account</h1>


<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-center">

    <li><a href="index.blade.php">Home</a></li>

    <li>Account</li>


</ul>
<!-- END: Breadcrumbs -->

        </div>
    </div>
</header>

<div class="dx-box-5 bg-grey-6">
    <div class="container">
        <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
            <div class="col-auto">
                <h2 class="h4 mb-0 mt-0">Your Tickets</h2>
            </div>
            <div class="col pl-30 pr-30 d-none d-sm-block">
                <div class="dx-separator ml-10 mr-10"></div>
            </div>
            <div class="col-auto">
                <a href="ticket-submit.blade.php" class="dx-btn dx-btn-md">Submit a ticket</a>
            </div>
        </div>



<a href="single-ticket.blade.php" class="dx-ticket-item dx-ticket-new dx-ticket-open dx-block-decorated">
    <span class="dx-ticket-img">

        <img src="assets/images/avatar-1.png" alt="">

    </span>
    <span class="dx-ticket-cont">
        <span class="dx-ticket-name">
            John Leonard
        </span>
        <span class="dx-ticket-title h5">
            Need help with customization. Some options are not appearing...
        </span>
        <ul class="dx-ticket-info">

            <li>Update: 5 Nov 2018</li>

            <li>Product: Quantial</li>

            <li>Comments: 2</li>


            <li class="dx-ticket-new">New</li>

        </ul>
    </span>
    <span class="dx-ticket-status">
        Open
    </span>
</a>


<a href="single-ticket.blade.php" class="dx-ticket-item dx-ticket-closed dx-block-decorated">
    <span class="dx-ticket-img">

        <img src="assets/images/avatar-default.svg" alt="">

    </span>
    <span class="dx-ticket-cont">
        <span class="dx-ticket-name">
            Bruno Rice
        </span>
        <span class="dx-ticket-title h5">
            Theme not updating in downloads
        </span>
        <ul class="dx-ticket-info">

            <li>Update: 4 Nov 2018</li>

            <li>Product: Sensific</li>

            <li>Comments: 11</li>


        </ul>
    </span>
    <span class="dx-ticket-status">
        Closed
    </span>
</a>

    </div>
</div>
<div class="dx-separator"></div>

<div class="dx-box-5 pb-100">
    <div class="container mt-4 mnb-7">
        <div class="row align-items-center justify-content-between vertical-gap mnt-30 sm-gap mb-50">
            <h2 class="col-auto h4 mb-0 mt-0">Purchased Items</h2>
            <div class="col pl-30 pr-30 d-none d-sm-block">
                <div class="dx-separator ml-10 mr-10"></div>
            </div>
            <div class="col-auto">
                <a href="account-licenses.blade.php" class="dx-btn dx-btn-md">View Licenses</a>
            </div>
        </div>
        <div class="row vertical-gap">

            <div class="col-12 col-md-6 col-lg-4">

<a href="product.blade.php" class="dx-portfolio-item dx-portfolio-item-style-2 dx-block-decorated">
    <span class="dx-portfolio-item-img">
        <img src="assets/images/product-1-sm.png" alt="">
    </span>
    <span class="dx-portfolio-item-title">Quantial – Moving Upon Signs Moveth Lesser</span>
</a>

            </div>
            <div class="col-12 col-md-6 col-lg-4">

<a href="product.blade.php" class="dx-portfolio-item dx-portfolio-item-style-2 dx-block-decorated">
    <span class="dx-portfolio-item-img">
        <img src="assets/images/product-2-sm.png" alt="">
    </span>
    <span class="dx-portfolio-item-title">Sensific – Saying Beast Lesser for in Fruitful</span>
</a>

            </div>
            <div class="col-12 col-md-6 col-lg-4">

<a href="product.blade.php" class="dx-portfolio-item dx-portfolio-item-style-2 dx-block-decorated">
    <span class="dx-portfolio-item-img">
        <img src="assets/images/product-3-sm.png" alt="">
    </span>
    <span class="dx-portfolio-item-title">Minist – Subdue Above for Signs Dry is Have Great</span>
</a>

            </div>
            <div class="col-12 col-md-6 col-lg-4">

<a href="product.blade.php" class="dx-portfolio-item dx-portfolio-item-style-2 dx-block-decorated">
    <span class="dx-portfolio-item-img">
        <img src="assets/images/product-4-sm.png" alt="">
    </span>
    <span class="dx-portfolio-item-title">Desty – She&#39;d Under Light Over Multiply Stars Winged</span>
</a>

            </div>
            <div class="col-12 col-md-6 col-lg-4">

<a href="product.blade.php" class="dx-portfolio-item dx-portfolio-item-style-2 dx-block-decorated">
    <span class="dx-portfolio-item-img">
        <img src="assets/images/product-5-sm.png" alt="">
    </span>
    <span class="dx-portfolio-item-title">Silies – Grass Living Fly Subdue After Fruitful</span>
</a>

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
