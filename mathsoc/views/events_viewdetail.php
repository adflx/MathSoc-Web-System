<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		include "metaconfig.php";
		include "bootstrapconfig.php";
	?>
	<title>Event Full Details</title>
	<script type="text/javascript" src="myjs/jquery.js"></script>
	<script type="text/javascript" src="myjs/inputres.js"></script>	
    <link href="mycss/bootstrap.min.css" rel="stylesheet">
    <link href="mycss/blog-post.css" rel="stylesheet">
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
					<h1 class="text-center">MathSoc Event</h1>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-1">
						</div>
						<div class="col-sm-10">
							<div class="container">
								<div class="row">
									<div class="col-lg-8">
										<!--<img class="img-responsive" src="http://placehold.it/900x300" alt="">-->
										<?php										
											echo '
												<h2 id="#num">'.$events['event_num'].'</h2>
												<h2><a href="#">'.$events['project_title'].'</a></h2>
												<p><span class="glyphicon glyphicon-time"></span>'.$events['date'].' to '.$events['enddate'].'</p>
												<hr>
												<p class="lead">'.$events['event_description'].'</p>
												<p>'.$events['event_details'].'</p>
												<p>'.$events['status'].'</p>
												<hr>
												<a href="event.php?rquest=edit&event_num='.$events['event_num'].'" class="btn btn-primary" role="button">UPDATE EVENT DETAILS<span class="glyphicon glyphicon-chevron-right"></span></a>
											';
										?>
									</div>
									<div class="col-md-4">
										<div class="well">
											<h4>Blog Search</h4>
												<div class="input-group">
													<input type="text" class="form-control">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button">
																<span class="glyphicon glyphicon-search"></span>
															</button>
														</span>
												</div>
										</div>
							
										<div class="well">
											<h4>Blog Categories</h4>
												<div class="row">
													<div class="col-lg-6">
														<ul class="list-unstyled">
															<li><a href="#">Category Name</a></li>
															<li><a href="#">Category Name</a></li>
														</ul>
													</div>
													<div class="col-lg-6">
														<ul class="list-unstyled">
															<li><a href="#">Category Name</a></li>
															<li><a href="#">Category Name</a></li>
														</ul>
													</div>
												</div>
										</div>
											
										<div class="well">												
											<h4>Side Widget Well</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
										</div>
									</div>
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
<script src="myjs/jquery.js"></script>
<script src="myjs/bootstrap.min.js"></script>

</body>

</html>
