<!DOCTYPE html>
<html lang="en">
<head>
		<?php
	include "metaconfig.php";
	?>
	<title>Expense</title>
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
	<h1 class="text-center">Math Society Expense</h1>
	</div>
	
	<div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
	<div class="col-sm-10">
	
	<h3>Expense Dashboard</h3>
	<ul id="menu" class="list-group">
		<li><a class="list-group-item" href="expense.php"><span class="glyphicon glyphicon-dashboard"></span> Expense Dashboard</a></li>
		<li><a class="list-group-item" href="expense.php?request=new"><span class="glyphicon glyphicon-user"></span> New expense</a></li>
		<li><a class="list-group-item" href="expense.php?request=view"><span class="glyphicon glyphicon-list-alt"></span> Display Expenses</a></li>
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