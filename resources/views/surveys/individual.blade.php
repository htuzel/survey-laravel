@extends('layouts.home')

@section('content')

<div class="container" style="margin-top:200px">
		<h1 class="myheadings">@lang('Learn your Media Education Motivation')</h1>
		<h2 class="myheadings">@lang('Media Education Lab')</h2>
	<div class="container">
		<div class="row m-auto">
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation1.png"/>
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation2.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation3.png"  />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation4.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation5.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation6.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation7.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation8.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation9.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation10.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation11.png" />
 			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation12.png" />
		</div>
	</div>
</div>
<div class="container mt-5">
	<h4>@lang('Please answer the following questions in the most appropriate way')</h4>
    <p>@lang('Each question has 5 options.')</p>
    <div class="container" id="form">
        <form method="POST" action="{{ route('form_evaluation_individual') }}">
            @csrf
            <div class="row">
                <div class="form-group col-12 col-md-6">
                    <label for="Email">@lang('Your Email')</label>
                    <input type="email" class="form-control" name="email" id="Email" placeholder="Your Email.." required>
                </div>
                <div class="form-group col-12 col-md-6">
                    <label for="Name">@lang('Your Name')</label>
                    <input type="text" class="form-control" name="name" id="Name" placeholder="Your Name..">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-5 col-12 pt-5">
                    <strong class="pt-5">@lang('Questions')</strong>
                </div>
                <div class="col-md-7 col-12">
                    <strong>
                        <label class="radio-inline col-2">@lang("Strongly disagree")</label>
                        <label class="radio-inline col-2">@lang("Somewhat disagree")</label>
                        <label class="radio-inline col-2">@lang("Neither agree nor disagree")</label>
                        <label class="radio-inline col-2">@lang("Somewhat agree")</label>
                        <label class="radio-inline col-2">@lang("Strongly agree")</label>
                    </strong>
                </div>
            </div>
            <hr>
            @foreach ($questions as $question)
                <div class="form-group row">
                    <div class="col-md-5 col-12">
                        {{ $question->question }}
                    </div>
                    <div class="col-md-7 col-12">
                        <label class="radio-inline col-2"><input type="radio" name="answer_{{ $question->id }}" value="1" > </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer_{{ $question->id }}" value="2" > </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer_{{ $question->id }}" value="3" checked> </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer_{{ $question->id }}" value="4" ></label>
                        <label class="radio-inline col-2"><input type="radio" name="answer_{{ $question->id }}" value="5" ></label>
                    </div>
                </div>
            @endforeach
            <div class="form-group row my-5">
                <div class="col-md-6 offset-md-10 offset-8">
                    <button type="submit" class="btn btn-primary">
                        @lang('Send')
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
