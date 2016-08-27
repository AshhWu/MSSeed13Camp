<?php 
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<!-- Title -->
<title>遊戲關卡</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- CSS Style -->
<link rel="stylesheet" type="GMCentral/assets/css/main.css" href="#">

</head>

<body>
<?php
  include "backend/navbar/nav.php";
if($_SESSION['ID'] != null){ 
  ?>
<div style="text-align:center" align="middle">
	<h1>Mission</h1><br>
	<form action="getMission.php" method="post">
		Code: <input type="text" name="code">
		<input type="submit" value="Submit">
	</form>
</div>

<?php
}
else{
	echo "<script> alert('您無權觀看此頁面喔')</script>";
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>

	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Navbar Dropdown -->
	<script src="js/nav.js"></script>
</body>
</html>
