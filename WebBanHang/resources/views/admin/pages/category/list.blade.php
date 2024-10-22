@extends('admin.index')
@section('title')
Admin Danh sách thể loại
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách thể loại</h1>
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
                    <th scope="col">Hình ảnh</th>
                    <th scope="col"></th>

                    @cannot('delete', App\Category::class)
                        <th scope="col"></th>
                    @endcannot
                </tr>
                </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->unsigned_name }}</td>
                        <td>{{ $item->image }}</td>
                        <td><a href="admin/category/edit/{{ $item->id }}"><span class="fas fa-edit"></span></a></td>
                        @can('delete', App\Category::class)
                            <td><a href="admin/category/delete/{{ $item->id }}"><span class="fas fa-trash"></span></a></td>
                        @endcan
                    </tr>
                @endforeach
        </table>
    </div>
</div>

@endsection
