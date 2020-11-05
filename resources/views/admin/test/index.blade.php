@extends('layouts.admin-master')

@section('title')
Crew Members
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 1;">
	<div class="top-area">
		<div class="" style="padding: 9px; padding-left: 30px;">
			<div class="row">
				<div class="col-md-12" style="cursor: pointer;padding-left: 0px;">
					<div class="event" style="display: flex;">
						<div class="top_btn">
							<i class="ms-Icon ms-font-sm ms-Icon--CalculatorAddition" style="color: #894888; font-size: 13px;"></i>
							<span style="cursor: pointer;padding-left:5px;">New</span>
						</div>
						<div class="top_btn" style="margin-left: 10px;">
							<i class="ms-Icon ms-font-sm ms-Icon--Delete" style="color: #894888;"></i>
							<span style="cursor: pointer;padding-left:5px;">Delete</span>
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
    <h1 class="ms-Label">Crew Members</h1>
  </div>
  <div class="section-body ms-setting">
  	<table class="ms-Table">
	    <thead>
	      <tr>
	      	<th style="width: 25%">Name</th>
	      	<th style="width: 25%">Status</th>
	      	<th style="width: 25%">Location</th>
	      	<th style="width: 32%">Actions</th>
	      </tr>
	    </thead>
	    <tbody class="ms-Button">
	      <tr class="odd">
	      	<td class="tname">Graz</td>
	      	<td class="tstatus">Pending</td>
	      	<td class="tloc">Singapore</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr>
	      	<td class="tname">Darv</td>
	      	<td class="tstatus">Active</td>
	      	<td class="tloc">Russia</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">Vint</td>
	      	<td class="tstatus">Inactive</td>
	      	<td class="tloc">Japan</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr>
	      	<td class="tname">lujang</td>
	      	<td class="tstatus">Active</td>
	      	<td class="tloc">Unite State</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">Graz</td>
	      	<td class="tstatus">Pending</td>
	      	<td class="tloc">Singapore</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr>
	      	<td class="tname">Darv</td>
	      	<td class="tstatus">Active</td>
	      	<td class="tloc">Russia</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">Vint</td>
	      	<td class="tstatus">Inactive</td>
	      	<td class="tloc">Japan</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	      <tr>
	      	<td class="tname">lujang</td>
	      	<td class="tstatus">Active</td>
	      	<td class="tloc">Unite State</td>
	      	<td>
	      		<div>
                    <i data-toggle="tooltip" data-placement="top" title="Edit" class="ms-Icon ms-font-sm ms-Icon--Edit" style=""></i>
                    <i data-toggle="tooltip" data-placement="top" title="Delete" class="ms-Icon ms-font-sm ms-Icon--Delete" style="margin-left: 20px;"></i>
				</div>
			</td>
	      </tr>
	    </tbody>
	</table>
	<div class="ms-Panel">
      <button class="ms-Panel-closeButton ms-PanelAction-close">
        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
      </button>
      <div class="ms-Panel-contentInner">
        <p class="ms-Panel-headerText"></p>
        <div class="ms-Panel-content">
          
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
<style type="text/css">
	h1{
		font-size: 21px !important;
		font-weight: bolder;
	}
	.section-body{
		background: white;
	    padding: 20px;
	    padding-bottom: 440px;
	}
	#example_length, .dataTables_info{
		display: none;
	}
	#example_filter, #example_paginate{
		display: none;
	}
	table.dataTable tr.odd{
		background-color: #f3f2f1 !important;
	}
	table.dataTable tr.odd td.sorting_1{
		background-color: #eae9e8 !important;
	}
	table.dataTable tr.even td.sorting_1{
		background-color: #f3f2f2 !important;
	}
	th, td{
		-webkit-font-smoothing: antialiased;
    	font-family: Segoe UI WestEuropean,Segoe UI,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,sans-serif;
    	box-shadow: none;
    	font-size: 14px;
	}
	table.dataTable td{
		padding: 10px 10px !important;
	}
	.ms-Button:active{
		background-color: unset !important;
		border-color: unset !important;
	}
	.ms-Button:hover{
		background-color: unset !important;
	}
	.ms-Button{
		background-color: unset !important;
		color: #6c757d !important;
		display: table-footer-group !important;/*
		height: unset !important;
		min-width:unset !important;
		border: 0px solid #000 !important;
		padding: unset !important;*/
	}
	.ms-Icon--ChevronDown{
		color: white;
	}
	.ms-Table-head, .ms-Table thead th{
		font-size: 14px !important;
	}
	.odd{
		background-color: #f7f7f7;
	}
</style>
