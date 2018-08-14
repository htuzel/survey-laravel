@extends('layouts.home')

@section('content')
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="images/mediaicons.png" alt="Media Education Lab" width="90px" height="90px" >
        <h1 class="text-uppercase mb-0">@lang('Discover yourself now!')</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">@lang('Join our Digital Media Literacy Survey Free!')</h2>
      </div>
    </header>

    <!-- Individual Section -->
    <section class="portfolio">
      <div class="container" id="individual">
        <h2 class="text-center text-uppercase text-secondary mb-0">@lang('Individual Entry')</h2>
        <hr class="star-dark mb-5">
      </div>
    </section>

    <!-- Group Section -->
    <section class="bg-primary text-white mb-0">
        <div class="container" id="group">
            <h2 class="text-center text-uppercase text-white mb-0">@lang('Group Entry')</h2>
            <hr class="star-light mb-5">
          </div>
    </section>

    <!-- Individual Grid Section -->
    <section class="portfolio">
        <div class="container" id="admin">
          <h2 class="text-center text-uppercase text-secondary mb-0">@lang('Admin Entry')</h2>
          <hr class="star-dark mb-5">
        </div>
    </section>

@endsection
