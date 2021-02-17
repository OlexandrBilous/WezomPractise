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

        <a href='{{ route('article-menu') }}' class="dx-nav-logo">
            <img src="assets/images/logo.svg" alt="" width="88px">
        </a>


        <button class="dx-navbar-burger">
            <span></span><span></span><span></span>
        </button>

        <nav class="navbar-nav mr-auto row">
            @widget('categories')
        </nav>


            <!-- Authentication Links -->
            @guest
                <li>
                    <a  href="{{ route('login') }}" class="dx-btn dx-btn-md dx-btn-transparent">{{ __('Войти') }}</a>
                </li>
                @if (Route::has('register'))
                <li>
                    <span><a  href="{{ route('register') }}" class="dx-btn dx-btn-md dx-btn-transparent">{{ __('Регистрация') }}</a></span>
                </li>
                @endif
                @else
                <div class="dropdown dx-dropdown dx-dropdown-signin">
                    <a class="dx-nav-signin" href="account.html" role="button" id="dropdownSignin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="dx-nav-signin-img"><img src="assets/images/avatar-1.png" alt=""></span>
                        <span class="dx-nav-signin-name">
                            {{ Auth::user()->name }} </span>
                        </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownSignin">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><span class="icon pe-7s-back"></span> Выйти</a>
                        </li>
                    </ul>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </ul>
        </div>
    </div>
</nav>


<!-- END: Navbar -->
