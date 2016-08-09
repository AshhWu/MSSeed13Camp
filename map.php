<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 據點戰 - 據點地圖</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <!-- My Scripts -->
  <script src="map.js"></script>
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="map.css">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

    <!-- Map -->
  <div class="container map">
    <!-- Map picture -->
    <img src="png/stronghold_map.jpg" class="img-responsive"/>
    <!-- Strongholds -->
    <a class="stronghold" id="icon1" href="#" data-toggle="tooltip" data-placement="auto" title="佔領陣營：美國<br />
      生產材料：鐵（６個／min）<br />
      佔領條件：8人<br />
      1.170公分以上x3+155公分以下x2<br />
      2.捲髮女生x3+直髮女生x2v<br />
      3.戴手鍊x2+戴手錶x4<br />
      4.單眼皮x3+雙眼皮x3">
      <span class="glyphicon glyphicon-map-marker"></span>
    </a>
    <a class="stronghold" id="icon2" href="#" data-toggle="tooltip" data-placement="auto" title="Hooray!">
      <span class="glyphicon glyphicon-map-marker"></span>
    </a>
    <a class="stronghold" id="icon3" href="#" data-toggle="tooltip" data-placement="auto" title="Hooray!">
      <span class="glyphicon glyphicon-map-marker"></span>
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

</body>
</html>
