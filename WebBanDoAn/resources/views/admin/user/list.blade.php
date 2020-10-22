@extends('admin.layouts.app')
@section('title')
List User
@endsection
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title pt-2">List User</h4>
                        @can('add', 'App\User')
                        <a href="javacript:" id="addItem"><span
                                class="ion ion-md-add font-44 pl-3 float-right"></span></a>
                        @endcan
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-centered mb-0 table-nowrap" id="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Image</th>
                                            <th>Remember Token</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="testid">
                                        @foreach ($user as $item)
                                        <tr id="edit-{{ $item->id }}">
                                            <td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $item->id }}" type="text" value="{{ $item->name }}"></td>
                                            <td><input disabled class="form-control form-control-plaintext" name="email" id="email-{{ $item->id }}" type="text" value="{{ $item->email }}"></td>
                                            <td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $item->id }}" type="text" value="{{ $item->image }}"></td>
                                            <td><input disabled class="form-control form-control-plaintext" name="price" id="price-{{ $item->id }}" type="text" value="{{ $item->remember_token }}" readonly></td>
                                            @can('update', 'App\User')
                                                <td><a href="javacript:" onclick="EditItem({{ $item->id }})" id="btnEdit-{{ $item->id }}" ><span class="ion ion-md-build mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="SaveEditItem({{ $item->id }})" id="btnSave-{{ $item->id }}" ><span class="ion ion-md-save mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="CancelEditItem({{ $item->id }})" id="btnCancel-{{ $item->id }}"><span class="ion ion-md-close"></span></a>
                                                @endcan
                                                @can('delete', 'App\User')
                                                    <a href="admin/user/delete/{{ $item->id }}" id="btnDelete-{{ $item->id }}"><span class="ion ion-md-trash"></span></a></td>
                                                @endcan
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- end .table-responsive-->
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            {{-- style="display:none" --}}
        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    function EditItem(id) {
        $('#btnEdit-'+id).attr('hidden','');
        $('#btnDelete-'+id).attr('hidden','');
        $('#btnSave-'+id).removeAttr('hidden');
        $('#btnCancel-'+id).removeAttr('hidden');
        $('#name-' + id).removeAttr('disabled');
        $('#email-' + id).removeAttr('disabled');
        $('#image-' + id).removeAttr('disabled');
    }

    function CancelEditItem(id){
        $('#btnEdit-'+id).removeAttr('hidden');
        $('#btnDelete-'+id).removeAttr('hidden');
        $('#btnSave-'+id).attr('hidden','');
        $('#btnCancel-'+id).attr('hidden','');
        $('#name-' + id).attr('disabled','');
        $('#email-' + id).attr('disabled','');
        $('#image-' + id).attr('disabled','');
        $.ajax({
            type: "GET",
            url: "admin/user/edit/"+id,
            success: function (response) {
                $('#edit-'+id).empty;
                $('#edit-'+id).html(response);
            }
        });
    }

    function SaveEditItem(id) {
        console.log(id)
        name = $('#name-' + id).val();
        email = $('#email-' + id).val();
        image = $('#image-' + id).val();
        $.ajax({
            type: "POST",
            url: 'admin/user/edit/' + id,
            data: {
                name: name,
                email: email,
                image: image,
                _token: '{{csrf_token()}}',
            },
            success: function(response) {
                $('#edit-' + id).empty;
                $('#edit-' + id).html(response);
                alert('ok');
            },
            error: function() {
                alert('fail');
            }
        });

    }

    $('#addItem').click(function() {
        $('table tbody').append('<tr id="add"> <td><input class="form-control form-control-plaintext" name="name" id="name" type="text"></td><td><input  class="form-control form-control-plaintext" name="email" id="email" type="text"></td> <td><input  class="form-control form-control-plaintext" name="image" id="image" type="text"></td> <td><input  class="form-control form-control-plaintext" name="password" id="password" type="password"></td> <td><a href="javacript:" onclick="btnSave()" ><span class="ion ion-md-save mr-4"></span></a><a href="javacript:" onclick="btnCancel()"><span class="ion ion-md-close"></span></a></td> </tr>');
        $('#addItem').attr('hidden',"");
    });

    function btnSave() {
        name = $('#name').val();
        email = $('#email').val();
        image = $('#image').val();
        password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: 'admin/user/add',
            data: {
                name: name,
                email: email,
                image: image,
                password: password,
                _token: '{{csrf_token()}}',
            },
            success: function(response) {
                console.log(response);
                $('#add').empty;
                $('#add').html(response);
                alert('ok');
                $('#addItem').removeAttr('hidden');
            },
            error: function() {
                alert('fail');
                location.reload();
            }
        });
    }

    function btnCancel() {
        $("tr").remove("#add");
        $('#addItem').removeAttr('hidden');
    }


</script>

@endsection
