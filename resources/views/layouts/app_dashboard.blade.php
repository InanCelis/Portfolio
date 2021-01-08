<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content=""> 
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>{{$return['title']}}</title>
    
    @include('includes.src.css')
    <link href="{{asset('/css/dashboard.css')}}" rel="stylesheet">
    <style>
        body {
            background-color: var(--forth);
        }
    </style> 
  </head>
 
<body id="pagetheme" class="{{session('darkmode')? 'darkmode': 'lightmode'}}">
    @include('includes.random.theme_toggle_button')
    
<nav class="navbar sticky-top forth-bg third-text-color flex-md-nowrap p-0 ">
    <div class="navbar-brand logo-name col-md-3 col-lg-2 mr-0 text-md-center rounded-bottom" >
        <a class=" main-text-color " href="{{route('user.page_preview', Auth::user()->username)}}">
          @foreach ($user->tbl_logo as $user_logo)
              {{$user_logo->logo_name}}
          @endforeach
        </a>
    </div>
    <button class="navbar-toggler position-absolute d-md-none collapsed mt-2" type="button" id="menu-icon" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="h3 main-text-color"><i id="icon-menu" class="fa fa-bars"></i></span>
    </button>
    <div class="col-md-3 col-lg-3 d-none d-md-block">
      <h1 class="h2">{{$return['page_name']}}</h1>
    </div>
    
    <ul class="nav flex-row col-md-6 col-lg-7 justify-content-end ">
        <li class="nav-item d-none d-md-block">
          <form action="">
            <div class="form-group has-search mt-1  pr-lg-3">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control rounded-pill shadow-sm" placeholder="Search">
            </div>
          </form>
        </li>
        <li class="nav-item d-none d-md-block">
         @include('includes.random.auth_dropdown')
        </li>
        <li class="nav-item d-none d-md-block" >
         <label for="profilemenu" class="mt-2 ml-2 font-weight-bold text-muted third-text-color mb-0" >{{Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
        </li>
    </ul>
</nav>
    
<div class="container-fluid m-0">
  <div class="row">
    
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 first-bg d-md-block mt-4 sidebar collapse">
      <div class="sidebar-sticky mb-5">
        <div class="text-center mt-2 mb-2 ">
          
          @include('includes.profile_icon.auth_profile_icon_md')

          <p class="mt-2 font-weight-bold text-muted third-text-color mb-0">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
          <small class="text-muted ">{{Auth::user()->email}}</small>
        </div>
        <hr class="third-bg">
        <ul class="nav flex-column ">
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="far fa-chart-bar"></i>
              <span class="nav-link-text ml-2">Dashboard</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="far fa-bookmark"></i>
              <span class="nav-link-text ml-3">Skills</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="fas fa-laptop-code"></i>
              <span class="nav-link-text ml-2">Services</span> 
            </a>
          </li>
          <li class="nav-item "> 
            <a class="nav-link" href="#resume" data-toggle="collapse" role="button" aria-expanded="false">
              <i class="far fa-file-alt"></i>
              <span class="nav-link-text ml-2">
                Resume 
                <i class="fas fa-chevron-down pull-right"></i>
              </span> 
            </a> 
            <div class="collapse" id="resume"> 
              <ul class="nav nav-sm flex-column "> 
                <li class="nav-item"> 
                  <a href="#" class="nav-link pl-5">Education</a> 
                </li> 
                <li class="nav-item"> 
                  <a href="#" class="nav-link pl-5">Work</a> 
                </li> 
                <li class="nav-item"> 
                  <a href="#" class="nav-link pl-5">Certificate</a> 
                </li>  
            </div> 
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="fas fa-briefcase"></i>
              <span class="nav-link-text ml-2">Portfolio</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="far fa-newspaper"></i>
              <span class="nav-link-text ml-2">Blog</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="fas fa-file-upload"></i>
              <span class="nav-link-text ml-2">Uploaded Resume</span> 
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Others</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span class="fa fa-plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item ">
            <a class="nav-link " href="{{route('user.page_preview', Auth::user()->username)}}">
              <i class="far fa-id-card "></i>
              <span class="nav-link-text ml-2">Page Preview</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="fas fa-user-cog"></i>
              <span class="nav-link-text ml-2">Manage Account</span> 
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="#">
              <i class="fas fa-cog "></i>
              <span class="nav-link-text ml-2">Settings</span> 
            </a>
          </li>
          <li class="nav-item p-2 d-md-none">
            <a class="nav-link btn btn-sm btn-outline-main btn-md text-light w-100 rounded-pill mt-2" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-light"></i> Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9   ml-sm-auto col-lg-10 px-md-4">
      @yield('content')
    </main>
  </div>
</div>

    @include('includes.loader.page_pre_loader')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    @include('includes.src.script')
    
</body>
</html>
