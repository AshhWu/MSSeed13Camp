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

<h3 style="color:#337ab7; width:180px; margin:auto; text-align: center">聊天中心</h3>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#chat1">| America / Canada / Brazil |</a></li>
        <li><a data-toggle="tab" href="#chat2">| Italy / Germany / England |</a></li>
        <li><a data-toggle="tab" href="#chat3">| Taiwan / Japan / Thailand |</a></li>
        <li><a data-toggle="tab" href="#chat4">| SouthAfrica / Madagascar / Egypt |</a></li>
    </ul>

    <div class="tab-content">

        <div id="chat1" class="tab-pane fade in active w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">America</h3><br>
            	<p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
            	<p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Canada</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Brazil</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>

            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
            	給America的訊息:<br> <input type="text" name="message">
            	<button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Canada的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Brazil的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
        </div>

        <div id="chat2" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Italy</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Germany</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">England</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>

            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Italy的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Germany的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給England的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
        </div>

        <div id="chat3" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Taiwan</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Japan</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Thailand</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>

            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Taiwan的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Japan的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Thailand的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
        </div>

        <div id="chat4" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">SouthAfrica</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Madagascar</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width:320px; height:450px; display:inline-block; margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Egypt</h3><br>
                <p class="w3-card-4 w3-padding" style="float:left">hi!</p><br><br>
                <p class="w3-card-4 w3-padding w3-light-grey" style="float:right">hello~</p><br><br>
            </div>

            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給SouthAfrica的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Madagascar的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2" style="width: 320px; display:inline-block; margin-left:30px;">
                給Egypt的訊息:<br> <input type="text" name="message">
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