<td><input disabled class="form-control form-control-plaintext"  name="name" id="name-{{ $product->id }}" type="text" value="{{ $product->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $product->id }}" type="text" value="{{ $product->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="content" id="content-{{ $product->id }}" type="text" value="{{ $product->content }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="price" id="price-{{ $product->id }}" type="text" value="{{ $product->price }}"></td>
<td><select name="idCategory" id="idCategory-{{ $product->id }}" class="form-control form-control-plaintext">
    @foreach ($category as $cat)
        @if ($cat->id == $product->idCategory)
            <option value="{{ $cat->id }}" selected >{{ $cat->name }}</option>
        @else
            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endif
    @endforeach
</select></td>
<td><a href="javacript:" onclick="EditItem({{ $product->id }})" id="btnEdit-{{ $product->id }}" ><span class="ion ion-md-build"></span></a>
<a href="javacript:" hidden onclick="SaveEditItem({{ $product->id }})" id="btnSave-{{ $product->id }}" ><span class="ion ion-md-save"></span></a></td>
<td><a href="admin/product/delete/{{ $product->id }}"><span class="ion ion-md-trash"></span></a></td>
