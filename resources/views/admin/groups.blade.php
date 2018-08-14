@extends('layouts.admin')

@section('content')
    {{-- datatables.net --}}
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white"><strong>@lang('Groups')</strong></div>
                        <div class="card-body">
                        <div id="browse_app">
                            <a class="btn btn-large btn-info float-right m-2" href="groups/create"><i class="fa fa-plus mr-1"></i>@lang('New Group')</a>
                        </div>
                        <input class="form-control" id="searchtable" type="text" placeholder="@lang('Search..')">
                        <br>
                            <table class="table table-striped table-sm sortable" id="groups" >
                                <thead>
                                    <tr>
                                        <th scope="col">@lang('Id')</th>
                                        <th scope="col">@lang('Name')</th>
                                        <th scope="col">@lang('Pin')</th>
                                        <th scope="col">@lang('Description')</th>
                                        <th scope="col">@lang('Process')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($groups as $group)
                                        <tr>
                                            <td scope="row">{{ $group->id }}</th>
                                            <td>{{ $group->name }}</td>
                                            <td style="text-transform: capitalize">{{ $group->pin }}</td>
                                            <td style="text-transform: capitalize">{{ $group->description }}</td>
                                            <td>
                                                <span>
                                                    <button onclick="edit('{{ $group->id  }}')" type="button" class="btn btn-link text-warning p-0">@lang('Edit')</button>
                                                </span>
                                                <span>
                                                    <button onclick="delete_group('{{ $group->id  }}')" type="button" class="btn btn-link text-danger p-0">@lang('Delete')</button>
                                                </span>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                {{ $groups->links() }}
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
            $("#groups tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    function edit(id) {
        window.location = "{{ url('groups') }}" + "/" + id + "/edit";
    }

    function delete_group(id) {
        swal({
                title: "@lang('Are you sure')",
                text: " @lang('The deletion process will have serious consequences') " + "@lang('If you delete the group, you will not be able to bring it back')",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    axios.delete('groups/' + id)
                        .then(function (response) {
                            swal("@lang('Group has been deleted')", "", "success");
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                            console.log(response);
                        })
                        .catch(function (error) {
                            swal("@lang('Group has not been deleted')");
                            console.log(error);
                        });
                } else {
                    swal("@lang('Group has not been deleted')");
                }
            });
    }

</script>

<script>
        $("#groups_menu").addClass( "active" );
</script>

@endsection
