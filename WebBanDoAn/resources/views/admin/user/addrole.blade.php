@extends('layouts.app')
@section('title')
List User
@endsection
@section('content')
<div class="content-page">
    <div class="content">
        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <form method="POST" action="admin/role/add/{{ $user->id }}">
                    @csrf
                    <div class="form-group mx-4">
                        <input disabled class="form-control form-control-plaintext" value="{{ $user->name }}">
                    </div>
                    <div class="form-group mx-4">
                      <input disabled class="form-control form-control-plaintext" value="{{ $user->email }}">
                    </div>
                    <div class="row mb-4 ml-4">
                        <div class="col-3 mt-3 form-check-inline ">
                            <input type="checkbox" value="" class="form-check-input ml-5" id="selectAll">
                            <label class="form-check-label" >select all</label>
                        </div>
                        @foreach ($role as $item)
                        <div class="col-3 mt-3 form-check-inline ">
                            <input type="checkbox" value="{{ $item->id }}" class="form-check-input ml-5 checkRole" name="role[]"
                            {{ $roleOfUser->contains($item->id) ? 'checked' : '' }}
                            >
                            <label class="form-check-label">{{ $item->display_name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="row justify-content-end mr-4">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#selectAll').change(function () {
            if($(this).is(':checked')){
                console.log(1);
                $('.checkRole').attr('checked','');
            }else{
                $('.checkRole').removeAttr('checked')
            }
        })
        console.log(3);
    });
</script>
@endsection
