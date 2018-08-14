@extends('layouts.admin')

@section('content')
    {{-- datatables.net --}}
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-secondary text-white"><strong>@lang('Questions')</strong></div>
                        <div class="card-body">
                        <div id="browse_app">
                            <a class="btn btn-large btn-info float-right m-2" href="questions/create"><i class="fa fa-plus mr-1"></i>@lang('New Question')</a>
                        </div>
                        <input class="form-control" id="searchtable" type="text" placeholder="@lang('Search..')">
                        <br>
                            <table class="table table-striped table-sm sortable" id="questions" >
                                <thead>
                                    <tr>
                                        <th scope="col">@lang('Id')</th>
                                        <th scope="col">@lang('Question')</th>
                                        <th scope="col">@lang('Motivation')</th>
                                        <th scope="col">@lang('Style')</th>
                                        <th scope="col">@lang('Language')</th>
                                        <th scope="col">@lang('Process')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($questions as $question)
                                        <tr>
                                            <td scope="row">{{ $question->id }}</th>
                                            <td>{{ $question->question }}</td>
                                            <td style="text-transform: capitalize">{{ $question->motivation }}</td>
                                            <td style="text-transform: capitalize">{{ $question->style }}</td>
                                            <td style="text-transform: capitalize">{{ $question->lang }}</td>
                                            <td>
                                                <span>
                                                    <button onclick="edit('{{ $question->id  }}')" type="button" class="btn btn-link text-warning p-0">@lang('Edit')</button>
                                                </span>
                                                <span>
                                                    <button onclick="delete_question('{{ $question->id  }}')" type="button" class="btn btn-link text-danger p-0">@lang('Delete')</button>
                                                </span>
                                            </td>
                                        </tr>
                                  @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center">
                                {{ $questions->links() }}
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
            $("#questions tr").filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });

    function edit(id) {
        window.location = "{{ url('questions') }}" + "/" + id + "/edit";
    }

    function delete_question(id) {
        swal({
                title: "@lang('admin.are you sure')",
                text: " @lang('admin.the deletion process will have serious consequences') " + "@lang('admin.if you delete the question, you will not be able to bring it back')",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    axios.delete('questions/' + id)
                        .then(function (response) {
                            swal("@lang('admin.question has been deleted')", "", "success");
                            setTimeout(function () {
                                location.reload();
                            }, 500);
                            console.log(response);
                        })
                        .catch(function (error) {
                            swal("@lang('admin question has not been deleted')");
                            console.log(error);
                        });
                } else {
                    swal("@lang('admin question has not been deleted')");
                }
            });
    }

</script>

<script>
        $("#questions_menu").addClass( "active" );
</script>

@endsection
