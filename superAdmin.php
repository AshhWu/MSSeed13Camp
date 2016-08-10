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
</head>

<body>
<?php
  include "nav.php";
  ?>
	<h1>Account</h1>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getItems();
	if(!empty($items))
	{
		echo "<table border='1'>
				<tr>
					<th>Account</th>
					<th>Password</td>
					<th>Delete?</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>";
							
			echo "<td><a href='deleteitem.php?id=".$item[0]."'>Delete</a></td>";
			echo "</tr>";
		}
		
		echo "</table>";
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
	<hr/>	
	<h1>Resource</h1>

<?php
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	#prepareResource();
	$items = getResources();
	if(!empty($items))
	{
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
					<th>麋鹿:    </th>
					<th>叫聲:    </th>
					<th>SD卡:   </th>
					<th>飛彈:    </th>
					<th>空姐:    </th>
					<th>LED燈:  </th>
					<th></th>
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
						<td>".$item[9 ]."</td>
						<td>".$item[10]."</td>
						<td>".$item[11]."</td>
						<td>".$item[12]."</td>
						<td>".$item[13]."</td>
						<td>".$item[14]."</td>
						<td>".$item[15]."</td>
						<td>".$item[16]."</td>
						<td>".$item[17]."</td>
						<td>".$item[18]."</td>
						<td>".$item[19]."</td>
						<td>".$item[20]."</td>
						<td>".$item[21]."</td>
						<td>".$item[22]."</td>
						<td>".$item[23]."</td>
						<td>".$item[24]."</td>
						<td>".$item[25]."</td>
						<td>".$item[26]."</td>
						<td>".$item[27]."</td>
						<td>".$item[28]."</td>
						<td>".$item[29]."</td>
						<td>".$item[30]."</td>
						<td>".$item[31]."</td>
						<td>".$item[32]."</td>
						<td>".$item[33]."</td>";
			echo "</tr>";
		}
		
		echo "</table>";
	}
?>

	<form action="updateresource.php" method="post">
		<table border="1">
			<tr>
				<td>Group: </td>
				<td>
					<select name="name"/>
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Resource: </td>
				<td>
					<select name="source"/>
						<option value="wood">Wood</option>
						<option value="gold">Gold</option>
						<option value="water">Water</option>
						<option value="fire">Fire</option>
						<option value="steel">Steel</option>
						<option value="magic">Magic</option>
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

	<hr/>
	
	<h1>Message</h1>

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
					<th>Message</td>
					<th>Delete?</th>
				</tr>";
		foreach($items as $item)
		{
			echo 	"<tr>
						<td>".$item[1]."</td>
						<td>".$item[2]."</td>
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
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="All">All</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Message: </td>
				<td><textarea name="content" rows="4" cols="40"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="Add message"/>
	</form>
	
	<hr/>

	<h1>Stronghold</h1>
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

	<hr/>

	<h1>Mission</h1>
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
	
	<hr/>
	<h1>Time Table</h1>
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

	<hr/>

	<h1>SQL</h1>
	<form action="usesqlcode.php" method="post">
		<table border="1">
			<tr>
				<td>SQL: </td>
				<td><textarea name="sql" rows="4" cols="40"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="Send SQL"/>
	</form>


	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>