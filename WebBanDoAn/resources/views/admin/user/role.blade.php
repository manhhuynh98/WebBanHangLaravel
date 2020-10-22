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
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="testid">
                                        @foreach ($user as $item)
                                        <tr id="edit-{{ $item->id }}">
                                            <td><input disabled class="form-control form-control-plaintext" name="name" id="name-{{ $item->id }}" type="text" value="{{ $item->name }}"></td>
                                            <td><input disabled class="form-control form-control-plaintext" name="email" id="email-{{ $item->id }}" type="text" value="{{ $item->email }}"></td>
                                            <td><a href="admin/role/add/{{ $item->id }}"><span class="ion ion-md-build mr-4"></span></a>
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
