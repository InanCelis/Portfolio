<div class="col-md-12 col-lg-5 mt-4 mb-5  align-self-center">
    <div class="text-center third-text-color">
        <p>Or continue with</p>
    </div>
    <a class="text-decoration-none" href="{{ url('auth/facebook') }}">
        <div class="btn-group mr-2 w-100 mt-3" role="group" aria-label="First group">
            <b class="social-btn  btn-outline-none" style="width: 45px">
                <img src="{{asset('/images/fb.png')}}" height="25px" width="25px" alt="">
            </b>
            <b class="social-btn btn-block bg-fb text-center" style="font-size:15px;">Continue with Facebook</b>
        </div>
    </a>
    <a  class="text-decoration-none" href="{{ url('auth/google') }}">
        <div class="btn-group mr-2 w-100 mt-3" role="group" aria-label="First group">
            <b class="social-btn  btn-outline-none" style="width: 45px">
                <img src="{{asset('/images/google.png')}}" height="20px" width="20px" alt="">
            </b>
            <b class="social-btn btn-block btn-primary text-center" style="font-size:15px;">Continue with Google</b>
        </div>
    </a>
</div>