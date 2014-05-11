<?php
session_start();
include '../configuration/config.php';
$file = $_FILES['file'];
$name = $file['name'];

$path = "../img/car_images/" . basename($name);



	
//open a db connection
$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
if($mysqli->connect_errno > 0)
	die('Unable to connect to the database ['.$mysqli->connect_error.']');


if (move_uploaded_file($file['tmp_name'], $path)) {
    $sql = $mysqli->query("INSERT INTO vehicle_images (chassis_num,img_url) VALUES ('".$_SESSION['chassis']."','".mysqli_real_escape_string($mysqli,$path)."');") or die('Error: ' . mysqli_error($mysqli));
    header("location: http://".$_SERVER['SERVER_NAME'].'/auction/vehicles/vehicle_details.php?id='.$_SESSION['chassis'].'');

    	// $userSet = $mysqli->query("INSERT INTO user(user_id,email,password, type ) VALUES ('$user_id','$user_email','$user_password','participant');");
   	
} else {
    die('failed');
}


?>