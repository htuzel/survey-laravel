@extends('layouts.home')

@section('content')

<?php $resultKeys = $results->keys();
//dd($resultKeys);
    $motivations = App\Motivation::all();
?>
<div id="capture">
    <div class="container mt-5">
        <div class="card px-5 py-2">
            <h2 class="card-title pl-3 pt-3">@lang('You are a')</h2>
            <a data-toggle="modal" data-target="#myModal{{ $resultKeys[0] }}" class="mb-4">
                <img class="card-img-top" src="{{ asset('images/' .$resultKeys[0] . '.png') }}" alt="Card image cap">
            </a>
            <div class="container text-center" id="motivation1">
                @lang(App\Motivation::where('slug', $resultKeys[0])->first()->description )
            </div>
            <a data-toggle="modal" data-target="#myModal{{ $resultKeys[0] }}" class="text-center" href="#">@lang('Read More..')</a>
        </div>

        @foreach ($motivations as $motivation)


        <!-- The Modal1 -->
        <div class="modal fade" id="myModal{{ strtolower($motivation->slug) }}">
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
                            @lang(App\Motivation::where('slug', $resultKeys[1])->first()->description )
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
                        @lang(App\Motivation::where('slug', $resultKeys[2])->first()->description )
                    </div>
                    <a data-toggle="modal" data-target="#myModal{{ $resultKeys[2] }}" class="text-center" href="#">@lang('Read More..')</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center my-5">
        <div class="card">
            <div class="row">
                <div class="col-md-3 col-12 pt-5">
                    <h6>@lang('Empower')</h6>
                    <p class="text-secondary p-4" style="font-family: 'Titillium Web', sans-serif;">@lang('You see the opportunities and advantages to using media and technology in your teaching practice.')</p>
                </div>
                <div class="col-md-6 col-12">
                    <canvas id="emvspro"></canvas>
                    <p class="text-center" style="font-family: 'Titillium Web', sans-serif;">
                        <span style="color:rgba(68, 197, 52, 0.9)">{{$result->empower}}</span> /
                        <span style="color: rgba(198, 44, 35,1);">{{$result->protect}}</span>
                    </p>
                </div>
                <div class="col-md-3 col-12 p-2 pt-5">
                    <h6>@lang('Protect')</h6>
                    <p class="text-secondary p-4" style="font-family: 'Titillium Web', sans-serif;"> @lang('You see the risks and challenges to using media and technology in your teaching practice.')</p>
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <h2 class="mt-2">
                @lang('Your All Motivations')
            </h2>
            <div class="card-body p-0 d-none d-block d-sm-block d-md-none">
                <canvas id="motivationch" width="600" height="600"></canvas>
            </div>

            <div class="card-body p-0 d-none d-md-block d-lg-block d-xl-block" width="400" height="400">
                <canvas id="motivationch1"></canvas>
            </div>
        </div>
        <h3 class="mt-2">@lang('Share your score')</h3>
        <div id="shareIconsCountInside" class="my-2"></div>
    </div>
</div>


<script>
$("#shareIconsCountInside").jsSocials({
    url: "www.setyourmotivation.com",
    text: "Hi guys, my Digital Media Motivation is " + "`{{  App\Motivation::find($motivation->id)->name }}`" + " Now visit https://www.setyourmotivation.com and learn your Digital Motivation @mediaeducationlab @medialiteracy #mymotivation",
    showLabel: false,
    showCount: false,
    shareIn: "popup",
    shares: ["twitter", "facebook"]
});
</script>

<?php
    $total_user = App\Result::all()->count();
    $activist_i = 0;
    $alt_i = 0;
    $demystifier_i = 0;
    $motivator_i = 0;
    $professional_i = 0;
    $professor_i = 0;
    $spirit_guide_i = 0;
    $taste_maker_i = 0;
    $teacher_i = 0;
    $techie_i = 0;
    $trendsetter_i = 0;
    $watchdog_i = 0;
    $activist_g = 0;
    $alt_g = 0;
    $demystifier_g = 0;
    $motivator_g = 0;
    $professional_g = 0;
    $professor_g = 0;
    $spirit_guide_g = 0;
    $taste_maker_g = 0;
    $teacher_g = 0;
    $techie_g = 0;
    $trendsetter_g = 0;
    $watchdog_g = 0;
    $protect = 0;
    $empower = 0;
    $activist_t = 0;
    $alt_t = 0;
    $demystifier_t = 0;
    $motivator_t = 0;
    $professional_t = 0;
    $professor_t = 0;
    $spirit_guide_t = 0;
    $taste_maker_t = 0;
    $teacher_t = 0;
    $techie_t = 0;
    $trendsetter_t = 0;
    $watchdog_t = 0;
    $results = App\Result::all();
    $group_results = App\Result::where('group_id',null)->get();
    $ind_results = App\Result::whereNotNull('group_id')->get();
    foreach ($group_results as $result) {
        $activist_i += $result->activist;
        $alt_i += $result->alt;
        $demystifier_i += $result->demystifier;
        $motivator_i += $result->motivator;
        $professional_i += $result->professional;
        $professor_i += $result->professor;
        $spirit_guide_i += $result->spirit_guide;
        $taste_maker_i += $result->taste_maker;
        $teacher_i += $result->teacher;
        $techie_i += $result->techie;
        $trendsetter_i += $result->trendsetter;
        $watchdog_i += $result->watchdog;
        $protect += $result->protect;
        $empower += $result->empower;
    }

    foreach ($ind_results as $result) {
        $activist_g += $result->activist;
        $alt_g += $result->alt;
        $demystifier_g += $result->demystifier;
        $motivator_g += $result->motivator;
        $professional_g += $result->professional;
        $professor_g += $result->professor;
        $spirit_guide_g += $result->spirit_guide;
        $taste_maker_g += $result->taste_maker;
        $teacher_g += $result->teacher;
        $techie_g += $result->techie;
        $trendsetter_g += $result->trendsetter;
        $watchdog_g += $result->watchdog;
        $protect += $result->protect;
        $empower += $result->empower;
    }

    foreach ($results as $result) {
        $top = $result->sort()->toArray();
        if (key($top) == "activist")
            $activist_t++;
        elseif (key($top) == "alt")
            $alt_t++;
        elseif (key($top) == "demystifier")
            $demystifier_t++;
        elseif (key($top) == "motivator")
            $motivator_t++;
        elseif (key($top) == "professional")
            $professional_t++;
        elseif (key($top) == "professor")
            $professor_t++;
        elseif (key($top) == "spirit_guide")
            $spirit_guide_t++;
        elseif (key($top) == "taste_maker")
            $taste_maker_t++;
        elseif (key($top) == "watchdog")
            $watchdog_t++;
        elseif (key($top) == "teacher")
            $teacher_t++;
        elseif (key($top) == "techie")
            $techie_t++;
        elseif (key($top) == "trendsetter")
            $trendsetter_t++;
    }


