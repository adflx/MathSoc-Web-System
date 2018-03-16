<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "metaconfig.php";
	?>

    <title>Display Expenses Reports</title>
<?php
include "bootstrapconfig.php";
?>

</head>
<body>
	
<div class="container-fluid">
		
			<div class="container-fluid">
		<?php
			include "title.php";
			include "navin.php";
			
			?>
		
	</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="text-center">Math Expenses Reports</h1>
			</div>
			<div class="panel-body">
				<div class="row">
				
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

	<h3>Expenses Report</h3>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >	
		<th class="text-center" >ID No.</th>
		<th class="text-center" >Date</th>
		<th class="text-center" >Item Description</th>
		<th class="text-center" >Quantity</th>
		<th class="text-center" >Amount</th>
		<th class="text-center" >Total</th>
		<th class="text-center" >Status</th>
	</tr>
</thead>
<tbody>
<?php	
if( isset($expenses) ){
	foreach($expenses as $s){
		echo '	<tr>
						<td class="text-center" >'.$s['ID'].'</td>
						<td class="text-center" >'.$s['DATE'].'. </td>
						<td class="text-center" >'.$s['ITEM_DESCRIPTION'].'</td>
						<td class="text-center" >'.$s['QUANTITY'].'</td>
						<td class="text-center" >'.$s['AMOUNT'].'</td>
						<td class="text-center" >'.$s['TOTAL'].'</td>
						<td class="text-center" >'.$s['STATUS'].'</td>	
						
				</tr>';
	}
}
?>
</tbody>
</table>




<h3>Events Report</h3>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >	
		<th class="text-center" >Event No.</th>
		<th class="text-center" >Project Title</th>
		<th class="text-center" >Date</th>
		<th class="text-center" >End Date</th>
		<th class="text-center" >Venue</th>
		<th class="text-center" >Event Description</th>
		<th class="text-center" >Event Details</th>
		<th class="text-center" >Status</th>
	</tr>
</thead>
<tbody>

<?php
	
if( isset($events) ){
	foreach($events as $s){
		echo '	<tr>
						<td class="text-center" >'.$s['event_num'].'</td>
						<td class="text-center" >'.$s['project_title'].'</td>
						<td class="text-center" >'.$s['date'].'</td>
						<td class="text-center" >'.$s['enddate'].'</td>
						<td class="text-center" >'.$s['venue'].'</td>
						<td class="text-center" >'.$s['event_description'].'</td>
						<td class="text-center" >'.$s['event_details'].'</td>
						<td class="text-center" >'.$s['status'].'</td>
		
						
						
						
						
				</tr>';
}
}

?>
</tbody>
</table>


	
	</div>
	</div>
	</div>
		</div>
		<div class="col-sm-1">
	</div>
	</div>

	<a href="report.php" class="btn btn-info btn-block" role="button">
		Back
		</a>
			</div>
  <div class="panel-footer">
	
	
  </div>
</div>
</div>

</div>

</div>

</div>
</body>
</html>