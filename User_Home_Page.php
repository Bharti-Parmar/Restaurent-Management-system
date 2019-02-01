<?php
	include("include/User_Header.php")
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-2 col-xs-12">
			<!-- swadisht bhoj -->
			<h2 class="logo" href="#" style="font-weight: bold;color:darkgreen;text-align:center;">Swadist Bhoj</h2><br>
			<img src="pics/huhuh.png" class="img-rounded" width="100%" height="200px"><br><br>
			<center style="color:darkgreen">
			<!-- user name-->
				<h3>Bharti Parmar</h3>
				<h4>Gwalior</h4>
				<h4>Madhya Pradesh</h4>
			<!-- logout -->
				<button type="button" class="btn btn-warning"> Logout </button>
			</center><br>
		</div>
		<!-- div 2 -->
		<div class="col-md-10 col-xs-12">
		<!-- image 2 -->
			<img src="pics\kkm.jpg" width="100%" height="500px">
			<!-- navbar -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			     <div class="btn-group" style="cursor: pointer;margin-top: 6px;">
			    <!-- videos -->
					<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp;Videos</button>
				<!-- picture -->
					<button type="button" class="btn btn-success"><span class="glyphicon glyphicon-picture"></span>&nbsp;Pictures</button>
						<div class="btn-group">
							<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				<!-- share -->
							<span class="glyphicon glyphicon-share"></span>&nbsp;Share
							<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" role="menu" style="background-color:lightgreen;color:darkgreen">
							    <li><a href="#">LinkedIn</a></li>
							    <li><a href="#">Whatsapp</a></li>
							    <li><a href="#">Instagram</a></li>
								<li><a href="#">Facebook</a></li>
								<li><a href="#">Gmail</a></li>
							    <li><a href="#">Snapchat</a></li>
							</ul>
						</div>
				 </div>
			  </div>
			</nav>

			<div class="row">
		<!-- main area -->
				<div class="col-md-8 col-xs-12">
				<!-- comments area -->
					<!-- <form role="form">
					    <div class="form-group">
					      <textarea class="form-control" row="2" id="comment" placeholder="Comment..."></textarea>
					       <button type="button class="btn btn-success">Submit</button>
					    </div>
					</form> -->
				<form role="form" data-toggle="modal" data-target="#myModal">
				    <div class="form-group">
				      <textarea class="form-control" rows="2" id="comment" placeholder="Write Your Comment..."></textarea>
				    </div>
				</form>

				  <div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    
				      <div class="modal-content" style="background-color:lightgreen; color:darkgreen;">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Your View is important for us.</h4>
				        </div>
				        <div class="modal-body">
				          <textarea class="form-control" id="comment" placeholder="Comment..." style="background-color:lightgreen;"></textarea>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
				        </div>
				      </div>
				      
				    </div>
				  </div>
				<!-- this section for all video and image -->
				<center>
					<video width="400" height="280" controls>
					  <source src="https://www.youtube.com/watch?v=h9BRQ7_i0vs.mp4" type="video/mp4">
					  <source src="https://www.youtube.com/watch?v=h9BRQ7_i0vs.ogg" type="video/ogg">
					</video>
					<!-- image-->
					<br><br>
					<img src="pics\Paani-Puri.jpg" width="400px" height="280px">
				</center>
				</div>
				<div class="col-md-4 col-xs-12">
				<!-- about us -->
					<div class="well" style="background-color:#00cc00;">
						<h2 style="color:darkgreen;">About Us</h2>
						<h4 style="color:green">Your recipe is at one click away. Choose your favourite recipe and cook with comfort.</h4><br>
						<p style="color:yellow"><i>Our daily challenge; highest ingredients according to traditional recipes freshly interpreted and served woth a lot of passion for the users! We are pleased to welcome you to see our daily different recipes.</i></p>
						<img src="pics/hgyhj.png" width="300px" height="350px">
					</div>

				</div>
			</div>

		</div>

	</div>
</div>


<?php
	include("include/User_Footer.php")
?>