<?php 
		include('include\header.php');
		?>
	
	<body class="bacimg">
		<div id="login">
			<div class="container">
					
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4 login-box">
						<form><br/>
							<center><h1 style="color:#004d4d;">Admin Login</h1><br/>

							<label for="email"></label>
							<input type="text" placeholder="Enter Email" name="email"  required><br />

							<label for="psw"></label>
							<input type="password" placeholder="Enter Password" name="psw" required><br />

							<button type="reset" class="btn btn-warning">Reset</button>
							<button type="submit" class="btn btn-success" style="margin-left:10%">Login</button></center>

						</form>
					</div>
					<div class="col-sm-4"></div>
				</div>
						 
			</div>
		</div>
					
	<?php 
		include('include\footer.php');
		?>