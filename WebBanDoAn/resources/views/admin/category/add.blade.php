
<td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $category->id }}" type="text" value="{{ $category->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $category->id }}" type="text" value="{{ $category->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="created_at" id="created_at-{{ $category->id }}" type="text" value="{{ $category->created_at }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="updated_at" id="updated_at-{{ $category->id }}" type="text" value="{{ $category->updated_at }}"></td>
<td><a href="javacript:" onclick="EditItem({{ $category->id }})" id="btnEdit-{{ $category->id }}"><span class="ion ion-md-build"></span></a>
    <a href="javacript:" onclick="SaveEditItem({{ $category->id }})" hidden id="btnSave-{{ $category->id }}"><span class="ion ion-md-save"></span></a></td>
<td><a href="admin/category/delete/{{ $category->id }}"><span class="ion ion-md-trash"></span></a></td>
