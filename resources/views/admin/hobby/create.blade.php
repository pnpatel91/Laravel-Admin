@extends('admin.layouts.master')

@section('title', 'Hobby Create')

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
                <form id="create_hobby" action="{{ url('admin/hobby') }}" method="post">
                    @csrf 
                    <div class="form-group">
                        <label>Name of hobby</label>
                        <input id="hobby_name" type="text" class="form-control " name="hobby_name" value="{{ old('hobby_name') }}" required autocomplete="name" autofocus="" maxlength="200">
                    </div>
                    <div class="form-group">
                        <label>Age first started</label>
                        <input type="number" max="100" min="1" name="age_first_started" value="{{ old('age_first_started') }}" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // jQuery Validation
    $(function(){
        $('#create_hobby').validate(
        {
            rules:{
              
            }
        }); //valdate end
    }); //function end
</script>
@endsection