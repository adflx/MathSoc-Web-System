<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include "metaconfig.php";
	?>

    <title>Display MathSoc Members</title>
<?php
include "bootstrapconfig.php";
?>

</head>
<body onload="load()">
	
<div class="container-fluid">
			<div class="container-fluid">
		<?php
			include "title.php";
			include "navin.php";
			
			?>
		
	</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="text-center">Math Society Membership</h1>
			</div>
			<div class="panel-body">
				
				<div class="row">
				
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">

	<h3>Display Members</h3>
		<div class="row">
		<div class="col-md-12">
		<div class="table-responsive">

		<table class="table table-bordered">
			<thead>
				<tr >	
					<th class="text-center" >ID No.</th>
					<th class="text-center" >Name</th>
					<th class="text-center" >Course</th>
					<th class="text-center" >Sex</th>
					<th class="text-center" >Professor</th>
					<th class="text-center" >Subject</th>
					<th class="text-center" >Date of Payment</th>
					<th class="text-center" >Payment Status</th>
					<th class="text-center" >Membership Status</th>
					<th class="text-center" >Membership Duration</th>
					<th class="text-center" >Action</th>
				</tr>
			</thead>
			
			<tbody>
						<?php
						if( isset($students) ){

								
							foreach($students as $s){
								
								echo '	<tr>
												<td class="text-center" >'.$s['id'].'</td>
												<td class="text-center" >'.$s['name'].'. </td>
												<td class="text-center" >'.$s['course'].'</td>
												<td class="text-center" >'.$s['sex'].'</td>
												<td class="text-center" >'.$s['prof'].'</td>
												<td class="text-center" >'.$s['sub'].'</td>
												<td class="text-center" >'.$s['datepay'].'</td>
												<td class="text-center" >'.$s['paystat'].'</td>
												<td class="text-center" >'.$s['memstat'].'</td>
												<td class="text-center" >'.$s['memsy'].'</td>
												<td class="text-center" >
												 
												
												<a href="member.php?rquest=edit&idno='.$s['id'].'" class="btn btn-info link-edit" role="button">
												 Edit 
												</a >
												<br> 
												<a href="member.php?rquest=pay&idno='.$s['id'].'" class="btn btn-info link-pay" role="button">
												
											 Payment Confirmation 
												</a>
												
												 
												</td>
										</tr>
									
										
										';
							}
						}


						?>

			</tbody>
		</table>


	
	</div>
	

	<form class="form-horizontal" role="form"  method="post">
		<?php
		$n=0;
		foreach($students as $s ){
		echo'
	<input type=text value='.$s['id'].' name=id'.$n.' hidden>
				
			';	
			$n++;
		}
	?>
		<button type="submit" class="btn btn-danger btn-md" id="dd">Decline All Membership</button>
		
	</form>

	</div>
	</div>
		</div>
		<div class="col-sm-1">
	</div>
	</div>
						
	<br>					
		<a href="member.php?request=back" class="btn btn-info btn-block" role="button">
		Back
		</a>
			</div>
			
  <div class="panel-footer">
	
	
  </div>
  
</div>

</div>

<script src="myjs/formaction.js" type="text/javascript"></script>

</body>
</html>