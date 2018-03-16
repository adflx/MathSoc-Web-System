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
			?>
		
	</div>		
	
	
	
		<div class="panel panel-default">

	<div class="panel-heading">
	
	<h1 class="text-center">Login</h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-6 col-md-offset-4">
		<form action="" method="post">
				<?php if(isset($_SESSION['error'])) {
                echo '<p style="color: red">';
				echo $_SESSION['error'];
				echo '</p>';
				}
	
				?>
				<p>ID Number: 
				<br/><input type="text" name="idnum" required="required"/>
				</p>
				<p>Password:
					<br /><input type="password" name="password" required="required"/>
				</p>	
				
				<p>
					<input type="submit" value="Login" />
				</p>
		</form>
	</div>
	
	<div class="col-sm-1">
	</div>
	
	</div>
	</div>
	<div class="panel-footer">
	 <?php 
	 //include "footer.php";
	 ?>
	</div>
	
	</div>
	
	</div>
	
	
</body>
</html>