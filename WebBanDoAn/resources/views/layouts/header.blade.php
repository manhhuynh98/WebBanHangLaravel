<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <ul class="contact-now">
                                    <li>+84-334-814-333</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                                <a href="home"><img class="img-fluid ml-3" src="upload/logo/MH-01.png" style="width: 100px;"></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="home">Trang chủ</a></li>
                                        <li><a href="javascript:void(0)">Thể loại</a>
                                            <ul class="submenu">
                                                @foreach ($category as $item)
                                                <li><a href="product-list">{{ $item->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="product-list">Danh sách sản phẩm</a></li>
                                        <li><a href="about">Giới thiệu</a></li>
                                        <li><a href="contast">Liên hệ</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-flex justify-content-between">
                                <li>
                                    <a href="get-cart" style="padding: 0px; line-height: 50px">
                                        <div id="quanty">
                                            <i class="fa fa-shopping-cart"><span id="cartQuanty" class="badge badge-success" style="border-radius: 50%">
                                                @if (Auth::check())
                                                    {{ Cart::session(Auth::user()->id)->getTotalQuantity() }}
                                                @else
                                                    0
                                                @endif
                                            </span></i>
                                        </div>
                                    </a>
                                </li>
                                @if (isset($infoUser))
                                    <li class="pl-4">
                                        <div>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"
                                                style="padding: 0px; line-height: 50px">
                                                <i class="fa fa-user fa-fw" style="padding: 0px; color: #4e4e4e;"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><i class="fa fa-user"><a href="profile"
                                                            style="color: #4e4e4e">{{ $infoUser->name }}</a></i></li>
                                                @if ($infoUser->status != 0)
                                                <li><i class="fa ti-settings"><a href="admin/home"
                                                            style="color: #4e4e4e">Admin manager</a></i></li>
                                                @endif
                                                <li><i class="fa fa-sign-out-alt"><a href="logout"
                                                            style="color: #4e4e4e">Sign-out</a></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                @else
                                    <li>
                                        <div class="w-75">
                                            <a href="login" class="btn header-btn">Sign in</a>
                                        </div>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
