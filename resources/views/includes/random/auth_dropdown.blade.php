@auth
    <div class="dropdown dropleft float-right">
        <div class="row" id="profilemenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="col-3 mb-0 ">
                @include('includes.profile_icon.auth_profile_icon_sm')
            </div>
        </div>
        <div class="dropdown-menu third-bg p-3" aria-labelledby="profilemenu">
            <div class="text-center m-1 mt-3">
                @include('includes.profile_icon.auth_profile_icon_md') 
                <p class="mt-2 font-weight-bold text-muted first-text-color mb-0">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</p>
                <small class="text-muted ">{{Auth::user()->email}}</small>
            </div>
            <hr class="mt-2 mb-2 first-bg">
            <a class="mb-1 dropdown-item  text-muted" href="/dashboard">
                <i class="far fa-chart-bar main-text-color"></i> Dashboard
            </a>
            <a class="mb-1 dropdown-item  text-muted" href="{{route('user.page_preview', Auth::user()->username)}}">
                <i class="far fa-id-card main-text-color"></i> Page Preview
            </a>
            <a class="mb-1 dropdown-item  text-muted" href="#">
                <i class="fas fa-user-cog main-text-color"></i> Manage Account
            </a>
            <a class="mb-1 dropdown-item  text-muted" href="#">
                <i class="fas fa-cog main-text-color"></i> Settings
            </a>
            <a class="btn btn-sm btn-outline-main btn-md text-light w-100 rounded-pill mt-2" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt text-light"></i> Log Out
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
    @else
        <a href="/login" class="btn main-bg float-right text-light font-weight-bold mr-0 mr-md-5 rounded-pill">Login</a>
@endauth