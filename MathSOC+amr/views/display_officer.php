<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "metaconfig.php";
	?>

    <title>Display Math Society Officer</title>
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
				<h1 class="text-center">Math Society Officer</h1>
			</div>
			<div class="panel-body">
				<div class="row">
				
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

	<h3>Display Officer</h3>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >	
		<th class="text-center" >ID No.</th>
		<th class="text-center" >Name</th>
		<th class="text-center" >Position</th>
		<th class="text-center" >Course</th>
		<th class="text-center" >Year</th>
		<th class="text-center" >Section</th>
		<th class="text-center" >Action</th>
	</tr>
</thead>
<tbody>
<?php
if( isset($officers) ){
	foreach($officers as $s){
		echo '	<tr>
						<td class="text-center" >'.$s['id'].'</td>
						<td class="text-center" >'.$s['name'].'. </td>
						<td class="text-center" >'.$s['position'].'</td>
						<td class="text-center" >'.$s['course'].'</td>
						<td class="text-center" >'.$s['year'].'</td>
						<td class="text-center" >'.$s['section'].'</td>
						
						<td class="text-center" >
					
						<a href="officer.php?rquest=edit&idno='.$s['id'].'"
						class="btn btn-info" role="button">
						Edit
						</a >
					
						 
						</td>
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
	<a href="officer.php?request=back" class="btn btn-info btn-block" role="button">
		Back
		</a>
			</div>
  <div class="panel-footer">
	
	
  </div>
</div>
</div>








</body>
</html>