?>
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
                        'rgba(198, 44, 35,1)',
                        'rgba(68, 197, 52, 0.9)',

					],
					label: 'Dataset 1'
				}],
				labels: [
					'Protect',
					'Empower',
				]
			},
			options: {
				responsive: true,
				legend: {
					position: 'top',
                    reverse: true
				},
				title: {
					display: true,
					text: '@lang('Empower vs. Protect')',
                    fontSize : 20
				},
				animation: {
                    duration: 0
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
            label: "You",
            fill: true,
            backgroundColor: 'rgba(255, 206, 86, 0.4)',
            borderColor: 'rgba(255, 206, 86, 0.8)',
            pointBorderColor: "#fff",
            pointBackgroundColor:  'rgba(255, 206, 86, 0.8)',
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
        },
        {
            label: "Total Users",
            fill: true,
            backgroundColor: "rgba(68, 197, 52, 0.2)",
            borderColor: "rgba(68, 197, 52, 0.6)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(68, 197, 52, 0.6)",
            data: [
                {{ ($activist_i +  $activist_g)/ $total_user }},
                {{ ($alt_i +  $alt_g)/ $total_user }},
                {{ ($demystifier_i +  $demystifier_g)/ $total_user }},
                {{ ($motivator_i +  $motivator_g)/ $total_user }},
                {{ ($professional_i +  $professional_g)/ $total_user }},
                {{ ($professor_i +  $professor_g)/ $total_user }},
                {{ ($spirit_guide_i + $spirit_guide_g)/ $total_user }},
                {{ ($taste_maker_i + $taste_maker_g)/ $total_user }},
                {{ ($teacher_i + $teacher_g)/ $total_user }},
                {{ ($techie_i + $teacher_g)/ $total_user }},
                {{ ($trendsetter_i + $trendsetter_g)/ $total_user }},
                {{ ($watchdog_i + $watchdog_g)/ $total_user }}
            ]
        }
      ]
    },
    options: {
      title: {
        display: false,
        text: '@lang('Your All Motivations')',
        fontSize:20
      },
      scale: {
			ticks: {
				beginAtZero: true
			}
		},
        layout: {
            padding: {
                left: 50,
                right: 50,
                top: 50,
                bottom: 50
            }
        },
		animation: {
            duration: 0
		}
    }
});

new Chart(document.getElementById("motivationch1"), {
    type: 'radar',
    data: {
        labels: ['Activist', 'Alt', 'Demystifier', 'Motivator', 'Professional','Professor','Spirit Guide','Taste Maker','Teacher 2.0','Techie','Trendsetter','Watchdog'],
        datasets: [
        {
            label: "You",
            fill: true,
            backgroundColor: 'rgba(255, 206, 86, 0.4)',
            borderColor: 'rgba(255, 206, 86, 0.8)',
            pointBorderColor: "#fff",
            pointBackgroundColor:  'rgba(255, 206, 86, 0.8)',
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
        },
        {
            label: "Total Users",
            fill: true,
            backgroundColor: "rgba(68, 197, 52, 0.2)",
            borderColor: "rgba(68, 197, 52, 0.6)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(68, 197, 52, 0.6)",
            data: [
                {{ ($activist_i +  $activist_g)/ $total_user }},
                {{ ($alt_i +  $alt_g)/ $total_user }},
                {{ ($demystifier_i +  $demystifier_g)/ $total_user }},
                {{ ($motivator_i +  $motivator_g)/ $total_user }},
                {{ ($professional_i +  $professional_g)/ $total_user }},
                {{ ($professor_i +  $professor_g)/ $total_user }},
                {{ ($spirit_guide_i + $spirit_guide_g)/ $total_user }},
                {{ ($taste_maker_i + $taste_maker_g)/ $total_user }},
                {{ ($teacher_i + $teacher_g)/ $total_user }},
                {{ ($techie_i + $teacher_g)/ $total_user }},
                {{ ($trendsetter_i + $trendsetter_g)/ $total_user }},
                {{ ($watchdog_i + $watchdog_g)/ $total_user }}
            ]
        }
      ]
    },
    options: {
      title: {
        display: false,
        text: '@lang('Your All Motivations')',
        fontSize:20
      },
      scale: {
			ticks: {
				beginAtZero: true
			}
		},
        layout: {
            padding: {
                left: 50,
                right: 50,
                top: 50,
                bottom: 50
            }
        },
		animation: {
            duration: 0
		}
    }
});
</script>
@endsection
