@extends('admin.layouts.app')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title pt-2">List Category</h4>
                        <a href="javacript:" id="addItem"><span class="ion ion-md-add font-44 pl-3 float-right"></span></a>
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
                                            <th>Image</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($category as $item)
                                            <tr  id="edit-{{ $item->id }}">
                                                <td><input disabled class="form-control form-control-plaintext"  name="name" id="name-{{ $item->id }}" type="text" value="{{ $item->name }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $item->id }}" type="text" value="{{ $item->image }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="created_at" id="created_at-{{ $item->id }}" type="text" value="{{ $item->created_at }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="updated_at" id="updated_at-{{ $item->id }}" type="text" value="{{ $item->updated_at }}"></td>
                                                @can('update', 'App\Category')
                                                <td><a href="javacript:" onclick="EditItem({{ $item->id }})" id="btnEdit-{{ $item->id }}" ><span class="ion ion-md-build mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="SaveEditItem({{ $item->id }})" id="btnSave-{{ $item->id }}" ><span class="ion ion-md-save mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="CancelEditItem({{ $item->id }})" id="btnCancel-{{ $item->id }}"><span class="ion ion-md-close"></span></a>
                                                @endcan
                                                @can('delete', 'App\Category')
                                                <a href="admin/category/delete/{{ $item->id }}" id="btnDelete-{{ $item->id }}"><span class="ion ion-md-trash"></span></a></td>
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
    function EditItem(id){
        $('#btnEdit-'+id).attr('hidden','');
        $('#btnDelete-'+id).attr('hidden','');
        $('#btnSave-'+id).removeAttr('hidden');
        $('#btnCancel-'+id).removeAttr('hidden');
        $('#name-'+id).removeAttr('disabled');
        $('#image-'+id).removeAttr('disabled');
        $('#created_at-'+id).removeAttr('disabled');
        $('#updated_at-'+id).removeAttr('disabled');
    }

    function CancelEditItem(id){
        $('#btnEdit-'+id).removeAttr('hidden');
        $('#btnDelete-'+id).removeAttr('hidden');
        $('#btnSave-'+id).attr('hidden','');
        $('#btnCancel-'+id).attr('hidden','');
        $('#name-'+id).attr('disabled','');
        $('#image-'+id).attr('disabled','');
        $('#created_at-'+id).attr('disabled','');
        $('#updated_at-'+id).attr('disabled','');

        $.ajax({
            type: "GET",
            url: "admin/category/edit/"+id,
            success: function (response) {
                $('#edit-'+id).empty;
                $('#edit-'+id).html(response);
            }
        });
    }

    function SaveEditItem(id) {
        name = $('#name-'+id).val();
        image= $('#image-'+id).val();
        created_at= $('#created_at-'+id).val();
        updated_at= $('#updated_at-'+id).val();

        $.ajax({
            type: "POST",
            url: "admin/category/edit/"+id,
            data: {
                name: name,
                image: image,
                created_at: created_at,
                updated_at: updated_at,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                $('#edit-'+id).empty;
                $('#edit-'+id).html(response);
                alert('ok');
            }
        });
    }

    $('#addItem').click(function () {
        $('table tbody').append('<tr id="add"> <td><input class="form-control form-control-plaintext" name="name" id="name" type="text" value="" placeholder="Hãy nhập thông tin" ></td> <td><input  class="form-control form-control-plaintext" name="image" id="image" type="text" value="" placeholder="Hãy nhập thông tin"></td> <td><input  class="form-control form-control-plaintext" name="created_at" id="created_at" type="text" value="" placeholder="Hãy nhập thông tin"></td> <td><input  class="form-control form-control-plaintext" name="updated_at" id="updated_at" type="text" value="" placeholder="Hãy nhập thông tin"></td> <td><a href="javacript:" onclick="btnSave()" id="btnSave"><span class="ion ion-md-save mr-4"></span></a><a href="javascipt:" onclick="btnCancel()"><span class="ion ion-md-close"></span></a></td> </tr>');
        $('#addItem').attr('hidden',"");
    })

    function btnSave(){
        name = $('#name').val();
        image = $('#image').val();
        created_at = $('#created_at').val();
        updated_at = $('#updated_at').val();

        $.ajax({
            type: "POST",
            url: "admin/category/add",
            data: {
                name: name,
                image: image,
                created_at: created_at,
                updated_at: updated_at,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                $('#add').empty;
                $('#add').html(response);
                $('#addItem').removeAttr('hidden');
                alert('ok');
            }
        });
    }

    function btnCancel() {
        $( "tr" ).remove( "#add" );
        $('#addItem').removeAttr('hidden');
    }


</script>

@endsection
