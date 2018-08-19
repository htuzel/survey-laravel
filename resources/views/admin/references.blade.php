@extends('layouts.admin')

@section('content')
    {{-- datatables.net --}}
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white"><strong>@lang('References')</strong></div>
                        <div class="card-body">
                        <div id="browse_app">
                            <a class="btn btn-large btn-info float-right m-2" href="references/create" {{--   style="pointer-events: none; cursor: not-allowed; opacity: 0.5;" --}}><i class="fa fa-plus mr-1"></i>@lang('New reference')</a>
                        </div>
                        <input class="form-control" id="searchtable" type="text" placeholder="@lang('Search..')">
                        <br>
                            <table class="table table-striped table-sm sortable" id="references" >
                                <thead>
                                    <tr>
                                        <th scope="col">@lang('Id')</th>
                                        <th scope="col">@lang('Title')</th>
                                        <th scope="col">@lang('Link')</th>
                                        <th scope="col">@lang('Date')</th>
                                        <th scope="col">@lang('Process')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($references as $reference)
                                        <tr>
                                            <td scope="row">{{ $reference->id }}</th>
                                            <td style="text-transform: capitalize">{{ $reference->name }}</td>
                                            <td style="text-transform: capitalize">{{ $reference->link }}</td>
                                            <td style="text-transform: capitalize">{{ $reference->date }}</td>
                                            <td>
                                                <span>
                                                    <button onclick="edit('{{ $reference->id  }}')" type="button" class="btn btn-link text-warning p-0" >@lang('Edit')</button>
                                                </span>
                                                <span>
                                                    <button onclick="delete_reference('{{ $reference->id  }}')" type="button" class="btn btn-link text-danger p-0" >@lang('Delete')</button>
                                                </span>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                {{ $references->links() }}
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
            $("#references tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    function edit(id) {
        window.location = "{{ url('references') }}" + "/" + id + "/edit";
    }

    function delete_reference(id) {
        swal({
                title: "@lang('Are you sure')",
                text: " @lang('The deletion process will have serious consequences') " + "@lang('If you delete the reference, you will not be able to bring it back')",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    axios.delete('references/' + id)
                        .then(function (response) {
                            swal("@lang('reference has been deleted')", "", "success");
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                            console.log(response);
                        })
                        .catch(function (error) {
                            swal("@lang('reference has not been deleted')");
                            console.log(error);
                        });
                } else {
                    swal("@lang('reference has not been deleted')");
                }
            });
    }

</script>

<script>
        $("#references_menu").addClass( "active" );
</script>

@endsection
