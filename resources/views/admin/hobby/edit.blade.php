@extends('admin.layouts.master')

@section('title', 'Hobby Edit')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('admin/hobby') }}" class="btn btn-secondary mb-3">
                Back
            </a>
        </div>
        <div class="col-md-12">

            @include('message.alert')

            <div class="card card-body">
                <form id="edit_hobby" action="{{ url("admin/hobby/$hobby->id/edit") }}" method="post" >
                    @csrf
                    {{-- <input type="hidden" name="_method" value="PUT"> --}}
                    @method('put')
                    <div class="form-group">
                        <label>Name of hobby</label>
                        <input id="hobby_name" type="text" class="form-control " name="hobby_name" value="{{ $hobby->hobby_name }}" required autocomplete="name" autofocus="" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label>Age first started</label>
                        <input type="number" max="100" min="1" name="age_first_started" value="{{ $hobby->age_first_started }}" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // jQuery Validation
    $(function(){
        $('#edit_hobby').validate(
        {
            rules:{
              
            }
        }); //valdate end
    }); //function end
</script>
@endsection