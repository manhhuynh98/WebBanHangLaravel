@extends('default.index')
@section('title')
    Login
@endsection
@section('content')
<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================login_part Area =================-->
<section class="login_part section_padding ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="login_part_text text-center">
                    <div class="login_part_text_iner">
                        <h2>Bạn mới đến cửa hàng của chúng tôi?</h2>
                        <p>Có những tiến bộ được thực hiện trong khoa học và công nghệ
                            hàng ngày, và một ví dụ tốt về điều này là</p>
                        <a href="register" class="btn_3">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="login_part_form">
                    <div class="login_part_form_iner">
                        @if (count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $loi)
                                    {{ $loi }}<br>
                                @endforeach
                            </div>
                        {{-- @elseif (session('loi'))
                        <div class="alert alert-danger">
                            <h3>{{ session('loi') }}</h3>
                        </div> --}}
                        @elseif (session('thongbao'))
                        <div class="alert alert-success">
                            <h3>{{ session('thongbao') }}</h3>
                        </div>
                        @else
                            <h3>Chào mừng trở lại! <br>
                                Hãy đăng nhập tại đây</h3>
                        @endif
                        <form class="row contact_form" action="login" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" value=""
                                    placeholder="Enter Username">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value=""
                                    placeholder="Enter Password">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account d-flex align-items-center">
                                    <input type="checkbox" id="f-option" name="remember">
                                    <label for="f-option">Remember me</label>
                                </div>
                                <button id="submit" type="submit" value="submit" class="btn_3">
                                    đăng nhập
                                </button>
                                <a class="lost_pass" href="forget">Quên mật khẩu?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================login_part end =================-->
@endsection
