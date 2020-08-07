@extends('admin.index')
@section('title')
Admin Danh sách thể loại
@endsection
@section('content')
<h1 class="text-center"> Admin Danh sách thể loại</h1>
<div class="row justify-content-md-center">
    @if (count($errors)>0)
        @foreach ($errors->all() as $item)
            <div class="alert alert-warning">
                {{ $item }}
            </div>
        @endforeach
    @endif
    <div class="col-md-7">
        <form method="POST" action="admin/product/edit/{{ $product->id }}">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên sản phẩm</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Nhập tên" value="{{ $product->name }}">
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tên không dấu</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="unsigned_name" placeholder="Nhập tên không dấu" value="{{ $product->unsigned_name }}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tiêu đề</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Nhập tiêu đề" value="{{ $product->title }}">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Mô tả</label>
            <textarea type="text" rows="3" class="form-control" id="exampleInputPassword1" name="description" placeholder="Nhập mô tả">{{ $product->description }}</textarea>
            </div>
            <div class="form-group col-6 form-inline">
                <select name="idcategory" id="idcategory" class="form-select">
                    @foreach ($category as $item)

                        <option value="{{ $item->id }}"
                            @if ($product->idcategory == $item->id)
                                {{ "selected" }}
                            @endif
                            >{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-2">Trạng thái:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="0"
                    @if ($product->status==0)
                        {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Cũ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="1"
                    @if ($product->status==1)
                        {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label" for="inlineRadio1">Mới</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-2">Khuyến mãi:</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sale" value="0"
                    @if ($product->status==0)
                        {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label">Không giảm giá</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="sale" value="1"
                    @if ($product->status==1)
                        {{ "checked" }}
                    @endif
                    >
                    <label class="form-check-label">Giảm giá</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá bán</label>
                <input type="number" class="form-control input-number-decrement" name="cost" placeholder="Nhập giá sản phẩm" value="{{ $product->cost }}">
              </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <img src="assets/img/categori/{{ $product->image }}" alt="{{ $product->image }}">
                <input type="file" class="form-control-file" name="image" >
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>
</div>

@endsection



