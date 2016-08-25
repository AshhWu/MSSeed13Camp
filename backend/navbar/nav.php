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
		<a class="navbar-brand" href="#">微軟13屆領袖營</a>
		</div>
		<!-- Message alert -->
		<div style="text-align:center; color:red;"><h3>您有新訊息</h3></div>
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
				<li><a href="#">求助中心</a></li> 
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("map")?>><a href="map.php">據點地圖</a></li>
				<li <?=findActiveClass("rules")?>><a href="rules.php">遊戲規則</a></li>
				<li <?=findActiveClass("missionPage.php")?>><a href="missionPage.php">遊戲關卡</a></li>
				<li <?=findActiveClass("material")?>><a href="material.php">材料表</a></li>
				<li <?=findActiveClass("messagePage")?>><a href="messagePage.php">消息公告</a></li>  
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
		<a class="navbar-brand" href="#">微軟13屆領袖營</a>
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
				<li><a href="#">求助中心</a></li> 
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("map")?>><a href="map.php">據點地圖</a></li>
				<li <?=findActiveClass("rules")?>><a href="rules.php">遊戲規則</a></li>
				<li <?=findActiveClass("missionPage.php")?>><a href="missionPage.php">遊戲關卡</a></li>
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
		<a class="navbar-brand" href="#">微軟13屆領袖營</a>
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
				<li><a href="#">求助中心</a></li> 
				<li <?=findActiveClass("t_taipeiAdmin")?>><a href="t_taipeiAdmin.php">台北行管理員</a></li>
			</ul>
			</li>
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown">據點戰 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li <?=findActiveClass("map")?>><a href="map.php">據點地圖</a></li>
				<li <?=findActiveClass("rules")?>><a href="rules.php">遊戲規則</a></li>
				<li <?=findActiveClass("missionPage.php")?>><a href="missionPage.php">遊戲關卡</a></li>
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