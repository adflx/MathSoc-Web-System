<!DOCTYPE html>
<html lang="en">
<head>
		<?php
	include "metaconfig.php";
	?>
	<title>Math Society</title>
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
	
	<h1 class="text-center">Change Password</h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10 col-md-offset-4" style="margin-top: 30px;">
		<form method="post">
			<p style="color:red"><?php if(isset($_SESSION['opnotmatch'])) echo $_SESSION['opnotmatch'];?></p>
			<p>Enter old password: &nbsp; &nbsp; <input id="op" type="password" name="oldpass" required='required'/></p><br/>
			<p>Enter new password: &nbsp;<input id="np" type="password" name="newpass" required='required'/></p> <p><br/>
			<p>Confirm password: &nbsp;&nbsp;&nbsp;<input id="cp" type="password" name="confirmpass" required='required'"/></p><br/>
			<p style="color:red"><?php if(isset($_SESSION['notmatch'])) echo $_SESSION['notmatch'];?></p>
			<input id="submit" type="submit" value="Save"/>
			<button >Cancel</button
		</form>
	</div>
		<div class="col-sm-1">
	</div>
	</div>
	</div>
	<div class="panel-footer">
	 <?php 
	 //include footer.php;
	 ?>
	</div>
	
	</div>
	
	</div>
	
	
</body>
</html>