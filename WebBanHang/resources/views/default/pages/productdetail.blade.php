@extends('default.index')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')
<!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="product_img_slide owl-carousel">
                    <div class="single_product_img">
                    <img src="assets/img/categori/{{ $product->image }}" alt="#" class="img-fluid">
                    </div>
                    {{-- <div class="single_product_img">
                    <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
                    </div>
                    <div class="single_product_img">
                    <img src="assets/img/product/single_product.png" alt="#" class="img-fluid">
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-8">
                <div class="single_product_text text-center">
                    <h3>{{ $product->name }}</h3>
                    <p>
                        {{ $product->description }}
                    </p>
                    <div class="card_area">
                        <div class="product_count_area">
                            <p>Số lượng</p>
                            <div class="product_count d-inline-block">
                                <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                <input class="product_count_item input-number" type="text" value="1" min="0" max="10">
                                <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                            </div>
                            <p>$5</p>
                        </div>
                        <div class="add_to_cart">
                            <a href="#" class="btn_3">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-inline">Bình luận</label>
                    <textarea class="form-control col-8" rows="3"></textarea>
                </div>
                <button class="btn btn_3">Bình Luận</button>
            </div>
        </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
@endsection
