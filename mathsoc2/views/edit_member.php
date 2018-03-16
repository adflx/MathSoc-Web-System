<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "metaconfig.php";
	?>
	<title>Edit Member</title>
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
				<h1 class="text-center">Edit Student</h1>
		</div>
		
		<div class="panel-body">
		
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
<form name="studentf" class="form-horizontal" role="form" onsubmit="return validateForm()" method="post">

	 <?php
	
if( isset($student) ){
//	print_r($student);
			$s1="";
			$s2="";
			$s3="";
			
			for($i=0;$i<10;$i++){
				if($i==0 || $i==1){
					$s1=$s1.$student['id'][$i];
				}
				else if($i==3 || $i==4||$i==5){
					$s2=$s2.$student['id'][$i];
				}
				else if($i==7 || $i==8 ||$i==9){
					$s3=$s3.$student['id'][$i];
				}
			}
		echo '	
		
		
						
						<div class="form-group">
					<label>Student ID:</label>
					<input type="text" name="orid" disabled class="form-control" value="'.$student['id'].'" />
							<div class="input-group">
							 
								<input type="text" name="id1" required maxlength="2" class="form-control" value="'.$s1.'" onkeypress="return isNumberKey(event)" />
								
								<div class="input-group-addon">-</div>
								<input type="text" name="id2" required maxlength="3" class="form-control" value="'.$s2.'" onkeypress="return isNumberKey(event)" />
								
								<div class="input-group-addon">-</div>
							
								<input type="text" name="id3" required maxlength="3" class="form-control" value="'.$s3.'" onkeypress="return isNumberKey(event)" />
								
							</div>
							</div>
							
						<div class="form-group">	
						<div class="input-group">
							<label for="lname">Last Name:</label>
								<input type="text" name="lname" required maxlength="20" class="form-control" value="'.$student['lname'].'" onkeypress="return isAlfa(event)"/>
						</div>
						</div>
						
						<div class="form-group">
						<div class="input-group">
						<label for="fname">First Name:</label>
							
								<input type="text" name="fname" required maxlength="20" class="form-control" value="'.$student['fname'].'" onkeypress="return isAlfa(event)"/>
							</div>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="mi">Middle Initial:</label>
							<input type="text" name="mi" required maxlength="4" class="form-control" value="'.$student['mi'].'" onkeypress="return isAlfa(event)"/>
							</div>	
							</div>	
								
							<div class="form-group">
							<div class="input-group">
							<label for="course">Course:</label>
							<input type="text" name="course" required maxlength="6" class="form-control" value="'.$student['course'].'" onkeypress="return isAlfa(event)"/> 
							</div>
							</div>
							
							
	';
		if($student['sex']=="MALE"){
		echo'	<div class="form-group">
							<label for="sex">Sex:</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="MALE" checked>  Male
							</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="FEMALE"> Female
							</label>
							</div>';
		}
		else{
		echo	'<div class="form-group">
							<label for="sex">Sex:</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="MALE">  Male
							</label>
							<label class="radio-inline">
							<input type="radio" name="sex" value="FEMALE" checked> Female
							</label>
							</div>';
		}
		
	
	echo '
	
	<div class="form-group">
							<div class="input-group">
							<label for="prof">Professor:</label>
							<input type="text" name="prof" required maxlength="20" class="form-control" value="'.$student['prof'].'" onkeypress="return isAlfa(event)"/> 
							</div>
							</div>
							
		<div class="form-group">
							<div class="input-group">
							<label for="sub">Subject:</label>
							<input type="text" name="sub" required maxlength="20" class="form-control" value="'.$student['sub'].'" onkeypress="return isAlfa(event)"/> 
							
							</div>
							</div>
							
							
					
	
	';
	
	
	
	
	
		if($student['paystat']=="NOT PAID"){
			echo '
				<div class="form-group">
							<label for="paystat">Payment Status:</label>
							<label class="radio-inline" >
							<input type="radio" name="paystat" value="NOT PAID" checked="checked">  NOT PAID
							</label>
							<label class="radio-inline">
							<input type="radio" name="paystat" value="PAID"> PAID
							</label>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="date">Payment Date:</label>
							<input type="date" id="dd" name="datepay" disabled class="form-control"/> 
							
							</div>
							</div>	
			
			
			';
		}
		else if($student['paystat']=="PAID"){
			$maxdate=date("Y");
			$minyear=date('Y')-1;
			
			
		echo	'
		
		<div class="form-group">
							<label for="paystat">Payment Status:</label>
							<label class="radio-inline">
							<input type="radio" name="paystat" value="NOT PAID">  NOT PAID
							</label>
							<label class="radio-inline">
							<input type="radio" name="paystat" value="PAID" checked="checked" > PAID
							</label>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="date">Payment Date:</label>
							<input type="date" id="dd" name="datepay" required class="form-control" max="'.$maxdate.'" min="'.$minyear.'-06-01"  /> 
							
							</div>
							</div>	
							
							
							
							'
							
							
							;
							
							
		}
	
						
								
							
	
}

?>
	<input type="submit" value="Edit Record" class="btn btn-info" />
									<a href="member.php?request=back" class="btn btn-info" role="button">
								Back
 								</a>
	

	
</form>
	<script src="myjs/formaction.js" type="text/javascript"></script>

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