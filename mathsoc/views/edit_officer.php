<!DOCTYPE html>
<html lang="en">
<head>
<?php
	include "metaconfig.php";
	?>
	<title>Edit Officer</title>
	<?php
include "bootstrapconfig.php";
?>

	
<script>
						// function validateForm(){
							// var x = document.forms["officerf"]["id1"].value;
							// var y= document.forms["officerf"]["id2"].value;
							// var z= document.forms["officerf"]["id3"].value;
							// var resid= /^[0-9]+$/;
							// var resname= /^[a-zA-Z]+$/
							// var lna= document.forms["officerf"]["lname"].value
							// var fna= document.forms["officerf"]["fname"].value
							// var mna= document.forms["officerf"]["mi"].value
							// var prona= document.forms["officerf"]["section"].value
							// var courna= document.forms["officerf"]["course"].value
							// var lengx=x.length,lengy=y.length,lengz=z.length;
							// var chx=0,chy=0,chz=0,chl=0,chf=0,chm=0,chp=0,chc=0;
							// if(x.match(resid)){
								// chx++;
							// }
							// if(y.match(resid)){
								// chy++;
							// }
							// if(z.match(resid)){
								// chz++;
							// }
							// if(lna.match(resname)){
								// chl++;
							// }if(fna.match(resname)){
								// chf++;
							// }
							// if(prona.match(resname)){
								// chp++;
							// }
							// if(courna.match(resname)){
								// chc++;
							// }
							// if(mna.match(resname)){
								// chm++;
							// }
							// if(chx==1 && chy==1 && chz==1 && lengx==2 && lengy==3 && lengz==3 && chl==1 && chf==1 && chm==1 && chc==1 && chp==1){
								// alert("Click ok to continue registration");
								// return true;
							// }
							// else{
								// alert("Invalid Inputs");
								// return false;
								
							// }
							
							
							
							
							
						// }
							
</script>

	
</head>
<body>

<div class="container-fluid">
	<div class="container-fluid">
		<?php
			include "title.php";
			include "navin.php";
			
			?>
		
	</div>	<div class="panel panel-default">
	
		
		<div class="panel-heading">
				<h1 class="text-center">Edit Officer</h1>
		</div>
		
		<div class="panel-body">
		
<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
<form name="officerf" class="form-horizontal" role="form" onsubmit="return validateForm()" method="post">

	 <?php
	
if( isset($officer) ){
	
			$s1="";
			$s2="";
			$s3="";
			
			for($i=0;$i<10;$i++){
				if($i==0 || $i==1){
					$s1=$s1.$officer['id'][$i];
				}
				else if($i==3 || $i==4||$i==5){
					$s2=$s2.$officer['id'][$i];
				}
				else if($i==7 || $i==8 ||$i==9){
					$s3=$s3.$officer['id'][$i];
				}
			}
		echo '	
		
		
						
						<div class="form-group">
					<label>officer ID:</label>
					<input type="text" name="orid" disabled class="form-control" value="'.$officer['id'].'" />
							<div class="input-group">
							 
								<input type="text" name="id1" required maxlength="2" class="form-control" value="'.$s1.'" />
								
								<div class="input-group-addon">-</div>
								<input type="text" name="id2" required maxlength="3" class="form-control" value="'.$s2.'" />
								
								<div class="input-group-addon">-</div>
							
								<input type="text" name="id3" required maxlength="3" class="form-control" value="'.$s3.'" />
								
							</div>
							</div>
							
						<div class="form-group">	
						<div class="input-group">
							<label for="lname">Last Name:</label>
								<input type="text" name="lname" required maxlength="20" class="form-control" value="'.$officer['lname'].'" onkeypress="return isAlfa(event)" />
						</div>
						</div>
						
						<div class="form-group">
						<div class="input-group">
						<label for="fname">First Name:</label>
							
								<input type="text" name="fname" required maxlength="20" class="form-control" value="'.$officer['fname'].'" onkeypress="return isAlfa(event)" />
							</div>
							</div>
							
							<div class="form-group">
							<div class="input-group">
							<label for="mi">Middle Initial:</label>
							<input type="text" name="mi" required maxlength="4" class="form-control" value="'.$officer['mi'].'" onkeypress="return isAlfa(event)"/>
							</div>	
							</div>	
								
							<div class="form-group">
							<div class="input-group">
							<label for="course">Position:</label>
							<input type="text" name="course" required maxlength="6" class="form-control" value="'.$officer['course'].'" onkeypress="return isAlfa(event)" /> 
							</div>
							</div>
							
							
	';
	
	echo '
	
	<div class="form-group">
							<div class="input-group">
							<label for="year">Year:</label>
							<input type="number" name="year" required maxlength="1" class="form-control" value="'.$officer['year'].'" onkeypress="return isNumberKey(event)" max="5" min="1"/> 
							</div>
							</div>
							
		<div class="form-group">
							<div class="input-group">
							<label for="section">Section:</label>
							<input type="text" name="section" required maxlength="1" class="form-control" value="'.$officer['section']. '" onkeypress="return isAlfa(event)"/> 
							
							</div>
							</div>
							
							
						<div class="form-group">
							<div class="input-group">
							<label for="position">Position:</label>
							<input type="text" name="position" required maxlength="1" class="form-control" value="'.$officer['position'].'" disabled/> 
							
							</div>
							</div>
	
	';
	
	
	
	
	
	
						
								
							
	
}

?>
	<input type="submit" value="Edit Record" class="btn btn-info" />
									<a href="officer.php?request=back" class="btn btn-info" role="button">
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











<script type="text/javascript" src="myjs/jquery.js"></script>
<script type="text/javascript" src="myjs/inputres.js"></script>	


</body>
</html>