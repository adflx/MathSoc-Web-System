<!DOCTYPE html>
<html lang="en">
<head>
 <?php
	include "metaconfig.php";
	?>
    <title>New expense</title>

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
				<h1 class="text-center">MathSoc expense</h1>
			</div>
		
			<div class="panel-body">
		
				<div class="row">
					<div class="col-sm-1">
					</div>
					
					<div class="col-sm-10">
	 
						<h1>New expense</h1>
						
						<form id="expensef" class="form-horizontal" role="form" onsubmit="return validateForm()" method="post">
						
					
<div class="form-group">
					<label>expense ID:</label>
				
						<div class="form-group">	
						<div class="input-group">
							<label for="date">Date:</label>
							<input type="date" name="date" required maxlength="20" class="form-control"  />
						</div>
						</div>
						
						
							
						<div class="form-group">
						<div class="input-group">
							<label for="desc">Description</label>
							<textarea rows="4" cols="50" required class="form-control"  name="desc" >
							</textarea> <br>
	
						<div class="form-group">
						<div class="input-group">
							<label for="quan">Quantity:</label>
							<input type="text" name="quan" required maxlength="10" class="form-control"   onkeypress="return isNumberKey(event)" /> 
						</div>
						</div>
	
	
						<div class="form-group">
						<div class="input-group">
							<label for="amount">Amount:</label>
							<input type="text" name="amount" required maxlength="10" class="form-control"   onkeypress="return isNumberKey(event)" /> 
						</div>
						</div>
						
						
						
						
								<input type="submit" value="Save Record" class="btn btn-info" />
								<a href="expense.php?request=back" class="btn btn-info" role="button">Back</a>
							

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
	
	
<script type="text/javascript" src="myjs/jquery.js"></script>
<script type="text/javascript" src="myjs/inputres.js"></script>

</body>
</html>