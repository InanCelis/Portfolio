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
    
  </head>

    <body id="pagetheme" class="{{session('darkmode')? 'darkmode': 'lightmode'}}">
        
        @include('includes.random.theme_toggle_button')

        {{-- check if url is /user/username --}}
        <div class="d-none">{{ $cur =Request::is('user/'.$user->username || 'home')  ?'menu-link' :'' }}</div> 
        
        <div class="first-bg fixed-top">
            <header class="container-fluid">
                <nav class="navbar navbar-expand-lg w-100 " data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                    <div class="logo-name  {{$cur}}" >
                        <a class="main-text-color ml-0 ml-md-5"  href="{{ route('user.page_preview', $user->username)}}">
                        @foreach ($user->tbl_logo as $user_logo)
                            {{$user_logo->logo_name}}
                        @endforeach
                        </a>
                    </div>
                    <button class="navbar-toggler" id="menu-icon" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="h3 main-text-color"><i id="icon-menu" class="fa fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse  align-self-center prev_menu" id="navbarCollapse">
                      
                        <ul class="navbar-nav mr-auto justify-content-center w-100 ml-0 ">
                            <li class="nav-item item {{$cur}}">
                                <a class="nav-link " href="{{ route('user.page_preview', $user->username)}}#home">Home</a>
                            </li>
                            <li class="nav-item item {{$cur}}">
                                <a class="nav-link " href="{{ route('user.page_preview', $user->username)}}#about">About</a>
                            </li>
                            <li class="nav-item item {{$cur}}">
                                <a class="nav-link" href="{{ route('user.page_preview', $user->username)}}#skills">Skills</a>
                            </li>
                            <li class="nav-item item {{$cur}} ">
                                <a class="nav-link" href="{{ route('user.page_preview', $user->username)}}#services">Services</a>
                            </li>
                            <li class="nav-item item {{$cur}}">
                                <a class="nav-link" href="{{ route('user.page_preview', $user->username)}}#resume">Resume</a>
                            </li>
                            
                            <li class="nav-item item {{$cur}}">
                                <a class="nav-link" href="{{ route('user.page_preview', $user->username)}}#portfolio">Portfolio</a>
                            </li>
                            
                            <li class="nav-item item ">
                                <a class="nav-link" href="/skills">Blog</a>
                            </li>
                            <li class="nav-item item menu-link">
                                <a class="nav-link" href="{{ route('user.page_preview', $user->username)}}#contact">Contact</a>
                            </li>
                        </ul>
                        <div class=" mr-md-5 profile-dropdown">
                            @include('includes.random.auth_dropdown')
                        </div>
                        
                        
                    </div>
                </nav>
            </header>
        </div>
        
        <main role="main" style="margin-top: 80px" >

            @yield('content')

        </main>
        
        @include('includes.footers.user_preview_footer')
        
        <div class="text-center">
            <a href="#" id="buttonToTop"class="first-text-color h1" data-toggle="tooltip" data-placement="top" title="Go to top"><i class="fas fa-angle-up"></i></a>
        </div>
        
        @include('includes.loader.page_pre_loader')
        @include('includes.src.script')

    </body>
</html>
