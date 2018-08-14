@extends('layouts.admin')
@section('content')
<div class="container" id="acordion">
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white" data-toggle="collapse" data-target="#collapseOne" ><strong>@lang('Group Information')</strong></div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ url("groups") }}" method="POST" >
                                @csrf
                                <h5>@lang('Group Information')</h5>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="name">@lang('Group Name')</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label for="pin">@lang('Pin')</label>
                                        <input type="text" class="form-control" id="pin" name="pin" value="{{ old('pin') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="description">@lang('Description')</label>
                                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                    </div>
                                </div>
                                <div class="form-group float-right">
                                    <button type="submit" class="btn btn-success my-3 mr-5">@lang('Create')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $("#groups_menu").addClass( "active" );
</script>
@endsection
