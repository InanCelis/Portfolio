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
    <style>
        body {
            background-color: var(--first);
        }
    </style>
  </head>
 
<body id="pagetheme" class="{{session('darkmode')? 'darkmode': 'lightmode'}}">
    @include('includes.random.theme_toggle_button')
    
    <div class="first-bg">
        <header class="container-fluid">
            <nav class="navbar navbar-expand-lg w-100 row justify-content-between" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000">
                <div class="logo-name ">
                    <a class="main-text-color ml-0 ml-md-5" href="/">Inan</a>
                </div>
                <a href="/" class="h2 third-text-color"><i class="fa fa-close"></i></a>
            </nav>
        </header>
    </div>
    
    
    <main role="main" >

        @yield('content')

    </main>
    @include('includes.loader.page_pre_loader')
    @include('includes.src.script')
</body>
</html>
