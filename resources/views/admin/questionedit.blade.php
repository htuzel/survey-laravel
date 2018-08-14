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
                            <form action="{{ url("questions/{$question->id}") }}" method="POST" >
                                @csrf
                                @method('PUT')
                                <h5>@lang('Question Information')</h5>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="question">@lang('Question')</label>
                                        <textarea class="form-control" rows="3" id="question" name="question" > {{ $question->question }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4 col-12">
                                        <label for="motivation">@lang('Motivation')</label>
                                        <select class="form-control" id="motivation" name="motivation">
                                            <option @if($question->motivation == "demystifier") selected @endif value="demystifier">@lang('Demystifier')</option>
                                            <option @if($question->motivation == "watchdog") selected @endif value="watchdog">@lang('Watchdog')</option>
                                            <option @if($question->motivation == "activist") selected @endif value="activist">@lang('Activist')</option>
                                            <option @if($question->motivation == "professor") selected @endif value="professor">@lang('Professor')</option>
                                            <option @if($question->motivation == "professional") selected @endif value="professional">@lang('Professional')</option>
                                            <option @if($question->motivation == "teacher") selected @endif value="teacher">@lang('Teacher')</option>
                                            <option @if($question->motivation == "techie") selected @endif value="techie">@lang('Techie')</option>
                                            <option @if($question->motivation == "spirit") selected @endif value="spirit">@lang('Spirit')</option>
                                            <option @if($question->motivation == "motivator") selected @endif value="motivator">@lang('Motivator')</option>
                                            <option @if($question->motivation == "trendsetter") selected @endif value="trendsetter">@lang('Trendsetter')</option>
                                            <option @if($question->motivation == "alt") selected @endif value="alt">@lang('Alt')</option>
                                            <option @if($question->motivation == "tastemaker") selected @endif value="tastemaker">@lang('TasteMaker')</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label for="style">@lang('Style')</label>
                                        <select class="form-control" id="style" name="style">
                                            <option  @if($question->style == "empower") selected @endif value="empower">@lang('Empower')</option>
                                            <option  @if($question->style == "protect") selected @endif value="protect">@lang('Protect')</option>
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
                                    <button type="submit" class="btn btn-success my-3 mr-5">@lang('Update')</button>
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
