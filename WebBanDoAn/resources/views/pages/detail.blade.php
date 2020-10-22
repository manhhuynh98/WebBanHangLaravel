@extends('layouts.app')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')
<section class="latest-product-area padding-bottom">
    <div class="container">
        <div class="row product-btn d-flex align-items-end">
            <!-- Section Tittle -->
            <div class="section-tittle mb-30">
                <h2>{{ $product->name }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ $product->image }}">
                <div class="section-tittle mb-30">
                    <h3>Giá bán: {{ number_format($product->price) }}</h3>
                    <div class="d-flex justify-content-end">
                        <button onclick="addCart({{$product->id}})" class=" btn btn-lg">Mua ngay</button>
                    </div>
                </div>


            </div>
            <div class="col-lg-6 pb-5">
                <h3 class="mb-lg-4">Cấu hình | Thông số</h3>
                <div style="max-height: 380px; overflow: auto; background-color: #28a74521;" class="p-3" >
                    {!! $product->detail !!}
                </div>
            </div>
        </div>
        <h3><b>Mô tả chi tiết</b></h3>
        <hr>
        <div class="row pt-3">
            <div class="col-lg-9">
                {!! $product->description !!}
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script>
        function addCart(id){
            $.ajax({
                type: "get",
                url: "add-cart/"+id,
                success: function (response) {
                    $('#quanty').empty;
                    $('#quanty').html(response);
                }
            });
        }
    </script>
@endsection
