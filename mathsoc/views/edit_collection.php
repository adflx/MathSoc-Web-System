<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "metaconfig.php";
	?>
	<title>Edit Collection</title>
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
				<h1 class="text-center">Edit Collection</h1>
		</div>
		
		<div class="panel-body">
		
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
<form name="collectionf" class="form-horizontal" role="form" onsubmit="return validateForm()" method="post">

	 <?php
	
if( isset($collection) ){
	
			
			
		echo '	
		
		
						
						<div class="form-group">
					<label>Collection ID:</label>
				
							<div class="input-group">
							 
								<input type="text" name="id" required maxlength="2" class="form-control" value="'.$collection['id'].'" disabled />
								
							
								
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
							<label for="type">Type:</label>
							<select name="type" class="form-control">
							<option value="Ticket">Ticket</option>
							<option value="T-shirt">T-shirt</option>
							<option value="Membership">Membership</option>
							<option value="Registration">Registration</option>
							<option value="Others">Others</option>
							</select>
						</div>
						</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="desc">Description</label>
							<textarea rows="4" cols="50" required class="form-control"  name="desc" >'.$collection['desc'].'
							</textarea> <br>

							
							<div class="form-group">
							<div class="input-group">
							<label for="quan">Quantity:</label>
							<input type="text" name="quan" required maxlength="10" class="form-control" value="'.$collection['quan'].'"  onkeypress="return isNumberKey(event)" /> 
							</div>
							</div>
							
								
							<div class="form-group">
							<div class="input-group">
							<label for="price">Price:</label>
							<input type="text" name="price" required maxlength="10" class="form-control" value="'.$collection['price'].'"  onkeypress="return isNumberKey(event)" /> 
							</div>
							</div>
							
							
							
							
	';
						
								
						
	
}

?>
	<input type="submit" value="Edit Record" class="btn btn-info" />
									<a href="collection.php?request=back" class="btn btn-info" role="button">
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