<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
               <div class="container-fluid">
                   <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="upload/logo/logo.png" alt="">
                                </div>
                                <ul class="contact-now">
                                    <li>+84-334-814-333</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                               <ul>
                                   <li><a href="register">Đăng ký </a></li>
                                   <li><a href="product-list">Wish List  </a></li>
                                   <li><a href="cart.html">Shopping</a></li>
                                   <li><a href="cart.html">Cart</a></li>
                                   <li><a href="checkout.html">Checkout</a></li>
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
                              <a href="home"><img src="upload/logo/logo1.png" alt=""></a>
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
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                 </li>
                                <li class=" d-none d-xl-block">
                                    <div class="favorit-items">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </li class=" d-none d-xl-block">
                                <li>
                                    <div class="shopping-card">
                                        <a href="cart.html" style="padding: 0px"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                @if (isset($infor))
                                    <li class=" d-none d-xl-block pl-5">
                                        <div>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0px; line-height: 50px">
                                                <i class="fa fa-user fa-fw" style="padding: 0px; color: #4e4e4e;"></i><i class="fa fa-caret-down" style="padding: 0px; color: #4e4e4e;"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><i class="fa fa-user"><a href="admin/home" style="color: #4e4e4e">{{ $infor->name }}</a></i></li>
                                                {{-- <li><i class="fa ti-settings"><a href="" style="color: #4e4e4e">Setting</a></i></li> --}}
                                                <li><i class="fa fa-sign-out-alt"><a href="logout" style="color: #4e4e4e">Sign-out</a></i></li>
                                            </ul>
                                        </div>
                                    </li>
                                @else
                                    <li class="d-none d-lg-block"> <a href="login" class="btn header-btn">Sign in</a></li>
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
