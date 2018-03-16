<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include "metaconfig.php";
	?>

	<title>PLAN AN EVENT</title>

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
				<h1 class="text-center">MathSoc Events</h1>
			</div>
			
			<div class="panel-body">
				
				<div class="row">
					
					<div class="col-sm-1">
					</div>
					
					<div class="col-sm-10">
						<h1>PLAN AN EVENT</h1>
						<form id="eventf" class="form-horizontal" role="form" action="" method="post" onsubmit="return rep()">
						
						<div class="form-group">
							<div class="input-group">
							<label>Event Title:</label>
								<input type="text" name="title" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label>Date:</label>
							<div class="input-group">
							
								<input type="date" name="date" class="form-control">
								<div class="input-group-addon"> to </div>
								<input type="date" name="enddate" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
							<label>Venue:</label>
								<input type="text" name="venue" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
							<label>Event Description:</label>
								<input type="textarea" rows="10" cols="80" name="description" class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<div class="input-group">
							<label>Narrative Report:</label>
								<input type="textarea" rows="10" cols="80" name="details" class="form-control">
							</div>
						</div>
						
						<hr />
						<button type="submit" class="btn btn-info btn-md" id="gg">Save Record</button>
						<a href="event.php?request=back" class="btn btn-info btn-md" role="button">Back</a>
						<hr />
						
						</form>
						<form action="" method="POST" enctype="multipart/form-data">
						<label>File: </label><input type="file" name="image" />
						<input type="submit" />
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>
</html>