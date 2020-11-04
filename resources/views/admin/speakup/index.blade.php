@extends('layouts.admin-master')

@section('title')
Views
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 1;">
	<div class="top-area">
		<div class="" style="padding: 9px; padding-left: 30px;">
			<div class="row">
				<div class="col-md-12" style="cursor: pointer;">
					<div class="event" style="display: flex;">
						<div class="top_btn">
							<i class="ms-Icon ms-font-sm ms-Icon--CalculatorAddition" style="color: #894888; font-size: 13px;"></i>
							<span style="cursor: pointer;padding-left:5px;">New</span>
						</div>
						<div class="top_btn" style="margin-left: 20px;">
							<i class="ms-Icon ms-font-sm ms-Icon--Delete" style="color: #894888;"></i>
							<span style="cursor: pointer;padding-left:5px;">Delete</span>
						</div>
						<div class="top_btn time_remove" style="margin-left: 20px;">
							<i class="ms-Icon ms-font-sm ms-Icon--OpenInNewWindow" style="color: #894888;"></i>
							<span style="cursor: pointer;padding-left:5px;">Switch to Recorded</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@section('content')
<section class="section">
  <div class="section-header">
  	<div style="width: 70px;position: absolute;right: 0; top: 0;margin-top: -31px;margin-right: 18px;color: #333; ">
	  <i class="ms-Icon ms-font-sm ms-Icon--AlignLeft" style="color: #894888; font-size: 13px;"></i>
	</div>
	<div class="ms-Dropdown me col-md-10" tabindex="0" style="width: 70px;position: absolute;right: 0; top: 0;margin-top: -36px;margin-right: 10px;color: #333;">
		<i class="ms-Dropdown-caretDown ms-Icon ms-Icon--ChevronDown"></i>
	  <select class="ms-Dropdown-select" style="margin-top: -10px;">
	    <option>
			1x1
	    </option>
	    <option> 2x2 </option>
	    <option> 4x4 </option>
	  </select>
	</div>	
	<div style="width: 70px;position: absolute;right: 0; top: 0;margin-top: -6px;margin-right: 218px;color: #333; ">
		<div class="ms-DatePicker" style="margin-top: -30px;width: 70px;">
		  <div class="ms-TextField">
		    <input class="ms-TextField-field" type="date">
		  </div>
		</div>
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
			              <img class="ms-Persona-image" src="{{ asset('assets/img/2.png') }}">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Graz</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<div style="position: absolute;">
				<div class="loading"></div>
				<img src="{{ asset('assets/img/11.png') }}" style="width: 100%;">
			</div>
			
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
				              <img class="ms-Persona-image" src="{{ asset('assets/img/1.png') }}">
				            </div>
				            <div class="ms-Persona-presence">
				            </div>
				            <div class="ms-Persona-details">
				              <div class="ms-Persona-primaryText">Darv</div>
				              <div class="ms-Persona-secondaryText">Sales</div>
				            </div>
				          </div>
				        </button>
				      </li>
				    </ul>
				  </div>
				</div>
			</div>
			<div style="position: relative;">
				<div class="loading"></div>
				<img src="{{ asset('assets/img/22.png') }}" style="width: 100%;">	
			</div>
			
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
			              <img class="ms-Persona-image" src="{{ asset('assets/img/3.png') }}">
			            </div>
			            <div class="ms-Persona-presence">
			            </div>
			            <div class="ms-Persona-details">
			              <div class="ms-Persona-primaryText">Vint</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<div style="position: relative;">
				<div class="loading"></div>
				<img src="{{ asset('assets/img/33.png') }}" style="width: 100%;">
			</div>
			
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
			              <div class="ms-Persona-primaryText">lujang</div>
			              <div class="ms-Persona-secondaryText">Sales</div>
			            </div>
			          </div>
			        </button>
			      </li>
			    </ul>
			  </div>
			</div>
			</div>
			<div style="position: relative;">
				<div class="loading"></div>
				<img src="{{ asset('assets/img/44.png') }}" style="width: 100%;">
			</div>
			
		</div>
	</div>
  </div>
</section>
    <div id="dl" style="height: 140px !important;"></div>
@endsection
