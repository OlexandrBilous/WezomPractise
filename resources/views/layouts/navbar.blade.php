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
