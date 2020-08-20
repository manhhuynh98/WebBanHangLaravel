@if ($newCart != null)
    <div class="select-items">
        <table>
            <tbody>
                @foreach ($newCart->products as $item)
                    <tr>
                        <td class="si-pic"><img src="assets/img/categori/{{ $item['productInfo']->image }}" style="width: 70px"></td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p>{{ number_format($item['productInfo']->cost) }} x {{ $item['quanty'] }}</p>
                                <h6>{{ $item['productInfo']->name }}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i class="ti-close" data-id="{{ $item['productInfo']->id }}"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="select-total">
        <span>total:</span>
        <h5>₫{{ number_format($newCart->totalPrice) }}</h5>
    </div>
    <div>
        <input type="text" id="getQuanty" value="{{ Session::get('Cart')->totalQuanty }}" hidden>
    </div>
@endif
