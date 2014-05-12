<?php

include_once '../configuration/hash-key.php';
include_once'../configuration/config.php';



function get_bidders()
{
	//open a db connection
	$mysqli = new mysqli(DBHOST, DBUSER, DBPASSWORD, DBNAME);
	if($mysqli->connect_errno > 0)
		die('Unable to connect to the database ['.$mysqli->connect_error.']');

	$sql =  "SELECT participant_info.user_id, first_name,middle_name,last_name,Gender,id_type,id_num,dob,phone_num,address,parish 
			FROM participant_info JOIN participant_address 
			ON participant_info.user_id = participant_address.user_id  
			WHERE 1 ";
	$resultSet = $mysqli->query($sql);
	$result= array();
	if($resultSet!=false)
	{
		while($row = $resultSet->fetch_array())
		{
			array_push($result, $row);
		}
	}

	$mysqli->close();
	return $result;
}

?>