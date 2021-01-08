
@extends('layouts.user_preview')

@section('content')


<div class="border-0 box " id="clip-path" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1000">
</div>

<div class="main-content">

    {{-- home content --}}
    @include('includes.user_preview.home')
    
    {{-- about content --}}
    @include('includes.user_preview.about')

    {{-- skills content --}}
    @include('includes.user_preview.skills')

    {{-- services content --}}
    @include('includes.user_preview.services')

    {{-- resume content --}}
    @include('includes.user_preview.resume')

    {{-- portfolio content --}}
    @include('includes.user_preview.portfolio')
    
</div>
    
@endsection