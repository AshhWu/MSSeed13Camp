<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Title -->
  <title>微軟13屆領袖營 - 首頁</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
  <!-- My Scripts 
  <script src="#"></script> -->
  <!-- CSS Style -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>

  <?php
  #<!-- Navigation Bar -->
  include "backend/navbar/nav.php";
  if($_SESSION['ID'] != null){ include 'backend/login/planeTicket.php'; }
  else 
  { 
    echo '  
    <div class="container col-lg-6 col-lg-offset-3 col-xs-8 col-xs-offset-2">
      <!-- Banner -->
      <div class="banner">
        <img src="png/banner.png" class="img-responsive"/>
      </div>    
      <!-- Login form-->
      <form role="form" action="backend/login/login.php" method="post" accept-charset="UTF-8" autocomplete="on">
        <!-- Email -->
        <div class="form-group">
          <label for="email">MSSeed Email</label>
          <input type="text" class="form-control" name="email" placeholder="xxx@msseed.idv.tw">
        </div>
        <!-- Password -->
        <div class="form-group">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
    </div>';
  }
?>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Navbar Dropdown -->
<script src="js/nav.js"></script>
<!-- My Scripts -->
<script src="js/index.js"></script>


</body>
</html>
