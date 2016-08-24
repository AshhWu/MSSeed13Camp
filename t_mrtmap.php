<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>台北行</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script src="js/t_main.js"></script>
    <link rel="stylesheet" href="css/t_style.css">
    <link rel="stylesheet" href="css/w3.css">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php include "backend/navbar/nav.php"; ?>
<?php include "t_getitems.php"; ?>
<?php $team = $_SESSION['t_team'];?>
<?php $sstation = getPosition($team); ?>
<?php $lego = getAllCubeNum($team); ?>

<h5 id="team_label" class="w3-indigo w3-padding">我是第<?php echo $team;?>組</h5>
<div class="middle_part w3-container w3-section">
	<h5 class="w3-brown w3-padding">移動</h5>
	<section class="section1 w3-container">
	<p id="start"><?php echo $sstation;?></p>
	<script type="text/javascript">
		var mrt_value = {'100':'動物園', '101':'木柵', '102':'萬芳社區', '103':'萬芳醫院', '104':'辛亥', '105':'麟光', '106':'六張犁', '107':'科技大樓', '108':'大安', '109':'忠孝復興', '110':'南京復興', '111':'中山國中', '112':'松山機場', '113':'大直', '114':'劍南路', '115':'西湖', '116':'港墘', '117':'文德', '118':'內湖', '119':'大湖公園', '120':'葫洲', '121':'東湖', '122':'南港軟體園區', '123':'南港展覽館', '226':'淡水', '225':'紅樹林', '224':'竹圍', '223':'關渡', '222':'忠義', '221':'復興崗', '220':'新北投', '220':'北投', '219':'奇岩', '218':'唭哩岸', '217':'石牌', '216':'明德', '215':'芝山', '214':'士林', '213':'劍潭', '212':'圓山', '211':'民權西路', '210':'雙連', '209':'中山', '208':'台北車站', '207':'台大醫院', '206':'中正紀念堂', '205':'東門', '204':'大安森林公園', '203':'大安', '202':'信義安和', '201':'台北101/世貿', '200':'象山', '300':'松山', '301':'南京三民', '302':'台北小巨蛋', '303':'南京復興', '304':'松江南京', '305':'中山', '306':'北門', '307':'西門', '308':'小南門', '309':'中正紀念堂', '310':'古亭', '311':'台電大樓', '312':'公館', '313':'萬隆', '314':'景美', '315':'大坪林', '316':'七張', '316':'小碧潭', '317':'新店區公所', '318':'新店', '400':'南勢角', '401':'景安', '402':'永安市場', '403':'頂溪', '404':'古亭', '405':'東門', '406':'忠孝新生', '407':'松江南京', '408':'行天宮', '409':'中山國小', '410':'民權西路', '411':'大橋頭', '412':'台北橋', '413':'菜寮', '414':'三重', '415':'先嗇宮', '416':'頭前庄', '417':'新莊', '418':'輔大', '419':'丹鳳', '420':'迴龍', '412':'三重國小', '413':'三和國中', '414':'徐匯中學', '415':'三民高中', '416':'蘆洲', '523':'頂埔', '521':'永寧', '520':'土城', '519':'海山', '518':'亞東醫院', '517':'府中', '516':'板橋', '515':'新埔', '514':'江子翠', '513':'龍山寺', '512':'西門', '511':'台北車站', '510':'善導寺', '509':'忠孝新生', '508':'忠孝復興', '507':'忠孝敦化', '506':'國父紀念館', '505':'市政府', '504':'永春', '503':'後山埤', '502':'昆陽', '501':'南港', '500':'南港展覽館'};
		document.getElementById("start").innerHTML = "<label>起站: " + mrt_value[document.getElementById("start").innerHTML] + "</label>";
	</script>
	<form>
		<label for="estation">訖站: </label>
		<select id="estation" size="1">
				<option style="background-color: #FFFFFF;">(下拉選單)</option>
				<optgroup style='background-color: #CC9900;' label='文湖線'><option style='background-color: #CC9900;' value='100'  >動物園</option><option style='background-color: #CC9900;' value='101'  >木柵</option><option style='background-color: #CC9900;' value='102'  >萬芳社區</option><option style='background-color: #CC9900;' value='103'  >萬芳醫院</option><option style='background-color: #CC9900;' value='104'  >辛亥</option><option style='background-color: #CC9900;' value='105'  >麟光</option><option style='background-color: #CC9900;' value='106'  >六張犁</option><option style='background-color: #CC9900;' value='107'  >科技大樓</option><option style='background-color: #CC9900;' value='108'  >大安</option><option style='background-color: #CC9900;' value='109'  >忠孝復興</option><option style='background-color: #CC9900;' value='110'  >南京復興</option><option style='background-color: #CC9900;' value='111'  >中山國中</option><option style='background-color: #CC9900;' value='112'  >松山機場</option><option style='background-color: #CC9900;' value='113'  >大直</option><option style='background-color: #CC9900;' value='114'  >劍南路</option><option style='background-color: #CC9900;' value='115'  >西湖</option><option style='background-color: #CC9900;' value='116'  >港墘</option><option style='background-color: #CC9900;' value='117'  >文德</option><option style='background-color: #CC9900;' value='118'  >內湖</option><option style='background-color: #CC9900;' value='119'  >大湖公園</option><option style='background-color: #CC9900;' value='120'  >葫洲</option><option style='background-color: #CC9900;' value='121'  >東湖</option><option style='background-color: #CC9900;' value='122'  >南港軟體園區</option><option style='background-color: #CC9900;' value='123'  >南港展覽館</option></optgroup><optgroup style='background-color: #FD5B56;' label='淡水信義線'><option style='background-color: #FD5B56;' value='226'  >淡水</option><option style='background-color: #FD5B56;' value='225'  >紅樹林</option><option style='background-color: #FD5B56;' value='224'  >竹圍</option><option style='background-color: #FD5B56;' value='223'  >關渡</option><option style='background-color: #FD5B56;' value='222'  >忠義</option><option style='background-color: #FD5B56;' value='221'  >復興崗</option><option style='background-color: #FD5B56;' value='220'  >新北投</option><option style='background-color: #FD5B56;' value='220'  >北投</option><option style='background-color: #FD5B56;' value='219'  >奇岩</option><option style='background-color: #FD5B56;' value='218'  >唭哩岸</option><option style='background-color: #FD5B56;' value='217'  >石牌</option><option style='background-color: #FD5B56;' value='216'  >明德</option><option style='background-color: #FD5B56;' value='215'  >芝山</option><option style='background-color: #FD5B56;' value='214'  >士林</option><option style='background-color: #FD5B56;' value='213'  >劍潭</option><option style='background-color: #FD5B56;' value='212'  >圓山</option><option style='background-color: #FD5B56;' value='211'  >民權西路</option><option style='background-color: #FD5B56;' value='210'  >雙連</option><option style='background-color: #FD5B56;' value='209'  >中山</option><option style='background-color: #FD5B56;' value='208'  >台北車站</option><option style='background-color: #FD5B56;' value='207'  >台大醫院</option><option style='background-color: #FD5B56;' value='206'  >中正紀念堂</option><option style='background-color: #FD5B56;' value='205'  >東門</option><option style='background-color: #FD5B56;' value='204'  >大安森林公園</option><option style='background-color: #FD5B56;' value='203'  >大安</option><option style='background-color: #FD5B56;' value='202'  >信義安和</option><option style='background-color: #FD5B56;' value='201'  >台北101/世貿</option><option style='background-color: #FD5B56;' value='200'  >象山</option></optgroup><optgroup style='background-color: #009900;' label='松山新店線'><option style='background-color: #009900;' value='300'  >松山</option><option style='background-color: #009900;' value='301'  >南京三民</option><option style='background-color: #009900;' value='302'  >台北小巨蛋</option><option style='background-color: #009900;' value='303'  >南京復興</option><option style='background-color: #009900;' value='304'  >松江南京</option><option style='background-color: #009900;' value='305'  >中山</option><option style='background-color: #009900;' value='306'  >北門</option><option style='background-color: #009900;' value='307'  >西門</option><option style='background-color: #009900;' value='308'  >小南門</option><option style='background-color: #009900;' value='309'  >中正紀念堂</option><option style='background-color: #009900;' value='310'  >古亭</option><option style='background-color: #009900;' value='311'  >台電大樓</option><option style='background-color: #009900;' value='312'  >公館</option><option style='background-color: #009900;' value='313'  >萬隆</option><option style='background-color: #009900;' value='314'  >景美</option><option style='background-color: #009900;' value='315'  >大坪林</option><option style='background-color: #009900;' value='316'  >七張</option><option style='background-color: #009900;' value='316'  >小碧潭</option><option style='background-color: #009900;' value='317'  >新店區公所</option><option style='background-color: #009900;' value='318'  >新店</option></optgroup><optgroup style='background-color: #FFCC66;' label='中和新蘆線'><option style='background-color: #FFCC66;' value='400'  >南勢角</option><option style='background-color: #FFCC66;' value='401'  >景安</option><option style='background-color: #FFCC66;' value='402'  >永安市場</option><option style='background-color: #FFCC66;' value='403'  >頂溪</option><option style='background-color: #FFCC66;' value='404'  >古亭</option><option style='background-color: #FFCC66;' value='405'  >東門</option><option style='background-color: #FFCC66;' value='406'  >忠孝新生</option><option style='background-color: #FFCC66;' value='407'  >松江南京</option><option style='background-color: #FFCC66;' value='408'  >行天宮</option><option style='background-color: #FFCC66;' value='409'  >中山國小</option><option style='background-color: #FFCC66;' value='410'  >民權西路</option><option style='background-color: #FFCC66;' value='411'  >大橋頭</option><option style='background-color: #FFCC66;' value='412'  >台北橋</option><option style='background-color: #FFCC66;' value='413'  >菜寮</option><option style='background-color: #FFCC66;' value='414'  >三重</option><option style='background-color: #FFCC66;' value='415'  >先嗇宮</option><option style='background-color: #FFCC66;' value='416'  >頭前庄</option><option style='background-color: #FFCC66;' value='417'  >新莊</option><option style='background-color: #FFCC66;' value='418'  >輔大</option><option style='background-color: #FFCC66;' value='419'  >丹鳳</option><option style='background-color: #FFCC66;' value='420'  >迴龍</option><option style='background-color: #FFCC66;' value='412'  >三重國小</option><option style='background-color: #FFCC66;' value='413'  >三和國中</option><option style='background-color: #FFCC66;' value='414'  >徐匯中學</option><option style='background-color: #FFCC66;' value='415'  >三民高中</option><option style='background-color: #FFCC66;' value='416'  >蘆洲</option></optgroup><optgroup style='background-color: #398AFC;' label='板南線'><option style='background-color: #398AFC;' value='523'  >頂埔</option><option style='background-color: #398AFC;' value='521'  >永寧</option><option style='background-color: #398AFC;' value='520'  >土城</option><option style='background-color: #398AFC;' value='519'  >海山</option><option style='background-color: #398AFC;' value='518'  >亞東醫院</option><option style='background-color: #398AFC;' value='517'  >府中</option><option style='background-color: #398AFC;' value='516'  >板橋</option><option style='background-color: #398AFC;' value='515'  >新埔</option><option style='background-color: #398AFC;' value='514'  >江子翠</option><option style='background-color: #398AFC;' value='513'  >龍山寺</option><option style='background-color: #398AFC;' value='512'  >西門</option><option style='background-color: #398AFC;' value='511'  >台北車站</option><option style='background-color: #398AFC;' value='510'  >善導寺</option><option style='background-color: #398AFC;' value='509'  >忠孝新生</option><option style='background-color: #398AFC;' value='508'  >忠孝復興</option><option style='background-color: #398AFC;' value='507'  >忠孝敦化</option><option style='background-color: #398AFC;' value='506'  >國父紀念館</option><option style='background-color: #398AFC;' value='505'  >市政府</option><option style='background-color: #398AFC;' value='504'  >永春</option><option style='background-color: #398AFC;' value='503'  >後山埤</option><option style='background-color: #398AFC;' value='502'  >昆陽</option><option style='background-color: #398AFC;' value='501'  >南港</option><option style='background-color: #398AFC;' value='500'  >南港展覽館</option></optgroup>
		</select>
	</form>
	</section>
	<button class="w3-btn w3-khaki w3-round" onclick="check_lego(<?php echo $sstation . ', ' . $team;?>)">確定</button>
</div>

<div class="middle_part w3-container w3-section">
	<h5 class="w3-brown w3-padding">樂高</h5>
	<section class="section2 w3-container">
		<div id="lego2" class="w3-tag w3-red"><p><?php echo $lego[1];?></p></div>
		<div id="lego3" class="w3-tag w3-green"><p><?php echo $lego[2];?></p></div>
		<div id="lego4" class="w3-tag w3-yellow"><p><?php echo $lego[3];?></p></div>
		<div id="lego5" class="w3-tag w3-blue"><p><?php echo $lego[4];?></p></div>
	</section>
</div>

<div id="route_list" class="w3-container w3-section w3-padding">
	<h4 class="w3-card-4 w3-pink w3-padding">路線選擇</h4>
	<ul id="route_ul" class="w3-ul">
	</ul>
</div>

<div id="bottom_part" class="w3-container w3-section w3-grey">

<img src="png/MRT.jpg" onclick="pic_switchsize()">

</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My Scripts -->
<script src="js/nav.js"></script>

</body>
</html>