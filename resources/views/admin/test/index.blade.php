@extends('layouts.admin-master')

@section('title')
Crew Members
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 0;"></div>
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
	      	<td class="tname">idle1</td>
	      	<td class="tstatus">Google Chrome.app4</td>
	      	<td class="tloc">Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle3</td>
	      	<td class="tstatus">Google Chrome.app3</td>
	      	<td class="tloc">Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">idle4</td>
	      	<td class="tstatus">Google Chrome.app2</td>
	      	<td class="tloc">Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle5</td>
	      	<td class="tstatus">Google Chrome.app1</td>
	      	<td class="tloc">Graz Ten2</td>
	      	<td></td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">idle1</td>
	      	<td class="tstatus">Google Chrome.app4</td>
	      	<td class="tloc">Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle3</td>
	      	<td class="tstatus">Google Chrome.app3</td>
	      	<td class="tloc">Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">idle4</td>
	      	<td class="tstatus">Google Chrome.app2</td>
	      	<td class="tloc">Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle5</td>
	      	<td class="tstatus">Google Chrome.app1</td>
	      	<td class="tloc">Graz Ten2</td>
	      	<td></td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">idle1</td>
	      	<td class="tstatus">Google Chrome.app4</td>
	      	<td class="tloc">Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle3</td>
	      	<td class="tstatus">Google Chrome.app3</td>
	      	<td class="tloc">Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr class="odd">
	      	<td class="tname">idle4</td>
	      	<td class="tstatus">Google Chrome.app2</td>
	      	<td class="tloc">Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td class="tname">idle5</td>
	      	<td class="tstatus">Google Chrome.app1</td>
	      	<td class="tloc">Graz Ten2</td>
	      	<td></td>
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
