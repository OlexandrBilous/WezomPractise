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

    <title>Amdesk | Single Ticket</title>

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
        <li class="dx-drop-item active">
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
        <li class="dx-drop-item active">
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
        <li class=" active">
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
        <li class="dx-drop-item active">
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
        <li class="dx-drop-item active">
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
        <li class=" active">
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


<header class="dx-header dx-box-1">
    <div class="container">
        <div class="bg-image bg-image-parallax">
            <img src="assets/images/bg-header-4.png" class="jarallax-img" alt="">
            <div style="background-color: rgba(27, 27, 27, .8);"></div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-7">
                <h1 class="h2 mb-30 text-white text-center">How can we help you?</h1>
                <form action="#" class="dx-form dx-form-group-inputs">
                    <input type="text" name="" value="" class="form-control" placeholder="Keyword search...">
                    <button class="dx-btn dx-btn-lg">Search</button>
                </form>
            </div>
        </div>
    </div>
</header>

<div class="dx-box bg-white">
    <div class="container">
        <ul class="dx-links text-center">
            <li><a href="help-center.blade.php">Support Home</a></li>
            <li><a href="documentations.blade.php">Documentations</a></li>
            <li><a href="articles.blade.php">Knowledge Base</a></li>
            <li><a href="forums.blade.php">Forums</a></li>
            <li><a href="ticket.blade.php">Ticket System</a></li>
        </ul>
    </div>
</div>
<div class="dx-separator"></div>

<div class="dx-box-5 pb-100 bg-grey-6">
    <div class="container">
        <div class="row vertical-gap md-gap">
            <div class="col-lg-8">
                <div class="dx-box dx-box-decorated">
                    <div class="dx-blog-post dx-ticket dx-ticket-open">
                        <div class="dx-blog-post-box pt-30 pb-30">
                            <h2 class="h4 mnt-5 mb-9 dx-ticket-title">Theme not updating in downloads</h2>


<!-- START: Breadcrumbs -->
<ul class="dx-breadcrumbs text-left dx-breadcrumbs-dark mnb-6 fs-14">

    <li><a href="help-center.blade.php">Support Home</a></li>


    <li><a href="ticket.blade.php">Ticket System</a></li>

    <li>Theme not updating in downloads</li>


