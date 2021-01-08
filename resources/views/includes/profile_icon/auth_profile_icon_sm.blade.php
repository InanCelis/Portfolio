@if(isset(Auth::user()->profile_pic) &&  Auth::user()->profile_pic !=null)
        @if (preg_match('#^https?://#i', Auth::user()->profile_pic) === 1)
            <img src="{{Auth::user()->profile_pic}}" alt="" height="45px" width="45px" class="border-all rounded-pill" alt="Photo">
          @else
            <img src="{{asset('/images/profile_pic')}}/{{Auth::user()->profile_pic}}" alt="" height="45px" width="45px" class="border-all rounded-pill" alt="Photo">
        @endif
    @else
        <label class="profile-circle-sm text-light font-weight-bold main-bg  border-all " type="button"  >
            {{ Str::limit(Auth::user()->first_name ,1,'').Str::limit(Auth::user()->last_name ,1,'') }} 
        </label>
@endif