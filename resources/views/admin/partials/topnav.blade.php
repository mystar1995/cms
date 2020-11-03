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
    <span class="ms-Label" style="color: #ffffffe0; width: 160px; font-size: 17px;font-weight: 200;padding-top:13px;">Pty Limited... <button class="ms-Button" style="background: #5c2d91;border: #5c2d91;"><i class="ms-Icon ms-Icon--ChevronDown" style="position: absolute;margin: 4px;cursor: pointer;margin: -11px -9px 4px;"></i></i>
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
  <!-- <div class="ms-envss">

    <i class="ms-Icon ms-Icon--Clock" style="margin-top: 14px;margin-left: 31px; float: left; color: white;margin-right:13px;"></i>
    <div class="line" style="height: 100%; margin-left: 30px;"></div>
    <span class="ms-Label" style="color: #ffffffe0; width: 220px; font-size: 17px;font-weight: 200;padding:4px;margin-top:-49px;"></span>
    <div class="ms-Dropdown me me1" tabindex="0" style="">
      <select class="ms-Dropdown-select" style="margin-top: -10px; color: white;">
        <option> UTC</option>
        <option> Local Time </option>
        <option> American/New_York </option>
      </select>
    </div>  
  </div> -->
  <div class="ms-clock">
    <button class="ms-Button ms-Button--indigo" style="display: flex !important;"><i class="ms-Icon ms-font-lg ms-Icon--Clock" style="color: white;padding-top: 3px;display: flex;margin: 4px"></i><span class="mytime" style="margin-top: 10px;margin-right: 20px; color: white">UTC</span></button>
    <div class="ms-Panel">
      <p class="ms-Panel-headerText" style="font-weight: bolder;margin-left: 18px;">UTC</p>
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
      </button>
      <div class="ms-Panel-contentInner" style="padding: 0 18px 20px;">
        <p class="ms-Panel-headerText utc" style="font-weight: bolder;font-size: 17px;margin-top: unset; cursor: pointer;">UTC</p>
        <p class="ms-Panel-headerText local_time" style="font-weight: bolder;font-size: 17px;margin-top: unset; cursor: pointer;">Local Time</p>
        <p class="ms-Panel-headerText new_y" style="font-weight: bolder;font-size: 17px;margin-top: unset; cursor: pointer;">American/New_York</p>
        <div class="ms-Panel-content">
          
        </div>
      </div>
    </div>
  </div>
  <!-- <div>
    <i class="ms-Dropdown-caretDown ms-Icon ms-Icon--GlobalNavButton" style="color: white"></i>
    <div class="ms-Dropdown me me1" tabindex="0" style="">
      <i class="ms-Dropdown-caretDown ms-Icon ms-Icon--GlobalNavButton" style="color: white"></i>
      <select class="ms-Dropdown-select" style="margin-top: -10px; color: white;">
        <option>
        1x1
        </option>
        <option> 2x2 </option>
        <option> 4x4 </option>
      </select>
    </div>  
  </div> -->
  <div class="ms-setting">
    <button class="ms-Button ms-Button--indigo"><i class="ms-Icon ms-font-lg ms-Icon--Settings" style="color: white;padding-top: 3px;"></i></button>
    <div class="ms-Panel">
      <p class="ms-Panel-headerText" style="font-weight: bolder;margin-left: 18px;">Settings</p>
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
      </button>
      <div class="ms-Panel-contentInner" style="padding: 0 18px 20px;">
        <p class="ms-Panel-headerText" style="font-weight: bolder;font-size: 17px;margin-top: unset;">Themes</p>
        <div class="ms-Panel-content">
          <div class="set_area" style="height: 115px; overflow-y: hidden;">
              <img class="1" value="1" src="{{ asset('assets/img/theme/1.png') }}">
              <img class="2" src="{{ asset('assets/img/theme/2.png') }}">
              <img class="default" src="{{ asset('assets/img/theme/default.png') }}">
              <img class="3" src="{{ asset('assets/img/theme/3.png') }}">
              <img class="4" src="{{ asset('assets/img/theme/4.png') }}">
              <img class="5" src="{{ asset('assets/img/theme/5.png') }}">
              <img class="6" src="{{ asset('assets/img/theme/6.png') }}">
              <img class="7" src="{{ asset('assets/img/theme/7.png') }}">
              <img class="8" src="{{ asset('assets/img/theme/8.png') }}">
              <img class="9" src="{{ asset('assets/img/theme/9.png') }}">
              <img class="10" src="{{ asset('assets/img/theme/10.png') }}">
              <img class="11" src="{{ asset('assets/img/theme/11.png') }}">
              <img class="22" src="{{ asset('assets/img/theme/22.png') }}">
              <img class="33" src="{{ asset('assets/img/theme/33.png') }}">
              <img class="44" src="{{ asset('assets/img/theme/44.png') }}">
              <img class="55" src="{{ asset('assets/img/theme/55.png') }}">
              <img class="66" src="{{ asset('assets/img/theme/66.png') }}">
              <img class="1" src="{{ asset('assets/img/theme/77.png') }}">
              <img class="2" src="{{ asset('assets/img/theme/88.png') }}">
              <img class="3" src="{{ asset('assets/img/theme/99.png') }}">
              <img class="4" src="{{ asset('assets/img/theme/00.png') }}">
              <img class="5" src="{{ asset('assets/img/theme/111.png') }}">
              <img class="6" src="{{ asset('assets/img/theme/222.png') }}">
              <img class="7" src="{{ asset('assets/img/theme/333.png') }}">
              <img class="8" src="{{ asset('assets/img/theme/444.png') }}">
              <img class="9" src="{{ asset('assets/img/theme/555.png') }}">
              <img class="10" src="{{ asset('assets/img/theme/666.png') }}">
              <img class="11" src="{{ asset('assets/img/theme/777.png') }}">
              <img class="22" src="{{ asset('assets/img/theme/888.png') }}">
              <img class="44" src="{{ asset('assets/img/theme/000.png') }}">
              <img class="55" src="{{ asset('assets/img/theme/1111.png') }}">
              <img class="66" src="{{ asset('assets/img/theme/2222.png') }}">
              <img class="1" src="{{ asset('assets/img/theme/3333.png') }}">
              <img class="2" src="{{ asset('assets/img/theme/4444.png') }}">
              <img class="3" src="{{ asset('assets/img/theme/5555.png') }}">
              <img class="4" src="{{ asset('assets/img/theme/6666.png') }}">
              <img class="5" src="{{ asset('assets/img/theme/7777.png') }}">
              <img class="6" src="{{ asset('assets/img/theme/8888.png') }}">
              <img class="7" src="{{ asset('assets/img/theme/9999.png') }}">
              <img class="8" src="{{ asset('assets/img/theme/0000.png') }}">
          </div>
        </div><br>
        <span class="ms-Panel-headerText hideset" style="font-size: 17px; cursor: pointer; display: none; margin: unset;">Hide all</span>
        <span class="ms-Panel-headerText view" style="font-size: 17px; cursor: pointer; margin: unset;">view all</span>
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
                <div class="ms-Persona-optionalText" style="font-weight: bolder;">milton@yac.com</div>
                <div class="ms-Persona-secondaryText"><a href="#" style="color: #0065b2; font-weight: bolder;"> My profile</a></div>
                <div class="ms-Persona-tertiaryText"><a href="#" style="color: #0065b2; font-weight: bolder;">My account</a></div>
                <div class="ms-Persona-optionalText"><a href="{{ route('logout') }}" style="color: #0065b2; font-weight: bolder;">Sign out</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>