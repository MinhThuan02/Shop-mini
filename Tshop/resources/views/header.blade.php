<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            {{-- <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a> --}}
                        </div>
                        <div class="header__top__right__language">
                            <img src="img/language.png" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Spanish</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>

                        @if(!Auth::check())
                        <div class="header__top__right__auth">
                            <a href="/login"><i class="fa fa-user"></i> Đăng nhập</a>
                        </div>
                        @else 
                        <!-- User Profile and Logout -->
                        <div class="header__top__right__user">
                            <img src="img/user-avatar.png" alt="User Avatar" class="user-avatar">
                            <div class="user-name">{{Auth::user()->name}}</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="/profile">Profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-7">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/">Trang chủ</a></li>
                        <li class="{{ request()->is('shop') ? 'active' : '' }}"><a href="/shop">Cửa hàng</a></li>
                        {{-- <li class="#">
                            <a href="/hot-categories">Danh mục</a>
                            <ul class="header__menu__dropdown">
                                @foreach($categories_hot as $dm)
                                    <li><a href="{{ route('shop', $dm->id) }}">{{ $dm->name }}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        <li class="{{ request()->is('blog') ? 'active' : '' }}"><a href="/blog">Tin tức</a></li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="/contact">Liên hệ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2">
                <div class="header__cart">
                    <ul>
                        <li><a href="cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">Tổng: <span>200.000 đ</span></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="header__search">
                    <form action="{{ URL::to('/search') }}" method="GET">
                        {{ csrf_field() }}
                        <input type="text" name="search" placeholder="Tìm kiếm...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
