<?php  
session_start();
require_once "taskmodel.php";
$day = getAllDay();
if (!empty($day)) { $_SESSION["day"] = $day[0][0]; }
else { $_SESSION["day"] = 1; }
?>

<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 據點地圖</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=1.0, maximum-scale=2.0" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="css/map.css">
  <!--<link rel="stylesheet" type="text/css" href="css/rain_map.css">-->
  <?php 
  if ($_SESSION["day"] == 1 || $_SESSION["day"] == 3) { echo '<style>body {background-color: #e3b029;}</style>'; }
  else { echo '<style>body {background-color: #572105;}</style>'; }
  ?>
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

  <!-- Map -->
  <div class="container map">
    <!-- Map picture (According to Day) -->
    <?php  
    if ($_SESSION["day"] == 1 || $_SESSION["day"] == 3) { echo '<img src="png/s_map/map_day.gif" class="img-responsive" id="map-picture"/>'; }
    else { echo '<img src="png/s_map/map_night.gif" class="img-responsive" id="map-picture"/>'; }
    ?>
    
    <!-- 天使的眼淚/巧拼渡河 -->
    <a class="stronghold" id="icon1" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="天使的眼淚" data-content="佔領陣營：
      <?php  
      require_once "getitems.php";
      $team = getOccupyTeam();
      if(!empty($team)) { echo $team[6][0]; }
      ?><br />
      生產材料：生命之水（9個／2mins）<br />
      佔領條件：8人，需包含：<br />
      <?php 
      $condition = getMissionCondition($_SESSION['day']);
      if (!empty($condition)) { echo $condition[6][0]; }
      ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[6][0]); ?>
    </a>
    <!-- 神仙山莊/撲克牌好手-->
    <a class="stronghold" id="icon2" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="神仙山莊" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[7][0]; } ?><br />
      生產材料：神聖光芒（18個／3mins）<br />
      佔領條件：4人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[7][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[7][0]); ?>
    </a>
    <!-- 霍格華茲學院/灌籃高手-->
    <a class="stronghold" id="icon3" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="霍格華茲學院" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[0][0]; } ?><br />
      生產材料：魔法粉末（9個／1min）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[0][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[0][0]); ?>
    </a>
    <!-- 霍格華茲學院/喝水唱歌
    <a class="stronghold" id="icon3" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="霍格華茲學院" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[0][0]; } ?><br />
      生產材料：魔法粉末（9個／1min）<br />
      佔領條件：8人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[16][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[16][0]); ?>
    </a>-->
    <!-- 布布恰恰/乒乓傳情 -->
    <a class="stronghold" id="icon4" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="布布恰恰" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[1][0]; } ?><br />
      生產材料：布（18個／3mins）<br />
      佔領條件：3人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[1][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[1][0]); ?>
    </a>
    <!-- 精靈的礦坑/Flip-Flop -->
    <a class="stronghold" id="icon5" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="精靈的礦坑" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[2][0]; } ?><br />
      生產材料：紅寶石（6個／5mins）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[2][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[2][0]); ?>
    </a>
    <!-- Brandon工坊/呼啦抓小雞 -->
    <a class="stronghold" id="icon6" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="Brandon工坊（PK）" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[3][0]; } ?><br />
      生產材料：轉軸（6個／3mins）<br />
      佔領條件：一隊5人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[3][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[3][0]); ?>
    </a>
    <!-- 烈焰火山/頭好撞撞 -->
    <a class="stronghold" id="icon7" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="烈焰火山（PK）" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[4][0]; } ?><br />
      生產材料：熊熊烈火（12個／1min）<br />
      佔領條件：一隊12人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[4][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[4][0]); ?>
    </a>
    <!-- 迷幻森林/打水漂 -->
    <a class="stronghold" id="icon8" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="迷幻森林" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[5][0]; } ?><br />
      生產材料：種子（3個／2mins）<br />
      佔領條件：4人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[5][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[5][0]); ?>
    </a>
    <!-- 迷幻森林/天旋地轉
    <a class="stronghold" id="icon8" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="迷幻森林" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[5][0]; } ?><br />
      生產材料：種子（3個／2mins）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[17][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[17][0]); ?>
    </a>-->
    <!-- 陽光田園/斷開魂結 -->
    <a class="stronghold" id="icon9" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="陽光田園" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[8][0]; } ?><br />
      生產材料：麻（12個／2mins）<br />
      佔領條件：12人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[8][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[8][0]); ?>
    </a>
    <!-- Steven加工廠/拍拍羽毛球 -->
    <a class="stronghold" id="icon10" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="Steven加工廠（PK）" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[9][0]; } ?><br />
      生產材料：螺絲（12個／1min）<br />
      佔領條件：一隊4人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[9][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[9][0]); ?>
    </a>
    <!-- 統一二山/比手畫腳 -->
    <a class="stronghold" id="icon11" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="統一二山" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[10][0]; } ?><br />
      生產材料：塑料（18個／3mins）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[10][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[10][0]); ?>
    </a>
    <!-- 皮卡丘發電廠/翻轉地面-->
    <a class="stronghold" id="icon12" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="皮卡丘發電廠" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[11][0]; } ?><br />
      生產材料：十萬伏特（6個／1min）<br />
      佔領條件：4人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[11][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[11][0]); ?>
    </a>
    <!-- 德克斯特的實驗室/平衡感王-->
    <a class="stronghold" id="icon13" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="德克斯特的實驗室" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[12][0]; } ?><br />
      生產材料：人體工學（9個／5mins）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[12][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[12][0]); ?>
    </a>
    <!-- 彩虹獅動物園/一路橡吸-->
    <a class="stronghold" id="icon14" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="彩虹獅動物園" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[13][0]; } ?><br />
      生產材料：想像力（12個／1min）<br />
      佔領條件：8人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[13][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[13][0]); ?>
    </a>
    <!-- 鍊金小木屋/金雞獨立-->
    <a class="stronghold" id="icon15" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="鍊金小木屋（PK）" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[14][0]; } ?><br />
      生產材料：金屬（9個／1min）<br />
      佔領條件：一隊5人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[14][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[14][0]); ?>
    </a>
    <!-- 千年神木/甩便利貼-->
    <a class="stronghold" id="icon16" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="千年神木" data-content="佔領陣營：<?php if(!empty($team)) { echo $team[15][0]; } ?><br />
      生產材料：大地氧氣（9個／2mins）<br />
      佔領條件：6人，需包含：<br />
      <?php if (!empty($condition)) { echo $condition[15][0]; } ?><br />
      <div class='text-right'><a href='missionPage.php' class='btn btn-warning btn-xs' role='button'>我要佔領</a><div>">
      <?php getStrongholdColor($team[15][0]); ?>
    </a>
   
    <!-- 監獄-->
    <a class="stronghold" id="icon17" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="監獄" data-content="快來拯救被苦力怕抓走的隊友吧！">
      <img src="png/s_map/mark/mark_brown.png" class="img-responsive map-marker-brown">
    </a>
  </div>



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>
<script src="js/map.js"></script>

</body>
</html>
