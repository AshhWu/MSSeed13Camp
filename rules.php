<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 遊戲規則</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <!-- My Scripts -->
  <script src="home.js"></script>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="rules.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

  <!-- Rules -->
  <div class="container">
    <div class="panel-group" id="accordion">
      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          <h4 class="panel-title">遊戲大綱</h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">每個小隊必須做出屬於自己的指定交通工具，逃出這座無人島。玩家們必須解開在陣營內的謎題以得到線索，並推測正確的交通工具為何，同時也要出去佔領據點獲得虛擬材料。最終目標是猜出屬於自己小隊該做的正確交通工具，並收集到足夠的虛擬材料！</div>
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          <h4 class="panel-title">分組方式</h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
          <div class="panel-body">分為四大陣營（美洲、歐洲、非洲、亞洲）</br>第一天晚會時同陣營的小隊會拿到一樣的信物</br>第二天遊戲開始前會進行相認的小活動 
          </div>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          <h4 class="panel-title">交通工具</h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">交通工具可由原料與零件組成，原料可透過據點任務或緊急任務獲得，零件可透過原料合成</div>
        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
          <h4 class="panel-title">陣營解謎</h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">同一陣營的人必須一起解謎，一個大謎題最後可以拿到三個線索（一個小隊一個），</br>解完所有謎題以後才會拿到足以判斷出正確交通工具的關鍵線索</div>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
          <h4 class="panel-title">佔領據點</h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse">
          <div class="panel-body">
            <ul class="list-group">
              <li class="list-group-item">地圖上共有16個據點，分為12個攻佔據點和4個PK據點。</br>各據點均有挑戰條件限制，各小隊須符合條件才可進行關卡。</br>據點條件一天（４５分鐘）會更換一次</li>
              <li class="list-group-item">
                <h4>一般據點</h4></br>
                符合一定條件即可挑戰據點任務，每個據點都有一個序號，輸入後會顯示遊戲規則以及目前的分數紀錄，成功佔領據點的陣營可收到據點定時生產的材料。</br>普通佔領：成功挑戰任務後即可佔領。</br>搶奪據點：必須在任務中有比上一陣營更好的表現才可以佔領
                <ol>
                  <li>同一據點遊戲若連續失敗兩次，就暫時不可再挑戰</li>
                  <li>據點的遊戲紀錄每過一天（45分鐘)便會重置一次</li>
                </ol>
              </li>
              <li class="list-group-item">
                <h4>搶奪據點</h4></br>
                需要兩個陣營的隊伍一起挑戰，ＰＫ後的贏家可以佔領此據點。若要搶奪此據點，則必須找到目前佔領此據點的陣營隊伍擔任對手。</br>PK據點有限制佔領時間，佔領時間一到則該據點會恢復成「無人佔領」的狀態
              </li>
            </ul>
          </div>

        </div>
      </div>
      <div class="panel panel-info">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
          <h4 class="panel-title">緊急任務</h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse">
          <div class="panel-body">緊急任務會不定時透過消息頁面發布，完成緊急任務者可獲得特殊限定零件或材料。</div>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7">
          <h4 class="panel-title">NPC</h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse">
          <div class="panel-body">＊苦力怕：只會在黑夜中出現突襲玩家，被抓到的玩家會被帶去監獄，同陣營的隊友要到監獄並和典獄長玩遊戲後才可以把被關住的隊友救出。</br>
            ＊終界人：不分白天黑夜，終界人會不定時去攻打陣營，攻打前5分鐘會在""消息""事先發布，請大家盡速回守。和終界人PK未達成挑戰之陣營，將損失一定數量之材料。</div>
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
            <h4 class="panel-title">週期設定</h4>
          </div>
          <div id="collapse8" class="panel-collapse collapse">
            <div class="panel-body">在各陣營據點佔領的期間中有四個周期（天），每個周期45分鐘。週期內有白天和黑夜做區分（白天20分鐘，黑夜25分鐘），白天黑夜的網頁介面會不同，且黑夜時苦力怕會出沒。</br>最後一天時會公布交通工具合成表</div>
          </div>
        </div>
        <div class="panel panel-success">
          <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse9">
            <h4 class="panel-title">成果發表</h4>
          </div>
          <div id="collapse9" class="panel-collapse collapse">
            <div class="panel-body">成發時會讓大家用樂高拼出交通工具的外型，並上台向大家展示，同時也會宣布該小隊是否有做出正確的交通工具。有做出正確交通工具的小隊可以獲得獎品</div>
          </div>
        </div>
      </div>
    </div>



    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
  </html>