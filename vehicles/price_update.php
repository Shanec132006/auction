<?php 
	include '../configuration/hash-key.php';
	include '../configuration/config.php';

	session_start();
	$end_price = $_POST['end_price'];
	$bidder_num = $_POST['bidder_num'];
	$chassis_num = $_SESSION['chassis'];

	
	//open a db connection
	$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	if($mysqli->connect_errno > 0)
		die('Unable to connect to the database ['.$mysqli->connect_error.']');

	$mysqli->autocommit(FALSE);
	try {
		//$mysqli->begin_transaction();

		//setup the user account



		$pricing = $mysqli->query("UPDATE price SET end_price = '$end_price' WHERE chassis_num = '$chassis_num'");
		if($pricing== false)	
			throw new Exception('Error: ' .$mysqli->error);

		$successful = $mysqli->query("INSERT INTO successfull_bids(chassis_num,user_id) VALUES ('$chassis_num','bidder_num')");
		if($pricing== false)	
			throw new Exception('Error: ' .$mysqli->error);
	
		
		$mysqli->commit();
		header("location: http://".$_SERVER['SERVER_NAME'].'/auction/vehicles/vehicle_details2.php?bidder_num='.$bidder_num.'');
	}catch(Exception $e)
	{
		//Rollback the transaction
		$mysqli->rollback();

		echo $e;
		// header("Location: http://".$_SERVER['SERVER_NAME']."/auction/");
		
	}
	

	$mysqli->close();
?>
