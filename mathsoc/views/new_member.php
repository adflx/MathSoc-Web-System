<!DOCTYPE html>
<html lang="en">
<head>
 <?php
	include "metaconfig.php";
	?>
    <title>New Member</title>

 <?php
include "bootstrapconfig.php";
?>
<script type="text/javascript" src="myjs/jquery.js"></script>
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
				<h1 class="text-center">MathSoc Membership</h1>
			</div>
		
			<div class="panel-body">
		
				<div class="row">
					<div class="col-sm-1">
					</div>
					
					<div class="col-sm-10">
	 
						<h1>New Student</h1>
						
						<form id="studentf" class="form-horizontal" role="form"  method="post" onsubmit="return yeah()">
						
						<div class="form-group">
					<label>Student ID:</label>
					
							<div class="input-group">
							 
								<input type="text" name="id1" required maxlength="2" class="form-control" onkeypress="return isNumberKey(event)" />
								
								<div class="input-group-addon">-</div>
								<input type="text" name="id2" required maxlength="3" class="form-control" onkeypress="return isNumberKey(event)" />
								
								<div class="input-group-addon">-</div>
							
								<input type="text" name="id3" required maxlength="3" class="form-control" onkeypress="return isNumberKey(event)" />
								
							</div>
							</div>
							
						<div class="form-group">	
						<div class="input-group">
							<label for="lname">Last Name:</label>
								<input type="text" name="lname" required maxlength="20" class="form-control" onkeypress="return isAlfa(event)" />
						</div>
						</div>
						
						<div class="form-group">
						<div class="input-group">
						<label for="fname">First Name:</label>
							
								<input type="text" name="fname" required maxlength="20" class="form-control" onkeypress="return isAlfa(event)"/>
							</div>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="mi">Middle Initial:</label>
							<input type="text" name="mi" required maxlength="4" class="form-control" onkeypress="return isAlfa(event)"/>
							</div>	
							</div>	
								
							<div class="form-group">
							<div class="input-group">
							<label for="course">Course:</label>
							<input type="text" name="course" required maxlength="6" class="form-control" onkeypress="return isAlfa(event)"/> 
							</div>
							</div>
							
							
							<div class="form-group">
							<label for="sex">Sex:</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="MALE" checked>  Male
							</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="FEMALE"> Female
							</label>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="prof">Professor:</label>
							<input type="text" name="prof" required maxlength="20" class="form-control" onkeypress="return isAlfa(event)"/> 
							</div>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="sub">Subject:</label>
							<input type="text" name="sub" required maxlength="20" class="form-control" onkeypress="return isAlfa(event)"/> 
							
							</div>
							</div>
					 	<button type="submit" class="btn btn-info btn-md link-submit " id="gg">Save Record</button>
									<a href="member.php?request=back" class="btn btn-info btn-md" role="button"  >
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
</div>
<script src="myjs/formaction.js" type="text/javascript" ></script>
</body>
</html>