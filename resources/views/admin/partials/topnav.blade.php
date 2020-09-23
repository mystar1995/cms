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
  <div>
    <span class="ms-Label" style="color: rgba(255, 255, 255, 0.88); width: 180px; font-size: 10px;position: absolute;">Active Profile : </span>
    <span class="ms-Label" style="color: #ffffffe0; width: 180px; font-size: 20px;font-weight: 200;padding-top:13px;">Yet Another Co <i class="ms-Icon ms-Icon--ChevronDown" style="position: absolute;margin: 4px;"></i> </span>

  </div>
  <div class="ms-setting">
    <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-lg ms-Icon--Settings" style="color: white;padding-top: 3px;"></i></button>
    <div class="ms-Panel">
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
      </button>
      <div class="ms-Panel-contentInner">
        <p class="ms-Panel-headerText">Settings</p>
        <div class="ms-Panel-content">
          
        </div>
      </div>
    </div>
  </div>
  
  <div class="ms-help">
    <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-lg ms-Icon--Help" style="color: white;padding-top: 2px;"></i></button>
    <div class="ms-Panel">
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 3px;"></i>
      </button>
      <div class="ms-Panel-contentInner helpful" style="margin-top: 70px;padding:0 20px 20px">
        <div style="display: flex;">
          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--ChromeBack" style="padding-top: 8px; cursor: pointer; color: #a7a7a7"></i>
          <a class="" href="{{ route('admin.dashboard') }}"><i class="ms-Panel-closeIcon ms-Icon ms-Icon--Home" style="padding-top: 4px;padding-left: 5px; padding-right: 10px; cursor: pointer; color: #a7a7a7"></i></a>
          
          <div class="ms-SearchBox" style="width: 100%;">
            <input class="ms-SearchBox-field" type="text" value="" style="width: 100%">
            <label class="ms-SearchBox-label">
              <i class="ms-SearchBox-icon ms-Icon ms-Icon--Search"></i>
              <span class="ms-SearchBox-text">Search help</span> 
            </label>
            <div class="ms-CommandButton ms-SearchBox-clear ms-CommandButton--noLabel">
              <button class="ms-CommandButton-button">
                <span class="ms-CommandButton-icon"><i class="ms-Icon ms-Icon--Clear"></i></span> 
                <span class="ms-CommandButton-label"></span> 
              </button>
            </div>
          </div>
        </div>
        <div class="card" style="padding: 15px; padding-top: 20px;margin-top: 10px;">
          <h4 class="ms-Label" style="font-size: 14px; font-weight: bold;">Sign your messages with style</h4>
          <p class="ms-Label" style="font-size: 14px">Lorem ipsum is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn't work that way.</p>
          <label class="ms-Label" style="font-size: 14px; color: #0078d4; cursor: pointer;">Learn more</label>
        </div>
        <div class="card" style="padding: 15px; padding-top: 20px;margin-top: -10px;">
          <h4 class="ms-Label" style="font-size: 14px; font-weight: bold;">Let them know you're away</h4>
          <p class="ms-Label" style="font-size: 14px">Lorem ipsum is so ubiquitous because it is so versatile. Select how many paragraphs you want, copy, paste, and break the lines wherever it is convenient. Real copy doesn't work that way.</p>
          <label class="ms-Label" style="font-size: 14px; color: #0078d4; cursor: pointer;">Learn more</label>
        </div>
      </div>
    </div>
  </div>
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
        <div class="ms-Persona-imageArea" style="max-width: 32px;height: 32px;position: unset;margin-top: 3px;margin-left: 3px;">
          <div class="ms-Persona-initials ms-Persona-initials--purple" style="line-height: 32px;background-color: #0078d4;font-size: 16px;font-weight: 300 !important;">ML</div>
        </div>
      </button>
      <div class="ms-Panel">
        <button class="ms-Panel-closeButton ms-PanelAction-close">
          <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel"></i>
        </button>
        <div class="ms-Panel-contentInner">
          <p class="ms-Panel-headerText">{{ Auth::user()->name }}</p>
          <div class="ms-Panel-content">
            <a href="{{ Auth::user()->profilelink }}" class="dropdown-item has-icon">
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

