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

function getGroupAllResources($team)
{
	$conn = connect();
	$sql = "SELECT * FROM resource WHERE team='".$team."'";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getGroupOneResource($conn, $team, $material)
{
	$sql = "SELECT ".$material." FROM resource WHERE team='".$team."'";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getComposeFunction($conn, $component, $table)
{
	$sql = "SELECT * FROM ".$table." WHERE component='".$component."'";
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

function getAllMissions()
{
	$conn = connect();
	$sql = "SELECT * FROM mission";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getMissionCondition($day)
{
	$conn = connect();
	$day_condition = "day".$day."_condition";
	$sql = "SELECT ".$day_condition." FROM mission";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getAllTimes()
{
	$conn = connect();
	$sql = "SELECT * FROM auto_time";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function getAllDay()
{
	$conn = connect();
	$sql = "SELECT * FROM day";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function searchMission($code)
{
	$conn = connect();
	$sql = "SELECT * FROM mission WHERE code='".$code."'";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function searchStronghold($code)
{
	$conn = connect();
	$sql = "SELECT * FROM stronghold WHERE mission='".$code."'";
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

function updateGroupResource($conn, $team, $value, $resource) // private function
{
	$sql = "UPDATE resource SET ".$resource."='".$value."' WHERE team='".$team."'";
	$stmt = $conn->prepare($sql);
	return $stmt->execute();
}

function makeComponent($team, $component, $isTrans)
{
	$conn = connect();
	if (!$conn->beginTransaction()) { return "FAIL0"; }
	try 
	{
		if ($isTrans == "true") 
		{ 
			$table = "transport_function";
			$compose_count = 19;
		}
		else 
		{ 
			$table = "component_function";
			$compose_count = 11;
		}
		$compose_function = getComposeFunction($conn, $component, $table);
		if(!empty($compose_function)) 
		{
			for ($i = 1; ($compose_function[0][$i] !== '0') && ($i < $compose_count); $i++) 
			{
				$material = $compose_function[0][$i];
				$i++;
				$amount = $compose_function[0][$i];
				$current_amount = getGroupOneResource($conn, $team, $material);
				if(empty($current_amount)) { return "FAIL1"; }

				// Check amount
				if ($current_amount[0][0] < $amount) 
				{ 
					$conn->rollBack();
					return "FAIL2";
				}
				else 
				{
					$value = $current_amount[0][0] - $amount;
					if (!updateGroupResource($conn, $team, $value, $material)) { return "FAIL3"; }
				}
			}
		}
		else { return "FAIL4"; }

		// Update Component
		if ($isTrans == "false")
		{
			$current_component = getGroupOneResource($conn, $team, $component);
			if(empty($current_component)) { return "FAIL5"; }
			$value = $current_component[0][0] + 1;
		}
		else
		{
			$value = $component;
			$component = "transportation";
		}
		if (!updateGroupResource($conn, $team, $value, $component)) { return "FAIL6"; }
		$conn->commit();
		return "SUCCESS";
	}
	catch (PDOException $e)
	{
		$conn->rollBack();
		echo "Query Failed!\n\n";
		echo "DBA FAIL:" . $e->getMessage();
		return "FAIL7";
	}
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

function prepareMission()
{
	$conn = connect();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('YEyKd', '灌籃高手', '６人輪流投籃，在３分鐘內投進較多籃球的隊伍即可佔領此部落。', '6', '165以下x4', '戴眼鏡x4', '拿IPHONEx5', '反手可摸到肚臍x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('DWVw4', '乒乓傳情', '桌上有5個紙杯，你們必須把乒乓球放在第一個水杯的水面上後，將乒乓球從第一個紙杯吹到最後一個紙杯，第一位隊員吹完後下一位隊員才可以吹第二輪。花較少秒數吹完三輪即可佔領此部落。', '3', '耳垂連起來x1', '有瀏海x3', 'RDAAx2', '紮衣服x3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('soDJ3', 'Flip-Flop', '每人會有一個裝滿水的水杯，須將水杯內的水喝完後，用一根手指將杯口翻至下。前一位隊員喝完水、翻杯子成功後，下一位隊員才可進行遊戲。花費時間比上一陣營少即可佔領此部落。', '6', '3男3女', 'SAAx3+AAx2+MAAx1', '穿黑襪x2', '鞋子有藍色x3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('GJPzb', '呼啦抓小雞', '同一小隊的隊員搭肩排成縱列，兩隊的排頭手拿呼拉圈，想辦法把呼拉圈套到敵隊的最後一個人身上，率先套中敵隊的隊伍即可獲勝！', '5', '外雙眼皮x2', '穿帆布鞋x1+擦唇膏x1', '175以上x1', '有白頭髮x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('lJAfD', '頭好撞撞', '一隊一回合派出四人上場，用頭進行三回合的排球對戰。先猜拳決定發球方，發球者在線外把球拋起並用頭把球頂到敵方，雙方用頭擊的方式互打，球在敵方落地或是敵方將球擊出界則己方得分．先得七分者拿下該回合勝利。率先獲得兩回合勝利的隊伍即可佔領部落！', '12', '穿耳洞x4', '沒瀏海x6', '單眼皮x4', '用安卓手機x8')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('SZ1yG', '打水瓢', '一次派出一位隊員挑戰打水瓢，每人有３次機會，連續次數比上一陣營高即可佔領此部落', '4', '3男1女', '170公分以下男生x2', '穿全白素Tx2', '拳頭可放進嘴巴裡x1')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('y997V', '巧拼渡河', '小隊全體人員站在7片巧拼上，身體不可超出巧拼之外，隊伍最後一人須將最後一塊巧拼傳至隊伍前方，並以此慢慢往前進，直到全員接通過終點線。過程中雙腳都必須站在巧拼上，不可單腳站立也不可透過巧拼滑行前進，違規一次就要被扣一塊巧拼。花費時間比上一陣營少即可佔領此部落。', '8', '170公分以上x3+155公分以下x2', '捲髮女生x3+直髮女生x2', '戴手鍊x2+戴手錶x4', '單眼皮x3+雙眼皮x3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('X02aw', '撲克牌好手', '在桌上反蓋的16張撲克牌當中，將所有數字兩兩相同的撲克牌找出來。一次派出一人翻開兩張反蓋的撲克牌，若兩張牌不相同，則需念完指定文章才可以換人並進行下一次翻牌。花較少時間找出所有成對撲克牌者可佔領此部落！', '4', '1男3女', '170公分以上x4', '戴眼鏡x4', '頭髮過肩x4')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('Glsx3', '斷開魂結', '所有人把手牽起來圍成一個圓，不可牽左右相鄰的人、不可兩手都牽同一個人。確定全部人都將手牽起來後，盡快在手不放開的狀況下把打結的圓解開成為一個圓，秒數少即可佔領部落！', '12', '6男6女', '穿白鞋x5', '染頭髮x6', '單眼皮x5')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('YNbMr', '拍拍羽毛球', '每人到箱子中抽出屬於自己的球拍，猜拳決定發球方後，進行二對二羽毛球比賽，隨時可以更換場上隊員，先得到10分的隊伍就是贏家！', '4', '2男2女', '有黑眼圈x4', '穿長襪x3', '染頭髮x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('KeQW2', '比手畫腳', '派出一個人依照祭司抽出的題目比手畫腳，限時３分鐘，挑戰你們可以猜對幾題吧！', '6', '穿長襪x5', '綁頭髮女生x3+沒瀏海男生x1+有瀏海男生x2', '穿NIKE鞋x2+穿ADIDASx2', '165公分以下x3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('vNUEM', '翻轉地面', '所有隊員站在平鋪的垃圾袋上方，盡可能以最快速的方法把垃圾袋翻面，且過程中所有人的腳不可踏出垃圾袋外，違規一次則最終秒數加5秒。完成花費的秒數少即可佔領部落！', '4', '4女', '2女1男', '1女2男', '2女2男')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('5swuv', '平衡感王', '隊伍６人分開站到指定的位置，並且使用筷子夾住乒乓球的方式接力，將乒乓球從第一人傳至最後一人，在３分鐘內，夾越多顆者獲勝。', '6', '穿NewBalancex1+臉上有痣x3', '穿黑色褲子x3+戴眼鏡x2', '臉上有痘痘x3', '長頭髮x1+短頭髮x4')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('Ao2pa', '一路橡吸', '小隊排成一列站在指定位置，每人嘴巴咬一隻吸管，以接力的方式把橡皮筋從第一個人傳到最後一個人，過程中不可用手，且橡皮筋中途掉落則需重來。３分鐘內傳遞較多橡皮筋者即可佔領此部落。', '8', '4男4女', '穿牛仔褲x5', '有畫眉毛x3', '臉上有2顆痣x2+有戴手錶x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('uIBpt', '金雞獨立', '所有人用金雞獨立的姿勢站在結界內，想辦法在不用手推擠的狀況下讓敵隊的所有隊員腳落地或跳出結界外即可獲勝！', '5', '外雙眼皮x2', '穿帆布鞋x1+擦唇膏x1', '175以上x1', '有白頭髮x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('Ow3vC', '甩便利貼', '6位隊員分別在身上黏便利貼（額頭一張、雙臂四張、雙腳四張、腹部三張、背部三張），限時９０秒內甩掉較多便利貼的隊伍即可佔領該據點。', '6', '穿短褲x5', '穿耳洞x3', '瀏海在眉毛上x2', '鞋子有紅色x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('iVw1L', '喝水唱歌', '一次派出一人，到前方清單中選出一首歌，嘴巴含著水將這首歌唱出來，其他隊員要猜出歌名，猜中後便可換另一位隊員去唱歌。用較少時間猜完6首歌的陣營即可佔領此部落', '8', '戴眼鏡x3', '拿iphonex2', '3男5女', '綁雙馬尾x3')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO mission (code, topic, content, number_of_people, day1_condition, day2_condition, day3_condition, day4_condition) VALUES ('ol7wr', '天旋地轉', '隊伍中一次派出一人，先抓著智慧之杖轉１０圈，接著運球至前方終點線後，回到隊伍中才可換下一個人出發。全部人完成後遊戲才可結束，花費時間比上一陣營少即可佔領此部落。', '6', '紮衣服x4', '穿高腰褲x3', '穿長褲x3', '沒鞋帶x2')";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function prepareAccounts()
{
	$conn = connect();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Keziah.Chien@msseed.idv.tw', 'gYyG', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Kelly.Wang@msseed.idv.tw', 'pLt3', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ines.Wu@msseed.idv.tw', 'wlvS', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Janet.Hsieh@msseed.idv.tw', 'O8tP', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Taylor.Lee@msseed.idv.tw', '9HBP', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Allen.Chung@msseed.idv.tw', 'DNUH', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Gray.Chen@msseed.idv.tw', 'COVb', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ashley.Tsai@msseed.idv.tw', 'LpId', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Joe.Lee@msseed.idv.tw', 'jITL', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Alice.Wang@msseed.idv.tw', 'JiuL', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('angel.Liu@msseed.idv.tw', 'ULiB', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Sam.Jiang@msseed.idv.tw', 'p5mH', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Jason.Cheng@msseed.idv.tw', '7tgH', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sherry.Liu@msseed.idv.tw', 'VvVa', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('David.Kao@msseed.idv.tw', 'NJzY', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Alessia.Chuang@msseed.idv.tw', 'AXZK', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sindy.Chang@msseed.idv.tw', 'cCmp', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Annie.Lin@msseed.idv.tw', '5ahy', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ivy.Wang@msseed.idv.tw', '8HJV', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Willy.Wu@msseed.idv.tw', 'oovq', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Coco.Hsu@msseed.idv.tw', 'naZ0', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Misha.Chen@msseed.idv.tw', 'dCVh', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Hank.Huang@msseed.idv.tw', '91ox', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Pony.Chung@msseed.idv.tw', 'vlZX', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Lafi.Lin@msseed.idv.tw', 'gXxG', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Karen.Wang@msseed.idv.tw', 'aK6H', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Debby.Juan@msseed.idv.tw', 'ycDq', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Liang.Yu.Pan@msseed.idv.tw', 'KUqR', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sean.Cheng@msseed.idv.tw', 'M539', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Kasey.Yen@msseed.idv.tw', 'dfqj', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Tony.Chung@msseed.idv.tw', 'pTUs', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sophie.Hung@msseed.idv.tw', 'QFu5', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Becca.Chuo@msseed.idv.tw', 'qlo5', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sabrina.Gong@msseed.idv.tw', '8azE', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Joan.Fan@msseed.idv.tw', 'yHVG', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Belle.Chang@msseed.idv.tw', 'vNgm', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Tom.Chiu@msseed.idv.tw', 'thkM', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Vicky.Lin@msseed.idv.tw', 'O7uH', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Melissa.Hsu@msseed.idv.tw', 'J9uN', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Anita.Chang@msseed.idv.tw', 'Jk8D', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Derek.Lee@msseed.idv.tw', '6cvd', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Jasmine.Lin@msseed.idv.tw', 'vOSn', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('James.Chen@msseed.idv.tw', 'wVzR', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Sylvia.Huang@msseed.idv.tw', 'oJ8S', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Julie.Huang@msseed.idv.tw', 'c5a1', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Allen.Hsu@msseed.idv.tw', 'igMP', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Charlie.Chang@msseed.idv.tw', 'lf67', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Fairy.Yeh@msseed.idv.tw', 'T2PU', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Simon.Chen@msseed.idv.tw', '1cQK', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Angela.Jan@msseed.idv.tw', 'yFvy', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sunny.Lin@msseed.idv.tw', 'cbb3', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Joseph.Chen@msseed.idv.tw', '7iAy', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Nancy.Huang@msseed.idv.tw', '02my', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Amy.Huang@msseed.idv.tw', '9SUX', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Jacqueline.Lin@msseed.idv.tw', 'qVjY', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Ken.Li@msseed.idv.tw', '0rC7', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Raymod.Rao@msseed.idv.tw', '3EtI', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Jamie.Lu@msseed.idv.tw', 'TfFS', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Natalie.Chu@msseed.idv.tw', 'o3Cb', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Wade.Lee@msseed.idv.tw', 'y4MO', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Catherine.Chang@msseed.idv.tw', '561T', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Kaiting.Chang@msseed.idv.tw', 'JMkp', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Roger.Tseng@msseed.idv.tw', 'BRXH', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ivy.Lu@msseed.idv.tw', 'goTQ', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Wally.Liu@msseed.idv.tw', 'ymSW', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Evelyn.Chen@msseed.idv.tw', 'Ra1O', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Shirley.Lin@msseed.idv.tw', '4zMP', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Jocelyn.Lin@msseed.idv.tw', 'jjtM', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Irene.Jiang@msseed.idv.tw', 'FUpT', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Amy.Liu@msseed.idv.tw', 'pDIM', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Candice.Zhou@msseed.idv.tw', '2tvg', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sally.Chian@msseed.idv.tw', 'LVDw', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Tina.Huang@msseed.idv.tw', 'aF8E', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Elisa.Wu@msseed.idv.tw', 'wxKk', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('YD.Chen@msseed.idv.tw', 'pH8e', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Jimmy.Li@msseed.idv.tw', 'GsAA', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Stacey.Sun@msseed.idv.tw', 'tV1e', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Betty.Yu@msseed.idv.tw', 'AcHI', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Jay.Huang@msseed.idv.tw', '22mL', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Zona.Chen@msseed.idv.tw', 'nRdJ', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Alan.Chung@msseed.idv.tw', '6DKA', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Amanda.Yang@msseed.idv.tw', 'ua3c', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Alena.Chen@msseed.idv.tw', 'aJjd', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Justina.Lai@msseed.idv.tw', '0va9', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Angela.Chen@msseed.idv.tw', 'lQjZ', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Homer.Chen@msseed.idv.tw', 'M7UJ', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Lisa.Lin@msseed.idv.tw', 'd5NP', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Nina.Chen@msseed.idv.tw', '02qs', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Leonard.Hwang@msseed.idv.tw', 'pBLZ', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ryan.Chen@msseed.idv.tw', '1myw', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Candice.Tsai@msseed.idv.tw', 'S2yA', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Michael.Kao@msseed.idv.tw', 'vkoD', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Clara.Lee@msseed.idv.tw', '69eC', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Lisa.Chu@msseed.idv.tw', 'zXZ8', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Mavis.Lin@msseed.idv.tw', 'krkT', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Ian.Feng@msseed.idv.tw', 'wbz6', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Angela.Feng@msseed.idv.tw', 'Gye2', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sean.Lee@msseed.idv.tw', 'tzkc', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Geneping.Yang@msseed.idv.tw', '1yg3', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Viola.Chang@msseed.idv.tw', '95Dw', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Sergio.Wang@msseed.idv.tw', 'ADTu', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('Kaitlyn.Hsiao@msseed.idv.tw', 'SNHg', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('13th-Ann.Lin@msseed.idv.tw', '9L0G', '1');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('guardian', 'GFJX', '2');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "INSERT INTO account (email, password, authority) VALUES ('MSAdmin', '1PPQ3kWI', '3');";
	$stmt = $conn->prepare($sql);
	$stmt->execute();

}

function getUserInfo($id)
{
	$conn = connect();
	$sql = "SELECT * FROM users WHERE p_id='".$id."'";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function occupyStronghold($team, $code, $record)
{
	$conn = connect();
	$sql = "UPDATE stronghold SET team='".$team."' WHERE mission='".$code."'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$sql = "UPDATE stronghold SET highest_score='".$record."' WHERE mission='".$code."'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
}

function getAllOccupyTeam()
{
	$conn = connect();
	$sql = "SELECT team FROM stronghold";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
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

function addMessage($time, $client, $content, $color)
{
	$conn = connect();
	$sql = "INSERT INTO message (time, client, content, color) VALUES (?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bindValue(1, $time);
	$stmt->bindValue(2, $client);
	$stmt->bindValue(3, $content);
	$stmt->bindValue(4, $color);
	$stmt->execute();
}

function deleteItem($item_id)
{
	$conn = connect();
	$sql = "DELETE FROM account WHERE email = ?";
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