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
			include "carousel.php";
			?>
		
	</div>		
	
	
	
		<div class="panel panel-default">

	<div class="panel-heading">
	
	<h1 class="text-center">Hello <?php if(isset($_SESSION['name']))
			echo $_SESSION['name'];
	?></h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
	
	<h3>Home</h3>
	<ul id="menu" class="list-group">
		<li><a class="list-group-item" href="index.php?request=member"><span class="glyphicon glyphicon-dashboard"></span> Member</a></li>
		<li><a class="list-group-item" href="index.php?request=officer"><span class="glyphicon glyphicon-user"></span> Officer</a></li>
		<li><a class="list-group-item" href="index.php?request=event"><span class="glyphicon glyphicon-list-alt"></span> Event</a></li>
		<li><a class="list-group-item" href="index.php?request=collection"><span class="glyphicon glyphicon-list-alt"></span> Collection</a></li>
		<li><a class="list-group-item" href="index.php?request=expense"><span class="glyphicon glyphicon-list-alt"></span> Expense</a></li>
		<li><a class="list-group-item" href="index.php?request=report"><span class="glyphicon glyphicon-list-alt"></span> Report</a></li>
		<li><a class="list-group-item" href="index.php?request=changepass"><span class="glyphicon glyphicon-list-alt"></span>Change Password</a></li>
	</ul>
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