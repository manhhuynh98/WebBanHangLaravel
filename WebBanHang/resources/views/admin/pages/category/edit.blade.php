@extends('admin.index')
@section('title')
Admin Danh sách thể loại
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách thể loại</h1>
<div class="row justify-content-md-center">
    <div class="col-md-8">
        <form method="POST" action="admin/category/edit/{{ $category->id }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên thể loại</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{ $category->name }}">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tên không dấu</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="unsigned_name" placeholder="Nhập tên không dấu" value="{{ $category->unsigned_name }}">
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <img src="assets/img/categori/{{ $category->image }}">
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>

@endsection

