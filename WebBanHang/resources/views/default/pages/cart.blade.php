@extends('default.index')
@section('css')
@endsection
@section('title')
Danh Sách Giỏ Hàng
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
                        <h2>Danh Sách Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!--================Cart Area =================-->
<section class="cart_area section_padding">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table" id="change-list-cart">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá tiền</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (Session::has("Cart") != null)
                            @foreach (Session::get('Cart')->products as $item)
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="d-flex">
                                                <img src="assets/img/categori/{{ $item['productInfo']->image }}" alt="" />
                                            </div>
                                            <div class="media-body">
                                                <p>{{ $item['productInfo']->name }}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h5 id="cost">₫{{ number_format($item['productInfo']->cost) }}</h5>
                                    </td>
                                    <td>
                                        <div class="product_count d-inline-block">
                                            <span class="product_count_item input-number-increment"> <i class="ti-minus"></i></span>
                                            <input class="product_count_item input-number" type="text" value="{{ $item['quanty'] }}" id="change-quanty-{{ $item['productInfo']->id }}" onchange="getQuanty({{ $item['productInfo']->id }})">
                                            <span class="product_count_item input-number-decrement"> <i class="ti-plus"></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div id="totalPrice">
                                            <h5>₫{{ number_format($item['price']) }}</h5>
                                        </div>

                                    </td>
                                    <td>
                                        <a href="javacript:" onclick="DeleteListItemCart({{ $item['productInfo']->id }})">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            <tr>
                                <th>
                                    <h5>Tổng tiền phải thanh toán</h5>
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>₫{{ number_format(Session::get('Cart')->totalPrice) }}</h5>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Shipping</h5>
                                </td>
                                <td>
                                    <div class="shipping_box">
                                        <ul class="list">
                                            <li>
                                                Ship COD
                                                <input type="radio" name="shipping" aria-label="Radio button for following text input">
                                            </li>
                                            <li>
                                                Thanh toán qua thẻ ATM
                                                <input type="radio" name="shipping" aria-label="Radio button for following text input">
                                            </li>
                                            <li>
                                                Thanh toán tại quầy
                                                <input type="radio" name="shipping" aria-label="Radio button for following text input">
                                            </li>
                                        </ul>
                                        <h6>
                                            Calculate Shipping
                                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </h6>
                                        <div>

                                                <input class="form-control post_code" type="text"
                                                @if(isset($infor))
                                                value="{{ $infor->address }}"
                                                @endif>

                                        </div>
                                        <div class="mt-2">
                                            <input class="form-control post_code" type="text" placeholder="Số nhà/địa chỉ nhận" />
                                        </div>
                                        <a class="btn_1" href="#">mua hàng</a>
                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <div class="checkout_btn_inner float-right">
                    @if (Session::has("Cart") != null)
                    <a class="btn_1" href="#">Continue Shopping</a>
                    <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->
@endsection

@section('script')
<script>
    function RenderListCart(response){
        var quanty = $('#getQuanty').val();
        $('#Quanty').html(quanty);
        $('#change-list-cart').html("");
        $('#change-list-cart').html(response);
        window.location.reload();
    }

    function DeleteListItemCart(id) {
        $.ajax({
            type: "GET",
            url: "delete-list-cart/"+id,
            success: function (response) {
                RenderListCart(response);
                alertify.set('notifier','position', 'bottom-left');
                alertify.success('Đã xóa khỏi giỏ hàng');
            }
        });
    }

    function getQuanty(id) {
        $.ajax({
            type: "GET",
            url: "update-list-cart/"+id+"/"+$("#change-quanty-"+id).val(),
            success: function (response) {
                RenderListCart(response);
                // alertify.set('notifier','position', 'bottom-left');
                // alertify.success('Đã xóa khỏi giỏ hàng');
            }
        });
    }
</script>

@endsection
