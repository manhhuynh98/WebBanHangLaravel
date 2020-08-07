@extends('admin.index')
@section('title')
Admin Danh sách người dùng
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách người dùng</h1>
<div class="row justify-content-md-center">
    @if (count($errors)>0)
        @foreach ($errors->all() as $item)
            <div class="alert alert-warning">
                {{ $item }}
            </div>
        @endforeach
    @endif
    <div class="col-md-7">
        <form method="POST" action="admin/user/edit/{{ $user->id }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên nguời dùng</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{ $user->name }}">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Địa chỉ email</label>
              <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Nhập email" value="{{ $user->email }}" readonly>
            </div>
            <div class="form-group">
              <input type="checkbox" id="changePW" name="changePW">
              <label for="exampleInputPassword1">Đổi mật khẩu</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password" disabled>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Địa chỉ</label>
            <textarea type="text" rows="3" class="form-control" id="exampleInputPassword1" name="address" placeholder="Nhập địa chỉ">{{ $user->address }}</textarea>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Số điện thoại</label>
            <input type="number" rows="3" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Nhập số điện thoại" value="{{ $user->phone }}">
            </div>
            <div class="form-group">
                <label class="col-2">Giới tính:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" value="0"
                        @if ($user->sex==0)
                            {{ "checked" }}
                        @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Nam</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sex" value="1"
                        @if ($user->sex==1)
                            {{ "checked" }}
                        @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Nữ</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-2">Trạng thái:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="0"
                        @if ($user->status==0)
                            {{ "checked" }}
                        @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Thường</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="1"
                        @if ($user->status==1)
                            {{ "checked" }}
                        @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Admin</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function () {
        $("#changePW").change(function(){
            if ($(this).is(":checked")) {
                $("#password").removeAttr('disabled');
            }else{
                $("#password").attr('disabled',"");
            }
        })

    });
</script>
@endsection

