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

  <!-- Materials -->
  <div class="container materials">
    <table class="table-bordered table-responsive table-sm">
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>魔法粉末<br>3</td> 
        <td></td>
        <td>布<br>3</td> 
        <td></td>
        <td>紅寶石<br>3</td> 
        <td></td>
        <td>轉軸<br>3</td> 
      </tr>
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>熊熊烈火<br>3</td> 
        <td></td>
        <td>種子<br>3</td> 
        <td></td>
        <td>生命之水<br>3</td> 
        <td></td>
        <td>神聖光芒<br>3</td> 
      </tr>
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>麻<br>3</td> 
        <td></td>
        <td>螺絲<br>3</td> 
        <td></td>
        <td>塑料<br>3</td> 
        <td></td>
        <td>十萬伏特<br>3</td> 
      </tr>
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>人體工學<br>3</td> 
        <td></td>
        <td>想像力<br>3</td> 
        <td></td>
        <td>金屬<br>3</td> 
        <td></td>
        <td>大地氧氣<br>3</td> 
      </tr>
    </table>
  </div>

  <div class="container compose"> 
    <div class="compose-title"><h1>合成表</h1></div>
    <table class="table-responsive table-striped table-sm">
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>魔法粉末<br>3</td> 
        <td class="text-center">+</td>
        <td><img src="png/material_test.png"/></td>
        <td>布<br>3</td> 
        <td class="text-center">=</td>
        <td><img src="png/material_test.png"/></td>
        <td>轉軸</td>
        <td class="text-center"><form><input type="text" name="amount">個</form></td>
        <td><div class="ok-btn">OK</div></td>
      </tr>
      <tr>
        <td><img src="png/material_test.png"/></td>
        <td>魔法粉末<br>3</td> 
        <td class="text-center">+</td>
        <td><img src="png/material_test.png"/></td>
        <td>布<br>3</td> 
        <td class="text-center">=</td>
        <td><img src="png/material_test.png"/></td>
        <td>轉軸</td>
        <td class="text-center"><form><input type="text" name="amount">個</form></td>
        <td><div class="ok-btn">OK</div></td>
      </tr>
    </table>
  </div>


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- My Scripts -->
  <script src="material.js"></script>
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="material.css">

</body>
</html>
