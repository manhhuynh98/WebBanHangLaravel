@extends('admin.index')
@section('title')
Admin Danh sách sản phẩm
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách sản phẩm</h1>
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
                  <th scope="col">Tên</th>
                  <th scope="col">Email</th>
                  <th scope="col">Địa chỉ</th>
                  <th scope="col">Ghi nhớ đăng nhập</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Giới tính</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->remember_token }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->sex }}</td>
                        <td><a href="admin/user/edit/{{ $item->id }}">Sửa</a></td>
                        <td><a href="admin/user/delete/{{ $item->id }}">Xóa</a></td>
                    </tr>
                @endforeach
        </table>
    </div>
</div>

@endsection
