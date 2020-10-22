@extends('default.index')
@section('css')
    .emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
    }
    .profile-img{
    text-align: center;
    }
    .profile-img img{
    width: 70%;
    height: 100%;
    }
    .profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
    }
    .profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
    }
    .profile-head h5{
    color: #333;
    }
    .profile-head h6{
    color: #0062cc;
    }
    .profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
    }
    .proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
    }
    .proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
    }
    .profile-head .nav-tabs{
    margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
    }
    .profile-work{
    padding: 14%;
    margin-top: -15%;
    }
    .profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
    }
    .profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
    }
    .profile-work ul{
    list-style: none;
    }
    .profile-tab label{
    font-weight: 600;
    }
    .profile-tab p{
    font-weight: 600;
    color: #0062cc;
    }
    .row label{
    padding: 6px;
    }

@endsection
@section('title')
    Thông tin cá nhân
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
                            <h2>Thông tin cá nhân</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <div class="container emp-profile">

        <form method="post" action="profile">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                        <div class="file btn btn_1 btn-primary">
                            Change Photo
                            <input type="file" name="file"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ $user->name }}
                        </h5>

                        @if (count($errors)>0)
                            @foreach ($errors->all() as $item)
                                {{ $item }}
                            @endforeach
                        @endif
                        @if (session('thongbao')!="")
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                        <p class="proile-rating">Tài khoản : <span>Admin</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đổi mật khẩu</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn_3" id="btnEdit" name="btnAddMore">Edit Profile</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br/>
                        <a href="">Bootsnipp Profile</a><br/>
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br/>
                        <a href="">Web Developer</a><br/>
                        <a href="">WordPress</a><br/>
                        <a href="">WooCommerce</a><br/>
                        <a href="">PHP, .Net</a><br/>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="name" value="{{ $user->name }}" disabled class="form-control-plaintext edit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="email" value="{{ $user->email }}" readonly class="form-control-plaintext">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="phone" value="{{ $user->phone }}" disabled class="form-control-plaintext edit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="text" name="address" value="{{ $user->address }}" disabled class="form-control-plaintext edit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Giới tính</label>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input edit" type="radio" name="sex" value="0"
                                               @if ($user->sex == 0)
                                               {{ "checked" }}
                                               @endif
                                               disabled>
                                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input edit" type="radio" name="sex" value="1"
                                               @if ($user->sex == 1)
                                               {{ "checked" }}
                                               @endif
                                               disabled>
                                        <label class="form-check-label" for="inlineRadio1">Nữ</label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mật khẩu cũ</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="password" name="passwordOld">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Mật khẩu mới</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="password" name="passwordNew">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Nhập lại mật khẩu</label>
                                </div>
                                <div class="col-md-6 ">
                                    <input type="password" name="passwordAgain">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"><button type="submit" class="btn btn_3 " id="btnsave" hidden >save</button></div>
                            <div class="col-md-3"><button type="reset" class="btn btn_3 " id="btncancel" hidden >cancel</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $("#btnEdit").click(function () {
            $(".edit").removeAttr('disabled');
            $("#btnsave").removeAttr('hidden');
            $("#btncancel").removeAttr('hidden');
            $("#btnEdit").attr('hidden','');
        });
        $("#btncancel").click(function () {
            $(".edit").attr('disabled','');
            $("#btnsave").attr('hidden','');
            $("#btncancel").attr('hidden','');
            $("#btnEdit").removeAttr('hidden');
        })
        $('#profile-tab').click(function (param) {
            $(".edit").removeAttr('disabled');
            $("#btnsave").removeAttr('hidden');
            $("#btncancel").removeAttr('hidden');
            $("#btnEdit").attr('hidden','');
        })
        $("#home-tab").click(function () {
            $(".edit").attr('disabled','');
            $("#btnsave").attr('hidden','');
            $("#btncancel").attr('hidden','');
            $("#btnEdit").removeAttr('hidden');
        })
    </script>
@endsection
