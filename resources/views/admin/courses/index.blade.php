@extends('layouts.admin-master')

@section('title')
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 220px;right: 5px;position: absolute;z-index: 0;"></div>
@section('content')

<section class="section">
  <div class="section-header">
    <h1 class="ms-Label">Alerts</h1>
  </div>
  <div class="section-body">
  	<table id="example">
	    <thead>
	      <tr>
	      	<th style="width: 15%">Date time</th>
	      	<th style="width: 15%">Trigger</th>
	      	<th style="width: 25%">Detail</th>
	      	<th style="width: 15%">Coders</th>
	      	<th style="width: 12%">Actions</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td>1 years ago</td>
	      	<td>idle1</td>
	      	<td>Google Chrome.app4</td>
	      	<td>Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>2 years ago</td>
	      	<td>idle3</td>
	      	<td>Google Chrome.app3</td>
	      	<td>Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>3 years ago</td>
	      	<td>idle4</td>
	      	<td>Google Chrome.app2</td>
	      	<td>Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>4 years ago</td>
	      	<td>idle5</td>
	      	<td>Google Chrome.app1</td>
	      	<td>Graz Ten2</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>1 years ago</td>
	      	<td>idle1</td>
	      	<td>Google Chrome.app4</td>
	      	<td>Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>2 years ago</td>
	      	<td>idle3</td>
	      	<td>Google Chrome.app3</td>
	      	<td>Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>3 years ago</td>
	      	<td>idle4</td>
	      	<td>Google Chrome.app2</td>
	      	<td>Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>4 years ago</td>
	      	<td>idle5</td>
	      	<td>Google Chrome.app1</td>
	      	<td>Graz Ten2</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>1 years ago</td>
	      	<td>idle1</td>
	      	<td>Google Chrome.app4</td>
	      	<td>Graz Ten3</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>2 years ago</td>
	      	<td>idle3</td>
	      	<td>Google Chrome.app3</td>
	      	<td>Graz Ten5</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>3 years ago</td>
	      	<td>idle4</td>
	      	<td>Google Chrome.app2</td>
	      	<td>Graz Ten4</td>
	      	<td></td>
	      </tr>
	      <tr>
	      	<td>4 years ago</td>
	      	<td>idle5</td>
	      	<td>Google Chrome.app1</td>
	      	<td>Graz Ten2</td>
	      	<td></td>
	      </tr>
	    </tbody>
	</table>
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
</style>
