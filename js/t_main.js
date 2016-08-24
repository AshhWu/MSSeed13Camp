// mrt picture size switch
var pic_full = 0;
var p;
function pic_switchsize(){
	var x = document.getElementsByClassName("w3-section");
	var i;
	for (i = 0; i < x.length - 2; i++){
		if (pic_full == 0)
			x[i].style.display = "none";
		else
			x[i].style.display = "block";
	}
	if (pic_full == 0){
		p = x[i].style.padding;
		x[i].style.display = "none";
		x[x.length-1].style.padding = 0;
		pic_full = 1;
	} else {
		x[x.length-1].style.padding = p;
		pic_full = 0;
	}
}

//check route & lego cost
var change_line = [[0, [108203], [110303], 0, [109508]], [[203108], 0, [206309, 209305], [205405, 211410], [208511]], [[303110], [309206, 305209], 0, [304407, 310404], [307512]], [0, [405205, 410211], [407304, 404310], 0, [406509]], [[508109], [511208], [512307], [509406], 0]];
var change_point = [108, 110, 109, 206, 209, 205, 211, 208, 304, 310, 307, 406, 509, 512, 404, 407, 511, 410, 405, 305, 309, 508, 303, 203];
var end, result, cost_list, tmp1, tmp2, tmp3, tmp4, count, current_team, current_lego;
function check_lego(start, team, lego){
	var i, j, k, l;
	document.getElementById("route_ul").innerHTML = "";
	document.getElementById("route_list").style.display = "none";

	var line_s, line_e;
	current_team = team;
	current_lego = lego;
	//start = parseInt(document.getElementById("sstation").value);
	end = parseInt(document.getElementById("estation").value);
	if (!Number.isInteger(start) || !Number.isInteger(end)){
		alert("Error!");
		return;
	}
	line_s = parseInt(start / 100);
	line_e = parseInt(end / 100);

	cost_list = [];
	count = 0;

	change_once(start, line_s, line_e, end);
	change_twice(start, line_s, line_e, end);
	l = change_point.length - 1;
	var a = 0, b = 0;
	for (i = 0; i < l; i++)
		if (start == change_point[i])
			a = change_point[l - i];
	for (j = 0; j < l; j++)
		if (end == change_point[j])
			b = change_point[l - j];

	if (a > 0){
		change_once(a, parseInt(a/100), line_e, end);
		change_twice(a, parseInt(a/100), line_e, end);
		if (b > 0){
			change_once(start, line_s, parseInt(b/100), b);
			change_twice(start, line_s, parseInt(b/100), b);
			change_once(a, parseInt(a/100), parseInt(b/100), b);
			change_twice(a, parseInt(a/100), parseInt(b/100), b);
		}
	} else if (b > 0){
		change_once(start, line_s, parseInt(b/100), b);
		change_twice(start, line_s, parseInt(b/100), b);
	}
	

	document.getElementById("route_list").style.display = "block";
}

function change_once(start, line_s, line_e, end){
	var i;
	if (line_s == line_e){
		count++;
		mrt_route([start, end], count);
		return;
	}
	if (change_line[line_s-1][line_e-1] != 0)
		for (i = 0; i < change_line[line_s-1][line_e-1].length; i++){
			tmp1 = parseInt(change_line[line_s-1][line_e-1][i]/1000);
			tmp2 = parseInt(change_line[line_s-1][line_e-1][i]%1000);
			if (start == tmp1 || tmp2 == end)
				continue;
			else {
				count++;
				mrt_route([start, tmp1, tmp2, end], count);
			}
		}
}

function change_twice(start, line_s, line_e, end){
	var i, j, k;
	for (i = 1; i <= 5; i++)
		if (i != line_s && i != line_e)
			if (change_line[line_s-1][i-1] != 0 && change_line[i-1][line_e-1] != 0)
				for (j = 0; j < change_line[line_s-1][i-1].length; j++){
					tmp1 = parseInt(change_line[line_s-1][i-1][j]/1000);
					tmp2 = parseInt(change_line[line_s-1][i-1][j]%1000);
					if (start == tmp1 || tmp1 == end)
						continue;
					else
						for (k = 0; k < change_line[i-1][line_e-1].length; k++){
							tmp3 = parseInt(change_line[i-1][line_e-1][k]/1000);
							tmp4 = parseInt(change_line[i-1][line_e-1][k]%1000);
							if (tmp4 == end || tmp2 == tmp3)
								continue;
							else {
								count++;
								mrt_route([start, tmp1, tmp2, tmp3, tmp4, end], count);
							}
						}
				}
}

