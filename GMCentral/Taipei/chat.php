<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="../../js/t_main.js"></script>
    <link rel="stylesheet" href="../../css/w3.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

<?php include "../../t_getitems.php"; ?>
<?php $msg1 = getHelpFromGM(1);?>
<?php $msg2 = getHelpFromGM(2);?>
<?php $msg3 = getHelpFromGM(3);?>
<?php $msg4 = getHelpFromGM(4);?>
<?php $msg5 = getHelpFromGM(5);?>
<?php $msg6 = getHelpFromGM(6);?>
<?php $msg7 = getHelpFromGM(7);?>
<?php $msg8 = getHelpFromGM(8);?>
<?php $msg9 = getHelpFromGM(9);?>
<?php $msg10 = getHelpFromGM(10);?>
<?php $msg11 = getHelpFromGM(11);?>
<?php $msg12 = getHelpFromGM(12);?>

<h3 class="w3-container w3-section w3-padding" style="color:#337ab7; width:180px; margin:auto; text-align: center">聊天中心</h3>

<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#chat1" style="color:red">America / Canada / Brazil</a></li>
        <li><a data-toggle="tab" href="#chat2" style="color:orange">Italy / Germany / England</a></li>
        <li><a data-toggle="tab" href="#chat3" style="color:green">Taiwan / Japan / Thailand</a></li>
        <li><a data-toggle="tab" href="#chat4" style="color:blue">SouthAfrica / Madagascar / Egypt</a></li>
    </ul>

    <div class="tab-content">

        <div id="chat1" class="tab-pane fade in active w3-container w3-section w3-padding">
        
            <div class="w3-container" style="display:inline-block;margin-left:30px;">
                <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px;">
                    給America的訊息:<br> <input type="text" name="message">
                    <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(1)">送出</button>
                </div>
                <div id="board1" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;">
                    <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">America</h3><br>
                </div>
                <div id="msg1" style="display:none"><?php foreach($msg1 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
            </div>

            <div class="w3-container" style="display:inline-block;margin-left:30px;">
                <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px;">
                    給Canada的訊息:<br> <input type="text" name="message">
                    <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(2)">送出</button>
                </div>
                <div id="board2" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;">
                    <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Canada</h3><br>
                </div>
                <div id="msg2" style="display:none"><?php foreach($msg2 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
            </div>

            <div class="w3-container" style="display:inline-block;margin-left:30px;">
                <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px;">
                    給Brazil的訊息:<br> <input type="text" name="message">
                    <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(3)">送出</button>
                </div>
                <div id="board3" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;">
                    <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Canada</h3><br>
                </div>
                <div id="msg3" style="display:none"><?php foreach($msg3 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
            </div>

        </div>

        <div id="chat2" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Italy的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(4)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Germany的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(5)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給England的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(6)">送出</button>
            </div>

            <div id="board4" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Italy</h3><br>
            </div>
            <div id="msg4" style="display:none"><?php foreach($msg4 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board5" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Germany</h3><br>
            </div>
            <div id="msg5" style="display:none"><?php foreach($msg5 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board6" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">England</h3><br>
            </div>
            <div id="msg6" style="display:none"><?php foreach($msg6 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
        </div>

        <div id="chat3" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Taiwan的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(7)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Japan的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(8)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Thailand的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(9)">送出</button>
            </div>

            <div id="board7" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Taiwan</h3><br>
            </div>
            <div id="msg7" style="display:none"><?php foreach($msg7 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board8" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Japan</h3><br>
            </div>
            <div id="msg8" style="display:none"><?php foreach($msg8 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board9" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Thailand</h3><br>
            </div>
            <div id="msg9" style="display:none"><?php foreach($msg9 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
        </div>

        <div id="chat4" class="tab-pane fade w3-container w3-section w3-padding">
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給SouthAfrica的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(10)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Madagascar的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(11)">送出</button>
            </div>
            <div class="w3-container w3-section w3-card-2 w3-padding" style="width: 320px; display:inline-block; margin-left:30px;">
                給Egypt的訊息:<br> <input type="text" name="message">
                <button class="w3-btn w3-padding w3-teal w3-round" style="display: inline-block; margin-left: 30px;" onclick="send_messageGM(12)">送出</button>
            </div>

            <div id="board10" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">SouthAfrica</h3><br>
            </div>
            <div id="msg10" style="display:none"><?php foreach($msg10 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board11" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Madagascar</h3><br>
            </div>
            <div id="msg11" style="display:none"><?php foreach($msg11 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>

            <div id="board12" class="w3-container w3-section w3-card-2 w3-padding" style="width:320px;display:inline-block;margin-left:30px;">
                <h3 class="w3-card w3-padding w3-brown" style="width:180px;margin:auto;text-align:center;">Egypt</h3><br>
            </div>
            <div id="msg12" style="display:none"><?php foreach($msg12 as $arr){ foreach($arr as $value){echo $value . ',';}} ?></div>
        </div>

    </div>
</div>

<script type="text/javascript">
    var i, j, str, msg, len, tmp;
    for (j = 1; j <= 12; j++){
        tmp = document.getElementById("msg" + j.toString()).innerText;
        msg = tmp.split(',');
        len = msg.length;
        str = '';
        for (i = len-4; i > 0; i-=5){
            if (msg[i] == 1)
                str += '<p class="w3-card-2 w3-padding-small w3-round w3-blue" style="float:right;max-width:250px;">' + msg[i+1] + '</p><br><br>';
            else if (msg[i] == 0)
                str += '<p class="w3-card-2 w3-padding-small w3-round w3-light-grey" style="float:left;max-width:250px;">' + msg[i+1] + '</p><br><br>';
        }
        document.getElementById("board" + j.toString()).innerHTML += str;
    }
</script>


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</body>
</html>