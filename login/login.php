<html>
<head>
	<title>Home</title>
	<?php 
		  include '../configuration/site-header.php';
        include '../configuration/config.php';
	?>	
</head>
<body>
		<div class="container">
	    	<div class="ui inverted menu">
	        	
	            	<a class="item" href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
	                <a class="item" href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a>
	                <a class="item" href="http://<?php echo SERVER;?>/auction/login/login.php">Login</a></li>
	                <a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a>
	                <a class="item" href="#">ONE</a></li>
	                <a class="item" href="#">ABOUT US</a></li>
	        	
	    	</div><!-- menu of ending-->  
	              
	        <div class="content">
				<form  class="ui error form segment" method="POST" action="login_script.php">
					<div>
						<p>Have a account?Register <a href="http://<?php echo $_SERVER['SERVER_NAME'];?>/auction/registration/registration.php">Here</a></p>
					</div>
					<div class="field">
					    <label>Email</label>
				    	<input type="text" name="user_email">
				  	</div>
				  	<div class="field">
				  		<label>Password</label>
				  		<input type="password" name="user_password">
				  	</div>
				  	<input type="submit" class="ui blue button"/>
					
				</form>
			</div>
		</div>
	
</body>
</html>