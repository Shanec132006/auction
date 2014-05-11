<!DOCTYPE html>
<html>
	<?php
	include 'configuration/config.php';
	session_start();
	?>
    <head>
        <meta charset=utf-8 /> 
        <title>Jamaica Customs Auction</title>
        <link rel="stylesheet" href="css/semantic.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
    	<div class="container">
	    	<div class="ui inverted menu">
                <?php if (!isset($_SESSION['user'])): ?>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/login/login.php">Login</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a>
                    <a class="item" href="#">ONE</a></li>
                    <a class="item" href="#">ABOUT US</a></li>
                
                <?php else: ?>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/logout.php">logout</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/admin.php">Admin Panel</a>
                    <a class="item" href="#">ONE</a></li>
                    <a class="item" href="#">ABOUT US</a></li>
                 <?php endif; ?>
            </div><!-- menu of ending-->  
	              
	        <div class="content">
	            <div id="slider">
	            	<img src="img/car.jpg" alt="" />
	            	<img src="img/milton.jpg" alt="" />
	            	<img src="img/ship.jpg" alt="" />
	          	</div><!-- Ending of slider picture gallery-->
	            
	            <hr/><!-- Line break-->
	            
	            <div id="welcome">
	            	<h1>Welcome to the auction site</h1>
	            	<p>the Jamaica Customs Auction exist to collect revenue from cargo that has not been cleared from the port over a gazetted amount of time. From this site you are able to understand the auction and what it takes to become apart of the auction</p> 
	          	</div><!--Welcome ending-->
	            
				<div class="border">
					<div class="ui grid">
					 	<div class="four wide column">
					    	<div  id="category">
					    		<img src="img/car1.png" alt="" width="70px"/>
								<h2><a href="#">Motor Vehicles</a></h2>
							</div>
					  	</div>
					  	<div class="four wide column">
					    	<div id="category">
					    		<img src="img/cargo.png" alt="" width="70px"/>
								<h2><a href="#">General Cargo</a></h2> 
					    	</div>
					  	</div>
					  	<div class="four wide column">
					    	<div id="category">
					    		<img src="img/private.png" alt="" width="70px"/>
							    <h2><a href="#">Private Treaty</a></h2>  
					    	</div>
					  	</div>
					</div>
	            </div><!-- Ending of Border-->
	
	             
	            <footer>
	            	<p>Work in progress by <b>G6</b></p>
	            </footer>
	         </div><!-- Ending of Surface-->
		</div>
	<script src="js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/flux.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/Auction.js" type="text/javascript" charset="utf-8"></script> 
	</body>
</html>