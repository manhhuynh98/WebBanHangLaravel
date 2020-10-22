<td><input disabled class="form-control form-control-plaintext"  name="name" id="name-{{ $product->id }}" type="text" value="{{ $product->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $product->id }}" type="text" value="{{ $product->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="content" id="content-{{ $product->id }}" type="text" value="{{ $product->content }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="p-price" id="p-price-{{ $product->id }}"
    type="text" value="{{ number_format($product->purchase_price) }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="s-price" id="s-price-{{ $product->id }}"
    type="text" value="{{ number_format($product->sale_price) }}"></td>
<td><select name="idCategory" id="idCategory-{{ $product->id }}" class="form-control form-control-plaintext">
    @foreach ($category as $cat)
        @if ($cat->id == $product->idCategory)
            <option value="{{ $cat->id }}" selected >{{ $cat->name }}</option>
        @else
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endif
    @endforeach
</select></td>
@can('update', 'App\Product')
<td><a href="javacript:" onclick="EditItem({{ $product->id }})" id="btnEdit-{{ $product->id }}"><span
            class="ion ion-md-build mr-4"></span></a>
    <a href="javacript:" hidden onclick="SaveEditItem({{ $product->id }})" id="btnSave-{{ $product->id }}"><span
            class="ion ion-md-save mr-4"></span></a>
    <a href="javacript:" hidden onclick="CancelEditItem({{ $product->id }})" id="btnCancel-{{ $product->id }}"><span
            class="ion ion-md-close"></span></a>
    @endcan
    @can('delete', 'App\Product')
    <a href="admin/user/delete/{{ $product->id }}" id="btnDelete-{{ $product->id }}"><span
            class="ion ion-md-trash"></span></a></td>
@endcan

