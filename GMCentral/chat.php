<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../js/t_main.js"></script>
    <!-- <link rel="stylesheet" href="css/t_style.css"> -->
    <link rel="stylesheet" href="../css/w3.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<?php include "../backend/navbar/nav.php"; ?>
<?php include "../t_getitems.php"; ?>
<?php $team = $_SESSION['t_team']; ?>
<?php $country = $_SESSION['country'] ;?>

<h3 style="color:#337ab7; width:180px; margin:auto; text-align: center">聊天中心</h3>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#chat1">America, Canada, Brazil</a></li>
        <li><a data-toggle="tab" href="#chat2">Italy, Germany, England</a></li>
        <li><a data-toggle="tab" href="#chat3">Taiwan, Japan, Thailand</a></li>
        <li><a data-toggle="tab" href="#chat4">SouthAfrica, Madagascar, Egypt</a></li>
    </ul>

    <div class="tab-content">
        <div id="chat1" class="tab-pane fade in active w3-container w3-section w3-padding w3-card-2">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:500px; display:inline-block;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">America</h3>
            	<p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
            	<p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:500px; display:inline-block;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Canada</h3>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:500px; display:inline-block;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Brazil</h3>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>

            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block;">
            	給America的訊息: <input type="text" name="message">
            	<button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block;">
                給Canada的訊息: <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block;">
                給Brazil的訊息: <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="../js/nav.js"></script>

</body>
</html>