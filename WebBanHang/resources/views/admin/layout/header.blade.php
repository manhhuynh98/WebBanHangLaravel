<header>
    <!-- Header Start -->
   <div class="header-area">
        <div class="main-header ">
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
                                        <li><a href="admin/home">Trang chủ</a></li>
                                        <li><a href="javascript:void(0)">Thể loại</a>
                                            @can('view', App\Category::class)
                                                <ul class="submenu">
                                                    <li><a href="admin/category/list">Danh sách</a></li>
                                                    @can('create', App\Category::class)
                                                        <li><a href="admin/category/add">Thêm</a></li>
                                                    @endcan
                                                </ul>
                                            @endcan
                                        </li>
                                        <li><a href="javascript:">Sản phẩm</a>
                                            @can('view', App\Product::class)
                                                <ul class="submenu">
                                                    <li><a href="admin/product/list">Danh sách</a></li>
                                                    @can('create', App\Product::class)
                                                        <li><a href="admin/product/add">Thêm</a></li>
                                                    @endcan
                                                </ul>
                                            @endcan
                                        </li>
                                        <li><a href="javascript:">Người dùng</a>
                                            @can('view', App\User::class)
                                                <ul class="submenu">
                                                    <li><a href="admin/user/list">Danh sách</a></li>
                                                    <li><a href="admin/user/add">Thêm</a></li>
                                                </ul>
                                            @endcan
                                        </li>
                                        <li><a href="javascript:">Bình luận</a>
                                            @can('view', App\User::class)
                                                <ul class="submenu">
                                                    <li><a href="admin/comment/list">Danh sách</a></li>
                                                </ul>
                                            @endcan
                                        </li>
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
                                @if (isset($infor))
                                    <li class=" d-none d-xl-block pl-5">
                                        <div>
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 0px; line-height: 50px">
                                                <i class="fa fa-user fa-fw" style="padding: 0px; color: #4e4e4e;"></i><i class="fa fa-caret-down" style="padding: 0px; color: #4e4e4e;"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><i class="fa fa-user"><a href="javascript:void(0)" style="color: #4e4e4e">{{ $infor->name }}</a></i></li>
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
                    </div>
                </div>
           </div>
        </div>
   </div>
    <!-- Header End -->
</header>
