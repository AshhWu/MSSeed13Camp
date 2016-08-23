<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 遊戲規則</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="css/rules.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "backend/navbar/nav.php";
  ?>

  <!-- Rules -->
  <div class="container">
    <div class="panel-group" id="accordion">
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          <h4 class="panel-title">遊戲目標</h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">解開探險者日記裡的謎題，判斷出屬於自己國家的交通工具，並攻佔部落收集足夠的材料製作交通工具。</div>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <h4 class="panel-title">時間週期</h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">在Minecraft裡，每45分鐘為一天，前20分鐘是白天，後25分鐘是黑夜。</div>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          <h4 class="panel-title">交通工具</h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">交通工具由原料與零件組成，原料可透過佔領部落或緊急任務獲得，零件可透過原料合成。</div>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          <h4 class="panel-title">探險者的謎題</h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">解開「探險者的日記」裡的謎題可以獲得線索，藉由這些線索可以推測出自己國家應製作的交通工具！</br>然而有些線索卻不一定是正確的……</div>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          <h4 class="panel-title">佔領部落</h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">地圖上共有16個部落，每個部落都有佔領條件，條件一天會更動一次，各個陣營必須派出符合該條件的隊員完成部落的考驗，只要成功佔領部落可以獲得材料。部落共分為兩種：</li>
              <li class="list-group-item">
                <h4>一般部落</h4></br>
                符合一定條件即可挑戰據點任務，每個據點都有一個序號，輸入後會顯示遊戲規則以及目前的分數紀錄，成功佔領據點的陣營可收到據點定時生產的材料。</br>普通佔領：成功挑戰任務後即可佔領。</br>搶奪據點：必須在任務中有比上一陣營更好的表現才可以佔領
                <ul>
                  <li>到達該部落後，尋找古代文字並輸入至網頁當中，便可查看該部落的考驗內容</li>
                  <li>部落無人佔領時，只要完成考驗就可以佔領</li>
                  <li>若部落已有人佔領，那就必須在考驗中獲得比目前佔領者更好的成績才可以佔領</li>
                  <li>部落的成績紀錄每過一天（45分鐘)便會重置一次</li>
                  <li>同一部落的考驗若連續失敗兩次，則暫時不可繼續挑戰</li>
                </ul>
              </li>
              <li class="list-group-item">
                <h4>PK部落</h4></br>
                <ul>
                  <li>考驗內容需要兩個陣營的隊員互相PK，勝出的一方才可以佔領</li>
                  <li>但是PK部落在佔領15分鐘後就會變回無人佔領的部落</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
          <h4 class="panel-title">NPC</h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">
                <h4>苦力怕</h4></br>
                苦力怕會在黑夜時出沒，被苦力怕抓到的人會被帶去監獄關起來唷！
              </li>
              <li class="list-group-item">
                <h4>終界人</h4></br>
                終界人會不定時去攻打陣營，此時同陣營的夥伴們必須盡速回防，發揮團結力量、通過終界人的考驗才可以擊退終界人！
              </li>
              <li class="list-group-item">
                <h4>典獄長</h4></br>
                典獄長會在監獄管理被苦力怕抓來的人，若想要拯救被關起來的隊友，必須和典獄長玩遊戲並勝出才行唷！
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="panel panel-warning">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
          <h4 class="panel-title">緊急任務</h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">在「消息公告」中會不定時發布緊急任務，只要完成緊急任務，就有機會得到材料、特殊零件、線索……等等的獎勵</div>
        </div>
      </div>
    </div>
  </div>



  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Navbar Dropdown -->
  <script src="js/nav.js"></script>

</body>
</html>