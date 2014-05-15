<html>
	<head>
    <?php
        session_start();
        include '../configuration/site-header.php';
        
        include 'admin_functions.php';
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
            <h2>All Users</h2>
             <table class="ui table segment">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone No.</th>
                        <th>ID Type</th>
                        <th>ID Number</th>
                        <th>Bidder Number</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $bidders = get_bidders();
                        foreach ($bidders as $bidder) { ?>
                            <tr>
                                <td><?php echo $bidder['first_name']." ".$bidder['middle_name']." ".$bidder['last_name']; ?></td>
                                <td><?php echo $bidder['phone_num']; ?></td>
                                <td><?php echo $bidder['id_type']; ?></td>
                                <td><?php echo $bidder['id_num']; ?></td>
                                <td><?php echo $bidder['user_id']; ?></td>
                                <td><?php echo $bidder['address']; ?></td>
                                                      
                            </tr>                                                                        
                    <?php } ?>
                </tbody>
            </table>
            </div><!-- End of Registration_form-->
    </div>

	</body>
</html>
