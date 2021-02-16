@extends('layouts.layout')
@section('content')

    <div class="dx-main">




        <div class="dx-box-1 pb-100 bg-grey-6">
            <div class="container">
                <div class="row vertical-gap md-gap">
                    <div class="col-lg-8">


                        <div class="dx-blog-item dx-box dx-box-decorated">
                            <a href="single-post.blade.php" class="dx-blog-item-img"><img src="assets/images/blog-3.png" alt=""></a>
                            <div class="dx-blog-item-cont">
                                @foreach($articles as $article)
                                    @include('layouts.acticles')
                                @endforeach
                                {{$articles->links()}}
                                    <!--
                                <a href="single-post.blade.php" class="dx-btn dx-btn-lg">Read More</a> -->
                            </div>
                        </div>


   <!-- Authorisation
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

   -->

@stop


