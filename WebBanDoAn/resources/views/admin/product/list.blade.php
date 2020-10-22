@extends('admin.layouts.app')

@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title pt-2">List Product</h4>
                        @can('add', 'App\Product')
                            <a href="javacript:" id="addItem"><span class="ion ion-md-add font-44 pl-3 float-right"></span></a>
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
                                            <th>Image</th>
                                            <th>Content</th>
                                            <th>Purchase price </th>
                                            <th>Sale price </th>
                                            <th>Category</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id ="testid">
                                        @foreach ($product as $item)
                                            <tr id="edit-{{ $item->id }}">
                                                <td><input disabled class="form-control form-control-plaintext"  name="name" id="name-{{ $item->id }}" type="text" value="{{ $item->name }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="image" id="image-{{ $item->id }}" type="text" value="{{ $item->image }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="content" id="content-{{ $item->id }}" type="text" value="{{ $item->content }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="p-price" id="p-price-{{ $item->id }}" type="text" value="{{ number_format($item->purchase_price) }}"></td>
                                                <td><input disabled class="form-control form-control-plaintext" name="s-price" id="s-price-{{ $item->id }}" type="text" value="{{ number_format($item->sale_price) }}"></td>
                                                <td><select name="idCategory" id="idCategory-{{ $item->id }}" class="form-control form-control-plaintext">
                                                    @foreach ($category as $cat)
                                                        @if ($cat->id == $item->idCategory)
                                                            <option value="{{ $cat->id }}" selected >{{ $cat->name }}</option>
                                                        @else
                                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select></td>
                                                @can('update', 'App\Product')
                                                <td><a href="javacript:" onclick="EditItem({{ $item->id }})" id="btnEdit-{{ $item->id }}" ><span class="ion ion-md-build mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="SaveEditItem({{ $item->id }})" id="btnSave-{{ $item->id }}" ><span class="ion ion-md-save mr-4"></span></a>
                                                    <a href="javacript:" hidden onclick="CancelEditItem({{ $item->id }})" id="btnCancel-{{ $item->id }}"><span class="ion ion-md-close"></span></a>
                                                @endcan
                                                @can('delete', 'App\Product')
                                                    <a href="admin/product/delete/{{ $item->id }}" id="btnDelete-{{ $item->id }}"><span class="ion ion-md-trash"></span></a></td>
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
        $('#content-'+id).removeAttr('disabled');
        $('#p-price-'+id).removeAttr('disabled');
        $('#s-price-'+id).removeAttr('disabled');
        $('#idCategory-'+id).removeAttr('disabled');
    }

    function CancelEditItem(id){
        $('#btnEdit-'+id).removeAttr('hidden');
        $('#btnDelete-'+id).removeAttr('hidden');
        $('#btnSave-'+id).attr('hidden','');
        $('#btnCancel-'+id).attr('hidden','');
        $('#name-'+id).attr('disabled','');
        $('#image-'+id).attr('disabled','');
        $('#content-'+id).attr('disabled','');
        $('#p-price-'+id).attr('disabled','');
        $('#s-price-'+id).attr('disabled','');
        $('#idCategory-'+id).attr('disabled','');

        $.ajax({
            type: "GET",
            url: "admin/product/edit/"+id,
            success: function (response) {
                $('#edit-'+id).empty;
                $('#edit-'+id).html(response);
            }
        });
    }

    function SaveEditItem(id) {
        name = $('#name-'+id).val();
        image = $('#image-'+id).val();
        content = $('#content-'+id).val();
        pprice = $('#p-price-'+id).val();
        sprice = $('#s-price-'+id).val();
        idCategory = $("#idCategory-"+id).val();

        $.ajax({
            type: "POST",
            url: 'admin/product/edit/'+id,
            data: {
                name: name,
                image: image,
                content: content,
                pprice: pprice,
                sprice: sprice,
                idCategory: idCategory,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                $('#edit-'+id).empty;
                $('#edit-'+id).html(response);
                alert('ok');
            },
            error: function (){
                alert('fail');
            }
        });
    }

    $('#addItem').click(function () {
        $('table tbody').append('<tr id="add"> <td><input class="form-control form-control-plaintext" name="name" id="name" type="text" placeholder="Hãy nhập thông tin"></td> <td><input class="form-control form-control-plaintext" name="image" id="image" type="text" placeholder="Hãy nhập thông tin"></td> <td><input class="form-control form-control-plaintext" name="content" id="content" type="text" placeholder="Hãy nhập thông tin"></td> <td><input class="form-control form-control-plaintext" name="p-price" id="p-price" type="text" placeholder="Hãy nhập thông tin"></td><td><input class="form-control form-control-plaintext" name="s-price" id="s-price" type="text" placeholder="Hãy nhập thông tin"></td> <td><select name="idCategory" id="idCategory" class="form-control form-control-plaintext"> @foreach ($category as $cat) <option value="{{ $cat->id }}">{{ $cat->name }}</option> @endforeach </select></td> <td><a href="javacript:" onclick="btnSave()" ><span class="ion ion-md-save mr-4"></span></a><a href="javacript:" onclick="btnCancel()"><span class="ion ion-md-close"></span></a></td> </tr>');
        $('#addItem').attr('hidden',"");
    })

    function btnSave(){
      // Content Code
        name = $('#name').val();
        image= $('#image').val();
        content= $('#content').val();
        pprice = $('#p-price').val();
        sprice = $('#s-price').val();
        idCategory= $('#idCategory').val();

        $.ajax({
            type: "POST",
            url: '/admin/product/add',
            data: {
                name: name,
                image: image,
                content: content,
                pprice: pprice,
                sprice: sprice,
                idCategory: idCategory,
                _token: '{{csrf_token()}}',
            },
            success: function (response) {
                $('#add').empty;
                $('#add').html(response);
                alert('ok');
                $('#addItem').removeAttr('hidden');
            },
            error: function (){
                alert('fail');
                location.reload();
            }
        });
    }
    function btnCancel() {
        $( "tr" ).remove( "#add" );
        $('#addItem').removeAttr('hidden');
    }


</script>

@endsection
