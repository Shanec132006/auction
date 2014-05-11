<?php 
	include '../configuration/hash-key.php';
	include '../configuration/config.php';


	$make = $_POST['make'];
	$model = $_POST['model'];
	$seating = $_POST['seating'];
	$year = $_POST['year'];
	$color = $_POST['color'];
	$transmission = $_POST['transmission'];
	$drive_side = $_POST['drive'];
	$doors = $_POST['doors'];
	$fuel_type = $_POST['fuel'];
	$cc = $_POST['cc'];
	$chassis_num = $_POST['chassis_num'];
	$eng_num = $_POST['eng_num'];
    $price = $_POST['price'];  
	
	//open a db connection
	$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	if($mysqli->connect_errno > 0)
		die('Unable to connect to the database ['.$mysqli->connect_error.']');

	$mysqli->autocommit(FALSE);
	try {
		//$mysqli->begin_transaction();

		//setup the user account


		$new_vehicle = $mysqli->query("INSERT INTO vehicle(chassis_num,Make,model,year,color,seating,transmission,drive_side,doors,fuel_type,cc,eng_num) VALUES ('$chassis_num','$make','$model','$year','$color','$seating','$transmission','$drive_side','$doors','$fuel_type','$cc','$eng_num');");
		if($new_vehicle== false)	
			throw new Exception('Error: ' .$mysqli->error);

		$pricing = $mysqli->query("INSERT INTO price(chassis_num,starting_price) VALUES ('$chassis_num','$price');");
		if($pricing== false)	
			throw new Exception('Error: ' .$mysqli->error);
	
		
		$mysqli->commit();
		header("Location: http://".$_SERVER['SERVER_NAME']."/auction/vehicles/vehicles.php");
	}catch(Exception $e)
	{
		//Rollback the transaction
		$mysqli->rollback();

		echo $e;
		// header("Location: http://".$_SERVER['SERVER_NAME']."/auction/");
		
	}
	

	$mysqli->close();
?>
