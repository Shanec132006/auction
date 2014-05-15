<!DOCTYPE html>
<html>
	<?php
		include '../vehicles/get_vehicles.php';
		 include '../configuration/site-header.php';
        
		session_start();
	?>
    <head>
        <meta charset=utf-8 /> 
        <title>Jamaica Customs Auction</title>
        <link rel="stylesheet" href="../css/semantic.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <link type="text/css" href="../css/bottom.css" rel="stylesheet" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="../js/jquery.pikachoose.min.js"></script>
		<script type="text/javascript" src="../js/jquery.touchwipe.min.js"></script>
			<script language="javascript">
			$(document).ready(function (){
					$("#pikame").PikaChoose({showTooltips:true});
				});
		</script>

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
	        <h1>Vehicle Details</h1>
	        	<?php
	        		$bidder_num = $_GET['bidder_num'];
	        		$all_data = get_bidderPayment($bidder_num);
	        		var_dump($all_data);
	        		$chassis = $all_data[0]['chassis_num'];
	        		$_SESSION['chassis'] = $chassis;
	        		$_SESSION['bidder_num'] = $bidder_num;

	        		$cars = get_details($chassis);
	        		 $images = get_images($chassis);
	        		$price = get_price($chassis);
	        		if (isset($_SESSION['user'])):
	        			$user_type = get_type($_SESSION['user']);
	        			$user_info = get_bidderInfo($bidder_num);
	        		endif;
	        		

	        	?>	
	        <h2><?php echo 'No.'.' '.$cars[0]['chassis_num'].' '.$cars[0]['Make'].' '.$cars[0]['model'];?></h2>
	        <div class="ui grid">
	        	<div class="ui five wide column">
	        		<div class="vehicle_details">
	        			<table class="ui table segment">
					 	<tbody>
						    <tr>
						      <td class="active">Make: </td>
						      <td ><?php echo $cars[0]['Make'];?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">Model</td>
						      <td><?php echo $cars[0]['model'];?></td>
						      
						    </tr>

						     <tr>
						      <td class="active">Manufacturer Year: </td>
						      <td><?php echo $cars[0]['year'];?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">Displacement:</td>
						      <td><?php echo $cars[0]['cc'];?></td>
						      
						    </tr>

						     <tr>
						      <td class="active">Fuel:</td>
						      <td><?php echo $cars[0]['fuel_type'];?></td>
						      
						    </tr>

						    <tr>
						      <td class="active">Color:</td>
						      <td><?php echo $cars[0]['color'];?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">Steering Wheel:</td>
						      <td><?php echo $cars[0]['drive_side'];?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">Transmission</td>
						      <td><?php echo $cars[0]['transmission'];?></td>
						      
						    </tr>

						     <tr>
						      <td class="active">Drive System</td>
						      <td>2WD</td>
						      
						    </tr>

						     <tr>
						      <td class="active">Capacity</td>
						      <td><?php echo $cars[0]['seating'];?></td>						      
						    </tr>

						     <tr>
						      <td class="active">Chassis No:</td>
						      <td><?php echo $cars[0]['chassis_num'];?></td>
						      
						    </tr>
						     <tr>
						      <td class="active">Engine No: </td>
						      <td><?php echo $cars[0]['eng_num'];?></td>
						      
						    </tr>
						     <tr>
						      <td class="active">Starting Price: </td>
						      <td><?php echo $price[0]['starting_price'];?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">End Price: </td>
						      <td><?php echo $price[0]['end_price'];?></td>
						      
						    </tr>
						 
						  </tbody>
						</table>

	        		</div>
	        		<?php if (isset($_SESSION['user'])): ?>
							<?php if ($user_type[0]['type'] == 'auctioneer'): ?>
							<div>
							  <form action="price_update.php" method="post" enctype="multipart/form-data">
							  	<label>End Price: </label>
							    <input type="text" name="end_price">
							    <label>Bidder #:</label>
							    <input type="text" name="bidder_num">
							    <input type="submit">
							</form>

							</div>
						<?php endif ?>
					<?php endif ?>
	        	
	        	</div>

	        	<div class="ui nine wide column">
	        		<div class="pikachoose">
							<ul id="pikame" >
								<?php
									foreach ($images as $image) {
										
									?>
									<li><a href="http://www.pikachoose.com"><img src="<?php echo $image['img_url'];?>"/></a><span>This is an example of the basic theme.</span></li>
								<?php
									}
								?>
							</ul>
						</div>
						<div>
							  <h2>Bidder Info</h2>
								<table class="ui table segment">
					 	<tbody>
						    <tr>
						      <td class="active">Name: </td>
						      <td ><?php echo $user_info[0]['first_name']." ".$user_info[0]['middle_name']." ".$user_info[0]['last_name']; ?></td>
						      
						    </tr>
						    <tr>
						      <td class="active">Address: </td>
						      <td><?php echo $user_info[0]['address']." ".$user_info[0]['parish'];?></td>
						      
						    </tr>

						    <tr>
						      <td class="active">ID Type: </td>
						      <td><?php echo $user_info[0]['id_type'];?></td>
						      
						    </tr>

						     <tr>
						      <td class="active">ID #: </td>
						      <td><?php echo $user_info[0]['id_num'];?></td>
						      
						    </tr>

						     <tr>
						      <td class="active">Bidder ID: </td>
						      <td><?php echo $bidder_num;?></td>						      
						    </tr>				     
						 
						  </tbody>
						</table>

							</div>

						<?php if ($user_type[0]['type'] == 'cashier'): ?>
							<div>
							  <form action="payment_update.php" method="post" enctype="multipart/form-data">
							  	<p>Note: Minimum Payment Must be 10% of the Ending Price</p>
							  	<LABEL>Enter Payment</LABEL>
							    <input type="text" name="payment">
							    <input type="submit">
							</form>

							</div>
						<?php endif ?>
					
	        	</div>
	        </div>
	     	
	        </div><!-- Ending of Surface-->
		</div>
	<script src="js/jquery-1.10.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/flux.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="js/Auction.js" type="text/javascript" charset="utf-8"></script> 
	</body>
	
</html>