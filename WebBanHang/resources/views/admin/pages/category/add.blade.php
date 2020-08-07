@extends('admin.index')
@section('title')
Admin Danh sách thể loại
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách thể loại</h1>
<div class="row justify-content-md-center">
    <div class="col-md-8">
        <form method="POST" action="admin/category/add">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên thể loại</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tên không dấu</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="unsigned_name" placeholder="Nhập tên không dấu">
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>

@endsection

