<td>{{ $itemCart->attributes->name }}</td>
<td><img src="{{ $itemCart->attributes->image }}" class="img-fluid" style="width: 50px;" alt=""></td>
<td>{{ number_format($itemCart->price) }}</td>
<td style="width: 15%">
    <a href="javascript:"><span onclick="minus({{$itemCart->id}})" class="ti-minus mr-3"></span></a>
    <input onchange="cartQuanty({{$itemCart->id}})" style="width: 20%" class="text-center"  value="{{ $itemCart->quantity}}" id="cartInput{{$itemCart->id}}">
    <a href="javascript:" onclick="plus({{$itemCart->id}})"><span class="ti-plus ml-3"></span></a>
</td>
<td>{{  number_format($itemCart->price * $itemCart->quantity)}}</td>
<td><a href=""><span class="ti-trash ml-4"></span></a></td>
