<form action="test" method="POST">
    @csrf
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
<div class="col-md-3"><button type="submit" class="btn btn_3 " id="btnsave" >save</button></div>
</form>
