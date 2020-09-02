<td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $user->id }}" type="text"
        value="{{ $user->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="email" id="email-{{ $user->id }}" type="text"
        value="{{ $user->email }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $user->id }}" type="text"
        value="{{ $user->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="price" id="price-{{ $user->id }}" type="text"
        value="{{ $user->remember_token }}" readonly></td>

@can('update', 'App\User')
<td><a href="javacript:" onclick="EditItem({{ $user->id }})" id="btnEdit-{{ $user->id }}"><span
            class="ion ion-md-build mr-4"></span></a>
    <a href="javacript:" hidden onclick="SaveEditItem({{ $user->id }})" id="btnSave-{{ $user->id }}"><span
            class="ion ion-md-save mr-4"></span></a>
    <a href="javacript:" hidden onclick="CancelEditItem({{ $user->id }})" id="btnCancel-{{ $user->id }}"><span
            class="ion ion-md-close"></span></a>
    @endcan
    @can('delete', 'App\User')
    <a href="admin/user/delete/{{ $user->id }}" id="btnDelete-{{ $user->id }}"><span
            class="ion ion-md-trash"></span></a></td>
@endcan
