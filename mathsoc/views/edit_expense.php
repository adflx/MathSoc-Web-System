<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "metaconfig.php";
	?>
	<title>Edit expense</title>
	<?php
include "bootstrapconfig.php";
?>
<script type="text/javascript" src="myjs/inputres.js"></script>
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
				<h1 class="text-center">Edit expense</h1>
		</div>
		
		<div class="panel-body">
		
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
<form name="expensef" class="form-horizontal" role="form" onsubmit="return validateForm()" method="post">

	 <?php
	
if( isset($expense) ){
	
			
			
		echo '	
		
		
						
						<div class="form-group">
					<label>expense ID:</label>
				
							<div class="input-group">
							 
								<input type="text" name="id" required maxlength="2" class="form-control" value="'.$expense['id'].'" disabled />
								
							
								
							</div>
							</div>
							
						<div class="form-group">	
						<div class="input-group">
							<label for="date">Date:</label>
								<input type="date" name="date" required maxlength="20" class="form-control"  />
						</div>
						</div>
						
						
							
							<div class="form-group">
							<div class="input-group">
							<label for="desc">Description</label>
							<textarea rows="4" cols="50" required class="form-control"  name="desc" >'.$expense['desc'].'
							</textarea> <br>

							
							<div class="form-group">
							<div class="input-group">
							<label for="quan">Quantity:</label>
							<input type="text" name="quan" required maxlength="10" class="form-control" value="'.$expense['quan'].'"  onkeypress="return isNumberKey(event)" /> 
							</div>
							</div>
							
								
							<div class="form-group">
							<div class="input-group">
							<label for="amount">Price:</label>
							<input type="text" name="amount" required maxlength="10" class="form-control" value="'.$expense['amount'].'"  onkeypress="return isNumberKey(event)" /> 
							</div>
							</div>
							
							
							
							
	';
						
								
						
	
}

?>
	<input type="submit" value="Edit Record" class="btn btn-info" />
									<a href="expense.php?request=back" class="btn btn-info" role="button">
								Back
								</a>
	

	
</form>
	
		</div>
		<div class="col-sm-1">
	</div>
	</div>
		</div>
	
		<div class="panel-footer">
		</div>
	
	</div>
</div>













</body>
</html>