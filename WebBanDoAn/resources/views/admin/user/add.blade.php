<td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $user->id }}" type="text"
        value="{{ $user->name }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="email" id="email-{{ $user->id }}" type="text"
        value="{{ $user->email }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $user->id }}" type="text"
        value="{{ $user->image }}"></td>
<td><input disabled class="form-control form-control-plaintext" name="price" id="price-{{ $user->id }}" type="text"
        value="{{ $user->remember_token }}" readonly></td>
<td><a href="javacript:" onclick="Edituser({{ $user->id }})" id="btnEdit-{{ $user->id }}"><span
            class="ion ion-md-build"></span></a>
    <a href="javacript:" hidden onclick="SaveEdituser({{ $user->id }})" id="btnSave-{{ $user->id }}"><span
            class="ion ion-md-save"></span></a></td>
<td><a href="admin/user/delete/{{ $user->id }}"><span class="ion ion-md-trash"></span></a></td>
