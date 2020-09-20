<!-- <form class="form-inline" action="{{ route('admin.users') }}" style="margin: auto;">
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
</form> -->
<div class="navbar-nav navbar-right" style="margin-left: auto; margin-right: -20px;">
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
  <div><button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-xl ms-Icon--Settings" style="color: white;"></i></button></div>
  <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-xl ms-Icon--Help" style="color: white;"></i></button>
  <div class="dropdown" style="width: 100%;"><!-- <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> -->
    <!-- <img alt="image" src="{{ Auth::user()->avatarlink }}" class="rounded-circle mr-1"> -->
    <!-- <div class="ms-PanelExample">
      <a href="#" class="ms-Button ms-Button--indigo">
        <div class="ms-Persona-imageArea" style="max-width: 35px;height: 35px;position: unset;margin-top: 2px;">
        <div class="ms-Persona-initials ms-Persona-initials--purple" style="line-height: 35px;background-color: #0078d4;">ML</div>
      </div> 
      </a>
      <div class="ms-Panel">
        <button class="ms-Panel-closeButton ms-PanelAction-close">
          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
        </button>
        <div class="ms-Panel-contentInner">
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
        </div>
      </div>
    </div> -->
    <div class="ms-PanelExample">
      <button class="ms-Button" style="background-color: #5c2d91; border: 1px solid #5c2d91">
        <div class="ms-Persona-imageArea" style="max-width: 35px;height: 35px;position: unset;margin-top: 2px;">
          <div class="ms-Persona-initials ms-Persona-initials--purple" style="line-height: 35px;background-color: #0078d4;">ML</div>
        </div>
      </button>
      <div class="ms-Panel">
        <button class="ms-Panel-closeButton ms-PanelAction-close">
          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
        </button>
        <div class="ms-Panel-contentInner">
          <p class="ms-Panel-headerText">{{ Auth::user()->name }}</p>
          <div class="ms-Panel-content">
            <a href="#" class="dropdown-item has-icon">
              <i class="far fa-user"></i> Profile Settings
            </a>
            <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div> --></a>
    
  </div>
</div>

