@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('Total User')
                </div>
                <div class="card-body">
                    <canvas id="userChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
            <div class="card">
                <div class="card-header">
                    @lang('Motivation')
                </div>
                <div class="card-body">
                    <canvas id="IndResChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        @lang('Style')
                    </div>
                    <div class="card-body">
                        <canvas id="styleChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header">
                        @lang('Top Motivations')
                    </div>
                    <div class="card-body">
                        <canvas id="topMotivations" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php
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
<script>
//**************************************************************************************
//USER CHART
//**************************************************************************************
var total_result = {{ App\Result::all()->count() }}
var individual_result = {{ App\Result::where('group_id',null)->count() }}
var group_result = {{ App\Result::whereNotNull('group_id')->count() }}
var ctx = document.getElementById("userChart").getContext('2d');
var userChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Total", "Individual", "Group"],
        datasets: [{
            label: '# of User',
            data: [total_result, individual_result, group_result],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Users '
		},
    }
});
//**************************************************************************************
//RESULT CHART
//**************************************************************************************
var color = Chart.helpers.color;
var config = {
	type: 'radar',
	data: {
		labels: ['Activist', 'Alt', 'Demystifier', 'Motivator', 'Professional','Professor','Spirit Guide','Taste Maker','Teacher 2.0','Techie','Trendsetter','Watchdog'],
		datasets: [{
			label: 'Individual Results',
			backgroundColor: color('rgba(54, 162, 235, 1)').alpha(0.2).rgbString(),
			borderColor: 'rgba(54, 162, 235, 1)',
			pointBackgroundColor: 'rgba(54, 162, 235, 0.2)',
			data: [
                {{ $activist_i}},
                {{ $alt_i}},
                {{ $demystifier_i}},
                {{ $motivator_i}},
                {{ $professional_i}},
                {{ $professor_i}},
                {{ $spirit_guide_i}},
                {{ $taste_maker_i}},
                {{ $teacher_i}},
                {{ $techie_i}},
                {{ $trendsetter_i}},
                {{ $watchdog_i}}
			]
		}, {
			label: 'Group Results',
			backgroundColor: color('rgba(255, 206, 86, 1)').alpha(0.2).rgbString(),
			borderColor: 'rgba(255, 206, 86, 1)',
			pointBackgroundColor: 'rgba(255, 206, 86, 0.2)',
			data: [
                {{ $activist_g}},
                {{ $alt_g}},
                {{ $demystifier_g}},
                {{ $motivator_g}},
                {{ $professional_g}},
                {{ $professor_g}},
                {{ $spirit_guide_g}},
                {{ $taste_maker_g}},
                {{ $teacher_g}},
                {{ $techie_g}},
                {{ $trendsetter_g}},
                {{ $watchdog_g}}
			]
        }, {
            label: 'Total Results',
			backgroundColor: color('rgba(255, 99, 132, 1)').alpha(0.2).rgbString(),
			borderColor: 'rgba(255, 99, 132, 1)',
			pointBackgroundColor: 'rgba(255, 99, 132, 0.2)',
			data: [
                {{ $activist_g + $activist_i}},
                {{ $alt_g + $alt_i}},
                {{ $demystifier_g + $demystifier_i}},
                {{ $motivator_g + $motivator_i}},
                {{ $professional_g + $professional_i}},
                {{ $professor_g + $professor_i}},
                {{ $spirit_guide_g + $spirit_guide_i}},
                {{ $taste_maker_g + $taste_maker_i}},
                {{ $teacher_g + $teacher_i}},
                {{ $techie_g + $techie_i}},
                {{ $trendsetter_g + $trendsetter_i}},
                {{ $watchdog_g + $watchdog_i}}
            ]
        }
    ]
	},
	options: {
		legend: {
			position: 'top',
		},
		title: {
			display: true,
			text: 'Results '
		},
		scale: {
			ticks: {
				beginAtZero: true
			}
		}
	}
};
window.onload = function() {
	window.myRadar = new Chart(document.getElementById('IndResChart'), config);
};
//**************************************************************************************
//STYLE CHART
//**************************************************************************************
var pieconfig = {
    type: 'pie',
    data: {
        datasets: [{
            data: [
                {{ $protect }},
                {{ $empower }},
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)'
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
			text: 'Protect vs. Empower '
		},
    }
};
var cty = document.getElementById('styleChart').getContext('2d');
window.myPie = new Chart(cty, pieconfig);

//**************************************************************************************
//TOP MOTIVATION
//**************************************************************************************

new Chart(document.getElementById("topMotivations"), {
    type: 'horizontalBar',
    data: {
        labels: ['Activist', 'Alt', 'Demystifier', 'Motivator', 'Professional','Professor','Spirit Guide','Taste Maker','Teacher 2.0','Techie','Trendsetter','Watchdog'],
      datasets: [
        {
          label: "User",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#f4bd07","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#f4bd07"],
          data: [
                {{ $activist_t}},
                {{ $alt_t}},
                {{ $demystifier_t}},
                {{ $motivator_t}},
                {{ $professional_t}},
                {{ $professor_t}},
                {{ $spirit_guide_t}},
                {{ $taste_maker_t}},
                {{ $teacher_t}},
                {{ $techie_t}},
                {{ $trendsetter_t}},
                {{ $watchdog_t}}]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'User`s Top Motivations'
      }
    }
});

</script>

@endsection
