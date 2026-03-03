<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') {{ get_option('site_title') }} @show </title>

    @yield('meta-data')

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-theme.css') }}" rel="stylesheet">


    <!-- Google Fonts & Font-Awesome -->
   {{-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400" rel="stylesheet" type="text/css">--}}

    <!-- Font awesome 4.4.0 -->
    <link rel="stylesheet" href="{{ asset('assets/font-awesome-4.4.0/css/font-awesome.min.css') }}">
    <!-- load page specific css -->

    <!-- main select2.css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <!-- Conditional page load script -->
    @if(request()->segment(1) === 'dashboard')
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/metisMenu/dist/metisMenu.min.css') }}">
    @endif
                <!-- main style.css -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @yield('page-css')

        @if(get_option('additional_css'))
            <style type="text/css">
                {{ get_option('additional_css') }}
            </style>
            @endif
                <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        </script>
</head>
<body>




@if( ! request()->cookie('accept_cookie'))
    <div class="alert alert-warning text-center cookie-notice" style="font-size: 16px; margin: 0; line-height: 25px;">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <p>{!! get_option('cookie_message') !!}</p>
                    <a href="#" class="cookie-ok-btn btn btn-primary">Ok</a>
                    <a href="{!! get_post_url(get_option('cookie_learn_page')) !!}">Learn More</a>
                </div>
            </div>
        </div>
    </div>
@endif




<div class="top-navbar">


    <div class="container">
        <div class="row">

            <div class="col-md-12">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                       

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           

                            <ul class="nav navbar-nav navbar-right">
                                <li  class="dropdown dtc-foundation"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@lang('DTC Foundation') <span class="caret"></span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#">  @lang('About the Foundation') </a>
                                                <a href="#">
                                                    @lang('Scholarships')
                                                </a>

                                            </li>
                                        </ul>
                                </li>


                                <li  class="dropdown dtc-support-dtcf"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@lang('SUPPORT DTCF') <span class="caret"></span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#">  @lang('DONATIONS & SPONSORSHIPS') </a>
                                                <a href="#">
                                                    @lang('DTCF November 2019 Benefit')
                                                </a>

                                            </li>
                                        </ul>
                                </li>

                               

                                <li><a href="{{route('contact_us')}}"> @lang('app.contact_us')</a></li>

                                <li><a href="{{route('home')}}"><i></i> @lang('app.home')</a></li>

                                
                            </ul>

                           

                        </div><!-- /.navbar-collapse -->

                        
                        </div>
                    </div><!-- /.container-fluid -->
                </nav>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12">
                 <div class="second-header">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                @if(get_option('logo_settings') == 'show_site_name')
                                    {{ get_option('site_name') }}
                                @else
                                    @if(logo_url())
                                        <img class="main-logo" src="{{ logo_url() }}" />
                                    @else
                                        {{ get_option('site_name') }}
                                    @endif
                                @endif
                            </a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                           

                            <ul class="nav navbar-nav navbar-right">
                                <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@lang('Camp') <span class="caret"></span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#">  @lang('Adult SUMMER CAMP Overview') </a>
                                                <a href="#">
                                                    @lang('Adult SUMMER CAMP Overview 2')
                                                </a>

                                            </li>
                                        </ul>
                                </li>


                                <li  class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@lang('Teams') <span class="caret"></span></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="#">  @lang('Medical Staff') </a>
                                                <a href="#">
                                                    @lang('Coaching & Staff')
                                                </a>

                                            </li>
                                        </ul>
                                </li>

                               

                                <li><a href="#"> @lang('Videos')</a></li>

                                <li><a href="#"><i></i> @lang('News & Reviews')</a></li>

                                <li><a href="{{ route('register') }}">@lang('app.register')</a></li>

                                
                            </ul>

                            <form action="{{route('search')}}" class="navbar-form navbar-right search-form" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="q" placeholder="@lang('app.search')">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> </button>
                            </form>

                           

                        </div>
        </div>

    </div>

</div>
