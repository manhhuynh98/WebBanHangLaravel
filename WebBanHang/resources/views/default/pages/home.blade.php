@extends('default.index')
@section('css')
<style>
    .price li a i:hover{
        color: blueviolet !important;
    }
</style>
@endsection
@section('title')
    Home
@endsection
@section('content')
<main>
    @include('default.layout.slide')

    <!-- Category Area Start-->
    <section class="category-area section-padding30">
        <div class="container-fluid">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-85">
                        <h2>Shop theo thể loại</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($category as $item)
                <div class="col-xl-4 col-lg-6">
                    <div class="single-category mb-30">
                        <div class="category-img">
                            <img src="assets/img/categori/{{ $item->image }}" alt="">
                            <div class="category-caption">
                                <h2>Owmen`s</h2>
                                <span class="best"><a href="#">{{ $item->name }}</a></span>
                                <span class="collection">Bộ sưu tập mới</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Category Area End-->
    <!-- Latest Products Start -->
    <section class="latest-product-area padding-bottom">
        <div class="container" id="resultsearch">
            <div class="row product-btn d-flex justify-content-end align-items-end">
                <!-- Section Tittle -->
                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="section-tittle mb-30">
                        <h2>Latest Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                </div>
            </div>
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- card one -->

                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            @foreach ($product as $item)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-product mb-60">
                                        <div class="product-img">
                                            <img src="assets/img/categori/{{ $item->image }}" alt="">
                                            <div class="new-product">
                                                <span>New</span>
                                            </div>
                                        </div>
                                        <div class="product-caption">
                                            <div class="price">
                                                <ul>
                                                    <li><a onclick="AddCart({{ $item->id }})" href="javascript:"><i class="fas fa-cart-plus" style="color: darkgoldenrod"></i> Thêm vào giỏ</a></li>
                                                    <li><a href=""><i class="far fa-heart" style="color: darkgoldenrod"></i> Yêu thích</a></li>
                                                </ul>
                                            </div>
                                            <h4><a href="product-detail/{{ $item->id }}">{{ $item->name }}</a></h4>
                                            <div class="price">
                                                <ul>
                                                    <li style="color: #ee4d2d"><span>₫ </span>{{ number_format($item->cost) }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                <!-- Card two -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card three -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- card foure -->
                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product1.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product2.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product3.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product4.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product5.png" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="assets/img/categori/product6.png" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Nav Card -->
        </div>
    </section>
    <!-- Latest Products End -->

</main>
@endsection

@section('script')
<script>
    $('#inputsearch').change(function () {
        var key = $('#inputsearch').val();
        $.ajax({
            type: "GET",
            url: "search/"+key,
            success: function (response) {
                $('#resultsearch').empty();
                $('#resultsearch').html(response);
            },
            error: function() {
                window.location.reload();
            }

        });
    });
</script>
@endsection
