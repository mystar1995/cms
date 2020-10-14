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

    <li><a href="#" data-toggle="sidebar" class="collapsible-menu"><i class="ms-Icon ms-font-lg ms-Icon--CollapseMenu" style="margin-left: -3px;"></i></a></li>
   <!--  <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li> -->
  </ul>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="ms-Icon ms-font-lg ms-Icon--Home"></i> <span class="ms-Label" style="font-size:14px">Dashboard</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.views' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.views') }}"><i class="ms-Icon ms-font-lg ms-Icon--Speakers"></i> <span class="ms-Label" style="font-size:14px">Views</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.crew' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.crew') }}"><i class="ms-Icon ms-font-lg ms-Icon--Boards"></i><span class="ms-Label" style="font-size:14px">Crew Members</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.alert' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.alert') }}"><i class="ms-Icon ms-font-lg ms-Icon--AddEvent"></i> <span class="ms-Label" style="font-size:14px">Alerts</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.activite' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.activite') }}"><i class="ms-Icon ms-font-lg ms-Icon--Help"></i><span class="ms-Label" style="font-size: 14px;">Activities</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.worktime' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.worktime') }}"><i class="ms-Icon ms-font-lg ms-Icon--Warning"></i><span class="ms-Label" style="font-size:14px;">Worktime</span></a></li>
      
      <li class="{{ Request::route()->getName() == 'admin.reports' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.reports') }}"><i class="ms-Icon ms-font-lg ms-Icon--DynamicSMBLogo"></i><span class="ms-Label" style="font-size:14px">Reports</span></a></li>
     
    </ul>
</aside>