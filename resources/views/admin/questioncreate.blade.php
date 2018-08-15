@extends('layouts.admin')
@section('content')
<div class="container" id="acordion">
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white" data-toggle="collapse" data-target="#collapseOne" ><strong>@lang('Question Information')</strong></div>
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
                            <form action="{{ url("questions") }}" method="POST" >
                                @csrf
                                <h5>@lang('Question Information')</h5>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="question">@lang('Question')</label>
                                        <textarea class="form-control" rows="3" id="question" name="question" required>{{ old('question') }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-12">
                                        <label for="motivation">@lang('Motivation')</label>
                                        <select class="form-control" id="motivation" name="motivation">
                                            @foreach (App\Motivation::all() as $motivation)
                                            <option value="{{ $motivation->id }}">@lang($motivation->name)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="style">@lang('Style')</label>
                                        <select class="form-control" id="style" name="style">
                                            <option value="empower">@lang('Empower')</option>
                                            <option value="protect">@lang('Protect')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="language">@lang('Language')</label>
                                        <select class="form-control" id="language" name="language">
                                            <option value="en">@lang('English')</option>
                                            <option value="tr">@lang('Turkish')</option>
                                        </select>
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
    $("#questions_menu").addClass( "active" );
</script>
@endsection
