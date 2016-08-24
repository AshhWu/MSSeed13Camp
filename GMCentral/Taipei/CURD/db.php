<?php
echo "start!!";
	$host = "ap-cdbr-azure-east-c.cloudapp.net";
	$user = "b37f8ddf38d21d";
	$pwd = "1e72c81e";
	$db = "stronghold";

	try{
		$conn = new mysqli($host, $user, $pwd, $db);
	}
	catch(Exception $e){
		die(print_r($e));
	}
	echo "Success: A proper connection to MySQL was made!";
?>