<html>
	<head>
    <?php

        include '../configuration/site-header.php';
        include '../configuration/config.php';
        session_start();
    ?>
		<meta charset="utf-8">
		<title>Registration</title>
        <link rel="stylesheet" href="css/Reg.css" type="text/css" />  
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
                    <a class="item" href="#">ONE</a></li>
                    <a class="item" href="#">ABOUT US</a></li>
                 <?php endif; ?>
            </div><!-- menu of ending-->  

            <div class="content">
               <div>
                    <form action="search_results.php" method="get" enctype="multipart/form-data">
                        <label>Enter Bidder #:</label>
                        <input type="text" name="bidder_num">
                        <input type="submit">
                    </form>
                </div> 
            </div>
        </div>
	</body>
</html>
