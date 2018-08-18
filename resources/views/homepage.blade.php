@extends('layouts.home')

@section('content')

    <section class="container-fluid  text-white text-center">

    <div class="container-fluid">
        <div class="col">
            <!-- Set up your HTML -->
            <div id="owl-demo" class="owl-carousel owl-theme owl-loaded">
                @foreach ($motivations as $motivation)
                    <div class="hvrbox hvrbox_background item" data-toggle="modal" data-target="#myModal{{ $motivation->id }}" style="background-size: contain; background-image: url(../images/banner{{ $motivation->id }}.png);">
                        <i  class="owl-left fas fa-chevron-left fa-2x"></i>
                        <i  class="owl-right fas fa-chevron-right fa-2x"></i>
                        <div class="hvrbox-layer_top">
                    		<div class="hvrbox-text"><i class="fa fa-search fa-5x"></i> </div>
                    	</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

      <div class="row">
        <div class="col mb-5 mt-1">
          <h1 class="text-uppercase mb-3 text-dark">@lang('Discover yourself now!')</h1>
          <hr class="star-dark">
          <h2 class="font-weight-light mb-3 text-dark">@lang('Join our Digital Media Literacy Survey Free!')</h2>
          <p class="font-weight-light mb-3 text-dark">@lang('No matter what your motivation is, Powerful Voices for Kids has ideas to improve digital& media literacy in your classroom.') </p>
        </div>
      </div>

    </section>

@foreach ($motivations as $motivation)


 <!-- The Modal1 -->
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
            <img class="float-left mr-4" src="../images/motivation{{ $motivation->id }}__.png" alt="@lang(App\Motivation::find(8)->name)" style="max-width:50%">
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
            <hr>
            @lang(App\Motivation::find($motivation->id)->strenghts)
            <h5 class="text-secondary mb-0 font-weight-bold mt-4" style="font-family: 'Titillium Web', sans-serif;">@lang('Challenges')</h5>
            <hr>
            @lang(App\Motivation::find($motivation->id)->challenges)
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</div>
@endforeach
<script>
$(document).ready(function() {

 var owl = $("#owl-demo");

 owl.owlCarousel({
    items : 1, //10 items above 1000px browser width
    autoplay:true,
    autoplayTimeout:2400,
    autoplayHoverPause:true,
    dots: true,
    loop:true,
});

});


</script>
@endsection
