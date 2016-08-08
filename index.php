<!DOCTYPE html>
<html>
<head>
  <title>微軟13屆領袖營 - 首頁</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- My Scripts -->
  <script src="#"></script>
  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>

  <!-- Navigation Bar -->
  <?php
  include "nav.php";
  ?>

  <div class="container col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2">
    
    <!-- Banner -->
    <div class="banner">
      <img src="png/banner.png" class="img-responsive"/>
    </div>
    
    <!-- Login form-->
    <form role="form">
      <!-- Email -->
      <div class="form-group">
        <label for="email">MSSeed Email</label>
        <input type="email" class="form-control" id="email" placeholder="xxx@msseed.idv.tw">
      </div>
      <!-- Password -->
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
      <!-- Checkbox to remember me
      <div class="checkbox">
        <label><input type="checkbox">Remember me</label>
      </div>
    -->
    <button type="submit" class="btn btn-default">Login</button>
  </form>

</div>

</body>
</html>