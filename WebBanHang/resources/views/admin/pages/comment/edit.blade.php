@extends('admin.index')
@section('title')
Admin Danh sách bình luận
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách bình luận</h1>
<div class="row justify-content-md-center">
    @if (count($errors)>0)
        @foreach ($errors->all() as $item)
            <div class="alert alert-warning">
                {{ $item }}
            </div>
        @endforeach
    @endif
    <div class="col-md-7">
        <form method="POST" action="admin/comment/edit/{{ $comment->id }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">id người dùng</label>
              <input type="text" class="form-control form-control-plaintext"  name="iduser" placeholder="Nhập tên" value="{{ $comment->iduser }}" readonly>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">id sản phẩm</label>
              <input type="text" class="form-control form-control-plaintext" name="idproduct" placeholder="Nhập tên không dấu" value="{{ $comment->idproduct }}" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nội dung</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="content" placeholder="Nhập tiêu đề" value="{{ $comment->content }}">
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>

@endsection



