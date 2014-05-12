<?php 
	include '../configuration/hash-key.php';
	include '../configuration/config.php';

	session_start();

	$user_fname = $_POST['fname'];
	$user_lname = $_POST['lname'];
	$user_mname = $_POST['mname'];
	$gender = $_POST['gender'];
	$address = $_POST['Address'];
	$parish = $_POST['City'];
	$id_type = $_POST['ID'];
	$id_num = $_POST['ID_Number'];
	$trn = $_POST['TRN'];
	$user_dob = $_POST['Date'];
	$phone_num = $_POST['Phone'];
	$user_email = $_POST['Email'];
	$user_password = crypt($_POST['pword'],HASH_KEY);
	$user_id = rand();
	
	//open a db connection
	$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	if($mysqli->connect_errno > 0)
		die('Unable to connect to the database ['.$mysqli->connect_error.']');

	$mysqli->autocommit(FALSE);
	try {
		//$mysqli->begin_transaction();

		//setup the user account
		$userSet = $mysqli->query("INSERT INTO user(user_id,email,password, type ) VALUES ('$user_id','$user_email','$user_password','participant');");
		if($userSet === false)	
			throw new Exception('Error: ' .$mysqli->error);


		$participantinfo = $mysqli->query("INSERT INTO participant_info(user_id,first_name,middle_name,last_name,Gender,id_type,id_num,trn,dob,phone_num) VALUES ('$user_id','$user_fname','$user_mname','$user_lname','$gender','$id_type','$id_num','$trn','$user_dob','$phone_num');");
		if($participantinfo === false)	
			throw new Exception('Error: ' .$mysqli->error);
	
		$participantaddress = $mysqli->query("INSERT INTO participant_address(user_id,address,parish) VALUES ('$user_id','$address','$parish');");
		if($participantaddress === false)	
			throw new Exception('Error: ' .$mysqli->error);

		$_SESSION['user'] = $user_id;
		session_write_close();
		$mysqli->commit();
		header("Location: http://".$_SERVER['SERVER_NAME']."/auction/registration/reg_success.php");
	}catch(Exception $e)
	{
		//Rollback the transaction
		$mysqli->rollback();
		
		
		header("Location: http://".$_SERVER['SERVER_NAME']."/auction/");
		
	}
	

	$mysqli->close();
?>
