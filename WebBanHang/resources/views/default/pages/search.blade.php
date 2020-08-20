@if (isset($product))
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
@else
{{ "không tìm thấy kết quả nào" }}
@endif
