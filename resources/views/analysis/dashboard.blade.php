<!DOCTYPE html>
<html lang="en">

<head>
@include('template/admin_title')
@include('template/admin_cssscripta')
</head>
<style>
smallfont{
	font-size:10px;
}
</style>
<body>
@if(Session::has('user_logged'))
	@include('template/admin_header')
	@include('template/admin_sidebar')
@endif

<div id="page-wrapper" >
	<div id="page-inner">
		
		<div class="row">
			<div class="col-lg-10 col-md-10">
			<h3>
					{{ trans('adminDashboard.callchampions_week') }} <?php echo date("j F Y", $datestart); ?> to <?php echo date("j F Y", $dateend); ?>
			</h3>
			<?php 
			if(!empty($call_details)){
			?>
			<table class="table table-striped table-bordered table-hover">
					<thead>
					   <tr>
					   	   <th> {{ trans('adminDashboard.callID') }} </th>
						   <th> {{ trans('adminDashboard.callchampionname') }} </th>
						   <th> {{ trans('adminDashboard.mothername') }} </th>
						   <th> {{ trans('adminDashboard.dateofcall') }} </th>
						   <th> {{ trans('adminDashboard.motherphno') }} </th>
					   </tr>
					 </thead>
					 <tbody>
					<?php 
					foreach($call_details as $val1)
					{
						
					?>
					<tr>
					<td> {{$val1->due_id }} </td>
					<td> {{$val1->c_name}} </td>
					<td> {{$val1->b_name}} </td>
					<td> {{$val1->dt_intervention_date}} </td>
					<td> {{$val1->v_phone_number}} </td>
					</tr>
					 </tbody>
					 
					 <?php 
						
					}
			?>
			
			</table>
			<?php 
			}
			else {
					 ?>
					 <h4>{{ trans('adminDashboard.nocalls_week') }}</h4>
					 <?php 
			}
					 ?>
			</div>
			
		</div>
		
		
		<div class="row">
			<div class="col-lg-10 col-md-10">
			<h3>
					{{ trans('adminDashboard.stats_week') }} <?php echo date("j F Y", $datestart); ?> to <?php echo date("j F Y", $dateend); ?>
			</h3>
			<table class="table table-striped table-bordered table-hover">
			<tr>
			<td> {{ trans('adminDashboard.numberofcalls') }} </td>
			<td> {{$totalcalls[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.numberofmothers') }} </td>
			<td> {{$mothersassigned[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.averagepermother') }} </td>
			<td> {{$averagepermother[0]->Average}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.callsattempt1') }}  </td>
			<td> {{$callsattemptequal1[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.callsattempt2') }} </td>
			<td> {{$callsattemptequal2[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.callsgt2') }} </td>
			<td> {{$callsattemptgt2[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.mothersincorrectphno') }} </td>
			<td> {{$incorrectphno[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.mothersnotreachable') }} </td>
			<td> {{$notreachable[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.mothersincorrectdeliverydate') }} </td>
			<td> {{$incorrectdeliverydate[0]->count}} </td>
			</tr>
			<tr>
			<td> {{ trans('adminDashboard.numberactionitems') }} </td>
			<td> {{$actionitems[0]->count}} </td>
			</tr>
			</table>
			</div>
		</div>
		
		
		
		
		
		<div class="row">
			<div class="col-lg-10 col-md-10">
			<h3>
					{{ trans('adminDashboard.callchampionsnotcalled_week') }} <?php echo date("j F Y", $datestart); ?> to <?php echo date("j F Y", $dateend); ?>
			</h3>
			<?php 
			if(!empty($cc_not_called)){
			?>
		    <table class="table table-striped table-bordered table-hover">
					<thead>
					   <tr>
					   	   <th> {{ trans('adminDashboard.dueid') }} </th>
						   <th> {{ trans('adminDashboard.callchampionname') }} </th>
						   <th> {{ trans('adminDashboard.callchampionphno') }} </th>
						   <th> {{ trans('adminDashboard.reminderstatus') }} </th>
						   
					   </tr>
					 </thead>
					 <tbody>
					<?php 
					foreach($cc_not_called as $val)
					{
						
					?>
					<tr>
					<td> {{$val->due_id }} </td>
					<td> {{$val->name}} </td>
					<td> {{$val->phno}} </td>					
					<td> {{$val->reminder_status}} </td>
					</tr>
					 </tbody>
					 
					 <?php 
					}
					?>
					
			</table>
			<?php 
			}
			else {
					
					 ?>
					 <h4>{{ trans('adminDashboard.nocalls_week') }}</h4>
					 <?php } 
					 ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-lg-10 col-md-10">
			<h3>
					{{ trans('adminDashboard.receivedcalls_week') }}
			</h3>
			<?php 
			if(!empty($received_calls)){
			?>
			<table class="table table-striped table-bordered table-hover">
					<thead>
					   <tr>
					   	   <th> {{ trans('adminDashboard.reportid') }} </th>
						   <th> {{ trans('adminDashboard.dueid') }} </th>
						   <th> {{ trans('adminDashboard.beneficiaryid') }} </th>
						   <th> {{ trans('adminDashboard.callchampionid') }} </th>
						   <th> {{ trans('adminDashboard.modifydate') }} </th>
						   <th> {{ trans('adminDashboard.conversation') }} </th>
						   <th> {{ trans('adminDashboard.actionitems') }} </th>
						   
					   </tr>
					 </thead>
					 <tbody>
					<?php 
					
					foreach($received_calls as $val1)
					{
						
					?>
					<tr>
					<td> {{$val1->report_id }} </td>
					<td> {{$val1->fk_due_id}} </td>
					<td> {{$val1->fk_b_id}} </td>
					<td> {{$val1->fk_cc_id}} </td>
					<td> {{$val1->dt_modify_date}} </td>
					<td> {{$val1->t_conversation}} </td>
					<td> {{$val1->t_action_items}} </td>
					</tr>
					 </tbody>
					 
					 <?php 
						
					}
					?>
					
			</table>
			<?php 
					}
					else {
					 ?>
					 <h4>{{ trans('adminDashboard.nocallsreceived_week') }}</h4>
					 <?php 
					}
					 ?>
			</div>
			
		</div>
		
			
		
	</div>
</div>
</body>
</html>

