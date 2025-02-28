<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@lang('Media Education Lab Admin Panel')</title>
    <link rel="icon" href="../images/Quiz.png">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sortable/0.8.0/css/sortable-theme-bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sortable/0.8.0/js/sortable.min.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    @if(app()->getLocale() === 'ar')
    <!-- RTL CSS for Arabic language -->
    <style>
      /* Basic RTL overrides */
      body {
        text-align: right;
      }
      
      /* Reverse floats */
      .float-left, .pull-left {
        float: right !important;
      }
      
      .float-right, .pull-right {
        float: left !important;
      }
      
      /* Realign text */
      .text-left {
        text-align: right !important;
      }
      
      .text-right {
        text-align: left !important;
      }
      
      /* Admin specific adjustments */
      #sidebar {
        text-align: right;
        right: 0;
        left: auto;
      }
      
      #content {
        margin-right: 250px;
        margin-left: 0;
      }
      
      /* When sidebar is collapsed */
      #sidebar.active {
        margin-right: -250px;
        margin-left: 0;
      }
      
      #sidebar.active + #content {
        margin-right: 0;
      }
      
      .dropdown-menu {
        text-align: right;
      }
      
      /* Form controls */
      .form-group label {
        text-align: right;
      }
      
      /* Adjust tables */
      th, td {
        text-align: right;
      }
    </style>
    @endif

</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Media Education Lab</h3>
            </div>
            <ul class="list-unstyled components">
                <a href="/home"><p>@lang("Admin Panel")</p></a>
                <li id="groups_menu">
                    <a href="/groups">@lang("Groups")</a>
                </li>
                <li id="results_menu">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">@lang('Results')</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="/results">@lang('Individual Results')</a>
                        </li>
                        <li>
                            <a href="/results-group">@lang('Group Results')</a>
                        </li>
                    </ul>
                </li>
                <li id="references_menu">
                    <a href="/references">@lang("References")</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="/export" class="download">@lang('Download Results')</a>
                </li>
                <li>
                    <a href="/" class="article">@lang('Back to Home')</a>
                </li>
            </ul>
        </nav>
        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
