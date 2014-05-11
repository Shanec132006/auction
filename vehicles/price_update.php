<?php 
	include '../configuration/hash-key.php';
	include '../configuration/config.php';

	session_start();
	$end_price = $_POST['end_price'];
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
	
		
		$mysqli->commit();
		header("location: http://".$_SERVER['SERVER_NAME'].'/auction/vehicles/vehicle_details.php?id='.$_SESSION['chassis'].'');
	}catch(Exception $e)
	{
		//Rollback the transaction
		$mysqli->rollback();

		echo $e;
		// header("Location: http://".$_SERVER['SERVER_NAME']."/auction/");
		
	}
	

	$mysqli->close();
?>
