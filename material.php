<?php
session_start();
header('Cache-Control: no-cache');
header('Pragma: no-cache');
$_SESSION["s_team"] = 'B'; //testing
?>

<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 據點地圖</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="css/material.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>


  <!-- Tab Bar -->
  <div class="container">
    <ul class="nav nav-tabs">
      <li class="active"><a data-toggle="tab" href="#raw">原料</a></li>
      <li><a data-toggle="tab" href="#special">特殊原料</a></li>
      <li><a data-toggle="tab" href="#component">零件</a></li>
      <li><a data-toggle="tab" href="#transport">交通工具</a></li>
    </ul>

    <div class="tab-content">
      <!-- Raw Materials -->
      <div id="raw" class="tab-pane fade in active">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count">
              <?php  
              require_once "getitems.php";
            #prepareResource();
              $items = getGroupResources($_SESSION["s_team"]);
              if(!empty($items)) { echo $items[0][1]; }
              ?>
            </div>
            <img src="png/s_raw/magic_powder.png" class="img-responsive icon-materials" alt="魔法粉末">
            <p class="name raw-name text-center">魔法粉末</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?></div>
            <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
            <p class="name raw-name text-center">布</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?></div>
            <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
            <p class="name raw-name text-center">紅寶石</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?></div>
            <img src="png/s_raw/shaft.png" class="img-responsive icon-materials" alt="轉軸">
            <p class="name raw-name text-center">轉軸</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?></div>
            <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
            <p class="name raw-name text-center">熊熊烈火</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][6]; } ?></div>
            <img src="png/s_raw/seed.png" class="img-responsive icon-materials" alt="種子">
            <p class="name raw-name text-center">種子</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?></div>
            <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
            <p class="name raw-name text-center">生命之水</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?></div>
            <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
            <p class="name raw-name text-center">神聖光芒</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][9]; } ?></div>
            <img src="png/s_raw/flax.png" class="img-responsive icon-materials" alt="麻">
            <p class="name raw-name text-center">麻</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?></div>
            <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
            <p class="name raw-name text-center">螺絲</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?></div>
            <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
            <p class="name raw-name text-center">塑料</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?></div>
            <img src="png/s_raw/electron.png" class="img-responsive icon-materials" alt="十萬伏特">
            <p class="name raw-name text-center">十萬伏特</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?></div>
            <img src="png/s_raw/ergonomic.png" class="img-responsive icon-materials" alt="人體工學">
            <p class="name raw-name text-center">人體工學</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?></div>
            <img src="png/s_raw/imagine.png" class="img-responsive icon-materials" alt="想像力">
            <p class="name raw-name text-center">想像力</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?></div>
            <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
            <p class="name raw-name text-center">金屬</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper raw-wrapper">
            <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?></div>
            <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
            <p class="name raw-name text-center">大地氧氣</p>
          </div>
        </div>
      </div>

      <!-- Special Materials -->
      <div id="special" class="tab-pane fade">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][27]; } ?></div>
            <img src="png/s_special/elk.png" class="img-responsive icon-special" alt="麋鹿">
            <p class="name special-name text-center">麋鹿</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][28]; } ?></div>
            <img src="png/s_special/s_logo.png" class="img-responsive icon-special" alt="S logo">
            <p class="name special-name text-center">S logo</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][29]; } ?></div>
            <img src="png/s_special/sound.png" class="img-responsive icon-special" alt="叫聲">
            <p class="name special-name text-center">叫聲</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][30]; } ?></div>
            <img src="png/s_special/sd_card.png" class="img-responsive icon-special" alt="SD卡">
            <p class="name special-name text-center">SD卡</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][31]; } ?></div>
            <img src="png/s_special/missile.png" class="img-responsive icon-special" alt="飛彈">
            <p class="name special-name text-center">飛彈</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][32]; } ?></div>
            <img src="png/s_special/miss_air.png" class="img-responsive icon-special" alt="空姐">
            <p class="name special-name text-center">空姐</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper special-wrapper">
            <div class="count special-count"><?php if(!empty($items)) { echo $items[0][33]; } ?></div>
            <img src="png/s_special/led_light.png" class="img-responsive icon-special" alt="LED燈">
            <p class="name special-name text-center">LED燈</p>
          </div>
          <div class="col-md-2 col-xs-3">
          </div>
        </div>
      </div>

      <!-- Components -->
      <div id="component" class="tab-pane fade">
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#magic_stone">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?></div>
            <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
            <p class="name component-name text-center">魔法石</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#control_panel">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?></div>
            <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
            <p class="name component-name text-center">控制面板</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#seat">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?></div>
            <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
            <p class="name component-name text-center">座位</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#wheel">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?></div>
            <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
            <p class="name component-name text-center">方向盤</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#rope">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?></div>
            <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
            <p class="name component-name text-center">繩子</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#cypress">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?></div>
            <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
            <p class="name component-name text-center">檜木</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#propeller">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?></div>
            <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
            <p class="name component-name text-center">螺旋槳</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#door">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?></div>
            <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
            <p class="name component-name text-center">門</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#jet">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?></div>
            <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
            <p class="name component-name text-center">噴射器</p>
          </div>
          <div class="col-md-2 col-xs-3 wrapper component-wrapper" data-toggle="modal" data-target="#gun">
            <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?></div>
            <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
            <p class="name component-name text-center">機艙</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-2 col-xs-offset-0"><p class="hint">※ 合成請點選零件圖示</p></div>
        </div>
      </div>

      


      <!-- Compose Modal -->
      <!-- 魔法石 -->
      <div id="magic_stone" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">魔法石 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][1]; } ?>/30</div>
                  <img src="png/s_raw/magic_powder.png" class="img-responsive icon-components" alt="魔法粉末">
                  <p class="name raw-name text-center">魔法粉末</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/18</div>
                  <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
                  <p class="name raw-name text-center">神聖光芒</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?>/36</div>
                  <img src="png/s_raw/imagine.png" class="img-responsive icon-components" alt="想像力">
                  <p class="name raw-name text-center">想像力</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 控制面板 -->
      <div id="control_panel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">控制面板 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/24</div>
                  <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
                  <p class="name raw-name text-center">金屬</p>
                </div> 
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/21</div>
                  <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
                  <p class="name raw-name text-center">神聖光芒</p>
                </div>        
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?>/18</div>
                  <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
                  <p class="name raw-name text-center">十萬伏特</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 座位 -->
      <div id="seat" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">座位 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/12</div>
                  <img src="png/s_raw/cloth.png" class="img-responsive icon-components" alt="布">
                  <p class="name raw-name text-center">布</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/30</div>
                  <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
                  <p class="name raw-name text-center">塑料</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?>/24</div>
                  <img src="png/s_raw/ergonomic.png" class="img-responsive icon-components" alt="人體工學">
                  <p class="name raw-name text-center">人體工學</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 方向盤 -->
      <div id="wheel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">方向盤 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/15</div>
                  <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
                  <p class="name raw-name text-center">塑料</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/24</div>
                  <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
                  <p class="name raw-name text-center">螺絲</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?>/30</div>
                  <img src="png/s_raw/shaft.png" class="img-responsive icon-components" alt="轉軸">
                  <p class="name raw-name text-center">轉軸</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 繩子 -->
      <div id="rope" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">繩子 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][9]; } ?>/30</div>
                  <img src="png/s_raw/flax.png" class="img-responsive icon-components" alt="麻">
                  <p class="name raw-name text-center">麻</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/21</div>
                  <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
                  <p class="name raw-name text-center">神聖光芒</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?>/24</div>
                  <img src="png/s_raw/water.png" class="img-responsive icon-components" alt="生命之水">
                  <p class="name raw-name text-center">生命之水</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 檜木 -->
      <div id="cypress" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">檜木 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?>/30</div>
                  <img src="png/s_raw/water.png" class="img-responsive icon-components" alt="生命之水">
                  <p class="name raw-name text-center">生命之水</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/18</div>
                  <img src="png/s_raw/light.png" class="img-responsive icon-components" alt="神聖光芒">
                  <p class="name raw-name text-center">神聖光芒</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][6]; } ?>/10</div>
                  <img src="png/s_raw/seed.png" class="img-responsive icon-components" alt="種子">
                  <p class="name raw-name text-center">種子</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/12</div>
                  <img src="png/s_raw/air.png" class="img-responsive icon-components" alt="大地氧氣">
                  <p class="name raw-name text-center">大地氧氣</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 螺旋槳 -->
      <div id="propeller" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">螺旋槳 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/21</div>
                  <img src="png/s_raw/plastic.png" class="img-responsive icon-components" alt="塑料">
                  <p class="name raw-name text-center">塑料</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?>/21</div>
                  <img src="png/s_raw/shaft.png" class="img-responsive icon-components" alt="轉軸">
                  <p class="name raw-name text-center">轉軸</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/12</div>
                  <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
                  <p class="name raw-name text-center">金屬</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/18</div>
                  <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
                  <p class="name raw-name text-center">螺絲</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 門 -->
      <div id="door" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">門 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/15</div>
                  <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
                  <p class="name raw-name text-center">金屬</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/15</div>
                  <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
                  <p class="name raw-name text-center">螺絲</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/12</div>
                  <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
                  <p class="name raw-name text-center">熊熊烈火</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?>/21</div>
                  <img src="png/s_raw/ergonomic.png" class="img-responsive icon-components" alt="人體工學">
                  <p class="name raw-name text-center">人體工學</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 噴射器 -->
      <div id="jet" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">噴射器 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/9</div>
                  <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
                  <p class="name raw-name text-center">金屬</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/21</div>
                  <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
                  <p class="name raw-name text-center">螺絲</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/15</div>
                  <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
                  <p class="name raw-name text-center">熊熊烈火</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?>/24</div>
                  <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
                  <p class="name raw-name text-center">十萬伏特</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 機艙 -->
      <div id="gun" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">機艙 x 1 合成</h4>
            </div>
            <div class="modal-body container-fluid">
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/12</div>
                  <img src="png/s_raw/metal.png" class="img-responsive icon-components" alt="金屬">
                  <p class="name raw-name text-center">金屬</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/15</div>
                  <img src="png/s_raw/air.png" class="img-responsive icon-components" alt="大地氧氣">
                  <p class="name raw-name text-center">大地氧氣</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/9</div>
                  <img src="png/s_raw/fire.png" class="img-responsive icon-components" alt="熊熊烈火">
                  <p class="name raw-name text-center">熊熊烈火</p>
                </div>
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/9</div>
                  <img src="png/s_raw/screw.png" class="img-responsive icon-components" alt="螺絲">
                  <p class="name raw-name text-center">螺絲</p>
                </div>
              </div>
              <div class="row-fluid">
                <div class="col-xs-3 wrapper raw-wrapper">
                  <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?>/18</div>
                  <img src="png/s_raw/electron.png" class="img-responsive icon-components" alt="十萬伏特">
                  <p class="name raw-name text-center">十萬伏特</p>
                </div>
              </div>
            </div>
            <div class="modal-footer">※確定後無法更改
              <button type="button" class="btn btn-danger btn-components" data-dismiss="modal">確定合成？</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Transportation Tab -->
      <div id="transport" class="tab-pane fade">
        <?php 
        if((!empty($items)) && ($items[0][34] != '0') && ($items[0][34] != NULL)) { echo '<img src="png/s_transport/'.$items[0][34].'.png" class="img-responsive icon-components" alt="'.$items[0][34].'">'; } 
        else { require_once "transportation.php"; }
        ?>
      </div>

      <!-- Transportation Modal -->
      <?php
      require_once "taskmodel.php";
      $day = getAllDay();
      if (!empty($day)) { $_SESSION["day"] = $day[0][0]; }
      else { $_SESSION["day"] = 1; }

      if ($_SESSION["day"] == 4) { require_once "transportation_modal.php"; }
      ?>
      

    </div>
  </div>



  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Navbar Dropdown -->
  <script src="js/nav.js"></script>
  <!-- My Scripts -->
  <script src="js/material.js"></script>
  

</body>
</html>
