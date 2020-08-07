@extends('default.index')
@section('title')
Danh sách sản phẩm
@endsection
@section('content')

<!-- slider Area Start-->
 <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Danh sách sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- product list part start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="product_sidebar">
                    <div class="single_sedebar">
                        <form action="#">
                            <input type="text" name="#" placeholder="Search keyword">
                            <i class="ti-search"></i>
                        </form>
                    </div>
                    <div class="single_sedebar">
                        <div class="select_option">
                            <div class="select_option_list">Thể loại <i class="right fas fa-caret-down"></i> </div>
                            <div class="select_option_dropdown">
                                @foreach ($category as $item)
                                    <p><a href="#">{{ $item->name }}</a></p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="product_list">
                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="assets/img/categori/{{ $item->image }}" alt="" class="img-fluid">
                                    <h3> <a href="product-detail/{{ $item->id }}">{{ $item->name }}</a> </h3>
                                    <p>From {{ $item->cost }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="load_more_btn text-center">
                        <a href="#" class="btn_3">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product list part end-->
@endsection
