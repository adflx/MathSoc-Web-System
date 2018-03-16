<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "metaconfig.php";
	?>

    <title>Display Math Society expense</title>
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
				<h1 class="text-center">Math Society expense</h1>
			</div>
			<div class="panel-body">
				<div class="row">
				
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

	<h3>Display Expenses</h3>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">

<table class="table table-bordered">
<thead>
	<tr >	
		<th class="text-center" >ID No.</th>
		<th class="text-center" >Date</th>
		<th class="text-center" >Description</th>
		<th class="text-center" >Quantity</th>
		<th class="text-center" >Amount</th>
		<th class="text-center" >Total</th>
		<th class="text-center" >Status</th>
		<th class="text-center" >Action</th>
		
	</tr>
</thead>
<tbody>
<?php
if( isset($expenses) ){
	foreach($expenses as $s){
		echo '	<tr>
						<td class="text-center" >'.$s['id'].'</td>
						<td class="text-center" >'.$s['date'].'. </td>
						<td class="text-center" >'.$s['desc'].'</td>
						<td class="text-center" >'.$s['quan'].'</td>
						<td class="text-center" >'.$s['amount'].'</td>
						<td class="text-center" >'.$s['total'].'</td>
						<td class="text-center" >'.$s['status'].'</td>
						
						<td class="text-center" >
					
						<a href="expense.php?rquest=edit&idno='.$s['id'].'" class="btn btn-info" role="button">
						Edit
						</a >
						
						<a href="expense.php?rquest=pending&idno='.$s['id'].'" class="btn btn-danger" role="button">
						Pending
						</a >
						
						<a href="expense.php?rquest=approve&idno='.$s['id'].'" class="btn btn-success" role="button">
						Approve
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
	<a href="expense.php?request=back" class="btn btn-info btn-block" role="button">
		Back
		</a>
			</div>
  <div class="panel-footer">
	
	
  </div>
</div>
</div>








</body>
</html>