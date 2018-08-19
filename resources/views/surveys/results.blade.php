@extends('layouts.home')

@section('content')

<?php $resultKeys = $results->keys();
    $motivations = App\Motivation::all();
?>

<div class="container mt-5">
    <div class="card px-5 py-2">
        <h2 class="card-title pl-3 pt-3">@lang('You are a')</h2>
        <a data-toggle="modal" data-target="#myModal{{ $resultKeys[0] }}" class="mb-4">
            <img class="card-img-top" src="{{ asset('images/' .$resultKeys[0] . '.png') }}" alt="Card image cap">
        </a>
        <div class="container text-center" id="motivation1">
            @lang(App\Motivation::where('name', $resultKeys[0])->first()->description )
        </div>
        <a data-toggle="modal" data-target="#myModal{{ $resultKeys[0] }}" class="text-center" href="#">@lang('Read More..')</a>
    </div>

    @foreach ($motivations as $motivation)


    <!-- The Modal1 -->
    <div class="modal fade" id="myModal{{ strtolower($motivation->name) }}">
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
                    <img class="float-left mr-4" src="../images/motivation{{ $motivation->id }}__.png" alt="@lang(App\Motivation::find($motivation->id)->name)"
                        style="max-width:50%">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
</div>

<div class="container text-center mt-5">
    <div class="row px-1">
        <div class="container col-md-6 col-12">
            <div class="card px-5 py-2">
                <h4 class="card-title pl-1 pt-3 text-left">@lang('You are also a')</h2>
                    <a data-toggle="modal" data-target="#myModal{{ $resultKeys[1] }}" class="mb-4">
                        <img class="card-img-top" src="{{ asset('images/' .$resultKeys[1] . '.png') }}" alt="Card image cap">
                    </a>
                    <div class="container text-center" id="motivation2">
                            @lang(App\Motivation::where('name', $resultKeys[1])->first()->description )
                    </div>
                    <a data-toggle="modal" data-target="#myModal{{ $resultKeys[1] }}" class="text-center" href="#">@lang('Read More..')</a>
            </div>
        </div>
        <div class="container col-md-6 col-12">
            <div class="card px-5 py-2">
                <h4 class="card-title pl-1 pt-3 text-left">@lang('You are also a')</h4>
                <a data-toggle="modal" data-target="#myModal{{ $resultKeys[2] }}" class="mb-4">
                    <img class="card-img-top" src="{{ asset('images/' .$resultKeys[2] . '.png') }}" alt="Card image cap">
                </a>
                <div class="container text-center" id="motivation3">
                        @lang(App\Motivation::where('name', $resultKeys[2])->first()->description )
                </div>
                <a data-toggle="modal" data-target="#myModal{{ $resultKeys[2] }}" class="text-center" href="#">@lang('Read More..')</a>
            </div>
        </div>
    </div>
</div>

<div class="container text-center my-5">
    <div class="card">
        <div class="row">
            <div class="col-md-3 pt-5 pl-5" >
                <p class="text-secondary" style="font-family: 'Titillium Web', sans-serif;">@lang('You see the opportunities and advantages to using media and technology in your teaching practice.')</p>
            </div>
            <div class="container col-md-6 col-12">
                <canvas id="emvspro"></canvas>
            <p class="text-center" style="font-family: 'Titillium Web', sans-serif;"><span style="color:rgba(255,99,132,1)">{{$result->protect}}</span> / <span  style="color:rgba(54, 162, 235, 1)">{{$result->empower}}</span></p>
            </div>
            <div class="col-md-3 pt-5 pr-5" >
                <p class="text-secondary" style="font-family: 'Titillium Web', sans-serif;"> @lang('You see the risks and challenges to using media and technology in your teaching practice.')</p>
            </div>
        </div>
    </div>
    <div class="card col-md-12 col-12 my-3">
        <div class="row p-3">
            <div class="container">
                <canvas id="motivationch"></canvas>
            </div>
        </div>
    </div>
</div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/shave/2.4.0/jquery.shave.min.js"></script>
<script>
    //SHAVE
    $('#motivation1').shave("100");
    $('#motivation2').shave("50");
    $('#motivation3').shave("50");
    //EMPOVER VS POWERED CHART

		var config = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						{{ $result->protect }},
						{{ $result->empower }},
					],
					backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255,99,132,1)'

					],
					label: 'Dataset 1'
				}],
				labels: [
					'Empower',
					'Protect',
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
					display: true,
					text: 'Protect vs. Empower'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
		};


			var ctx = document.getElementById('emvspro').getContext('2d');
			window.myDoughnut = new Chart(ctx, config);


new Chart(document.getElementById("motivationch"), {
    type: 'radar',
    data: {
        labels: ['Activist', 'Alt', 'Demystifier', 'Motivator', 'Professional','Professor','Spirit Guide','Taste Maker','Teacher 2.0','Techie','Trendsetter','Watchdog'],
        datasets: [
        {
            label: "Total point",
            fill: true,
            backgroundColor: 'rgba(255, 206, 86, 0.7)',
            borderColor: 'rgba(255, 206, 86, 1)',
            pointBorderColor: "#fff",
            pointBackgroundColor:  'rgba(255, 206, 86, 1)',
            data: [
                {{  $result->activist}},
                {{  $result->alt}},
                {{  $result->demystifier}},
                {{  $result->motivator}},
                {{  $result->professional}},
                {{  $result->professor}},
                {{  $result->spirit_guide}},
                {{  $result->taste_maker}},
                {{  $result->teacher}},
                {{  $result->techie}},
                {{  $result->trendsetter}},
                {{  $result->watchdog }}
            ]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Your All Motivations'
      },
      scale: {
			ticks: {
				beginAtZero: true
			}
		}
    }
});
</script>
@endsection
