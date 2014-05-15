<html>
	<head>
    <?php
        session_start();
        include '../configuration/site-header.php';
        include '../configuration/config.php';
    ?>
		<meta charset="utf-8">
		<title>Registration</title>
        <link rel="stylesheet" href="css/Reg.css" type="text/css" />  
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
                	     		
                    <form class="ui error form " action="store_vehicles.php" method="post" enctype="multipart/form-data">
                                
                   
                    <div class="two fields">
                        <h1>Add Vehicle</h1>
                        <div class="field">
                    		<label>
                            <span>Vehicle Make:</span>
                       		<input name="make" type="text" placeholder="eg. Mistsubishi" required autofocus>
                        	</label>
                        </div>
                        <div class="field">
                       	 	<label>
                            <span>Vehicle Model:</span>
                        	<input name="model" type="text" placeholder="eg. Lancer Evolution IV" required>
                        	</label>
                        </div>
                    </div>
                        <label>
                            <span>Seating:</span>
                            <input name="seating" type="text" placeholder="eg. 4 Seater" required>
                        </label> 
                         <label>
                            <span>Year:</span>
                            <input name="year" type="text" placeholder="eg. 2012" required>
                        </label> 
                         <label>
                            <span>Color:</span>
                            <input name="color" type="text" placeholder="eg. yellow" required>
                        </label> 
                    
                        
                    <Label><span>Transmission:</span></Label>
                        <select name="transmission">
                            <option value="Automatic">Automatic</option>
                            <option value="Manual">Manual</option>
                       </select>
                           
                	                 
                        
                    <label>
                        <span>Drive Side:</span></label>
                        <select name="drive">
                            <option value="RHD">RHD</option>
                            <option value="LHD">LHD</option>
                       </select>                    
                        
                        
                    <label>
                        <span>Doors:</span>
                        <input name="doors" type="text" placeholder="eg. 2 Doors" required>
                	</label>

                    <label>
                        <span>Fuel Type:</span>
                         <select name="fuel">
                            <option value="Gas">Gas</option>
                            <option value="Diesel">Diesel</option>
                       </select>          
                    </label>
                    
                    <label>
                        <span>CC:</span>
                        <input type="text" name="cc" >
                    </label>
                    <div class="two fields">
                        <div class="field">  
                        	<label>
                                <span>Chassis #:</span>
                        	   <input name="chassis_num" type="text" placeholder="Eg: 121342241" required>
                        	</label>
                        </div>
                        <div class="field">
                        	<label>
                                <span>Engine #:</span>
                        	   <input name="eng_num"  type="text" placeholder="eg. KB12103" required>
                        	</label>
                        </div>

                    </div>

                    <label>
                        <span>Starting Price:</span>
                        <input name="price"  type="text" placeholder="eg. $200,000" required>
                    </label>
                    
                	
                    <input class="sendButton" type="submit" name="Submit" value="Add Vehicle">
                              
        	</form><!-- End of Form fields-->
        </div><!-- End of Registration_form-->
    </div>

	</body>
</html>
