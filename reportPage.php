<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<!-- Title -->
<title>回報成果</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="#">
</head>

<body>
<?php
  include "backend/navbar/nav.php";
if($_SESSION['authority']==2 || $_SESSION['authority']==3){
	$team = $_SESSION['s_team'];
  ?>
  
<div style="text-align:center">
	<h1>Report</h1><br>
	<p style="text-align: center;">
		<form action="occupyStronghold.php" method="post">
		<center>
			<table border="1">
				<tr>
					<td>Team: </td>
					<td>
						<select name="team">
<?php
	switch($team){
		case 'A':
				echo '<option selected value="A">美洲</option>';
				echo '<option value="B">歐洲</option>';
				echo '<option value="C">亞洲</option>';
				echo '<option value="D">非洲</option>';
		case 'B':
				echo '<option value="A">美洲</option>';
				echo '<option selected value="B">歐洲</option>';
				echo '<option value="C">亞洲</option>';
				echo '<option value="D">非洲</option>';
		case 'C':
				echo '<option value="A">美洲</option>';
				echo '<option value="B">歐洲</option>';
				echo '<option selected value="C">亞洲</option>';
				echo '<option value="D">非洲</option>';
		case 'D':
				echo '<option value="A">美洲</option>';
				echo '<option value="B">歐洲</option>';
				echo '<option value="C">亞洲</option>';
				echo '<option selected value="D">非洲</option>';
	}
?>
						</select>
					</td>
				</tr>
				<tr>
					<td>完成任務: </td>
					<td>
						<select name="code"/>
							<option value="YEyKd">YEyKd 灌籃高手</option>
							<option value="DWVw4">DWVw4 乒乓傳情</option>
							<option value="soDJ3">soDJ3 Flip-Flop</option>
							<option value="GJPzb">GJPzb 呼啦抓小雞</option>
							<option value="lJAfD">lJAfD 頭好撞撞</option>
							<option value="SZ1yG">SZ1yG 打水瓢</option>
							<option value="y997V">y997V 巧拼渡河</option>
							<option value="X02aw">X02aw 撲克牌好手</option>
							<option value="Glsx3">Glsx3 斷開魂結</option>
							<option value="YNbMr">YNbMr 拍拍羽毛球</option>
							<option value="KeQW2">KeQW2 比手畫腳</option>
							<option value="vNUEM">vNUEM 翻轉地面</option>
							<option value="5swuv">5swuv 平衡感王</option>
							<option value="Ao2pa">Ao2pa 一路橡吸</option>
							<option value="uIBpt">uIBpt 金雞獨立</option>
							<option value="Ow3vC">Ow3vC 甩便利貼</option>
					<!--	<option value="SZ1yG">iVw1L 喝水唱歌</option>
							<option value="YEyKd">ol7wr 天旋地轉</option>		-->
						</select>
					</td>
				</tr>
				<tr>
					<td>紀錄: </td>
					<td><input name="record" type="text"/></td>
				</tr>
			</table>
			</center>
					<input type="submit" value="佔領據點"/>
			</form>
	</p>
	<p style="text-align: center;">
		<form action="addTempmessage.php" method="post">
		<center>
			<table border="1">
				<tr>
					<td>Team: </td>
					<td>
						<select name="team"/>
							<option value="A">美洲</option>
							<option value="B">歐洲</option>
							<option value="C">亞洲</option>
							<option value="D">非洲</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Message: </td>
					<td><textarea name="content" rows="4" cols="40">ex. 魔法粉末 + 100</textarea></td>
				</tr>
			</table>
			</center>
					<input type="submit" value="臨時任務回報"/>
			</form>
	</p>
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
