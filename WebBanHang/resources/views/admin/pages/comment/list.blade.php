@extends('admin.index')
@section('title')
Admin Danh sách bình luận
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách bình luận</h1>
<div class="row justify-content-md-center">
    <div class="col-md-10">
        @if (session('thongbao')!="")
            <div class="alert alert-success">
                {{ session('thongbao') }}
            </div>
        @endif
        <table class="table">
            <thead class="thead-dark">
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">ID người dùng</th>
                  <th scope="col">ID sản phẩm</th>
                  <th scope="col">Nội dung</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
            <tbody>
                @foreach ($comment as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->iduser }}</td>
                        <td>{{ $item->idproduct }}</td>
                        <td>{{ $item->content }}</td>
                        <td><a href="admin/comment/edit/{{ $item->id }}">Sửa</a></td>
                        <td><a href="admin/comment/delete/{{ $item->id }}">Xóa</a></td>
                    </tr>
                @endforeach
        </table>
    </div>
</div>

@endsection
