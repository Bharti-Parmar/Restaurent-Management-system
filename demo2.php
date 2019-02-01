<!DOCTYPE html>
<html>
<title>Upload_Dishes</title>
	<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="demo2.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<body style="background-color:#8c8c8c;">

																		<!-- header section -->
																
	<div class="container jumbotron" style="background-color:#8c8c8c;">
		<h1 style="text-align:center;">SWADIST BHOJ </h1>						
	
					<ul class="nav navbar-nav navbar-fixed-top">
						<li style="display:block;margin:2px;padding:2px;background-color:black;"><a href="login.php">LogOut</a></li>
					</ul>
					
	</div>
																		
																		

																	<!-- video section -->
					
	<div class="container" style=" background-color:black;">
		
		<div class="row">
			
			<div class="col-lg-6 col-md-6">
				
				<video width="100%" height="300" controls>
					<source src="F:\WEB DESIGN\restaurent\swift.mp4" type="video/mp4">
					<source src="F:\WEB DESIGN\restaurent\swift.ogg" type="video/ogg">
				</video>
			
			</div>
			
			<div class="col-lg-6 col-md-6" style="margin-top:50px;">
				<input type="name" value="dish name">
				
					<br><br>
					
				<form role="form">
					<div class="form-group">
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</form>
				
				<a href="#" class="glyphicon glyphicon-thumbs-up" style="text-decoration:none;">&nbsp; Like <span class="badge">5</span></a><br>
					<a href="#" class="glyphicon glyphicon-thumbs-down" style="text-decoration:none;">&nbsp; Dislike <span class="badge">10</span></a><br>
						<a href="#" class="glyphicon glyphicon-comment" style="text-decoration:none;">&nbsp; Comments <span class="badge">2</span></a>
			</div>
			
		</div>
		
			<br /><br />
			<button type="button" class="btn btn-info" value="upload" style="width:100%;">Upload </button>
	
	</div>
			<br /><br />
			
																				
	
														<!--- image section -->
													
	<div class="container"  style="background-color:black;">
		
		<div class="row">
			
			<div class="col-lg-6 col-md-6" style="margin-top:50px;">
				
				<img src="F:\WEB DESIGN\restaurent\pics\Dosa.jpg" style="width:100%; height:250px;">	
			
			</div>
			
			<div class="col-lg-6 col-md-6" style="margin-top:50px;">
				<input type="name" value="dish name" >
				
				<br><br>
				
				<form role="form">
					<div class="form-group">
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</form>
				
				<div class="container" style="display:inline"> 
				
					<a href="#" class="glyphicon glyphicon-thumbs-up" style="text-decoration:none;">&nbsp; Like <span class="badge">5</span></a><br>
						<a href="#" class="glyphicon glyphicon-thumbs-down" style="text-decoration:none;">&nbsp; Dislike <span class="badge">10</span></a><br>
							<a href="#" class="glyphicon glyphicon-comment" style="text-decoration:none;">&nbsp; Comments <span class="badge">2</span></a>
							
				</div>
				
			</div>
			
		</div>
		
			<br /><br />
			<button type="button" class="btn btn-info" value="upload" style="width:100%;">Upload </button>
	
	</div>
			<br /><br />
	
 <?php 
		include('include\footer.php');
		?>