@extends('default.index')
@section('title')
Đăng Ký
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
                        <h2>Đăng Ký</h2>
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
                        <a href="login" class="btn_3">Đăng nhập ngay</a>
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
                        @else
                            <h3>Chào mừng đến với chúng tôi! <br>
                                Hãy đăng ký tại đây</h3>
                        @endif
                        <form class="row contact_form" action="register" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="name" name="name" value=""
                                    placeholder="Enter FullName">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="email" class="form-control" id="email" name="email" value=""
                                    placeholder="Enter Email">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="password" name="password" value=""
                                    placeholder="Enter Password">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" value=""
                                    placeholder="Enter PasswordAgain">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="address" name="address" value=""
                                    placeholder="Enter Address">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="tel" class="form-control" id="phone" name="phone" value=""
                                    placeholder="Enter Address">
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <div class="col-md-5 p_star">
                                    <input type="radio" name="sex" value="0">
                                    <label for="f-option">Nam</label>
                                </div>
                                <div class="col-md-5 p_star">
                                    <input type="radio" name="sex" value="1">
                                    <label for="f-option">Nữ</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button id="submit" type="submit" value="submit" class="btn_3">
                                    Đăng ký
                                </button>
                            </div>
                            <div class="col-md-9 form-group mx-auto">
                                <button id="submit" type="button" value="submit" class="btn w-100" style="background-color:#32508E ">
                                    login with facebook
                                </button>
                            </div>
                            <div class="col-md-9 form-group mx-auto">
                                <button id="submit" type="button" value="submit" class="btn w-100" style="background-color: #DD4B39">
                                    login with google+
                                </button>
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
