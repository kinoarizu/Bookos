    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 text-center text-lg-left">
                    <!-- logo -->
                    <a href="/" class="site-logo">
                        <img src="{{asset('img/logo.png')}}" alt="">
                    </a>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <form action="/result" method="get" class="header-search-form">
                        <input name="cari" type="text" placeholder="Search on divisima ....">
                        <button type="submit"><i class="flaticon-search"></i></button>
                    </form>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="user-panel">
                        @if(!Auth::user())
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="/login">Sign</a> In or <a href="/register">Create Account</a>
                            </div>
                        @else
                            <div class="up-item">
                                <i class="flaticon-profile"></i>
                                <a href="/login">{{Auth::user()->full_name}}</a>
                            </div>
                        @endif
                        <div class="up-item">
                            <div class="shopping-card">
                                <i class="flaticon-bag"></i>
                                <span>{{$quantity}}</span>
                            </div>
                            <a href="/cart">Shopping Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>