<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include "metaconfig.php";
		include "bootstrapconfig.php";
	?>
	<title>MathSoc Events</title>
	<script type="text/javascript" src="myjs/jquery.js"></script>
	<script type="text/javascript" src="myjs/inputres.js"></script>	
	<style>
		.crunchify-top:hover {
	color: #fff !important;
	background-color: #ed702b;
	text-decoration: none;
}
 
.crunchify-top {
	display: none;
	position: fixed;
	bottom: 1rem;
	right: 1rem;
	width: 3.2rem;
	height: 3.2rem;
	line-height: 3.2rem;
	font-size: 1.4rem;
	color: #fff;
	background-color: rgba(0,0,0,0.3);
	text-decoration: none;
	border-radius: 3.2rem;
	text-align: center;
	cursor: pointer;
}
</style>
	
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
						<div class="container">
							<div class="row">
								<?php
								//<h2 id="#num">'.$p['eventnum'].'</h2>

									$ctr=1;
									if(isset($events))
									{	
										foreach($events as $p){
										echo '
											<h2><a href="event.php?rquest=viewdetails&event_num='.$p['eventnum'].'">'.$p['title'].'</a></h2>
											<p><span class="glyphicon glyphicon-time"></span>'.$p['date'].' to '.$p['end'].'</p>
											
											';
						
										if($p['image']!=null){
									$ims = (string) $p['image'];
									//	print_r($p['image']);
										
									//	foreach ($p['image'] as $image) {


										echo '
											<img src="data:image/jpeg;base64,'.
													base64_encode( $ims). 
													'" width="900" height="300"/>
										
										';
										
										}
										 echo '
											<p>'.$p['descrip'].'</p>
											<p>'.$p['stat'].'</p>
											<a href="event.php?rquest=viewdetails&event_num='.$p['eventnum'].'" class="btn btn-primary" role="button">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>
											<a href="event.php?rquest=edit&event_num='.$p['eventnum'].'" class="btn btn-primary" role="button">Update Event Details</a>
											<hr>
										';
										$ctr++;
										}
										}
								?>
								<a href="#" class="crunchify-top"><i class="glyphicon glyphicon-chevron-up"></i></a>
								
							</div>
						</div>
					</div>
					<div class="col-sm-1">
					</div>
				</div>
			</div>
			<div class="panel-footer">
			</div>
		</div>
	</div>

<script>            
	jQuery(document).ready(function() {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.crunchify-top').fadeIn(duration);
			} else {
				jQuery('.crunchify-top').fadeOut(duration);
			}
		});
 
		jQuery('.crunchify-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
	});
</script>	
</body>
</html>