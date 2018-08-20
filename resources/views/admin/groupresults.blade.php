@extends('layouts.admin')

@section('content')
    {{-- datatables.net --}}
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white"><strong>@lang('Results')</strong></div>
                        <div class="card-body">
                        <input class="form-control" id="searchtable" type="text" placeholder="@lang('Search..')">
                        <br>
                            <table class="table table-striped table-sm sortable" id="results" style="table-layout:fixed; width:100%;">
                                <thead>
                                    <tr>
                                        {{--
                                        <th scope="col"><small style="font-size:0.5em">@lang('Name')</small></th>
                                        <th scope="col"><small style="font-size:0.5em">@lang('Email')</small></th>
                                        --}}
                                        <th scope="col"><small style="font-size:0.5em">@lang('Group Name')</small></th>
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
                                            {{--
                                            <td><small>{{ $result->name }}</small></td>
                                            <td><small>{{ $result->email }}</small></td>
                                            --}}
                                            <td><small>{{ App\Group::find($result->group_id)->name }}</small></td>
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
                                                <span>
                                                    <button onclick="location.href='{{ route('group_result_detail', ['id' => $result->group_id]) }}';" type="button" class="btn btn-link text-info p-0"><small  style="font-size:0.8em">@lang('View')</small></button>
                                                </span>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                {{ $results->links() }}
                            </div>
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

@endsection