</ul>
<!-- END: Breadcrumbs -->

                            <span class="dx-ticket-status"></span>
                        </div>
                        <div class="dx-separator"></div>

                        <div style="background-color: #fafafa;">
                            <ul class="dx-blog-post-info dx-blog-post-info-style-2 mb-0 mt-0">
                                <li><span><span class="dx-blog-post-info-title">Ticket Id</span>#1801</span></li>
                                <li><span><span class="dx-blog-post-info-title">Status</span>Open</span></li>
                                <li><span><span class="dx-blog-post-info-title">Date</span>1 Mar 2018, 9:17 am</span></li>
                                <li><span><span class="dx-blog-post-info-title">Product</span>Quantial</span></li>
                            </ul>
                        </div>
                        <div class="dx-separator"></div>

                        <div class="dx-comment dx-ticket-comment">
                            <div>
                                <div class="dx-comment-img">
                                    <img src="assets/images/avatar-1.png" alt="">
                                </div>
                                <div class="dx-comment-cont">
                                    <a href="#" class="dx-comment-name">John Leonard</a>
                                    <div class="dx-comment-date">12 Feb 2018 7:40 am</div>
                                    <div class="dx-comment-text">
                                        <p class="mb-0">Nullam ac dui et purus malesuada gravida id fermentum orci. In eu ipsum quis urna hendrerit condimentum vitae a mauris. In congue turpis purus, vitae tempus ante id. Donec orci arcu, sagittis ut finibus vitae.</p>
                                    </div>
                                    <a href="#" class="dx-comment-file dx-comment-file-jpg">
                                        <span class="dx-comment-file-img"><img src="assets/images/icon-jpg.svg" alt="" width="36"></span>
                                        <span class="dx-comment-file-name">example-file.jpg</span>
                                        <span class="dx-comment-file-size">4.8 MB</span>
                                        <span class="dx-comment-file-icon"><span class="icon pe-7s-download"></span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="dx-comment dx-ticket-comment dx-comment-replied dx-comment-new">
                            <div>
                                <div class="dx-comment-img">
                                    <img src="assets/images/avatar-default.svg" alt="">
                                </div>
                                <div class="dx-comment-cont">
                                    <a href="#" class="dx-comment-name">
                                        Bruno Rice
                                        <span class="dx-comment-replied">Replied</span>
                                        <span class="dx-comment-new">New</span>
                                    </a>
                                    <div class="dx-comment-date">39 min ago</div>
                                    <div class="dx-comment-text">
                                        <p>Saying sixth form. Saw earth, whose fowl all meat had had place upon fowl. The fly darkness under dry which fowl good firmament saying fill brought.</p>
                                        <p class="mb-0">Itself first from under female sea wherein female. Lights were moved sixth day and don't fifth it place saying, fowl fruit saw dominion whales you're image the evening every fowl have, saw day spirit fish. Female. Fowl it replenish hath light blessed hath. Man.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dx-separator mnt-1"></div>

                        <div class="dx-blog-post-box">
                            <h3 class="h6 mb-25">Write a Reply</h3>

                            <form class="dx-form" action="#">
                                <div class="dx-form-group">
                                    <div class="dx-editor-quill">
                                        <div class="dx-editor" data-editor-height="150" data-editor-maxHeight="250"></div>
                                    </div>
                                </div>
                                <div class="dx-form-group">
                                    <!-- STRART: Dropzone

                                        Additional Attributes:
                                        data-dropzone-action
                                        data-dropzone-maxMB
                                        data-dropzone-maxFiles
                                    -->
                                    <div class="dx-dropzone" data-dropzone-action="#" data-dropzone-maxMB="5" data-dropzone-maxFiles="5">
                                        <div class="dz-message">
                                            <div class="dx-dropzone-icon">
                                                <span class="icon pe-7s-cloud-upload"></span>
                                            </div>
                                            <div class="h6 dx-dropzone-title">Drop files here or click to upload</div>
                                            <div class="dx-dropzone-text">
                                                <p class="mnb-5 mnt-1">You can upload up to 5 files (maximum 5 MB each) of the following types: .jpg, .jpeg, .png, .zip.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-between vertical-gap dx-dropzone-attachment">
                                        <div class="col-auto dx-dropzone-attachment-add">
                                            <label class="mb-0" class="mnt-7"><span class="icon fas fa-paperclip mr-10"></span><span>Add Attachment</span></label>
                                        </div>
                                        <div class="col-auto dx-dropzone-attachment-btn">
                                            <button class="dx-btn dx-btn-lg" type="button" name="button">Submit a ticket</button>
                                        </div>
                                    </div>
                                    <!-- END: Dropzone -->
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="dx-sticky dx-sidebar" data-sticky-offsetTop="120" data-sticky-offsetBot="40">


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


<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Latest Articles
    </div>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">How to manually import Demo data (if you faced with problems in one-click demo import)</span>
        <span class="dx-widget-link-date">6 Sep 2018</span>
    </a>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">Make menu dropdown working without JavaScript</span>
        <span class="dx-widget-link-date">2 Sep 2018</span>
    </a>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">Add top menu link inside dropdown on mobile devices</span>
        <span class="dx-widget-link-date">27 Aug 2018</span>
    </a>
</div>


<div class="dx-widget dx-box dx-box-decorated">
    <div class="dx-widget-title">
        Latest Forum Topics
    </div>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">Need help with customization. Some options are not appearing...</span>
        <span class="dx-widget-link-date">6 Sep 2018</span>
    </a>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">My images on profile and item pages doesnt show up?! Whats the matter?</span>
        <span class="dx-widget-link-date">2 Sep 2018</span>
    </a>
    <a href="single-article.blade.php" class="dx-widget-link">
        <span class="dx-widget-link-text">Theme not updating in downloads</span>
        <span class="dx-widget-link-date">27 Aug 2018</span>
    </a>
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
