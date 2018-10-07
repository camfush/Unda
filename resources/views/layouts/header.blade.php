@php
  $user = Auth::user();
@endphp
<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="header-block header-block-search">
        <form role="search" method="post" action="{{URL::to('/search')}}">
            <div class="input-container">
                {{ csrf_field() }}
                <i class="fa fa-search"></i>
                <input type="search" value="@isset($search){{$search}}@endisset" name="search" placeholder="Search Unda....">
                <div class="underline"></div>
            </div>
        </form>
    </div>
    <div class="header-block header-block-nav">
      @if (Auth::check())
        <ul class="nav-profile">
          <li class="notifications new">
            <a href="" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              @if((count($user->notifications)) > 0)
              <sup>
                <span class="counter">{{count($user->notifications)}}</span>
              </sup>
              @endif
            </a>
            @if(count($user->notifications) > 0)
              <!-- Show notifications here -->
            <div class="dropdown-menu notifications-dropdown-menu">
              <ul class="notifications-container">
                <li>
                  <a href="" class="notification-item">
                    <div class="img-col">
                      @if(Auth::user()->profile_path)
                        <div class="img" style="background-image: url('{{Storage::url(Auth::user()->profile_path)}}')"></div>
                      @else
                        <div class="img" style="background-image: url('{{URL::to('images/faces/1.png')}}')"></div>
                      @endif
                    </div>
                    <div class="body-col">
                      <p>
                        <span class="accent">Jacob Lewis</span> uploaded new video:
                        <span class="accent">Testing Unda out</span>. </p>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="" class="notification-item">
                      <div class="img-col">
                        <div class="img" style="background-image: url('assets/faces/1.png')"></div>
                      </div>
                      <div class="body-col">
                        <p>
                          <span class="accent">Jacob Lewis</span> commented on your video:
                          <span class="accent">Blah blah blah</span>. </p>
                        </div>
                      </a>
                    </li>

                  </ul>
                  <footer>
                    <ul>
                      <li>
                        <a href="{{URL::to('/notifications')}}"> View All </a>
                      </li>
                    </ul>
                  </footer>
                </div>
              @endif
              </li>
              <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                  @if(Auth::user()->profile_path)
                    <div class="img" style="background-image: url('{{Storage::url(Auth::user()->profile_path)}}')"></div>
                  @else
                    <div class="img" style="background-image: url('{{URL::to('images/faces/1.png')}}')"></div>
                  @endif
                  <span class="name"> {{Auth::user()->name}} </span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                  <a class="dropdown-item" href="{{URL::to('account')}}">
                    <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="{{URL::to('notifications')}}">
                      <i class="fa fa-bell icon"></i> Notifications </a>
                      <a class="dropdown-item" href="{{URL::to('account/settings')}}">
                        <i class="fa fa-gear icon"></i> Settings </a>
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                          @csrf
                        <li><input type="submit" name="logout" value="Logout"></li>
                        </form>
                        </div>
                      </li>
          </ul>
            @else
              <a class="button" href="{{URL::to('login')}}">Login</a>
              <a class="button" href="{{URL::to('register')}}">Signup</a>
            @endif
    </div>
</header>
