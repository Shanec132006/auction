<html>
	<head>
    <?php

        include '../configuration/site-header.php';
        include '../configuration/config.php';
    ?>
		<meta charset="utf-8">
		<title>Registration</title>
        <link rel="stylesheet" href="css/Reg.css" type="text/css" />  
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
                <div id="Registration_form">
                	<h1>Auction Bidder's Application</h1>
                    <p>I the undersigned hereby apply for a bidder's Card for the purpose of participating in all Public Auction conducted by the Collector of Customs on Overtime and other goods</p>        		
                    <form class="ui error form segment" action="Reg.php" method="post" enctype="multipart/form-data">
                                
                   
                    <div class="three fields">
                        <div class="field">
                    		<label>
                            <span>First Name:</span>
                       		<input name="fname" type="text" placeholder="Enter first name" required autofocus>
                        	</label>
                        </div>
                        <div class="field">
                       	 	<label>
                            <span>Middle Name:</span>
                        	<input name="mname" type="text" placeholder="Enter Middle name" required>
                        	</label>
                        </div>
                        <div class="field">
                            <label>
                            <span>Last Name:</span>
                            <input name="lname" type="text" placeholder="Enter Last name" required>
                            </label> 
                        </div>
                    </div>
                        
                    <Label><span>Gender:</span></Label>
                        <select name="gender">
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                       </select>
                           
                	                 
                        
                    <label>
                        <span>Address:</span>
                       	<input name="Address"  type="text" placeholder="Please enter address"required>
                    </label>
                        
                        
                    <label>
                        <span>Parish:</span>
                        <input name="City" type="text" placeholder="Parish of address" required>
                	</label>

                    <div class="two fields">
                        <div class="field">  
                        	<label>
                                <span>ID Type:</span>
                        	   <input name="ID" type="text" placeholder="Eg: Drivers License" required>
                        	</label>
                        </div>
                        <div class="field">
                        	<label>
                                <span>ID Number:</span>
                        	   <input name="ID_Number"  type="number" placeholder="Enter ID number" required>
                        	</label>
                        </div>
                    </div>
                    
                	<label>
                        <span>TRN:</span>
                    	<input name="TRN" type="number" placeholder="Enter Tax Tegistration Number" required>
                	</label>
                    
                	<label>
                        <span>Date of Birth:</span>
                    	<input type="text" value="dd-mm-yyyy" name="Date" >
                	</label>
                    
                	<div class="two fields">
                        <div class="field">
                            <label>
                                <span>Phone No:</span>
                            	<input name="Phone" type="tel" placeholder="Please enter your telephone number" required>
                        	</label>
                        </div>
                        <div class="field">
                        	<label>
                                <span>Email:</span>
                            	<input name="Email"  type="email" placeholder="example@domain.com" required>
                            </label>
                        </div>
                    </div>
                    
                    <label>
                        <span>Password:</span>
                    	<input name="pword"  type="password" placeholder="Enter password" required>
                    </label>

                    <h2>Successful bidders are required to:</h2>
                    <ol>
                    	<li>1. Immediately make a <b>NON-REFUNDABLE</b> deposit of 10% on all Motor Vehicles and final payment within seven (7) working days.</li>
                        <li>2. Immediately make full payment on all other goods</li>
                        <li>3. Remove all goods sold from th warehouse within fourteen (14) days to avoid forfeiture</li>
                    </ol>
                    <p>All sales are conducted subject to Jamaican Laws and Rules lay down by the commissioner of Customs.</p>
                    <input class="sendButton" type="submit" name="Submit" value="I AGREE">
                    <input class="declineButton" type="reset" name="Decline" value="I DISAGREE">                 
        	</form><!-- End of Form fields-->
                <div class="login">
                	<p>Already Registered ?<a href="login">Go to login </a></p>
                </div> 
        </div><!-- End of Registration_form-->
    </div>

	</body>
</html>
