@extends('layouts.admin-master')

@section('title')
Views
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 0;">
	<div class="top-area">
		<div class="" style="padding: 13px; padding-left: 30px;">
			<div class="row">
				<div class="col-md-10" style="cursor: pointer;">
					<div class="event" style="display: flex;">
						<i class="ms-Icon ms-font-sm ms-Icon--CalculatorAddition" style="color: #894888; font-size: 13px;"></i>
						<span style="cursor: pointer;padding-left:5px;">New solution</span>
						<i class="ms-Icon ms-font-sm ms-Icon--Import" style="color: #894888; padding-left: 20px;"></i>
						<span style="cursor: pointer;padding-left:5px;">Import</span>
						<i class="ms-Icon ms-font-sm ms-Icon--Lock" style="color: #894888; padding-left: 20px;"></i>
						<span style="cursor: pointer;padding-left:5px;">Open AppSource</span>
						<i class="ms-Icon ms-font-sm ms-Icon--WebPublish" style="color: #894888; padding-left: 20px;"></i>
						<span style="cursor: pointer;padding-left:5px;">Publish all customizations</span>
						<i class="ms-Icon ms-font-sm ms-Icon--OpenInNewWindow" style="color: #894888; padding-left: 20px;"></i>
						<span style="cursor: pointer;padding-left:5px;">Switch to classic</span>
						<i class="ms-Icon ms-font-sm ms-Icon--History" style="color: #894888; padding-left: 20px;"></i>
						<span style="cursor: pointer;padding-left:5px;">See history</span>

					</div>
				</div>
				<div class="col-md-2" style="cursor: pointer;">
					<div class="event" style="display: flex;">
						<i class="ms-Icon ms-font-sm ms-Icon--AlignLeft" style="color: #894888; font-size: 13px;"></i>
						
						<i class="ms-Icon ms-font-sm ms-Icon--Search" style="color: #5a81e8; padding-left: 70px; font-weight: bolder;"></i>
						<span style="cursor: pointer;padding-left:5px;">Search</span>

					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
@section('content')
<section class="section">
  <div class="section-header">
	<div class="ms-Dropdown me col-md-10" tabindex="0" style="width: 70px;position: absolute;right: 0; top: 0;margin-top: -36px;margin-right: 130px;color: #333;">
	  <i class="ms-Dropdown-caretDown ms-Icon ms-Icon--ChevronDown"></i>
	  <select class="ms-Dropdown-select">
	    <option>
			1x1
	    </option>
	    <option> 2x2 </option>
	    <option> 4x4 </option>
	  </select>
	</div>	
	<div class="row">
		<div class="col-md-6">
			<div class="" style="display: flex;">
			<div class="ms-OrgChart" style="margin-left: 40%;">
			  <div class="ms-OrgChart-group">
			    <ul class="ms-OrgChart-list">
			      <li class="ms-OrgChart-listItem">
			        <button class="ms-OrgChart-listItemBtn" tabindex="1">
			          <div class="ms-Persona">
			            <div class="ms-Persona-imageArea">
			              <div class="ms-Persona-initials ms-Persona-initials--blue">RM</div>
			              <img class="ms-Persona-image" src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/images/persona.person.png">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Russel Miller</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<img src="{{ asset('assets/img/11.jpg') }}" style="width: 100%;">
		</div>
		<div class="col-md-6">
			<div class="" style="display: flex;">
			<div class="ms-OrgChart" style="margin-left: 40%;">
			  <div class="ms-OrgChart-group">
			    <ul class="ms-OrgChart-list">
			      <li class="ms-OrgChart-listItem">
			        <button class="ms-OrgChart-listItemBtn" tabindex="1">
			          <div class="ms-Persona">
			            <div class="ms-Persona-imageArea">
			              <div class="ms-Persona-initials ms-Persona-initials--blue">RM</div>
			              <img class="ms-Persona-image" src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/images/persona.person.png">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Grant Steel</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<img src="{{ asset('assets/img/22.jpg') }}" style="width: 100%; height: 86%">
		</div>
		<div class="col-md-6">
			<div class="" style="display: flex;">
			<div class="ms-OrgChart" style="margin-left: 40%;">
			  <div class="ms-OrgChart-group">
			    <ul class="ms-OrgChart-list">
			      <li class="ms-OrgChart-listItem">
			        <button class="ms-OrgChart-listItemBtn" tabindex="1">
			          <div class="ms-Persona">
			            <div class="ms-Persona-imageArea">
			              <div class="ms-Persona-initials ms-Persona-initials--blue">RM</div>
			              <img class="ms-Persona-image" src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/images/persona.person.png">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Harvey Wallin</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<img src="{{ asset('assets/img/33.jpg') }}" style="width: 100%;">
		</div>
		<div class="col-md-6">
			<div class="" style="display: flex;">
			<div class="ms-OrgChart" style="margin-left: 40%;">
			  <div class="ms-OrgChart-group">
			    <ul class="ms-OrgChart-list">
			      <li class="ms-OrgChart-listItem">
			        <button class="ms-OrgChart-listItemBtn" tabindex="1">
			          <div class="ms-Persona">
			            <div class="ms-Persona-imageArea">
			              <div class="ms-Persona-initials ms-Persona-initials--blue">RM</div>
			              <img class="ms-Persona-image" src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/images/persona.person.png">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Russel Miller</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<img src="{{ asset('assets/img/44.jpg') }}" style="width: 100%;">
		</div>
	</div>				
  </div>

  <div class="section-body">
  	
  </div>
</section>
@endsection
