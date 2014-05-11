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
                
                    <a class="item" href="http://<?php echo SERVER;?>/auction/">HOME</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/registration/registration.php">Registration</a>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/login/login.php">Login</a></li>
                    <a class="item" href="http://<?php echo SERVER;?>/auction/vehicles/vehicles.php">Vehicles</a>
                    <a class="item" href="#">ONE</a></li>
                    <a class="item" href="#">ABOUT US</a></li>
                
            </div><!-- menu of ending-->  
            <div class="content">
                <?php

                ?>
                  <div class="ui segment">
                    <h1 class="ui header">Registration ID#</h1>
                    <?php    echo "<h2>Your Registration # is:"." ".$_SESSION['user']."</p>";

                        session_destroy();
                    ?>

                    </div>
                <p>Please write down the above # in order to participate in auctions</p>
            </div>
            

        </div>

	</body>
</html>
