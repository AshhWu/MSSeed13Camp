<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 據點地圖</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="map.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

  <!-- Map -->
  <div class="container map">
    <!-- Map picture -->
    <img src="png/s_map/map_day.gif" class="img-responsive" id="map-picture"/>
    <!-- 天使的眼淚/巧拼渡河 -->
    <a class="stronghold" id="icon1" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="天使的眼淚" data-content="佔領陣營：美國<br />
      生產材料：生命之水（9個／2mins）<br />
      佔領條件：8人，需包含：<br />
      1. 170公分以上x3 + 155公分以下x2<br />
      2. 捲髮女生x3 + 直髮女生x2<br />
      3. 戴手鍊x2 + 戴手錶x4<br />
      4. 單眼皮x3 + 雙眼皮x3<br />
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 神仙山莊/撲克牌好手-->
    <a class="stronghold" id="icon2" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="神仙山莊" data-content="佔領陣營：美國<br />
      生產材料：神聖光芒（18個／3mins）<br />
      佔領條件：4人，需包含：<br />
      1. 1男3女<br />
      2. 170公分以上x4<br />
      3. 戴眼鏡x4<br />
      4. 頭髮過肩x4
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 霍格華茲學院/灌籃高手-->
    <a class="stronghold" id="icon3" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="霍格華茲學院" data-content="佔領陣營：美國<br />
      生產材料：魔法粉末（9個／1min）<br />
      佔領條件：6人，需包含：<br />
      1. 165以下x4<br />
      2. 戴眼鏡x4<br />
      3. 拿IPHONEx5<br />
      4. 反手可摸到肚臍x2
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 布布恰恰/乒乓傳情 -->
    <a class="stronghold" id="icon4" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="布布恰恰" data-content="佔領陣營：美國<br />
      生產材料：布（18個／3mins）<br />
      佔領條件：3人，需包含：<br />
      1. 耳垂連起來x1<br />
      2. 有瀏海x3<br />
      3. RDAAx2<br />
      4. 紮衣服x3
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 精靈的礦坑/Flip-Flop -->
    <a class="stronghold" id="icon5" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="精靈的礦坑" data-content="佔領陣營：美國<br />
      生產材料：紅寶石（6個／5mins）<br />
      佔領條件：6人，需包含：<br />
      1. 3男3女<br />
      2. SAAx3+AAx2+MAAx1<br />
      3. 穿黑襪x2<br />
      4. 鞋子有藍色x3
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- Brandon工坊/呼啦抓小雞 -->
    <a class="stronghold" id="icon6" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="Brandon工坊" data-content="佔領陣營：美國<br />
      生產材料：轉軸（6個／3mins）<br />
      佔領條件：一隊5人，需包含：<br />
      1. 外雙眼皮x2<br />
      2. 穿帆布鞋x1+擦唇膏x1<br />
      3. 175以上x1<br />
      4. 有白頭髮x2
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_green.png" class="img-responsive map-marker-green">
    </a>
    <!-- 烈焰火山/頭好撞撞 -->
    <a class="stronghold" id="icon7" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="烈焰火山" data-content="佔領陣營：美國<br />
      生產材料：熊熊烈火（12個／1min）<br />
      佔領條件：一隊12人，需包含：<br />
      1. 穿耳洞x4<br />
      2. 沒瀏海x6<br />
      3. 單眼皮x4<br />
      4. 用安卓的x8
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_green.png" class="img-responsive map-marker-green">
    </a>
    <!-- 迷幻森林/打水漂 -->
    <a class="stronghold" id="icon8" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="迷幻森林" data-content="佔領陣營：美國<br />
      生產材料：種子（3個／2mins）<br />
      佔領條件：4人，需包含：<br />
      1. 3男1女<br />
      2. 170公分以下男生x2<br />
      3. 穿全白素Tx2<br />
      4. 拳頭可放進嘴巴裡x1
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 陽光田園/斷開魂結 -->
    <a class="stronghold" id="icon9" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="陽光田園" data-content="佔領陣營：美國<br />
      生產材料：麻（12個／2mins）<br />
      佔領條件：12人，需包含：<br />
      1. 6男6女<br />
      2. 穿白鞋x5<br />
      3. 染頭髮x6<br />
      4. 單眼皮x5
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- Steven加工廠/拍拍羽毛球 -->
    <a class="stronghold" id="icon10" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="Steven加工廠" data-content="佔領陣營：美國<br />
      生產材料：螺絲（12個／1min）<br />
      佔領條件：一隊4人，需包含：<br />
      1. 2男2女<br />
      2. 有黑眼圈x4<br />
      3. 穿長襪x3<br />
      4. 染頭髮x2
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_green.png" class="img-responsive map-marker-green">
    </a>
    <!-- 統一二山/比手畫腳 -->
    <a class="stronghold" id="icon11" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="統一二山" data-content="佔領陣營：美國<br />
      生產材料：塑料（18個／3mins）<br />
      佔領條件：6人，需包含：<br />
      1. 穿長襪x5<br />
      2. 綁頭髮女生x3 + 沒瀏海男生x1 + 有瀏海男生x2<br />
      3. 穿NIKE鞋x2 + 穿ADIDASx2<br />
      4. 165公分以下x3
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 皮卡丘發電廠/翻轉地面-->
    <a class="stronghold" id="icon12" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="皮卡丘發電廠" data-content="佔領陣營：美國<br />
      生產材料：十萬伏特（6個／1min）<br />
      佔領條件：4人，需包含：<br />
      1. 4女<br />
      2. 2女1男<br />
      3. 1女2男<br />
      4. 2女2男
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 德克斯特的實驗室/平衡感王-->
    <a class="stronghold" id="icon13" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="德克斯特的實驗室" data-content="佔領陣營：美國<br />
      生產材料：人體工學（9個／5mins）<br />
      佔領條件：6人，需包含：<br />
      1. 穿NewBalancex1+臉上有痣x3<br />
      2. 穿黑色褲子x3+戴眼鏡x2<br />
      3. 臉上有痘痘x3<br />
      4. 長頭髮x1+短頭髮x4
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 彩虹獅動物園/一路橡吸-->
    <a class="stronghold" id="icon14" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="彩虹獅動物園" data-content="佔領陣營：美國<br />
      生產材料：想像力（12個／1min）<br />
      佔領條件：8人，需包含：<br />
      1. 4男4女<br />
      2. 穿牛仔褲x5<br />
      3. 有畫眉毛x3<br />
      4. 臉上有2顆痣x2 + 有戴手錶x2
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
    </a>
    <!-- 鍊金小木屋/金雞獨立-->
    <a class="stronghold" id="icon15" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="鍊金小木屋" data-content="佔領陣營：美國<br />
      生產材料：金屬（9個／1min）<br />
      佔領條件：一隊5人，需包含：<br />
      1. 3男2女<br />
      2. 有鬍子x2+有腳毛x2<br />
      3. 有玩POKEMON GOx4<br />
      4. 中分x4
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_green.png" class="img-responsive map-marker-green">
    </a>
    <!-- 千年神木/甩便利貼-->
    <a class="stronghold" id="icon16" href="#" data-toggle="popover" data-trigger="hover focus" data-placement="auto" title="千年神木" data-content="佔領陣營：美國<br />
      生產材料：大地氧氣（9個／2mins）<br />
      佔領條件：6人，需包含：<br />
      1. 穿短褲x5<br />
      2. 穿耳洞x3<br />
      3. 瀏海在眉毛上x2<br />
      4. 鞋子有紅色x2
      <div class='text-right'><button type='button' class='btn btn-warning btn-xs'>我要佔領</button><div>">
      <img src="png/s_map/mark/mark_red.png" class="img-responsive map-marker-red">
      </a>
    </div>

    <!-- Materials Summary -->
    <section class="container">
      <div class="row">
        <div class="material-result col-sm-6">
        </div>
      </div>  
    </section>



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="map.js"></script>

</body>
</html>
