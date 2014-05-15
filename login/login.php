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
	    	<nav class="menu">
    			<?php if (!isset($_SESSION['user'])): ?>
		        	<ul>
		            	<li><a href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
		                <li><a href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a></li>
		                <li><a href="http://<?php echo SERVER;?>/auction/login/login.php">Login</a></li>
		                <li><a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a></li>
		                <li><a href="#">ONE</a></li>
		                <li><a href="#">ABOUT US</a></li>
		        	</ul>
		        	<?php else: ?>
		        		<ul>
		                    <li><a class="item" href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
		                    <li><a class="item" href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a></li>
		                    <li><a class="item" href="http://<?php echo SERVER;?>/auction/logout.php">logout</a></li>
		                    <li><a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a></li>
		                    <li><a class="item" href="#">ONE</a></li>
		                    <li><a class="item" href="#">ABOUT US</a></li>
		                </ul>
                 <?php endif; ?>
    	</nav><!-- menu of ending--> 
	              
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