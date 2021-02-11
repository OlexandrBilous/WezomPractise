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

    <title>Amdesk | Checkout</title>

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
        <li>
            <a href="product.blade.php">
                Product
            </a>
        </li>
        <li class=" active">
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
        <li>
            <a href="product.blade.php">
                Product
            </a>
        </li>
        <li class=" active">
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
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <h1 class="h4 mb-10 text-white text-center">Checkout</h1>


<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-center">

    <li><a href="index.blade.php">Home</a></li>


    <li><a href="store.blade.php">Store</a></li>

    <li>Checkout</li>


</ul>
<!-- END: Breadcrumbs -->

            </div>
        </div>
    </div>
</header>

<div class="dx-box-5 pb-100 bg-grey-6">
    <div class="container">
        <div class="row vertical-gap md-gap">
            <div class="col-lg-6">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-box-content">
                        <h2 class="h6 mnt-5 mnb-5">Product Information</h2>
                    </div>
                    <div class="dx-separator"></div>
                    <div class="table-responsive">
                        <table class="dx-table dx-table-checkout">
                            <tbody>
                                <tr>
                                    <th scope="row" class="dx-table-checkout-img">
                                        <a href="product.blade.php">
                                            <img src="assets/images/product-1-sm.png" alt="">
                                        </a>
                                    </th>
                                    <td class="dx-table-checkout-title">
                                        <a href="product.blade.php">Sensific – Saying Beast Lesser for in Fruitful</a>
                                    </td>
                                    <td class="dx-table-checkout-price">
                                        <div class="dx-table-checkout-price">$59</div>
                                    </td>
                                    <td class="dx-table-checkout-quantity">
                                        <form action="#" class="dx-form dx-form-group-inputs dx-form-quantity" role="form">
                                            <a href="#" class="dx-form-quantity-minus">-</a>
                                            <input type="number" name="quantity" value="1" min="1" max="10" class="form-control form-control-style-2 dx-form-quantity-input">
                                            <a href="#" class="dx-form-quantity-plus">+</a>
                                        </form>
                                    </td>
                                    <td class="dx-table-checkout-delete">
                                        <a href="#">
                                            <span class="icon pe-7s-close"></span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="dx-table-checkout-img">
                                        <a href="product.blade.php">
                                            <img src="assets/images/product-2-sm.png" alt="">
                                        </a>
                                    </th>
                                    <td class="dx-table-checkout-title">
                                        <a href="product.blade.php">Minist – Subdue Above for Signs Dry is Have Great</a>
                                    </td>
                                    <td class="dx-table-checkout-price">
                                        <div class="dx-table-checkout-price">$39</div>
                                    </td>
                                    <td class="dx-table-checkout-quantity">
                                        <form action="#" class="dx-form dx-form-group-inputs dx-form-quantity" role="form">
                                            <a href="#" class="dx-form-quantity-minus">-</a>
                                            <input type="number" name="quantity" value="1" min="1" max="10" class="form-control form-control-style-2 dx-form-quantity-input">
                                            <a href="#" class="dx-form-quantity-plus">+</a>
                                        </form>
                                    </td>
                                    <td class="dx-table-checkout-delete">
                                        <a href="#">
                                            <span class="icon pe-7s-close"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="dx-separator"></div>
                    <div class="dx-box-content">
                        <form action="#" class="dx-form mnt-10">
                            <label for="code" class="mnt-6">Discount Code</label>
                            <div class="dx-form-group-inputs">
                                <input type="text" name="" value="" class="form-control form-control-style-2" placeholder="Enter your Code" id="code">
                                <button class="dx-btn dx-btn-lg dx-btn-grey-1">Apply</button>
                            </div>
                        </form>
                    </div>
                    <div class="dx-separator"></div>
                    <div class="dx-box-content text-right">
                        <p class="text-dark-1 mnt-8 mnb-8">Total Payment: <strong class="fs-18">$98</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-box-content">
                        <h2 class="h6 mnt-5 mnb-5">Payments Details</h2>
                    </div>
                    <div class="dx-separator"></div>
                    <div class="dx-box-content">
                        <p class="mnt-6 mb-3 text-dark-1">Choose Payment Method</p>
                        <ul class="nav dx-tab dx-tab-payment mnt-10 row vertical-gap sm-gap" role="tablist">
                            <li class="nav-item col-sm-6">
                                <a class="nav-link active dx-tab-payment-method" id="card-tab" data-toggle="tab" href="#card" role="tab" aria-controls="card" aria-selected="true">
                                    <img src="assets/images/payment-card.png" alt="">
                                    <span class="dx-tab-payment-method-text">Credit Card</span>
                                </a>
                            </li>
                            <li class="nav-item col-sm-6">
                                <a class="nav-link dx-tab-payment-method" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                    <img src="assets/images/payment-paypal.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade show active dx-tab-pane" id="card" role="tabpanel" aria-labelledby="card-tab">
                        <div class="dx-separator"></div>
                        <form action="#" class="dx-form">
                            <div class="dx-box-content">
                                <div class="dx-form-group">
                                    <label for="name-card" class="mnt-7">Name on Card</label>
                                    <input type="text" class="form-control form-control-style-2" id="name-card" placeholder="Enter Full Name">
                                </div>
                                <div class="dx-form-group">
                                    <label for="card-number" class="mnt-7">Card Number</label>
                                    <input type="text" class="form-control form-control-style-2 dx-card-number" name="card-number" id="card-number" placeholder="1234 5678 9012 3456">
                                </div>
                                <div class="dx-form-group">
                                    <div class="row vertical-gap">
                                        <div class="col-sm-8">
                                            <label for="date" class="mnt-7">Expiration Date</label>
                                            <div class="dx-form-group-inputs">
                                                <select class="custom-select form-control form-control-style-2" id="date">
                                                    <option value="1">January</option>
                                                    <option value="2">February</option>
                                                    <option value="3">March</option>
                                                    <option value="4">April</option>
                                                    <option value="5">May</option>
                                                    <option value="6">June</option>
                                                    <option value="7">July</option>
                                                    <option value="8">August</option>
                                                    <option value="9">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11" selected>November</option>
                                                    <option value="12">December</option>
                                                </select>
                                                <select class="custom-select form-control form-control-style-2 w-auto">
                                                    <option value="1">2024</option>
                                                    <option value="2">2023</option>
                                                    <option value="3">2022</option>
                                                    <option value="4">2020</option>
                                                    <option value="5">2019</option>
                                                    <option value="6" selected>2018</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="password" class="mnt-7">CVV Number</label>
                                            <input type="password" class="form-control form-control-style-2 dx-form-quantity-input" min="1" max="999" id="password" placeholder="XXX">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dx-separator"></div>
                            <div class="dx-box-content">
                                <div class="dx-form-group">
                                    <label for="email" class="mnt-7">Email</label>
                                    <input type="email" aria-describedby="emailHelp" class="form-control form-control-style-2" id="email" placeholder="Enter your Email">
                                </div>
                                <div class="dx-form-group">
                                    <label for="first-name" class="mnt-7">First Name</label>
                                    <input type="text" class="form-control form-control-style-2" id="first-name" placeholder="Enter your First Name">
                                </div>
                                <div class="dx-form-group">
                                    <label for="last-name" class="mnt-7">Last Name</label>
                                    <input type="text" class="form-control form-control-style-2" id="last-name" placeholder="Enter your Last Name">
                                </div>
                            </div>
                            <div class="dx-separator"></div>
                            <div class="dx-box-content">
                                <button class="dx-btn dx-btn-xl dx-btn-block">Purchase $98</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade dx-tab-pane" id="paypal" role="tabpanel" aria-labelledby="paypal-tab">
                        <div class="dx-separator"></div>
                        <div class="dx-box-content">
                            <button class="dx-btn dx-btn-xl dx-btn-block">Purchase $98</button>
                        </div>
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