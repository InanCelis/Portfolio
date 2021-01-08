<div class="container-fluid" id="skills">
    <div class="row d-flex first-bg pt-5 pb-5 third-text-color" >
        <div class="container">
            <div class="row mb-3 ml-3"> 
                <div class="h_line shadow"></div>
                <h5 class="text-center text-md-left  text-uppercase font-weight-bold" >Skills </h5>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-3 ">
                        <h3 class="font-weight-bold ">Web Development</h3>
                        <p class="text-muted font-weight-bolder">Lorem ipsum, dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem modi consequatur mollitia aut soluta, labore eligendi magni accusantium ipsum minus quos ab nostrum officia doloribus libero sed ratione unde. Illo! adipisicing elit. psum dicta.</p>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-lg-3 col-sm-6 ">
                                <center><img src="{{asset('/images/html.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        HTML
                                    </div>
                                    <div class="text-center h5">
                                        <div class="d-none">{{$rate = 4}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star text-muted"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                            
                            <div class="col-md-4 col-lg-3 col-sm-6 ">
                                <center><img src="{{asset('/images/lara.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        Laravel
                                    </div>
                                    <div class="text-center h5">
                                        <div class="d-none">{{$rate = 3}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star text-muted"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <center><img src="{{asset('/images/css.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        CSS
                                    </div>
                                    <div class="text-center h5">
                                        <div class="d-none">{{$rate = 3}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star text-muted"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3 ">
                        <h3 class="font-weight-bold ">Mobile Development</h3>
                        <p class="text-muted font-weight-bolder">Lorem ipsum, dolor sit amet consectetur Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem modi consequatur mollitia aut soluta, labore eligendi magni accusantium ipsum minus quos ab nostrum officia doloribus libero sed ratione unde. Illo! adipisicing elit. psum dicta.</p>
                        <div class="row justify-content-center">
                            <div class="col-md-4 col-lg-3 col-sm-6 ">
                                <center><img src="{{asset('/images/android-studio-png.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        Android studio
                                    </div>
                                    <div class="text-center h5">
                                        <div class="d-none">{{$rate = 1}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star text-muted"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6">
                                <center><img src="{{asset('/images/react.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        React-Native
                                    </div>
                                    <div class="text-center h5">
                                        <div class="d-none">{{$rate = 1}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked"></span>
                                            @else
                                                <span class="fa fa-star text-muted"></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                            <div class="col-md-4 col-lg-3 col-sm-6 ">
                                <center><img src="{{asset('/images/csharp.png')}}" class="justify-items-center" height="50px" width="50px" alt=""></center>
                                <div class="card-body">
                                    <div class="third-text-color font-weight-bold pb-2 text-center">
                                        C# / CSharp
                                    </div>
                                    <div class="text-center h5 ">
                                        <div class="d-none">{{$rate = 3}}</div>
                                        @for($i = 1; $i < 6; $i++)
                                            @if ($rate >= $i)
                                                <span class="fa fa-star checked  "></span>
                                            @else
                                                <span class="fa fa-star text-muted  "></span>
                                            @endif
                                        @endfor
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
