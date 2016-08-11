<!DOCTYPE html>
<html>
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1;">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/t_main.js"></script>
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="jquery-3.1.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>

<?php include "nav.php"; ?>
<?php include "t_getitems.php"; ?>

<div class="middle_part w3-container w3-section">
	<h5 class="w3-brown w3-padding w3-round-large">樂高</h5>
	<section class="section2 w3-container">
		<?php $team=1; ?>
		<div id="lego1" class="w3-tag w3-orange"><p><?php echo getCubeNum($team, 1)?></p></div>
		<div id="lego2" class="w3-tag w3-red"><p><?php echo getCubeNum($team, 2)?></p></div>
		<div id="lego3" class="w3-tag w3-green"><p><?php echo getCubeNum($team, 3)?></p></div>
		<div id="lego4" class="w3-tag w3-yellow"><p><?php echo getCubeNum($team, 4)?></p></div>
		<div id="lego5" class="w3-tag w3-blue"><p><?php echo getCubeNum($team, 5)?></p></div>
	</section>
</div>

<div id="lego_list" class="w3-container w3-section w3-round w3-padding">
	<h4 class="w3-card-4 w3-sand w3-round w3-padding">各組樂高(點組別按鈕請求交易)</h4>
	<ul class="w3-ul w3-hoverable">
		<li class="w3-container">
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="./t_lego_change.php">第一組</a>
			<div class="w3-tag w3-orange"><p>18</p></div>
			<div class="w3-tag w3-red"><p>25</p></div>
			<div class="w3-tag w3-green"><p>13</p></div>
			<div class="w3-tag w3-yellow"><p>16</p></div>
			<div class="w3-tag w3-blue"><p>10</p></div>
		</li>
		<li class="w3-container">
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="./t_lego_change.php">第二組</a>
			<div class="w3-tag w3-orange"><p>13</p></div>
			<div class="w3-tag w3-red"><p>22</p></div>
			<div class="w3-tag w3-green"><p>24</p></div>
			<div class="w3-tag w3-yellow"><p>11</p></div>
			<div class="w3-tag w3-blue"><p>17</p></div>
		</li>
		<li class="w3-container">
			<a class="w3-btn w3-purple w3-padding w3-round-large" href="./t_lego_change.php">第三組</a>
			<div class="w3-tag w3-orange"><p>26</p></div>
			<div class="w3-tag w3-red"><p>15</p></div>
			<div class="w3-tag w3-green"><p>20</p></div>
			<div class="w3-tag w3-yellow"><p>23</p></div>
			<div class="w3-tag w3-blue"><p>14</p></div>
		</li>
	</ul>
</div>




</body>
</html>