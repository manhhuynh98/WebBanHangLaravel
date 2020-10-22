@extends('layouts.app')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')
<section class="latest-product-area padding-bottom">
    <div class="container">
        @if(session('success')!= null)
            <div class="alert-success">
                {{session('success')}}
            </div>
        @endif
        <table class="table">
            <tr>
                <thead>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Hoạt động</th>
                </thead>
            </tr>
            @foreach($content as $item)
                <tr id="cart-quanty-{{ $item->id }}">
                    <td>{{ $item->attributes->name }}</td>
                    <td><img src="{{ $item->attributes->image }}" class="img-fluid" style="width: 50px;" alt=""></td>
                    <td>{{ number_format($item->price) }}</td>
                    <td style="width: 15%">
                        <a href="javascript:"><span onclick="minus({{$item->id}})" class="ti-minus mr-3"></span></a>
                        <input onchange="cartQuanty({{$item->id}})" style="width: 20%" class="text-center"  value="{{ $item->quantity}}" id="cartInput{{$item->id}}">
                        <a href="javascript:" onclick="plus({{$item->id}})"><span class="ti-plus ml-3"></span></a>
                    </td>
                    <td>{{ number_format($item->price * $item->quantity)}}</td>
                    <td><a href="delete-item-cart/{{$item->id}}"><span class="ti-trash ml-4"></span></a></td>
                </tr>
            @endforeach
        </table>
    </div>
</section>
@endsection

@section('script')
    <script>
        function minus(id) {
            $.ajax({
                method:"GET",
                url: "edit-cart-minus/"+id,
                success: function (response) {
                    $("#cart-quanty-"+id).empty;
                    $("#cart-quanty-"+id).html(response);
                }
            })
        }
        function plus(id) {
            $.ajax({
                method:"GET",
                url: "edit-cart-plus/"+id,
                success: function (response) {
                    $("#cart-quanty-"+id).empty;
                    $("#cart-quanty-"+id).html(response);
                }
            })
        }
        function cartQuanty(id) {
            sl = $("#cartInput"+id).val();
            console.log(sl);
            $.ajax({
                method:"GET",
                url: "edit-cart-quanty/"+id+"/"+sl,
                success: function (response) {
                    $("#cart-quanty-"+id).empty;
                    $("#cart-quanty-"+id).html(response);
                }
            })
        }

    </script>
@endsection
