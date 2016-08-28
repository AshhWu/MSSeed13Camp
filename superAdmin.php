<?php 
session_start();
?>
<html>
<!--
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
-->
<head>
<!-- Title -->
<title>超級管理員</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
	<style type="text/css">
	body { background-color: #fff; border-top: solid 10px #000;
		color: #333; font-size: .85em; margin: 20px; padding: 20px;
		font-family: "Segoe UI", Verdana, Helvetica, Sans-Serif;
	}

	h1, h2, h3 { color: #000; margin-bottom: 0; padding-bottom: 0; }

	h1 { font-size: 2em; }

	h2 { font-size: 1.75em; }

	h3 { font-size: 1.2em; }

	table { margin-top: 0.75em;}

	th { font-size: 1.2em; text-align: center; border: none 0px; padding-right: 15px;
		background-color: #4CAF50;
		color: white; }

	td { padding: 0.25em 2em 0.25em 0em; border: 0 none; }
	
	tr:nth-child(even){background-color: #f2f2f2}
	</style>
	
	<link rel="stylesheet" type="text/css" href="rules.css">
</head>

<body>
<?php
  include "backend/navbar/nav.php";
  ?>

  <div class="container">
    <div class="panel-group">
      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" href="#collapse1">
          <h4 class="panel-title">Account</h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse">
          <div class="panel-body">

		  
<?php
if($_SESSION['authority']==3){
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";

	$items = getItems();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>pid</th>
					<th>Account</th>
					<th>Password</td>
					<th>Authority</td>
					<th>Delete?</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[0]."</td>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
						<td>".$item[3]."</td>";
							
			echo "<td><a href='deleteitem.php?id=".$item[0]."'>Delete</a></td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	else
	{
		prepareAccount();
	}
?>

	<form action="additem.php" method="post">
		<table border="1">
			<tr>
				<td>Account: </td>
				<td><input name="account" type="text"/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input name="password" type="text"/></td>
			</tr>
		</table>
		<input type="submit" value="Add item"/>
	</form>
			  
		  </div>
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" href="#collapse2">
          <h4 class="panel-title">Resource</h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	#prepareResource();
	$items = getResources();
	/*for(int i = 0; i < 4; i++)
	{
		switch($items[i][0])
		{
			case "A": $items[i][0] = "美洲"; break;
			case "B": $items[i][0] = "歐洲"; break;
			case "C": $items[i][0] = "亞洲"; break;
			case "D": $items[i][0] = "非洲"; break;
			default: break;
		}
	}*/
	if(!empty($items))
	{
		echo "原料<br>";
		echo "<table border='1'>
				<tr>
					<th>Group:  </th>
					<th>魔法粉末:</th>
					<th>布:     </th>
					<th>紅寶石:  </th>
					<th>轉軸:    </th>
					<th>熊熊烈火:</th>
					<th>種子:    </th>
					<th>生命之水:</th>
					<th>神聖光芒:</th>
					<th>麻:     </th>
					<th>螺絲:    </th>
					<th>塑料:    </th>
					<th>十萬伏特:</th>
					<th>人體工學:</th>
					<th>想像力:  </th>
					<th>金屬:    </th>
					<th>大地氧氣:</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[0 ]."</td>
						<td>".$item[1 ]."</td>
						<td>".$item[2 ]."</td>
						<td>".$item[3 ]."</td>
						<td>".$item[4 ]."</td>
						<td>".$item[5 ]."</td>
						<td>".$item[6 ]."</td>
						<td>".$item[7 ]."</td>
						<td>".$item[8 ]."</td>
						<td>".$item[9]."</td>
						<td>".$item[10]."</td>
						<td>".$item[11]."</td>
						<td>".$item[12]."</td>
						<td>".$item[13]."</td>
						<td>".$item[14]."</td>
						<td>".$item[15]."</td>
						<td>".$item[16]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	if(!empty($items))
	{
		echo "零件<br>";
		echo "<table border='1'>
				<tr>
					<th>Group:  </th>
					<th>魔法石:  </th>
					<th>控制面板:</th>
					<th>座位:    </th>
					<th>方向盤:  </th>
					<th>繩子:    </th>
					<th>檜木:    </th>
					<th>螺旋槳:  </th>
					<th>門:     </th>
					<th>噴射器:  </th>
					<th>機艙:    </th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[0 ]."</td>
						<td>".$item[17]."</td>
						<td>".$item[18]."</td>
						<td>".$item[19]."</td>
						<td>".$item[20]."</td>
						<td>".$item[21]."</td>
						<td>".$item[22]."</td>
						<td>".$item[23]."</td>
						<td>".$item[24]."</td>
						<td>".$item[25]."</td>
						<td>".$item[26]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
	if(!empty($items))
	{
		echo "特殊原料<br>";
		echo "<table border='1'>
				<tr>
					<th>Group:  </th>
					<th>麋鹿:    </th>
					<th>S logo:  </th>
					<th>叫聲:    </th>
					<th>SD卡:   </th>
					<th>飛彈:    </th>
					<th>空姐:    </th>
					<th>LED燈:  </th>
					<th>交通工具:  </th>				
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[0 ]."</td>
						<td>".$item[27]."</td>
						<td>".$item[28]."</td>
						<td>".$item[29]."</td>
						<td>".$item[30]."</td>
						<td>".$item[31]."</td>
						<td>".$item[32]."</td>
						<td>".$item[33]."</td>
						<td>".$item[34]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

	<form action="backend/stronghold/updateResource.php" method="post">
		<table border="1">
			<tr>
				<td>Group: </td>
				<td>
					<select name="team"/>
						<option value="1">美國</option>
						<option value="2">加拿大</option>
						<option value="3">巴西</option>
						<option value="4">義大利</option>
						<option value="5">德國</option>
						<option value="6">英國</option>
						<option value="7">台灣</option>
						<option value="8">日本</option>
						<option value="9">泰國</option>
						<option value="10">南非</option>
						<option value="11">馬達加斯加</option>
						<option value="12">埃及</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Resource: </td>
				<td>
					<select name="resource"/>
								<optgroup label="原料">
									<option value="magic_powder">魔法粉末</option>
									<option value="cloth">布</option>
									<option value="ruby">紅寶石</option>
									<option value="shaft">轉軸</option>
									<option value="fire">熊熊烈火</option>
									<option value="seed">種子</option>
									<option value="water">生命之水</option>
									<option value="light">神聖光芒</option>
									<option value="flax">麻</option>
									<option value="screw">螺絲</option>
									<option value="plastic">塑料</option>
									<option value="electron">十萬伏特</option>
									<option value="ergonomic">人體工學</option>
									<option value="imagine">想像力</option>
									<option value="metal">金屬</option>
									<option value="air">大地氧氣</option>
								</optgroup>
								<optgroup label="零件">
									<option value="magic_stone">魔法石</option>
									<option value="control_panel">控制面板</option>
									<option value="seat">座位</option>
									<option value="wheel">方向盤</option>
									<option value="rope">繩子</option>
									<option value="cypress">檜木</option>
									<option value="propeller">螺旋槳</option>
									<option value="door">門</option>
									<option value="jet">噴射器</option>
									<option value="gun">機艙</option>
								</optgroup>
								<optgroup label="特殊材料">
									<option value="elk">麋鹿</option>
									<option value="s_logo">S Logo</option>
									<option value="sound">叫聲</option>
									<option value="sd_card">SD卡</option>
									<option value="missile">飛彈</option>
									<option value="miss_air">飛彈</option>
									<option value="led_light">LED燈</option>
								</optgroup>
								<optgroup label="交通工具">
									<option value="transportation">交通工具</option>
								</optgroup>
							</select>
				</td>
			</tr>
			<tr>
				<td>Value: </td>
				<td><input name="value" type="number"/></td>
			</tr>
		</table>
		<input type="submit" value="Change resource value"/>
	</form>

<!--
	<form action="addresource.php" method="post">
		<table border="1">
			<tr><td>Group:   </td><td><input name="team" type="text"/></td></tr>
			<tr><td>魔法粉末: </td><td><input name="magic_powder" type="number"/></td></tr>
			<tr><td>布:      </td><td><input name="cloth" type="number"/></td></tr>
			<tr><td>紅寶石:   </td><td><input name="ruby" type="number"/></td></tr>
			<tr><td>轉軸:     </td><td><input name="shaft" type="number"/></td></tr>
			<tr><td>熊熊烈火: </td><td><input name="fire" type="number"/></td></tr>
			<tr><td>種子:     </td><td><input name="seed" type="number"/></td></tr>
			<tr><td>生命之水: </td><td><input name="water" type="number"/></td></tr>
			<tr><td>神聖光芒: </td><td><input name="light" type="number"/></td></tr>
			<tr><td>麻:      </td><td><input name="flax" type="number"/></td></tr>
			<tr><td>螺絲:    </td><td><input name="screw" type="number"/></td></tr>
			<tr><td>塑料:    </td><td><input name="plastic" type="number"/></td></tr>
			<tr><td>十萬伏特: </td><td><input name="electron" type="number"/></td></tr>
			<tr><td>人體工學: </td><td><input name="ergonomic" type="number"/></td></tr>
			<tr><td>想像力:   </td><td><input name="imagine" type="number"/></td></tr>
			<tr><td>金屬:     </td><td><input name="metal" type="number"/></td></tr>
			<tr><td>大地氧氣: </td><td><input name="air" type="number"/></td></tr>
			<tr><td>魔法石:   </td><td><input name="magic_stone" type="number"/></td></tr>
			<tr><td>控制面板: </td><td><input name="control_panel" type="number"/></td></tr>
			<tr><td>座位:    </td><td><input name="seat" type="number"/></td></tr>
			<tr><td>方向盤:   </td><td><input name="wheel" type="number"/></td></tr>
			<tr><td>繩子:    </td><td><input name="rope" type="number"/></td></tr>
			<tr><td>檜木:    </td><td><input name="cypress" type="number"/></td></tr>
			<tr><td>螺旋槳:   </td><td><input name="propeller" type="number"/></td></tr>
			<tr><td>門:      </td><td><input name="door" type="number"/></td></tr>
			<tr><td>噴射器:   </td><td><input name="jet" type="number"/></td></tr>
			<tr><td>機艙:     </td><td><input name="gun" type="number"/></td></tr>
			<tr><td>麋鹿:     </td><td><input name="elk" type="number"/></td></tr>
			<tr><td>叫聲:    </td><td><input name="sound" type="number"/></td></tr>
			<tr><td>SD卡:    </td><td><input name="sd_card" type="number"/></td></tr>
			<tr><td>飛彈:    </td><td><input name="missile" type="number"/></td></tr>
			<tr><td>空姐:    </td><td><input name="miss_air" type="number"/></td></tr>
			<tr><td>LED燈:   </td><td><input name="led_light" type="number"/></td></tr>
		</table>
		<input type="submit" value="Add resource"/>
	</form>
-->
		  
          </div>
        </div>
      </div>

      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" href="#collapse3">
          <h4 class="panel-title">Message</h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">	

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getMessages();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Time</th>
					<th>Client</td>
					<th>Color</td>
					<th>Message</td>
					<th>Delete?</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
						<td>".$item[4]."</td>
						<td>".$item[3]."</td>";
							
			echo "<td><a href='deletemessage.php?id=".$item[0]."'>Delete</a></td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>
	
	<form action="addmessage.php" method="post">
		<table border="1">
			<tr>
				<td>Time: </td>
				<td><input name="time" type="text"/></td>
			</tr>
			<tr>
				<td>client: </td>
				<td>
					<select name="client"/>
						<option value="A">美洲</option>
						<option value="B">歐洲</option>
						<option value="C">亞洲</option>
						<option value="D">非洲</option>
						<option value="All">All</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Message: </td>
				<td><textarea name="content" rows="4" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Color: </td>
				<td>
					<select name="color"/>
						<option value="black">黑色</option>
						<option value="blue">藍色</option>
						<option value="red">紅色</option>
					</select>
				</td>
			</tr>
		</table>
		<input type="submit" value="Add message"/>
	</form>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getGMMessages();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Time</th>
					<th>Client</td>
					<th>Color</td>
					<th>Message</td>
					<th>Delete?</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
						<td>".$item[4]."</td>
						<td>".$item[3]."</td>";
							
			echo "<td><a href='deleteGMmessage.php?id=".$item[0]."'>Delete</a></td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getTempMessages();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Client</td>
					<th>Message</td>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>
	
          </div>
        </div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" href="#collapse4">
          <h4 class="panel-title">Stronghold</h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">

	<form action="createStronghold.php" method="post">
		<input type="submit" value="Create Stronghold Table"/>
	</form>
	
<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	#prepareStronghold();
	$items = getStrongholds();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Nnumber:  </th>
					<th>Name:  </th>
					<th>產生:</th>
					<th>產生量:     </th>
					<th>產生物:  </th>
					<th>產生時間:    </th>
					<th>佔領隊伍:</th>
					<th>Mission Code:    </th>
					<th>最高紀錄:    </th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1 ]."</td>
						<td>".$item[2 ]."</td>
						<td>".$item[3 ]."</td>
						<td>".$item[4 ]."</td>
						<td>".$item[5 ]."</td>
						<td>".$item[6 ]."</td>
						<td>".$item[7 ]."</td>
						<td>".$item[8 ]."</td>
						<td>".$item[9 ]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

          </div>
        </div>
      </div>

	  <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" href="#collapse5">
          <h4 class="panel-title">Mission</h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body">	
		  
	<form action="createMission.php" method="post">
		<input type="submit" value="Create Mission Table"/>
	</form>
	
<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	#prepareStronghold();
	$items = getMissions();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Code:	</th>
					<th>主題:	</th>
					<th>內容:									</th>
					<th>任務人數:	</th>
					<th>Day1條件:	</th>
					<th>Day2條件:	</th>
					<th>Day3條件:	</th>
					<th>Day4條件:	</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1 ]."</td>
						<td>".$item[2 ]."</td>
						<td>".$item[3 ]."</td>
						<td>".$item[4 ]."</td>
						<td>".$item[5 ]."</td>
						<td>".$item[6 ]."</td>
						<td>".$item[7 ]."</td>
						<td>".$item[8 ]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>
	
          </div>
        </div>
      </div>

      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" href="#collapse6">
          <h4 class="panel-title">Time Table</h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getTimes();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>據點:  </th>
					<th>需要的時間:  </th>
					<th>現在的時間:  </th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1 ]."</td>
						<td>".$item[2 ]."</td>
						<td>".$item[3 ]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getRead();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>新訊息:  </th>
				</tr>";
			echo 	"<tr>
						<td>".$items[1][0]."</td>";
			echo "</tr>";
		
		echo "</table>";
	}
?>

<script type="text/javascript">
function GetTime(){
	var d=new Date();
	var nsec=d.getSeconds();
	if(nsec==0){
		// place to trigger php
	}
	document.getElementById('clockbox').innerHTML=nsec;
}
window.onload=function(){
	GetTime();
	setInterval(GetTime, 1000);
}
</script>
<div id="clockbox"></div>

	<a href="auto_add.php" target=_new>自動加時頁面</a>
	<a href="auto_reset.php" target=_new>Reset time</a>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getDay();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Day:</th>
				</tr>";
		foreach($items as $item)
		{
			echo "<tr>
						<td>".$item[0 ]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

          </div>
        </div>
      </div>

	  <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" href="#collapse7">
          <h4 class="panel-title">SQL</h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
          <div class="panel-body">	
		  
	<form action="usesqlcode.php" method="post">
		<table border="1">
			<tr>
				<td>SQL: </td>
				<td><textarea name="sql" rows="4" cols="40"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="Send SQL"/>
	</form>
	<br>reference:<br>
	UPDATE resource SET magic_powder='0', cloth='0', ruby='0', shaft='0', fire='0', seed='0', water='0', light='0', flax='0', screw='0', plastic='0', electron='0', ergonomic='0', imagine='0', metal='0', air='0', magic_stone='0', control_panel='0', seat='0', wheel='0', rope='0', cypress='0', propeller='0', door='0', jet='0', gun='0', elk='0', sound='0', sd_card='0', missile='0', miss_air='0', led_light='0', s_logo='0'<br>
	UPDATE stronghold SET team='0', highest_score='0'<br>
	UPDATE resource SET ? = ? + 1 WHERE team = '?' <br>
          </div>
        </div>
      </div>
      </div>
	</div>
<?php
}
else{
	echo "<script> alert('您無權觀看此頁面喔')</script>";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- Navbar Dropdown -->
	<script src="js/nav.js"></script>
</body>
</html>
