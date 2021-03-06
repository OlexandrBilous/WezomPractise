


<div class="container">
    <header class="blog-header py-3">
        <a href='{{ route('article-menu') }}' class="dx-nav-logo">
            <img src="assets/images/logo.svg" alt="" width="88px">
        </a>

        @guest
            <div class="col-4 d-flex justify-content-end align-items-center">
            <li>
                <a  href="{{ route('login') }}" class="dx-btn dx-btn-md dx-btn-transparent">{{ __('Войти') }}</a>
            </li>
            @if (Route::has('register'))
                <li>
                    <span><a  href="{{ route('register') }}" class="dx-btn dx-btn-md dx-btn-transparent">{{ __('Регистрация') }}</a></span>
                </li>
            @endif
            </div>
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









            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

                <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
            </div>
        </div>
    </header>
