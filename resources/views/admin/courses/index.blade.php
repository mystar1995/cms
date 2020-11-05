@extends('layouts.admin-master')

@section('title')
Alerts
@endsection
<div class="navbar-top" style="height: 44px; margin-top: 50px; background-color: #f3f2f1;left: 200px;right: 5px;position: absolute;z-index: 1;">
	<div class="top-area">
		<div class="" style="padding: 9px; padding-left: 30px;">
			<div class="row">
				<div class="col-md-12" style="cursor: pointer;">
					<!-- <div class="event" style="display: flex;">
						<div class="top_btn" style="margin-left: 20px;">
							<i class="ms-Icon ms-font-sm ms-Icon--TriggerApproval" style="color: #894888;"></i>
							<span class="recorded" style="cursor: pointer;padding-left:5px;">Triggers</span>
						</div>
					</div> -->
					<div class="ms-clock">
					    <button class="ms-Button ms-Button--indigo" style="display: flex !important;"><i class="ms-Icon ms-font-sm ms-Icon--TriggerApproval" style="color: #894888;"></i>
							<span class="recorded" style="cursor: pointer;padding-left:5px;color: #894888;">Triggers</span></button>
					    <div class="ms-Panel">
					      <p class="ms-Panel-headerText" style="font-weight: bolder;margin-left: 18px;">Trigger</p>
					      <button class="ms-Panel-closeButton ms-PanelAction-close">
					        <i class="ms-Panel-closeIcon ms-Icon ms-Icon--Cancel" style="padding-top: 2px;"></i>
					      </button>
					      <div class="ms-Panel-contentInner" style="padding: 0 18px 20px;">
					       
					      </div>
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
    <h1 class="ms-Label">Alerts</h1>
  </div>
  <div class="section-body">
  	<!-- <table id="example">
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
	</table> -->
	<table class="ms-Table">
	  	<thead>
		    <tr>
		      	<th>Date time</th>
		      	<th>Trigger</th>
		      	<th>Detail</th>
		      	<th>Coders</th>
		      	<th>Actions</th>
		    </tr>
	  	</thead>
	  <tbody>
	    <tr class="odd">
	      	
	      	<td>4 years ago</td>
	      	<td>idle5</td>
	      	<td>Google Chrome.app1</td>
	      	<td>Graz Ten2</td>
	      	<td></td>
	    </tr>
	    <tr>
	      
	      	<td>3 years ago</td>
	      	<td>idle4</td>
	      	<td>Google Chrome.app2</td>
	      	<td>Graz Ten4</td>
	      	<td></td>
	    </tr>
	    <tr class="odd">
	      
	      	<td>2 years ago</td>
	      	<td>idle3</td>
	      	<td>Google Chrome.app3</td>
	      	<td>Graz Ten5</td>
	      	<td></td>
	    </tr>
	    <tr>
	      
	      	<td>1 years ago</td>
	      	<td>idle1</td>
	      	<td>Google Chrome.app4</td>
	      	<td>Graz Ten3</td>
	      	<td></td>
	    </tr>
	    <tr class="odd">
	      	
	      	<td>4 years ago</td>
	      	<td>idle5</td>
	      	<td>Google Chrome.app1</td>
	      	<td>Graz Ten2</td>
	      	<td></td>
	    </tr>
	    <tr>
	      
	      	<td>3 years ago</td>
	      	<td>idle4</td>
	      	<td>Google Chrome.app2</td>
	      	<td>Graz Ten4</td>
	      	<td></td>
	    </tr>
	    <tr class="odd">
	      
	      	<td>2 years ago</td>
	      	<td>idle3</td>
	      	<td>Google Chrome.app3</td>
	      	<td>Graz Ten5</td>
	      	<td></td>
	    </tr>
	    <tr>
	      
	      	<td>1 years ago</td>
	      	<td>idle1</td>
	      	<td>Google Chrome.app4</td>
	      	<td>Graz Ten3</td>
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
	.ms-Table-head, .ms-Table thead th{
		font-size: 14px !important;
	}
	.odd{
		background-color: #f7f7f7;
	}
</style>
