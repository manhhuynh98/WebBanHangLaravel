<i class="fa fa-shopping-cart"><span id="cartQuanty" class="badge badge-success" style="border-radius: 50%">
    @if (Cart::session(Auth::user()->id)->getTotalQuantity()!=null)
        {{ Cart::session(Auth::user()->id)->getTotalQuantity() }}
    @else
        0
    @endif
</span></i>