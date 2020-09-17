<form class="form-inline" action="{{ route('admin.users') }}" style="margin: auto;">
  <div class="search-element">
    <input class="form-control" value="{{ Request::get('query') }}" name="query" type="search" placeholder="Search for helpful resources" aria-label="Search" data-width="350" style="min-height: 37px;height: 37px; margin-top: -20px; margin-left: -26px; border-radius: 3px;">

    <button class="btn" type="submit" style="height: 35px; margin-top: -16px; float: left;padding-top: 6px;border-radius: 3px;">
      <i class="fas fa-search" style="transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    -ms-transform: scaleX(-1); font-size: 16px; color: #3081e0"></i>
  </button>
    <div class="search-backdrop"></div>
    {{-- @include('admin.partials.searchhistory') --}}
  </div>
</form>
<ul class="navbar-nav navbar-right">
  <!-- <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg{{ Auth::user()->unreadNotifications->count() ? ' beep' : '' }}"><i class="far fa-bell"></i></a>
    <div class="dropdown-menu dropdown-list dropdown-menu-right">
      <div class="dropdown-header">Notifications
        <div class="float-right">
          <a href="#">Mark All As Read</a>
        </div>
      </div>
      <div class="dropdown-list-content dropdown-list-icons">
        @if(Auth::user()->unreadNotifications->count())
        @for($i = 1; $i < 40; $i++)
        <a href="#" class="dropdown-item dropdown-item-unread">
          <div class="dropdown-item-icon bg-primary text-white">
            <i class="fas fa-code"></i>
          </div>
          <div class="dropdown-item-desc">
            Template update is available now!
            <div class="time text-primary">2 Min Ago</div>
          </div>
        </a>
        @endfor
        @else
        <p class="text-muted p-2 text-center">No notifications found!</p>
        @endif
    </div>
  </li> -->
  <li><img alt="image" src="{{ asset('assets/img/set.png') }}" class="rounded-circle mr-1 left-img"></li>
  <li><img alt="image" src="{{ asset('assets/img/question.png') }}" class="rounded-circle mr-1 left-img"></li>
  <li class="dropdown"><!-- <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> -->
    <!-- <img alt="image" src="{{ Auth::user()->avatarlink }}" class="rounded-circle mr-1"> -->

    <a href="#" data-toggle="dropdown" class="nav-link" >
    <img alt="image" src="{{ asset('assets/img/db.png') }}" class="rounded-circle mr-1 left-img">
    <!-- <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div> --></a>
    <div class="dropdown-menu dropdown-menu-right">
      <div class="dropdown-title">Welcome, {{ Auth::user()->name }}</div>
      <a href="{{ Auth::user()->profilelink }}" class="dropdown-item has-icon">
        <i class="far fa-user"></i> Profile Settings
      </a>
      <div class="dropdown-divider"></div>
      <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
        <i class="fas fa-sign-out-alt"></i> Logout
      </a>
    </div>
  </li>
</ul>