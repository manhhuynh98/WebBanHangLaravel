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
                            <p></p>
                        </div>
                        <div class="add_to_cart">
                            <a href="#" class="btn_3">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="well">
                    @if (isset($infor))
                    <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                    <form action="post-comment/{{ $product->id }}/{{ $infor->id }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                    @endif
                </div>

            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
            @foreach ($product->comment as $cm)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                            <h4 class="media-heading">{{ $cm->user['name'] }}
                            <small>{{ $cm->created_at }}</small>
                        </h4>
                        {{ $cm->content }}
                    </div>
                </div>
                <br>
            @endforeach
            </div>
        </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->
@endsection
