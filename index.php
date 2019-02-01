<?php
	include("include/header.php")
?>
	
	<!-- navigation -->
	<nav class="navbar">
	  <div class="container-fluid nav-head">
	  	<div class="row">
		    <div class="col-md-7 col-xs-12 navbar-header">
		      
		      <a class="navbar-brand swad" href="#">Swadist Bhoj</a>
		    </div>

		    <div class="col-md-5 col-xs-12">
		    	<div class="row">
		    		<div class="col-md-5 col-xs-12">
				    	<!-- Email or Phone <br> -->
				    	<input type="text" name="email" placeholder="Email"><br>
				    </div>
				    <div class="col-md-5 col-xs-12">
				    	<!-- Password<br> -->
				    	<input type="text" name="pwd" placeholder="Password"><br>
				    	<a href="" class="txt"> forgotten your password? </a>
				    </div>
				    <div class="col-md-2 col-xs-2">
				    	<button type="button" class="btn btn-sm btn-success" >Login</button>
				    </div>
				</div>
		    </div>
		</div>
	  </div>
	</nav>


	<!-- body + signUp Page -->
	<div class="container-fluid body1">
		<div class="row">
			<div class="col-md-7 col-xs-12 status">
				<p>Trying Our <i><b> Swadist Bhoj </b></i> even once will turn you into a lifetime!</p>
				<p> We have so much more to offer! Basically any fast dish featuring - We will have in our menu!</p>
				<img src="pics/hgyhj.png" class="img" style="margin-left: 30px;">
			</div>
			<div class="col-md-5 col-xs-12">
				 <h2 style="margin-left: 25px;">Create an account</h2>
				 <h6 style="margin-left: 25px;"> It's free and always will be.</h6><br>
				  <form class="form-horizontal">
				    <div class="form-group">
				        <input type="text" class="form-control" id="fname" placeholder="First Name" required>
				    </div>
				    <div class="form-group">         
				        <input type="text" class="form-control" id="lname" placeholder="Last Name" required>
				    </div>
				    <div class="form-group">         
				        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
				    </div>
				    <div class="form-group">        
				        <input type="password" class="form-control" id="pwd" placeholder="Password" required>
				    </div>
				    <div class="form-group">    
				        <input type="date" class="form-control" id="DOB">
				    </div><br>
				    <div class="form-group">
				          <label><input type="radio" style="margin-left: 35px;"> Male</label>
				          <label><input type="radio" style="margin-left: 20px;"> Female</label>
				    </div>
				    <div class="form-group">    
				    	<p style="margin-left: 35px;color:#999999;font-weight: bold;"> Create a Page for a Breakfast , fast food, lunch or dinner.</p>
				    </div><hr>
				    <div class="form-group">        
				        <button type="submit" class="btn btn-success" style="margin-left: 35px;">Create an account</button>
				    </div>
				  </form>
					
			</div>
		</div>
	</div>

<?php
	include("include/footer.php")
?>