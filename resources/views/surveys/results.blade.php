@extends('layouts.app')

@section('content')

<?php $resultKeys = $results->keys(); ?>

<div class="container" style="margin-top:200px; margin-bottom:200px;">
    <div class="card">
        <h2 class="card-title pl-3 pt-3">@lang('You are a')</h2>
        <img class="card-img-top" src="{{ asset('images/' .$resultKeys[0] . '.png') }}" alt="Card image cap">
        <div class="container text-center" id="motivation1">
            {{ App\Motivation::where('name', $resultKeys[0])->first()->description }}
        </div>



        <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:40%"></div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/shave/2.4.0/jquery.shave.min.js"></script>


<script>

    $('#motivation1').shave("100");



</script>
@endsection
