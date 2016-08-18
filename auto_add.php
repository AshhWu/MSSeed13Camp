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
	

function connect()
{
	$host = "ap-cdbr-azure-east-c.cloudapp.net";
	$user = "b37f8ddf38d21d";
	$pwd = "1e72c81e";
	$db = "stronghold";
	// DB connection info
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

function getAllStrongholds()
{
	$conn = connect();
	$sql = "SELECT * FROM stronghold";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getGroupAllResources($resource, $team)
{
	$conn = connect();
	$sql = "SELECT ".$resource." FROM resource WHERE team='".$team."'";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function updateGroupResource($team, $value, $resource)
{
	$conn = connect();
	echo "team:".$team."	value:".$value."	resource:".$resource."<br>";
	$sql = "UPDATE resource SET ".$resource."='".$value."' WHERE team='".$team."'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

#sqlcode("UPDATE auto_time SET time_now='1' WHERE point='1'");
echo "Start time" . date('h:i:s') . "<br>";
$x = 1;
while($x <= 1)
{
	$times = getAllTimes();
	$Strongholds = getAllStrongholds();
	$i = 0;
	foreach($times as $time)
	{
		$i += 1;
		$team = $Strongholds[$i - 1][7];
		if($team != "0")
		{
			$time[3] += 1;
			if($time[3] >= $time[2])
			{
				$sql = "UPDATE auto_time SET time_now='0' WHERE point='".$i."'";
				sqlcode($sql);
				$resourceValue = $Strongholds[$i - 1][4];
				$resourceItem = $Strongholds[$i - 1][5];
				$preResource = getGroupAllResources($resourceItem, $team);
				$resourceValue += $preResource[0][0];
				updateGroupResource($team, $resourceValue, $resourceItem);
			}
			else
			{
				$sql = "UPDATE auto_time SET time_now='".$time[3]."' WHERE point='".$i."'";
				sqlcode($sql);
			}
		}
	}
	//sleep(1);
	$x += 1;
}
echo "End time" . date('h:i:s') . "<br>";

?>