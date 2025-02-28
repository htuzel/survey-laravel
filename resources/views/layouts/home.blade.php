<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@lang('Media Literacy Survey')</title>
    <link rel="icon" href="../images/Quiz.png">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bevan" rel="stylesheet">

    <!-- SEO -->
    <meta name="description" content="Measure your digital media and literacy skills. Use our free measurement immediately. Learn your digital motivation instantly.">
    <meta name="keywords" content="Digital Motivation, Digital Literacy, Media Literacy, Media Education, Media Education Lab, Renee Hobbs, Sait Tüzel">
    <meta name="author" content="Hayreddin Tüzel">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content=">@lang('Media Literacy Survey')">
    <meta itemprop="description" content="Measure your digital media and literacy skills. Use our free measurement immediately. Learn your digital motivation instantly.">
    <meta itemprop="image" content="https://www.setyourmotivation.com/images/motivation1__.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="@lang('Media Literacy Survey')">
    <meta name="twitter:description" content="Measure your digital media and literacy skills. Use our free measurement immediately. Learn your digital motivation instantly.">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="https://www.setyourmotivation.com/images/motivation1__.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Media Education Survey" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://www.setyourmotivation.com/" />
    <meta property="og:image" content="https://www.setyourmotivation.com/images/motivation1__.png"/>
    <meta property="og:description" content="Measure your digital media and literacy skills. Use our free measurement immediately. Learn your digital motivation instantly." />

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />

<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css" />

  </head>

  <body id="page-top">



<!-- Header -->

{{--
    <header class="row">
        <div class="col-md-3 d-none d-md-block d-lg-block p-3 pl-5 py-5" style="background-color:#343A40">
            <a class="img-fluid pr-3" href="{{ route('mainpage') }}">
                <img src="images/Quiz.png" alt="Media Education Lab" style="max-height: 200px">
            </a>
        </div>
        <div class="col bg-dark text-center col-md-9 col-12 p-3 pt-5">
            <a href="{{ route('mainpage') }}" class="text-white nonedecoration"><h1 style="font-size:5em; text-decoration:none" >@lang('Welcome To Our Digital Media Education Survey')</h1></a>
        </div>
    </header>
--}}
<!-- Navigation -->

<div class=container-fluid>

  <nav class="row text-center">
      <div class="col navbar navbar-expand-lg justify-content-center" style="background-color:#563D7C">

         <ul class="navbar-nav">

           <li class="nav-item pr-3">
               <div class="container text-center">
                    <span class="d-none d-md-block d-lg-block pt-4 mb-0"><a href="{{ url('/')}}"><i class="fas fa-home text-white"></i></a></span>
                    <a class="nav-link pt-0" href="{{ url('/') }}">@lang('Home')</a>
               </div>
           </li>

          <li class="nav-item pr-3">
            <div class="container text-center">
                <span class="d-none d-md-block d-lg-block pt-4 mb-0"><a href="{{ route('individual_survey') }}"><i class="fas fa-user text-white"></i></a></span>
                <a class="nav-link pt-0" href="{{ route('individual_survey') }}">@lang('Individual Entry')</a>
            </div>
          </li>

          <li class="nav-item pr-3">
                <div class="container text-center">
                    <span class="d-none d-md-block d-lg-block pt-4 mb-0"><a href="{{ route('group_survey') }}"><i class="fas fa-users text-white"></i></a></span>
                    <a class="nav-link pt-0" href="{{ route('group_survey') }}">@lang('Group Entry')</a>
                </div>
          </li>

          <li class="nav-item pr-3">
                <div class="container text-center">
                    <span class="d-none d-md-block d-lg-block pt-4 mb-0"><a href="{{ route('about') }}"><i class="fas fa-question text-white"></i></a></span>
                    <a class="nav-link pt-0" href="{{ route('about') }}">@lang('About Us')</a>
                </div>
          </li>


          <li class="nav-item dropdown dropright text-capitalize">
            <div class="container text-center">
                    <span class="d-none d-md-block d-lg-block pt-4 mb-0"><a href="#"><i class="fas fa-globe text-white"></i></a></span>
                    <a class="nav-link dropdown-toggle pt-0" id="navbardrop"  href="#" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" v-pre>
          <strong id="locale">{{ app()->getLocale() }} </strong>
          <span class="caret"></span>
          </a>
          <div class="dropdown-menu ">
            @foreach (language()->allowed() as $code => $name)
            <span class="caret"></span>
            <span class="caret"></span>
            <a class="dropdown-item" href="{{ language()->back($code) }}">{{ $name }} </a>
            @endforeach
                    </div>

        </li>

        @guest
        {{-- <li class="nav-item dropdown dropright text-capitalize">
          <a class="nav-link dropdown-toggle" id="navbardrop"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           Auth <span class="caret"></span>
          </a>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="{{ route('login') }}"
          >
           {{ __('Login') }}
          </a>
           <a class="dropdown-item" href="{{ route('register') }}"
           >
           {{ __('Register') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          </div>
        </li> --}}
        @else
         <li class="nav-item dropdown dropright text-capitalize">
           <a class="nav-link dropdown-toggle" id="navbardrop"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
           </a>
           <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('home') }}"
           >
            {{ __('Dashboard') }}
           </a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
           </form>
           </div>
         </li>

        @endguest

        </ul>
      </div>
  </nav>
</div>






    @yield('content')


    <!-- Footer -->
<div class=container-fluid>
        <footer class="row footer text-center" style="background-color:#563D7C">
          <div class="col-xl-4 mb-5 ">
            <h4 class="text-uppercase mb-4">@lang('Our Mission')</h4>
                <p class="lead mb-0">
                    <small>
                    @lang('The Media Education Lab at the University of Rhode Island advances media literacy education through research and community service. We emphasize interdisciplinary scholarship and practice that stands at the intersections of communication, media studies and education.')
                    </small>
                </p>
          </div>
          <div class="col-xl-4 mb-5">
            <h4 class="text-uppercase mb-4">@lang('Around the Web')</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.facebook.com/mediaeducationlab">
                    <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://twitter.com/MedEduLab">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.instagram.com/digiuriwinter/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" target="_blank" href="https://www.linkedin.com/company/media-education-lab/">
                  <i class="fab fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-xl-4">
            <h4 class="text-uppercase mb-4">@lang('Contact')</h4>
            <p class="lead mb-0"><small>108 Davis Hall
                Media Education Lab </br>
                Harrington School of Communication and Media </br>
                University of Rhode Island </br>
                Davis Hall Kingston, Rhode Island 02881 USA </br>
                </br>
                @lang('Email'): sait@mediaeducationlab.com  </small>
            </p>
          </div>
        </footer>



  <div class="row">
    <div class="col copyright py-4 text-center text-white">
        <small>@lang('Copyright') &copy;2018</small>
    </div>
  </div>

</div>
   



    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



  </body>

</html>
