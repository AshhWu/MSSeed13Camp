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

function getAllMessages()
{
	$conn = connect();
	$sql = "SELECT * FROM message";
	$stmt = $conn->query($sql);
	return $stmt->fetchAll(PDO::FETCH_NUM);
}

function updateGroupResource($team, $value, $resource)
{
	$conn = connect();
	$sql = "UPDATE resource SET '".$resource."'='".$value."' WHERE team='".$team."'";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
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
}

function occupyStronghold($team, $code)
{
	$conn = connect();
	$sql = "UPDATE stronghold SET team='".$team."' WHERE mission='".$code."'";
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