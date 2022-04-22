<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="top-text">
                        <p>Free shipping to Dasianfood on all orders above $10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-buttom">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-lg-1 col-xl-1">
                    <div class="logo"><a href="{{ URL::to('/') }}"><img
                                src="{{ asset('front/images/logo.png') }}" alt="{{ $setting[0]->webtitle }}"></a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5 col-xl-5">
                    <div class="search">
                        <form>
                            <input id="search-input" type="search" />
                            <button type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="menu_w">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul>
                                    {{-- <li><a href="{{ URL::to('/') }}">Home </a></li>
                                    <li><a href="{{ route('allproduct') }}">Products</a></li>
                                    <li> <a href="{{ URL::to('contactus') }}">Contact us</a> </li> --}}
                                    <li><a href="{{ route('userlogin') }}">Login</a></li>
                                    <li><a href="{{ route('supplier') }}">Merchant Supplier</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span
                            class="item">1</span><span class="price">$ 2</span></div>
                </div>
            </div>
        </div>
    </div>
</header>
