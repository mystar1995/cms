
<aside id="sidebar-wrapper">
  <!-- <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">Office 365</a>
  </div> -->
  <!-- <div class="sidebar-brand sidebar-brand-sm">
    <a href="index.html">St</a>
  </div> -->
  <ul class="sidebar-menu">
      <!-- <li class="menu-header">Dashboard</li> -->

  <ul class="navbar-nav mr-3" style="width: 100%">

    <li><a href="#" data-toggle="sidebar1" class="nav-link1 nav-link-lg1"><!-- <i class="ms-Icon ms-font-lg ms-Icon--CollapseMenu" style="margin-left: -3px;"></i> --></a></li>
   <!--  <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
  </ul>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="ms-Icon ms-font-lg ms-Icon--Financial"></i> <span class="ms-Label" style="font-size:14px">Home</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.speak_up' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.speak_up') }}"><i class="ms-Icon ms-font-lg ms-Icon--Speakers"></i> <span class="ms-Label" style="font-size:14px">Speak Up</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.courses' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.courses') }}"><i class="ms-Icon ms-font-lg ms-Icon--Boards"></i><span class="ms-Label" style="font-size:14px">Courses</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.test' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.test') }}"><i class="ms-Icon ms-font-lg ms-Icon--AddEvent"></i> <span class="ms-Label" style="font-size:14px">Knowledge Tests</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.note_side' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.note_side') }}"><i class="ms-Icon ms-font-lg ms-Icon--FabricOpenFolderHorizontal"></i><span class="ms-Label" style="font-size:14px">Knowledgebase</span></a></li>
      <li><button class="collapsible"><i class="ms-Icon ms-font-lg ms-Icon--DelveAnalyticsLogo" style="margin-left: 5px;color: #848b90"></i><span class="ms-Label" style="font-size: 14px;display: unset;padding-left:22px;">Directories</span></button>
      <div class="content" style="padding: unset; max-height: 300px;">
        <a  class="{{ Request::route()->getName() == 'admin.languages' ? ' active' : '' }}" href="{{ route('admin.languages') }}" style="display: block; height: auto;">
            <span>Languages</span>
        </a>
        <a  class="{{ Request::route()->getName() == 'admin.databases' ? ' active' : '' }}" href="{{ route('admin.databases') }}" style="display: block; height: auto;">
            <span>Databases</span>
        </a>
        <a  class="{{ Request::route()->getName() == 'admin.framworks' ? ' active' : '' }}" href="{{ route('admin.framworks') }}" style="display: block; height: auto;">
            <span>Frameworks</span>
        </a>
        <a  class="{{ Request::route()->getName() == 'admin.componets' ? ' active' : '' }}" href="{{ route('admin.componets') }}" style="display: block; height: auto;">
            <span>Components</span>
        </a>
        <a  class="{{ Request::route()->getName() == 'admin.discover' ? ' active' : '' }}" href="{{ route('admin.discover') }}" style="display: block; height: auto;">
            <span>Discover</span>
        </a>
      </div></li>      
      <li class="{{ Request::route()->getName() == 'admin.request' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.request') }}"><i class="ms-Icon ms-font-lg ms-Icon--Help"></i><span class="ms-Label">Requests</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.notification' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.notification') }}"><i class="ms-Icon ms-font-lg ms-Icon--Warning"></i><span class="ms-Label" style="font-size:14px;">Notifications</span></a></li>
       @if(Auth::user()->can('manage-users'))
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="ms-Icon ms-font-lg ms-Icon--AddGroup"></i><span class="ms-Label" style="font-size:14px">Users</span></a></li>
      @endif
      <li class="{{ Request::route()->getName() == 'admin.analytics' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.analytics') }}"><i class="ms-Icon ms-font-lg ms-Icon--DynamicSMBLogo"></i><span class="ms-Label" style="font-size:14px">Analytics</span></a></li>
     
    </ul>
</aside>