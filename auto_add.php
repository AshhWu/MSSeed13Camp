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
				$resourceValue = $Strongholds[$i - 1][4] / 3;
				$resourceItem = $Strongholds[$i - 1][5];
				switch($team){
					case 'A':
						$preResource = getGroupAllResources($resourceItem, '1');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '2');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '3');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
					break;
					case 'B':
						$preResource = getGroupAllResources($resourceItem, '4');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '5');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '6');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
					break;
					case 'C':
						$preResource = getGroupAllResources($resourceItem, '7');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '8');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '9');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
					break;
					case 'D':
						$preResource = getGroupAllResources($resourceItem, '10');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '11');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
						$preResource = getGroupAllResources($resourceItem, '12');
						$preResource[0][0] += $resourceValue;
						updateGroupResource($team, $preResource[0][0], $resourceItem);
					break;
					default:
			}
			else
			{
				$sql = "UPDATE auto_time SET time_now='".$time[3]."' WHERE point='".$i."'";
				sqlcode($sql);
			}
		}
	}
echo "End time" . date('h:i:s') . "<br>";
echo "<script>window.close();</script>";

?>
