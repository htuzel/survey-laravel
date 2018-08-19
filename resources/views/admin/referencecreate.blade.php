@extends('layouts.admin')
@section('content')
<div class="container" id="acordion">
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white" data-toggle="collapse" data-target="#collapseOne" ><strong>@lang('Reference Information')</strong></div>
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
                            <form action="{{ url("references") }}" method="POST" >
                                @csrf
                                <h5>@lang('Reference Information')</h5>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="name">@lang('Title')</label>
                                        <textarea class="form-control" rows="3" id="name" name="name" required>{{ old('name') }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-9 col-12">
                                        <label for="link">@lang('Link')</label>
                                        <input type="text" class="form-control" id="link" name="link" value="{{ old('link') }}">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label for="date">@lang('Date')</label>
                                        <input type="text" class="form-control" id="date" name="date" value="{{ old('date') }}">
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
    $("#references_menu").addClass( "active" );
</script>
@endsection
