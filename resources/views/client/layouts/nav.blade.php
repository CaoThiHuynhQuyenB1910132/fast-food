<div class="hero_area">
<div class="bg-box">
    <img src="client/assets/images/hero-bg.jpg" alt="">
</div>
<header class="header_section">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('/')}}">
                        <span>
                            King Food
                        </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mx-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('shop')}}">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="book.html">Book Table</a>
                    </li>
                </ul>
                <div class="wrap-icon-header flex-w flex-r-m h-full wrap-menu-click p-t-8">
                <div class="user_option">

                    <a href="" class="user_link">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </a>

                    <a href="{{ route('cart.detail') }}" class="icon-header-item flex-c-m trans-04 icon-header-noti"
                       data-notify="
                       @if(Auth::check())
                            {{!is_null(\App\Models\Cart::where('user_id', Auth::user()->id)->get()) ? count(\App\Models\Cart::where('user_id', Auth::user()->id)->get()) : 0 }}
                       @endif">
                        <img src="client/new/images/icons/icon-cart.png" alt="CART">
                    </a>

                    <form class="form-inline">
                        <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>

                    <a href="" class="order_online">
                        Order Now
                    </a>

                </div>
                </div>
            </div>
        </nav>
    </div>
</header>
</div>

