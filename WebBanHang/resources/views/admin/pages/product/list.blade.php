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
                  <th scope="col">Tên không dấu</th>
                  <th scope="col">Tiêu đề</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">ID thể loại</th>
                  <th scope="col">Trạng thái</th>
                  <th scope="col">Giảm giá</th>
                  <th scope="col">Giá gốc</th>
                  <th scope="col">Hình ảnh</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
                </thead>
            <tbody>
                @foreach ($product as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->unsigned_name }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->idcategory }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->sale }}</td>
                        <td>{{ $item->cost }}</td>
                        <td>{{ $item->image }}</td>
                        <td><a href="admin/product/edit/{{ $item->id }}"><span class="fas fa-edit"></span></a></td>
                        @can('delete', App\Product::class)
                            <td><a href="admin/product/delete/{{ $item->id }}"><span class="fas fa-trash"></span></a></td>
                        @endcan
                    </tr>
                @endforeach
        </table>
    </div>
</div>

@endsection
