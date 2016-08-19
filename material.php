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
            <div class="col-md-offset-2 col-xs-offset-0"><p class="hint">※合成請點選零件圖示</p></div>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
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
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>


        <!-- Transportation -->
        <div id="transport" class="tab-pane fade">
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#aladdin_carpet">
              <p class="name transport-name text-center">阿拉丁的飛毯</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#space_shuttle">
              <p class="name transport-name text-center">太空梭</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#nimbus_2000">
              <p class="name transport-name text-center">光輪2000</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#bamboo_dragonfly">
              <p class="name transport-name text-center">竹蜻蜓</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#santa_sled">
              <p class="name transport-name text-center">聖誕雪橇</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#moving_castle">
              <p class="name transport-name text-center">霍爾的移動城堡</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#superman_cape">
              <p class="name transport-name text-center">超人披風</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#somersault_cloud">
              <p class="name transport-name text-center">筋斗雲</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#batmobile">
              <p class="name transport-name text-center">蝙蝠車</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#balloon">
              <p class="name transport-name text-center">氣球</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#hang_gliding">
              <p class="name transport-name text-center">滑翔翼</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#hot_air_balloon">
              <p class="name transport-name text-center">熱氣球</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#baymax">
              <p class="name transport-name text-center">杯麵</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#helicopter">
              <p class="name transport-name text-center">直升機</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#fighter_plane">
              <p class="name transport-name text-center">戰鬥機</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#airship">
              <p class="name transport-name text-center">飛艇</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#airliner">
              <p class="name transport-name text-center">客機</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#ufo">
              <p class="name transport-name text-center">飛碟</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#hermes_shoes">
              <p class="name transport-name text-center">荷米斯的鞋子</p>
            </div>
            <div class="col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#paragliding">
              <p class="name transport-name text-center">飛行傘</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-offset-2 col-xs-offset-0 col-md-2 col-xs-3 wrapper transport-wrapper" data-toggle="modal" data-target="#wright_flyer">
              <p class="name transport-name text-center">飛行者一號</p>
            </div>
          </div>
        </div>

        <!-- Transportation Modal -->
        <!-- 阿拉丁的飛毯 -->
        <div id="aladdin_carpet" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">阿拉丁的飛毯 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/70</div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/15</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/6</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 太空梭 -->
        <div id="space_shuttle" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">太空梭 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?>/1</div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/1</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 光輪2000 -->
        <div id="nimbus_2000" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">光輪2000 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/2</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?>/1</div>
                    <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
                    <p class="name component-name text-center">檜木</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/2</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][9]; } ?>/30</div>
                    <img src="png/s_raw/flax.png" class="img-responsive icon-materials" alt="麻">
                    <p class="name raw-name text-center">麻</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/40</div>
                    <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
                    <p class="name raw-name text-center">神聖光芒</p>
                  </div>     
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?>/30</div>
                    <img src="png/s_raw/imagine.png" class="img-responsive icon-materials" alt="想像力">
                    <p class="name raw-name text-center">想像力</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 竹蜻蜓 -->
        <div id="bamboo_dragonfly" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">竹蜻蜓 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?>/3</div>
                    <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
                    <p class="name component-name text-center">檜木</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][4]; } ?>/10</div>
                    <img src="png/s_raw/shaft.png" class="img-responsive icon-materials" alt="轉軸">
                    <p class="name raw-name text-center">轉軸</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?>/1</div>
                    <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
                    <p class="name component-name text-center">螺旋槳</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 聖誕雪橇 -->
        <div id="santa_sled" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">聖誕雪橇 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/1</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?>/1</div>
                    <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
                    <p class="name component-name text-center">檜木</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/2</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/24</div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][27]; } ?>/1</div>
                    <img src="png/s_special/elk.png" class="img-responsive icon-special" alt="麋鹿">
                    <p class="name special-name text-center">麋鹿</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 霍爾的移動城堡 -->
        <div id="moving_castle" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">霍爾的移動城堡 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/1</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/2</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/2</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/9</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/15</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/20</div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/25</div>
                    <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
                    <p class="name raw-name text-center">金屬</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/20</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 超人披風 -->
        <div id="superman_cape" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">超人披風 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/4</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/30</div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/2</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/12</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][28]; } ?>/1</div>
                    <img src="png/s_special/s_logo.png" class="img-responsive icon-special" alt="S logo">
                    <p class="name special-name text-center">S logo</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 筋斗雲 -->
        <div id="somersault_cloud" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">筋斗雲 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/4</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?>/80</div>
                    <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
                    <p class="name raw-name text-center">生命之水</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/100</div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/10</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?>/50</div>
                    <img src="png/s_raw/electron.png" class="img-responsive icon-materials" alt="十萬伏特">
                    <p class="name raw-name text-center">十萬伏特</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][29]; } ?>/1</div>
                    <img src="png/s_special/sound.png" class="img-responsive icon-special" alt="叫聲">
                    <p class="name special-name text-center">叫聲</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 蝙蝠車 -->
        <div id="batmobile" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">蝙蝠車 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/1</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?>/2</div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][12]; } ?>/30</div>
                    <img src="png/s_raw/electron.png" class="img-responsive icon-materials" alt="十萬伏特">
                    <p class="name raw-name text-center">十萬伏特</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 氣球 -->
        <div id="balloon" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/4</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/70</div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/60</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 滑翔翼 -->
        <div id="hang_gliding" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">滑翔翼 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/3</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/90</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/60</div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/60</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?>/15</div>
                    <img src="png/s_raw/ergonomic.png" class="img-responsive icon-materials" alt="人體工學">
                    <p class="name raw-name text-center">人體工學</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 熱氣球 -->
        <div id="hot_air_balloon" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">熱氣球 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/80</div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/3</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/45</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/12</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/60</div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 杯麵 -->
        <div id="baymax" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">杯麵 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/1</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/60</div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/30</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?>/2</div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][13]; } ?>/25</div>
                    <img src="png/s_raw/ergonomic.png" class="img-responsive icon-materials" alt="人體工學">
                    <p class="name raw-name text-center">人體工學</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][7]; } ?>/45</div>
                    <img src="png/s_raw/water.png" class="img-responsive icon-materials" alt="生命之水">
                    <p class="name raw-name text-center">生命之水</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/60</div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/80</div>
                    <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
                    <p class="name raw-name text-center">金屬</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][30]; } ?>/1</div>
                    <img src="png/s_special/sd_card.png" class="img-responsive icon-special" alt="SD卡">
                    <p class="name special-name text-center">SD卡</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 直升機 -->
        <div id="helicopter" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">直升機 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/1</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/50</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 戰鬥機 -->
        <div id="fighter_plane" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/60</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?>/2</div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/1</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][31]; } ?>/1</div>
                    <img src="png/s_special/missile.png" class="img-responsive icon-special" alt="飛彈">
                    <p class="name special-name text-center">飛彈</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 飛艇 -->
        <div id="airship" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">飛艇 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/60</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/50</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/60</div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?>/1</div>
                    <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
                    <p class="name component-name text-center">螺旋槳</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 客機 -->
        <div id="airliner" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">客機 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/1</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][19]; } ?>/1</div>
                    <img src="png/s_component/seat.png" class="img-responsive icon-components" alt="座位">
                    <p class="name component-name text-center">座位</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>v</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/40</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][5]; } ?>/30</div>
                    <img src="png/s_raw/fire.png" class="img-responsive icon-materials" alt="熊熊烈火">
                    <p class="name raw-name text-center">熊熊烈火</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][32]; } ?>/1</div>
                    <img src="png/s_special/miss_air.png" class="img-responsive icon-special" alt="空姐">
                    <p class="name special-name text-center">空姐</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 飛碟 -->
        <div id="ufo" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">飛碟 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][10]; } ?>/80</div>
                    <img src="png/s_raw/screw.png" class="img-responsive icon-materials" alt="螺絲">
                    <p class="name raw-name text-center">螺絲</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/50</div>
                    <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
                    <p class="name raw-name text-center">神聖光芒</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][15]; } ?>/35</div>
                    <img src="png/s_raw/metal.png" class="img-responsive icon-materials" alt="金屬">
                    <p class="name raw-name text-center">金屬</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][24]; } ?>/1</div>
                    <img src="png/s_component/door.png" class="img-responsive icon-components" alt="門">
                    <p class="name component-name text-center">門</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][26]; } ?>/2</div>
                    <img src="png/s_component/gun.png" class="img-responsive icon-components" alt="機艙">
                    <p class="name component-name text-center">機艙</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][18]; } ?>/1</div>
                    <img src="png/s_component/control_panel.png" class="img-responsive icon-components" alt="控制面板">
                    <p class="name component-name text-center">控制面板</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][25]; } ?>/2</div>
                    <img src="png/s_component/jet.png" class="img-responsive icon-components" alt="噴射器">
                    <p class="name component-name text-center">噴射器</p>
                  </div>
                  <div class="col-xs-3 wrapper special-wrapper">
                    <div class="count special-count"><?php if(!empty($items)) { echo $items[0][33]; } ?>/1</div>
                    <img src="png/s_special/led_light.png" class="img-responsive icon-special" alt="LED燈">
                    <p class="name special-name text-center">LED燈</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 荷米斯的鞋子 -->
        <div id="hermes_shoes" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">荷米斯的鞋子 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][17]; } ?>/2</div>
                    <img src="png/s_component/magic_stone.png" class="img-responsive icon-components" alt="魔法石">
                    <p class="name component-name text-center">魔法石</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/3</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][3]; } ?>/12</div>
                    <img src="png/s_raw/ruby.png" class="img-responsive icon-materials" alt="紅寶石">
                    <p class="name raw-name text-center">紅寶石</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][2]; } ?>/60</div>
                    <img src="png/s_raw/cloth.png" class="img-responsive icon-materials" alt="布">
                    <p class="name raw-name text-center">布</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 飛行傘 -->
        <div id="paragliding" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">飛行傘 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][11]; } ?>/80</div>
                    <img src="png/s_raw/plastic.png" class="img-responsive icon-materials" alt="塑料">
                    <p class="name raw-name text-center">塑料</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][21]; } ?>/4</div>
                    <img src="png/s_component/rope.png" class="img-responsive icon-components" alt="繩子">
                    <p class="name component-name text-center">繩子</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][16]; } ?>/50</div>
                    <img src="png/s_raw/air.png" class="img-responsive icon-materials" alt="大地氧氣">
                    <p class="name raw-name text-center">大地氧氣</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
          </div>
        </div>

        <!-- 飛行者一號 -->
        <div id="wright_flyer" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">飛行者一號 x 1 合成</h4>
              </div>
              <div class="modal-body container-fluid">
                <div class="row-fluid">
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][22]; } ?>/1</div>
                    <img src="png/s_component/cypress.png" class="img-responsive icon-components" alt="檜木">
                    <p class="name component-name text-center">檜木</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][20]; } ?>/1</div>
                    <img src="png/s_component/wheel.png" class="img-responsive icon-components" alt="方向盤">
                    <p class="name component-name text-center">方向盤</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][14]; } ?>/60</div>
                    <img src="png/s_raw/imagine.png" class="img-responsive icon-materials" alt="想像力">
                    <p class="name raw-name text-center">想像力</p>
                  </div>
                  <div class="col-xs-3 wrapper component-wrapper">
                    <div class="count component-count"><?php if(!empty($items)) { echo $items[0][23]; } ?>/1</div>
                    <img src="png/s_component/propeller.png" class="img-responsive icon-components" alt="螺旋槳">
                    <p class="name component-name text-center">螺旋槳</p>
                  </div>
                  <div class="col-xs-3 wrapper raw-wrapper">
                    <div class="count raw-count"><?php if(!empty($items)) { echo $items[0][8]; } ?>/40</div>
                    <img src="png/s_raw/light.png" class="img-responsive icon-materials" alt="神聖光芒">
                    <p class="name raw-name text-center">神聖光芒</p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">※確定後無法更改
                <button type="button" class="btn btn-danger" data-dismiss="modal">確定合成？</button>
              </div>
            </div>
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
    <!-- My Scripts -->
    <script src="js/material.js"></script>
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="css/material.css">

  </body>
  </html>
