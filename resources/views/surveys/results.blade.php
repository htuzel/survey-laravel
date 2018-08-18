@extends('layouts.home')

@section('content')

<?php $resultKeys = $results->keys(); ?>

<div class="container mt-5">
    <div class="card">
        <h2 class="card-title pl-3 pt-3">@lang('You are a')</h2>
        <a data-toggle="modal" data-target="#myModal1">
            <img class="card-img-top" src="{{ asset('images/' .$resultKeys[0] . '.png') }}" alt="Card image cap">
        </a>
        <div class="container text-center" id="motivation1">
            {{ App\Motivation::where('name', $resultKeys[0])->first()->description }}
        </div>
    </div>
    <!-- The Modal1 -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
          
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            
                <!-- Modal body -->
                <div class="modal-body">
                    Modal body 1
                </div>
            
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/shave/2.4.0/jquery.shave.min.js"></script>
<script>
    $('#motivation1').shave("100");
</script>

<div class="container text-center mt-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2> @lang('..............')</h2>
            <a data-toggle="modal" data-target="#myModal2">
                <img  src="https://via.placeholder.com/500x250" alt="PlaceHolder">
            </a>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2> @lang('..............')</h2>
            <a data-toggle="modal" data-target="#myModal3">
                <img  src="https://via.placeholder.com/500x250" alt="PlaceHolder">
            </a>
        <!-- The Modal1 -->
        <div class="modal fade" id="myModal2">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
          
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body 1
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal2 -->
        <div class="modal fade" id="myModal3">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
          
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body 2
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row mt-5">
        <div class="col-xl-12">
            <h2> @lang("WİLL BE PUT İMAGES SLİDİNG OF 12")</h2>
            <img  src="https://via.placeholder.com/1000x250" alt="PlaceHolder">
        </div>
    </div>
    <div class="row mt-5 mb-5">
            <div class="col-xl-12">
                <h2> @lang("WİLL BE PUT RADAR ETC. CHARTS")</h2>
                <img  src="https://via.placeholder.com/1000x250" alt="PlaceHolder">
            </div>
        </div>
</div>

@endsection
