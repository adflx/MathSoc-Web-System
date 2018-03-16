<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "metaconfig.php";
	?>

    <title>Display Events Report</title>
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
				<h1 class="text-center">Events Report</h1>
			</div>
			<div class="panel-body">
				<div class="row">
				
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

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








</body>
</html>