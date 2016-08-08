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

function getAllItems()
{
	$conn = connect();
	$sql = "SELECT * FROM account";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getAllResources()
{
	$conn = connect();
	$sql = "SELECT * FROM resource";
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

function getAllMessages()
{
	$conn = connect();
	$sql = "SELECT * FROM message";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function addAccount($account, $password)
{
	$conn = connect();
	$sql = "INSERT INTO account (account, password) VALUES (?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $account);
	$stmt->bindValue(2, $password);
	$stmt->execute();
}

function prepareResources()
{
	$conn = connect();
	$sql = "INSERT INTO resource (team, magic_powder, cloth, ruby, shaft, fire, seed, water, light, flax, screw, plastic, electron, ergonomic, imagine, metal, air, magic_stone, control_panel, seat, wheel, rope, cypress, propeller, door, jet, gun, elk, sound, sd_card, missile, miss_air, led_light) VALUES ('A', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO resource (team, magic_powder, cloth, ruby, shaft, fire, seed, water, light, flax, screw, plastic, electron, ergonomic, imagine, metal, air, magic_stone, control_panel, seat, wheel, rope, cypress, propeller, door, jet, gun, elk, sound, sd_card, missile, miss_air, led_light) VALUES ('B', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO resource (team, magic_powder, cloth, ruby, shaft, fire, seed, water, light, flax, screw, plastic, electron, ergonomic, imagine, metal, air, magic_stone, control_panel, seat, wheel, rope, cypress, propeller, door, jet, gun, elk, sound, sd_card, missile, miss_air, led_light) VALUES ('C', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO resource (team, magic_powder, cloth, ruby, shaft, fire, seed, water, light, flax, screw, plastic, electron, ergonomic, imagine, metal, air, magic_stone, control_panel, seat, wheel, rope, cypress, propeller, door, jet, gun, elk, sound, sd_card, missile, miss_air, led_light) VALUES ('D', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0)";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function prepareStrongholds()
{
	$conn = connect();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('1', '霍格華茲學院', '9魔法粉末/1 mins', '9', 'magic_powder', '1', '0', 'YEyKd')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('2', '布布恰恰', '18布/3 mins', '18', 'cloth', '3', '0', 'DWVw4')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('3', '精靈的礦坑', '6紅寶石/5 mins', '6', 'ruby', '5', '0', 'soDJ3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('4', 'Brandon工坊', '6轉軸/3 mins', '6', 'shaft', '3', '0', 'GJPzb')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('5', '烈焰火山', '12熊熊烈火/1 mins', '12', 'fire', '1', '0', 'lJAfD')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('6', '迷幻森林', '3種子/ 2 mins', '3', 'seed', '2', '0', 'SZ1yG')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('7', '天使的眼淚', '9生命之水/ 2 mins', '9', 'water', '2', '0', 'y997V')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('8', '神仙山莊', '18神聖光芒/ 3 mins', '18', 'light', '3', '0', 'X02aw')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('9', '陽光田園', '12麻/ 2 mins', '12', 'flax', '2', '0', 'Glsx3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('10', 'Steven加工廠', '12螺絲/ 1 mins', '12', 'screw', '1', '0', 'YNbMr')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('11', '統一二山', '18塑料/3 mins', '18', 'plastic', '3', '0', 'KeQW2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('12', '皮卡丘發電廠', '6十萬伏特/1 mins', '6', 'electron', '1', '0', 'vNUEM')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('13', '德克斯特的實驗室', '9人體工學/5 mins', '9', 'ergonomic', '5', '0', '5swuv')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('14', '彩虹獅動物園', '12想像力/1 mins', '12', 'imagine', '1', '0', 'Ao2pa')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('15', '鍊金小木屋', '9金屬/1 mins', '9', 'metal', '1', '0', 'uIBpt')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO stronghold (point, name, generate, generate_num, generate_item, generate_time, team, mission) VALUES ('16', '千年神木', '9大地氧氣/2 mins', '9', 'air', '2', '0', 'Ow3vC')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function addResource($team, $magic_powder, $cloth, $ruby, $shaft, $fire, $seed, $water, $light, $flax, $screw, $plastic, $electron, $ergonomic, $imagine, $metal, $air, $magic_stone, $control_panel, $seat, $wheel, $rope, $cypress, $propeller, $door, $jet, $gun, $elk, $sound, $sd_card, $missile, $miss_air, $led_light)
{
	$conn = connect();
	$sql = "INSERT INTO resource (team, magic_powder, cloth, ruby, shaft, fire, seed, water, light, flax, screw, plastic, electron, ergonomic, imagine, metal, air, magic_stone, control_panel, seat, wheel, rope, cypress, propeller, door, jet, gun, elk, sound, sd_card, missile, miss_air, led_light) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1 , $team         );
	$stmt->bindValue(2 , $magic_powder );
	$stmt->bindValue(3 , $cloth        );
	$stmt->bindValue(4 , $ruby         );
	$stmt->bindValue(5 , $shaft        );
	$stmt->bindValue(6 , $fire         );
	$stmt->bindValue(7 , $seed         );
	$stmt->bindValue(8 , $water        );
	$stmt->bindValue(9 , $light        );
	$stmt->bindValue(10, $flax         );
	$stmt->bindValue(11, $screw        );
	$stmt->bindValue(12, $plastic      );
	$stmt->bindValue(13, $electron     );
	$stmt->bindValue(14, $ergonomic    );
	$stmt->bindValue(15, $imagine      );
	$stmt->bindValue(16, $metal        );
	$stmt->bindValue(17, $air          );
	$stmt->bindValue(18, $magic_stone  );
	$stmt->bindValue(19, $control_panel);
	$stmt->bindValue(20, $seat         );
	$stmt->bindValue(21, $wheel        );
	$stmt->bindValue(22, $rope         );
	$stmt->bindValue(23, $cypress      );
	$stmt->bindValue(24, $propeller    );
	$stmt->bindValue(25, $door         );
	$stmt->bindValue(26, $jet          );
	$stmt->bindValue(27, $gun          );
	$stmt->bindValue(28, $elk          );
	$stmt->bindValue(29, $sound        );
	$stmt->bindValue(30, $sd_card      );
	$stmt->bindValue(31, $missile      );
	$stmt->bindValue(32, $miss_air     );
	$stmt->bindValue(33, $led_light    );
	$stmt->execute();
}

function addMessage($time, $client, $content)
{
	$conn = connect();
	$sql = "INSERT INTO message (time, client, content) VALUES (?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $time);
	$stmt->bindValue(2, $client);
	$stmt->bindValue(3, $content);
	$stmt->execute();
}

function deleteItem($item_id)
{
	$conn = connect();
	$sql = "DELETE FROM account WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $item_id);
	$stmt->execute();
}

function deleteMessage($item_id)
{
	$conn = connect();
	$sql = "DELETE FROM message WHERE id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $item_id);
	$stmt->execute();
}

function sqlcode($sql)
{
	$conn = connect();
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

?>