<!DOCTYPE html>
<html>
	<?php
		include 'get_vehicles.php';
		session_start();
	?>
    <head>
        <meta charset=utf-8 /> 
        <title>Jamaica Customs Auction</title>
        <link rel="stylesheet" href="../css/semantic.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
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
	        	<?php
	        		$cars = get_cars();
	        		if (isset($_SESSION['user'])):
	        			$user_type = get_type($_SESSION['user']);
	        		endif;
	        	?>
	        	<table class="ui basic table">
				  <thead>
				    <tr><th>Name</th>
				    <th>Color</th>
				    <th>Year</th>
				  </tr></thead>
				  <tbody>
	        	<?php
	        		foreach ($cars as $car) {
	        		?>
					<tr>
				      <td><a href="http://<?php echo SERVER;?>/auction/vehicles/vehicle_details.php?id=<?php echo $car['chassis_num']; ?>"><?php echo $car['Make']." ".$car['model'];?></a></td>
				      <td><?php echo $car['color'];?></td>
				      <td><?php echo $car['year'];?></td>
				    </tr>
	        	<?php
	        		}
	        	?>
	         	</tbody>
	         </table>
	         <?php if (isset($_SESSION['user'])): ?>
	        	<?php if ($user_type[0]['type']=='admin') {
	        		?>
	        		<a class="ui green button" href="add_vehicles.php">Add New Vehicle</a>
	        <?php	}?>
	    	<?php endif;?>
	        </div><!-- Ending of Surface-->
	        
		</div>
	<script src="js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/flux.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/Auction.js" type="text/javascript" charset="utf-8"></script> 
	</body>
</html>