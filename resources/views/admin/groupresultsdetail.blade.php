@extends('layouts.admin')

@section('content')

<div class="container-fluid my-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@lang('Results')</div>
                        <div class="card-body">
                        <input class="form-control" id="searchtable" type="text" placeholder="@lang('Search..')">
                        <br>
                            <table class="table table-striped table-sm sortable" id="results" style="table-layout:fixed; width:100%;">
                                <thead>
                                    <tr>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Name')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Email')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Activist')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Alt')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Demystifier')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Motivator')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Professional')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Professor')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Spirit Guide')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Taste Maker')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Teacher 2.0')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Techie')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Trendsetter')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Watchdog')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Protect')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Empower')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Process')</small></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($results as $result)
                                        <tr style="font-size:0.6em">
                                            <td><small>{{ $result->name }}</small></td>
                                            <td><small>{{ $result->email }}</small></td>
                                            <td>{{ $result->activist }}</td>
                                            <td>{{ $result->alt }}</td>
                                            <td>{{ $result->demystifier }}</td>
                                            <td>{{ $result->motivator }}</td>
                                            <td>{{ $result->professional }}</td>
                                            <td>{{ $result->professor }}</td>
                                            <td>{{ $result->spirit_guide }}</td>
                                            <td>{{ $result->taste_maker }}</td>
                                            <td>{{ $result->teacher }}</td>
                                            <td>{{ $result->techie }}</td>
                                            <td>{{ $result->trendsetter }}</td>
                                            <td>{{ $result->watchdog }}</td>
                                            <td>{{ $result->protect }}</td>
                                            <td>{{ $result->empower }}</td>
                                            <td>
                                                <span>
                                                    <button onclick="delete_result('{{ $result->id  }}')" type="button" class="btn btn-link text-danger p-0"><small  style="font-size:0.8em">@lang('Delete')</small></button>
                                                </span>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<script>
    //Table Search
    $(document).ready(function () {
        $("#searchtable").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $("#results tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    function edit(id) {
        window.location = "{{ url('results') }}" + "/" + id + "/edit";
    }

    function delete_result(id) {
        swal({
                title: "@lang('Are you sure')",
                text: " @lang('The deletion process will have serious consequences') " + "@lang('If you delete the result, you will not be able to bring it back')",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    axios.delete('results/' + id)
                        .then(function (response) {
                            swal("@lang('result has been deleted')", "", "success");
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                            console.log(response);
                        })
                        .catch(function (error) {
                            swal("@lang('result has not been deleted')");
                            console.log(error);
                        });
                } else {
                    swal("@lang('result has not been deleted')");
                }
            });
    }

</script>

<script>
        $("#results_menu").addClass( "active" );
</script>

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
    foreach ($results as $result) {
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
var total_result = {{ $results->count() }}
var individual_result = {{ App\Result::where('group_id',null)->count() }}
var group_result = {{ App\Result::whereNotNull('group_id')->count() }}
var ctx = document.getElementById("userChart").getContext('2d');
var userChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Total User",],
        datasets: [{
            label: '# of User',
            data: [total_result],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)'

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
new Chart(document.getElementById("IndResChart"), {
    type: 'radar',
    data: {
        labels: ['Activist', 'Alt', 'Demystifier', 'Motivator', 'Professional','Professor','Spirit Guide','Taste Maker','Teacher 2.0','Techie','Trendsetter','Watchdog'],
        datasets: [
        {
            label: "Total point",
            fill: true,
            backgroundColor: "rgba(255, 99, 132, 0.6)",
            borderColor: "rgba(255, 99, 132, 1)",
            pointBorderColor: "#fff",
            pointBackgroundColor: "rgba(255, 99, 132, 1)",
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
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Total Motivation Points of this group'
      },
      scale: {
			ticks: {
				beginAtZero: true
			}
		}
    }
});
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
