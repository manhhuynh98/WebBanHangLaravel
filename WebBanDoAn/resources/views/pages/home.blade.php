@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<!-- Latest Products Start -->
<section class="latest-product-area padding-bottom">
    <div class="container" id="resultsearch">
        <div class="row product-btn d-flex align-items-end">
            <!-- Section Tittle -->
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="section-tittle mb-30">
                    <h2>Hot Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($product as $item)
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="single-product mb-60">
                        <div class="product-img">
                            <a href="product-detail/{{ $item->id }}">
                                <img src="{{ $item->image }}" alt="">
                            </a>
                            <div class="new-product">
                                <span>New</span>
                            </div>
                        </div>
                        <div class="product-caption">
                            <h4><a href="product-detail/{{ $item->id }}">{{ $item->name }}</a></h4>
                            <div class="price">
                                <ul>
                                    <li style="color: #ee4d2d"><span>₫ </span>{{ number_format($item->price) }}</li>
                                    <li><button onclick="addCart({{ $item->id }})"><span class="fa fa-cart-plus black-color"></span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="pagination justify-content-end">
            {{ $product->links() }}
        </div>

        <div class="row product-btn d-flex align-items-end">
            <!-- Section Tittle -->
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="section-tittle mb-30">
                    <h2>Latest Products</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($product as $item)
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="single-product mb-60">
                        <div class="product-img">
                            <img src="{{ $item->image }}" alt="">
                            <div class="new-product">
                                <span>Hot</span>
                            </div>
                        </div>
                        <div class="product-caption">
                            <h4><a href="product-detail/{{ $item->id }}">{{ $item->name }}</a></h4>
                            <div class="price">
                                <ul>
                                    <li style="color: #ee4d2d"><span>₫ </span>{{ number_format($item->price) }}</li>
                                <li><button onclick="addCart({{$item->id}})"><span class="fa fa-cart-plus black-color"></span></button></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination justify-content-end">
            {{ $product->links() }}
        </div>
    </div>
</section>
<!-- Latest Products End -->
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
