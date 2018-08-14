@extends('layouts.home')

@section('content')

<div class="container" style="margin-top:200px">
		<h1 class="myheadings">@lang('Learn your Media Education Motivation')</h1>
		<h2 class="myheadings">@lang('Media Education Lab')</h2>
	<div class="container">
		<div class="row m-auto">
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation1.png"/>
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation2.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation3.png"  />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation4.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation5.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation6.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation7.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation8.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation9.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation10.png" />
			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation11.png" />
 			<img class="col-md-1 col-2 col-sm-3 p-0" src="../images/motivation12.png" />
		</div>
	</div>
</div>
<div class="container mt-5">
	<h4>@lang('Please answer the following questions in the most appropriate way')</h4>
    <p>@lang('Each question has 5 options.')</p>

    <div class="container" id="form">
        <div class="row">
            <div class="col-md-6 col-12">Question 1</div>
            <div class="col-md-6 col-12">
                <label class="radio-inline"><input type="radio" name="optradio" checked>Option 1</label>
                <label class="radio-inline"><input type="radio" name="optradio" >Option 1</label>
                <label class="radio-inline"><input type="radio" name="optradio" >Option 1</label>
                <label class="radio-inline"><input type="radio" name="optradio" >Option 1</label>
                <label class="radio-inline"><input type="radio" name="optradio" >Option 1</label>
            </div>
        </div>
    </div>
</div>
@endsection
