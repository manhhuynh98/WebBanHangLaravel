
<td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $category->id }}" type="text" value="{{ $category->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $category->id }}" type="text" value="{{ $category->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="created_at" id="created_at-{{ $category->id }}" type="text" value="{{ $category->created_at }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="updated_at" id="updated_at-{{ $category->id }}" type="text" value="{{ $category->updated_at }}"></td>
@can('update', 'App\Category')
    <td><a href="javacript:" onclick="EditItem({{ $category->id }})" id="btnEdit-{{ $category->id }}" ><span class="ion ion-md-build mr-4"></span></a>
        <a href="javacript:" hidden onclick="SaveEditItem({{ $category->id }})" id="btnSave-{{ $category->id }}" ><span class="ion ion-md-save mr-4"></span></a>
        <a href="javacript:" hidden onclick="CancelEditItem({{ $category->id }})" id="btnCancel-{{ $category->id }}"><span class="ion ion-md-close"></span></a>
@endcan
@can('delete', 'App\Category')
    <a href="admin/category/delete/{{ $category->id }}" id="btnDelete-{{ $category->id }}"><span class="ion ion-md-trash"></span></a></td>
@endcan

