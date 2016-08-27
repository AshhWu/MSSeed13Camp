<!-- Include -->
<?php
include "findActiveClass.php";

switch($_SESSION['authority']){
	case '1':
?>
	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Website Name -->
		
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		
		<!-- Message alert -->
		<a class="navbar-brand" href="#">微軟13屆領袖營</a>
		</div>
		<!-- Navigation Bar Items -->
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li <?=findActiveClass("index")?>><a href="index.php">首頁</a></li> <!-- use findActiveClass to toggle current page-->
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">台北行 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">已結束</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">尚未開放</a></li> 
			</ul>
			</li>
			<li><a href="/backend/login/logout.php" class="logout-btn"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
		</ul>
		</div>
	</div>
	</nav>
<?php
	break;
	case '2':
?>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Website Name -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- Message alert -->		
		<div class="navbar-brand">微軟13屆領袖營
<?php
	header('Cache-Control: no-store, must-revalidate, no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getRead();
	$team = $_SESSION['s_team'];
	switch($team){
		case 'A':
			if($items[0][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'B':
			if($items[1][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'C':
			if($items[2][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'D':
			if($items[3][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
	}
?>
		</div>
		</div>
		<!-- Navigation Bar Items -->
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li <?=findActiveClass("index")?>><a href="index.php">首頁</a></li> <!-- use findActiveClass to toggle current page-->
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">台北行 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("t_mission1")?>><a href="t_missionJudge.php?mission=1">龍山寺</a></li>
				<li <?=findActiveClass("t_mission2")?>><a href="t_missionJudge.php?mission=2">松山</a></li>
				<li <?=findActiveClass("t_mission3")?>><a href="t_missionJudge.php?mission=3">忠孝新生</a></li>
				<li <?=findActiveClass("t_mission4")?>><a href="t_missionJudge.php?mission=4">國父紀念館</a></li>
				<li <?=findActiveClass("t_mission5")?>><a href="t_missionJudge.php?mission=5">圓山</a></li>
				<li <?=findActiveClass("t_mission6")?>><a href="t_missionJudge.php?mission=6">市政府</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("map")?>><a href="map.php">據點地圖</a></li>
				<li <?=findActiveClass("rules")?>><a href="rules.php">遊戲規則</a></li>
				<li <?=findActiveClass("missionPage.php")?>><a href="missionPage.php">據點關卡</a></li>
				<li <?=findActiveClass("material")?>><a href="material.php">材料表</a></li>
				<li <?=findActiveClass("messagePage")?>><a href="messagePage.php">消息公告</a></li>  
				<li <?=findActiveClass("reportPage")?>><a href="reportPage.php">回報成果</a></li>  
			</ul>
			</li>
			<li><a href="/backend/login/logout.php" class="logout-btn"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
		</ul>
		</div>
	</div>
	</nav>
<?php
	break;
	case '3':
?>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Website Name -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<!-- Message alert -->
		<div class="navbar-brand">微軟13屆領袖營
<?php
	header('Cache-Control: no-store, must-revalidate, no-cache');
	header('Pragma: no-cache');
	require_once "getitems.php";
	$items = getRead();
	$team = $_SESSION['s_team'];
	switch($team){
		case 'A':
			if($items[0][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'B':
			if($items[1][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'C':
			if($items[2][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
		case 'D':
			if($items[3][1] == '1')
			{
				echo '<a href="messagePage.php"><span class="glyphicon glyphicon-warning-sign" style="color:red"></span></a>';
			}
			break;
	}
?>
		</div>
		</div>
		<!-- Navigation Bar Items -->
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li <?=findActiveClass("index")?>><a href="index.php">首頁</a></li> <!-- use findActiveClass to toggle current page-->
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">台北行 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("t_mrtmap")?>><a href="t_mrtmap.php">移動迷宮</a></li>
				<li <?=findActiveClass("t_missionDetail")?>><a href="t_missionDetail.php">任務資訊</a></li>
				<li <?=findActiveClass("t_missionHint")?>><a href="t_missionHint.php">圖片提示</a></li>
				<li <?=findActiveClass("t_lego_list")?>><a href="t_lego_list.php">樂高交易</a></li>
				<li <?=findActiveClass("t_helpCenter")?>><a href="t_helpCenter.php">求助中心</a></li>
				<li <?=findActiveClass("t_taipeiAdmin")?>><a href="t_taipeiAdmin.php">台北行管理員</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("map")?>><a href="map.php">據點地圖</a></li>
				<li <?=findActiveClass("rules")?>><a href="rules.php">遊戲規則</a></li>
				<li <?=findActiveClass("missionPage.php")?>><a href="missionPage.php">據點關卡</a></li>
				<li <?=findActiveClass("material")?>><a href="material.php">材料表</a></li>
				<li <?=findActiveClass("messagePage")?>><a href="messagePage.php">消息公告</a></li>  
				<li <?=findActiveClass("reportPage")?>><a href="reportPage.php">回報成果</a></li>  
				<li <?=findActiveClass("superAdmin")?>><a href="superAdmin.php">超級管理員</a></li>  
			</ul>
			</li>
			<li><a href="/backend/login/logout.php" class="logout-btn"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
		</ul>
		</div>
	</div>
	</nav>
<?php
	break;
	default:
?>

	<!-- Navigation Bar -->
	<nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Website Name -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">微軟13屆領袖營</a>
		</div>
		<!-- Navigation Bar Items -->
		<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav navbar-right">
			<li <?=findActiveClass("index")?>><a href="index.php">首頁</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
		</ul>
		</div>
	</div>
	</nav>
<?php
}
?>
