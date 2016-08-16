<?php
/** * Copyright 2013 Microsoft Corporation 
	*  
	* Licensed under the Apache License, Version 2.0 (the "License"); 
	* you may not use this file except in compliance with the License. 
	* You may obtain a copy of the License at 
	* http://www.apache.org/licenses/LICENSE-2.0 
	*  
	* Unless required by applicable law or agreed to in writing, software 
	* distributed under the License is distributed on an "AS IS" BASIS, 
	* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. 
	* See the License for the specific language governing permissions and 
	* limitations under the License. 
	*/
	
# this file automatically execute by windows every minute

function connect()
{
	// DB connection info
	$host = "ap-cdbr-azure-east-c.cloudapp.net";
	$user = "b37f8ddf38d21d";
	$pwd = "1e72c81e";
	$db = "stronghold";
	try{
		$conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}
	catch(Exception $e){
		die(print_r($e));
	}
	return $conn;
}

function sqlcode($sql)
{
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function getAllTimes()
{
	$conn = connect();
	$sql = "SELECT * FROM auto_time";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

#sqlcode("UPDATE auto_time SET time_now='1' WHERE point='1'");
$times = getAllTimes();
$i = 0;
foreach($times as $time)
{
	$i += 1;
	$time[3] += 1;
	$sql = "UPDATE auto_time SET time_now='".$time[3]."' WHERE point='".$i."'";
	sqlcode($sql);
}
/**
	$items = getAllStrongholds();
	foreach($items as $item)
	{
		if($item[7] != 0)
		{
			# add time
			# check generate time
			if(time == $item[6])
			{
				time = 0;
				use $item[5] $item[7] get team resource
				resource = resource + $item[4];
				store
			}
		}
	}
*/
header('Location: superAdmin.php');

?>