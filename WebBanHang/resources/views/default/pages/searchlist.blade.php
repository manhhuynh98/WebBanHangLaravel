@if (isset($product))
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
@else
{{ "không tìm thấy kết quả nào" }}
@endif
