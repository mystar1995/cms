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
  
  <div class="ms-env">
    <i class="ms-Icon ms-Icon--AddOnlineMeeting" style="margin-top: 12px;margin-left: -31px; float: left; color: white;"></i>
    <span class="ms-Label" style="color: rgba(255, 255, 255, 0.88); width: 180px; font-size: 11px;position: absolute;">Environments </span>
    <span class="ms-Label" style="color: #ffffffe0; width: 180px; font-size: 17px;font-weight: 200;padding-top:13px;">Pty Limited... <button class="ms-Button" style="background: #5c2d91;border: #5c2d91;"><i class="ms-Icon ms-Icon--ChevronDown" style="position: absolute;margin: 4px;cursor: pointer;margin: -11px -9px 4px;"></i></i>
    </button> </span>
    <div class="ms-Panel" style="margin-top: 5px;">
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
      </button>
      <div class="ms-Panel-contentInner" style="margin-top: -6px;padding:0 20px 20px">
        <p class="ms-Panel-headerText">Environments</p>
        <div class="ms-Panel-content">
          <div class="ms-SearchBox" style="width: 100%; margin-top: 10px;">
            <input class="ms-SearchBox-field" type="text" value="" style="width: 100%">
            <label class="ms-SearchBox-label">
              <i class="ms-SearchBox-icon ms-Icon ms-Icon--Search"></i>
              <span class="ms-SearchBox-text">Search</span> 
            </label>
            <div class="ms-CommandButton ms-SearchBox-clear ms-CommandButton--noLabel">
              <button class="ms-CommandButton-button">
                <span class="ms-CommandButton-icon"><i class="ms-Icon ms-Icon--Clear"></i></span> 
                <span class="ms-CommandButton-label"></span> 
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
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
  <div class="dropdown" style="width: 100%;">
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
          <p class="ms-Panel-headerText" style="margin-top: 0px;font-weight: bolder;">My account</p>
          <div class="ms-Panel-content" style="margin-top: 20px;">
            <div class="ms-Persona ms-Persona--xl">
              <div class="ms-Persona-imageArea">
                <div class="ms-Persona-initials ms-Persona-initials--blue">ML</div>
              </div>
              <div class="ms-Persona-presence">
                <i class="ms-Persona-presenceIcon ms-Icon ms-Icon--SkypeCheck"></i>
              </div>
              <div class="ms-Persona-details">
                <div class="ms-Persona-primaryText" style="font-size: 17px; font-weight: bolder;">Mlton Lafferty</div>
                <div class="ms-Persona-optionalText" style="font-weight: bolder;">Mlton@outlook.com</div>
                <div class="ms-Persona-secondaryText"><a href="#" style="color: #0065b2; font-weight: bolder;"> My office profile</a></div>
                <div class="ms-Persona-tertiaryText"><a href="#" style="color: #0065b2; font-weight: bolder;">My account</a></div>
                <div class="ms-Persona-optionalText"><a href="#" style="color: #0065b2; font-weight: bolder;">Sign out</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

