<?php 
	include '../configuration/hash-key.php';
	include '../configuration/config.php';

	session_start();
	$payment = $_POST['payment'];
	$bidder_num = $_SESSION['bidder_num'];
	$chassis_num = $_SESSION['chassis'];

	
	// //open a db connection
	$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	if($mysqli->connect_errno > 0)
		die('Unable to connect to the database ['.$mysqli->connect_error.']');

	$mysqli->autocommit(FALSE);
	try {
		//$mysqli->begin_transaction();

		//setup the user account



		$pricing = $mysqli->query("UPDATE successfull_bids SET payment = '$payment' WHERE chassis_num = '$chassis_num'");
		if($pricing== false)	
			throw new Exception('Error: ' .$mysqli->error);

		
	
		
		$mysqli->commit();
		header("location: http://".$_SERVER['SERVER_NAME'].'/auction/cashier/payment_success.php');
	}catch(Exception $e)
	{
		//Rollback the transaction
		$mysqli->rollback();

		echo $e;
		// header("Location: http://".$_SERVER['SERVER_NAME']."/auction/");
		
	}
	

	$mysqli->close();
?>
