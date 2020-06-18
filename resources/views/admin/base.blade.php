<?php
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
  LaravelLocalization::setLocale();
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('base.name', 'Interior Design') }}</title>
    <link href="/admin/dist/css/styles.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    @stack('locationpicker')
</head>

<body class="sb-nav-fixed">

    <nav id="admin_nav" class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html"> {{trans('messages.admin_controll')}} </a><button style="display: none;" class="btn btn-link btn-sm order-1 order-lg-0 " id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button><!-- Navbar Search-->
        <ul class="languages">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li <?php if  ($localeCode == LaravelLocalization::setLocale())  {echo "class=active" ;}  ?> >
                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}

                </a>
            </li>
            @endforeach
        </ul>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <div class="input-group-append">
                </div>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" style="!important;" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="/manager">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            {{trans('messages.dashboard')}}

                        </a>
                        <a class="nav-link" href="/manager/quizzes">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-contract"></i></div>

                            {{trans('messages.quiz_requests')}}
                        </a>
                        <a class="nav-link" href="/manager/chatList">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-contract"></i></div>
                            {{trans('messages.chat_list')}}
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            {{trans('messages.nested_controll')}}
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="/manager/project"> {{trans('messages.projects')}} </a>
                                {{-- <a class="nav-link" href="/manager/project">images of project</a> --}}

                                <a class="nav-link" href="/manager/category">{{trans('messages.categories')}} </a>
                                <a class="nav-link" href="/manager/user">{{trans('messages.users')}} </a>
                                <a class="nav-link" href="/manager/logo">{{trans('messages.logos')}}</a>
                                <a class="nav-link" href="/manager/review">{{trans('messages.reviews')}}</a>
                                <a class="nav-link" href="/manager/alexandra">{{trans('messages.company_info')}}</a>
                                <a class="nav-link" href="/manager/consultations">{{trans('messages.consultations')}}</a>
                                <a class="nav-link" href="/manager/contacts">{{trans('messages.contacts')}}</a>
                                <a class="nav-link" href="/manager/AdminOrder">{{trans('messages.users_order')}}</a>
                                <a class="nav-link" href="/manager/fbPosts">{{trans('messages.facebook_posts')}}</a>
                                <a class="nav-link" href="/manager/topics">{{trans('messages.topics')}}</a>
                                <a class="nav-link" href="/manager/jops">{{trans('messages.jobs')}}</a>
                                <a class="nav-link" href="/manager/company">{{trans('messages.all_companies')}}</a>
                                <a class="nav-link" href="/manager/service">{{trans('messages.services')}} </a>

                                {{-- <a class="nav-link" href="/manager/project">projects</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav> --}}
                        </div>

                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="/manager/analytics">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            {{trans('messages.charts')}}
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                @yield('adminbase')


<script>
     lang = "<?php  echo LaravelLocalization::setLocale() ; ?>"

    if(lang=="ar"){

        $(".languages ul li").css({
         background:"#c19e70"
     })

     $(".fixed-top, .sb-nav-fixed #layoutSidenav #layoutSidenav_nav, .sb-nav-fixed .sb-topnav ").css("right","0")
     $(".sb-nav-fixed #layoutSidenav #layoutSidenav_content").css("padding-right","225px")
     $("#admin_nav").css("flex-direction","row-reverse")

    }
    else{
        $(".fixed-top, .sb-nav-fixed #layoutSidenav #layoutSidenav_nav, .sb-nav-fixed .sb-topnav ").css("left","0")
        $(".sb-nav-fixed #layoutSidenav #layoutSidenav_content").css("padding-left","225px")
        $(".languages ul li").addClass("active")
    }
</script>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            {{trans('messages.copyright')}}
                        </div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/admin/dist/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    {{-- <script src="/admin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="/admin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="/admin/dist/assets/demo/chart-pie-demo.js"></script> --}}
    {{-- {{$data}} --}}

</body>

</html>