var lego_color = ["yellow", "red", "green", "yellow", "blue"];
var mrt_value = {'100':'動物園', '101':'木柵', '102':'萬芳社區', '103':'萬芳醫院', '104':'辛亥', '105':'麟光', '106':'六張犁', '107':'科技大樓', '108':'大安', '109':'忠孝復興', '110':'南京復興', '111':'中山國中', '112':'松山機場', '113':'大直', '114':'劍南路', '115':'西湖', '116':'港墘', '117':'文德', '118':'內湖', '119':'大湖公園', '120':'葫洲', '121':'東湖', '122':'南港軟體園區', '123':'南港展覽館', '226':'淡水', '225':'紅樹林', '224':'竹圍', '223':'關渡', '222':'忠義', '221':'復興崗', '220':'新北投', '220':'北投', '219':'奇岩', '218':'唭哩岸', '217':'石牌', '216':'明德', '215':'芝山', '214':'士林', '213':'劍潭', '212':'圓山', '211':'民權西路', '210':'雙連', '209':'中山', '208':'台北車站', '207':'台大醫院', '206':'中正紀念堂', '205':'東門', '204':'大安森林公園', '203':'大安', '202':'信義安和', '201':'台北101/世貿', '200':'象山', '300':'松山', '301':'南京三民', '302':'台北小巨蛋', '303':'南京復興', '304':'松江南京', '305':'中山', '306':'北門', '307':'西門', '308':'小南門', '309':'中正紀念堂', '310':'古亭', '311':'台電大樓', '312':'公館', '313':'萬隆', '314':'景美', '315':'大坪林', '316':'七張', '316':'小碧潭', '317':'新店區公所', '318':'新店', '400':'南勢角', '401':'景安', '402':'永安市場', '403':'頂溪', '404':'古亭', '405':'東門', '406':'忠孝新生', '407':'松江南京', '408':'行天宮', '409':'中山國小', '410':'民權西路', '411':'大橋頭', '412':'台北橋', '413':'菜寮', '414':'三重', '415':'先嗇宮', '416':'頭前庄', '417':'新莊', '418':'輔大', '419':'丹鳳', '420':'迴龍', '412':'三重國小', '413':'三和國中', '414':'徐匯中學', '415':'三民高中', '416':'蘆洲', '523':'頂埔', '521':'永寧', '520':'土城', '519':'海山', '518':'亞東醫院', '517':'府中', '516':'板橋', '515':'新埔', '514':'江子翠', '513':'龍山寺', '512':'西門', '511':'台北車站', '510':'善導寺', '509':'忠孝新生', '508':'忠孝復興', '507':'忠孝敦化', '506':'國父紀念館', '505':'市政府', '504':'永春', '503':'後山埤', '502':'昆陽', '501':'南港', '500':'南港展覽館'};
function mrt_route(route, count){
	var cost = [0, 0, 0, 0, 0];
	var l, disable = 0;
	result ='<li><div class="w3-grey">'

	for (l = 0; l < route.length-1; l++){
		if (parseInt(route[l]/100) == parseInt(route[l+1]/100)){
			result += '<p>' + mrt_value[route[l].toString()] + ' </p><p style="font-size:20px;color:' + lego_color[parseInt(route[l]/100)-1] + '">-></p> ';
			if (parseInt(route[l]/100) == 1)
				cost[3] += Math.abs(route[l+1]%100 - route[l]%100);
			else
				cost[parseInt(route[l]/100) - 1] += Math.abs(route[l+1]%100 - route[l]%100);
		}
	}
	result += mrt_value[route[l].toString()] + '</div>';

	for (l = 1; l < 5; l++){
		result += '<div class="w3-tag w3-' + lego_color[l] + '"><p>' + cost[l] + '</p></div>'
		if (cost[l] > document.getElementById("lego" + (l+1).toString()).innerText)
			disable = 1;
	}
	if (disable == 1)
		result += '<button id="cost' + count.toString() + '"class="w3-btn w3-round w3-purple w3-disabled">Lego不夠</button></li>';
	else {
		result += '<button id="cost' + count.toString() + '"class="w3-btn w3-round w3-purple" onclick="lego_refresh(this)">按我Go</button></li>';
	}

	document.getElementById("route_ul").innerHTML += result;

	cost_list.push(cost);
}

function lego_refresh(obj){
	var n = parseInt(obj.id[obj.id.length-1]);
	var rest_lego, tmp_str = 't_updateAllCube.php?team=' + current_team + '&c1=0';
	var j;
	for (j = 1; j < 5; j++){
		rest_lego = current_lego[j-1] - cost_list[n-1][j];
		alert(rest_lego);
		tmp_str += '&c' + (j+1).toString() + '=' + rest_lego.toString();
	}
	alert(tmp_str);
	window.location = tmp_str;

	tmp_str = 't_updatePosition.php?team=' + current_team + '&position=' + end.toString();
	window.location = tmp_str;

	alert("移動成功! 請向" + mrt_value[end.toString()] + "站前進~");
}

//lego_trade
function send_request(sender, receiver){
	var tmp_str = 't_addTradeRequest.php?sender=' + sender + '&receiver=' + receiver + '&c1=0&fc1=0';
	var i, tmp_value;
	var inputs = document.getElementsByTagName("input");
	for (i = 0; i < 4; i++){
		tmp_value = inputs[2*i].value;
		tmp_str += '&c' + (i+2).toString() + '=' + tmp_value;
		tmp_value = inputs[2*i+1].value;
		tmp_str += '&fc' + (i+2).toString() + '=' + tmp_value;
	}

	window.location = tmp_str;
}

function trade_init(trade){
	if (trade.length <= 1)
		return;

	var i, sender;
	var tmp_str = '';
	for (i = 1; i < trade.length; i += 14){
		sender = trade[i];
		tmp_str += '<li class="w3-container"><div class="w3-card w3-sand w3-padding"><p>第' + sender + '組向你提出的交易</p></div><a class="w3-btn w3-purple w3-padding w3-round">回覆</a></li>';
	}
	document.getElementById("trade_ul").innerHTML = tmp_str;
}

function wait_init(wait){
	if (wait.length <= 1)
		return;

	var i, receiver;
	var tmp_str = '';
	for (i = 2; i < wait.length; i += 14){
		receiver = wait[i];
		tmp_str += '<li class="w3-container"><div class="w3-card w3-sand w3-padding"><p>你向第' + receiver + '組提出的交易</p></div><a class="w3-btn w3-purple w3-padding w3-round">查看</a></li>';
	}
	document.getElementById("wait_ul").innerHTML = tmp_str;
}