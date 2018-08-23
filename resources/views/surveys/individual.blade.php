@extends('layouts.home')

@section('content')
<?php $motivations = App\Motivation::all(); ?>
<div class="container mt-5">
    <div class="header text-center">
        <h1 class="myheadings">@lang('Learn your Media Education Motivation')</h1>
        <p class="font-weight-light mb-3 text-dark">@lang('No matter what your motivation is, Powerful Voices for Kids has ideas to improve digital& media literacy in your classroom.') </p>
        <div id="owl-demo" class="owl-carousel owl-theme owl-loaded">
            @foreach ($motivations as $motivation)
            <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal{{ $motivation->id }}" style="background-image: url(../images/motivation{{ $motivation->id }}__.png); background-size: contain; max-height:100px">
                <div class="hvrbox-layer_top">
                    <div class="hvrbox-text">
                        <i class="fa fa-search fa-5x"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
 <!-- The Modal1 -->
 @foreach ($motivations as $motivation)
<div class="modal fade" id="myModal{{ $motivation->id }}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title font-weight-bold">@lang(App\Motivation::find($motivation->id)->name)</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <h5 class="text-secondary mb-0 font-weight-bold" style="font-family: 'Titillium Web', sans-serif;">@lang('Description')</h5>
                <hr>
                <img class="float-left mr-4" src="../images/motivation{{ $motivation->id }}__.png" alt="@lang(App\Motivation::find($motivation->id)->name)" style="max-width:50%">
                <div class="clearfix">@lang(App\Motivation::find($motivation->id)->description)</div>
                <h5 class="text-secondary mb-0 font-weight-bold mt-4" style="font-family: 'Titillium Web', sans-serif;">@lang('Protect')</h5>
                <hr>
                <ul>
                    <li>@lang(App\Motivation::find($motivation->id)->protect1)</li>
                    <li>@lang(App\Motivation::find($motivation->id)->protect2)</li>
                    <li>@lang(App\Motivation::find($motivation->id)->protect3)</li>
                </ul>
                <h5 class="text-secondary mb-0 font-weight-bold mt-4" style="font-family: 'Titillium Web', sans-serif;">@lang('Empower')</h5>
                <hr>
                <ul>
                    <li>@lang(App\Motivation::find($motivation->id)->empower1)</li>
                    <li>@lang(App\Motivation::find($motivation->id)->empower2)</li>
                    <li>@lang(App\Motivation::find($motivation->id)->empower3)</li>
                </ul>
                <h5 class="text-secondary mb-0 font-weight-bold mt-4" style="font-family: 'Titillium Web', sans-serif;">@lang('Strenghts')</h5>
                <hr> @lang(App\Motivation::find($motivation->id)->strenghts)
                <h5 class="text-secondary mb-0 font-weight-bold mt-4" style="font-family: 'Titillium Web', sans-serif;">@lang('Challenges')</h5>
                <hr> @lang(App\Motivation::find($motivation->id)->challenges)
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="container">
  <div class="card">
    <div class="container text-center pt-5 px-5">
        <h4>@lang('Respond to these statements according to how important they are to you:')</h4>
    </div>
    <div class="container pl-5 pt-3" id="form">
        <form method="POST" action="{{ route('form_evaluation_individual') }}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('alert'))
            <div class="alert alert-danger">
                <ul>
                    <li>{{ session('alert') }}</li>
                </ul>
            </div>
            @endif
            {{--
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
            --}}
            <div class="row mb-3">
                <div class="col-md-5 col-12 pt-5 mb-2">
                    <strong class="pt-5">@lang('Questions') : </strong>
                </div>
                <div class="col-md-7 col-12">
                    <strong>
                        <label class="radio-inline col-12 col-md-2">@lang("Strongly disagree")</label>
                        <label class="radio-inline col-12 col-md-2">@lang("Somewhat disagree")</label>
                        <label class="radio-inline col-12 col-md-2">@lang("Neither agree nor disagree")</label>
                        <label class="radio-inline col-12 col-md-2">@lang("Somewhat agree")</label>
                        <label class="radio-inline col-12 col-md-2">@lang("Strongly agree")</label>
                    </strong>
                </div>
            </div>
            <hr>
            <?php $count = 1 ?>
            @foreach ($questions as $question)
                <div class="form-group row">
                    <div class="col-md-5 col-12">
                        <strong>{{ $count }} - </strong>  @lang($question->question)
                    </div>
                    <div class="col-md-7 col-12">
                        <label class="radio-inline col-2"><input type="radio" name="answer[{{ $question->id }}]" value="1" required> </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer[{{ $question->id }}]" value="2" > </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer[{{ $question->id }}]" value="3" > </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer[{{ $question->id }}]" value="4" > </label>
                        <label class="radio-inline col-2"><input type="radio" name="answer[{{ $question->id }}]" value="5" > </label>
                    </div>
                </div>
                <hr>
                <?php $count++ ?>
            @endforeach
            <div class="form-group row my-5">
                <div class="col-8 offset-2">
                    <button type="submit" class="btn btn-primary col-12" style="background-color:#563D7C">
                        @lang('Send')
                    </button>
                </div>
            </div>
        </form>
  </div>
 </div>
</div>
<script>
    $(document).ready(function () {
        var owl = $("#owl-demo");
        owl.owlCarousel({
            items: 12, //10 items above 1000px browser width
            autoplay: true,
            autoplayTimeout: 2400,
            autoplayHoverPause: true,
            dots: true,
            loop: true,
        });
});

</script>
@endsection
