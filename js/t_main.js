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
var end, result, cost_list, tmp1, tmp2, tmp3, tmp4, count;
function check_lego(start){
	var i, j, k, l;
	document.getElementById("route_ul").innerHTML = "";
	document.getElementById("route_list").style.display = "none";

	var line_s, line_e;
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
var mrt_value = {'100':'�ʪ���', '101':'��]', '102':'�U�ڪ���', '103':'�U����|', '104':'����', '105':'���', '106':'���i�p', '107':'��ޤj��', '108':'�j�w', '109':'�����_��', '110':'�n�ʴ_��', '111':'���s�ꤤ', '112':'�Q�s����', '113':'�j��', '114':'�C�n��', '115':'���', '116':'���Y', '117':'��w', '118':'����', '119':'�j�򤽶�', '120':'���w', '121':'�F��', '122':'�n��n����', '123':'�n��i���]', '226':'�H��', '225':'����L', '224':'�˳�', '223':'����', '222':'���q', '221':'�_���^', '220':'�s�_��', '220':'�_��', '219':'�_��', '218':'ԧ����', '217':'�۵P', '216':'���w', '215':'�ۤs', '214':'�h�L', '213':'�C��', '212':'��s', '211':'���v���', '210':'���s', '209':'���s', '208':'�x�_����', '207':'�x�j��|', '206':'����������', '205':'�F��', '204':'�j�w�˪L����', '203':'�j�w', '202':'�H�q�w�M', '201':'�x�_101/�@�T', '200':'�H�s', '300':'�Q�s', '301':'�n�ʤT��', '302':'�x�_�p���J', '303':'�n�ʴ_��', '304':'�Q���n��', '305':'���s', '306':'�_��', '307':'���', '308':'�p�n��', '309':'����������', '310':'�j�F', '311':'�x�q�j��', '312':'���]', '313':'�U��', '314':'����', '315':'�j�W�L', '316':'�C�i', '316':'�p�Ѽ�', '317':'�s���Ϥ���', '318':'�s��', '400':'�n�ը�', '401':'���w', '402':'�æw����', '403':'����', '404':'�j�F', '405':'�F��', '406':'�����s��', '407':'�Q���n��', '408':'��Ѯc', '409':'���s��p', '410':'���v���', '411':'�j���Y', '412':'�x�_��', '413':'��d', '414':'�T��', '415':'���ޮc', '416':'�Y�e��', '417':'�s��', '418':'���j', '419':'����', '420':'�j�s', '412':'�T����p', '413':'�T�M�ꤤ', '414':'�}�פ���', '415':'�T������', '416':'Ī�w', '523':'���H', '521':'�ù�', '520':'�g��', '519':'���s', '518':'�ȪF��|', '517':'����', '516':'�O��', '515':'�s�H', '514':'���l�A', '513':'�s�s�x', '512':'���', '511':'�x�_����', '510':'���ɦx', '509':'�����s��', '508':'�����_��', '507':'��������', '506':'��������]', '505':'���F��', '504':'�ìK', '503':'��s��', '502':'����', '501':'�n��', '500':'�n��i���]'};
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
		result += '<button id="cost' + count.toString() + '"class="w3-btn w3-round w3-purple w3-disabled">Lego����</button></li>';
	else
		result += '<button id="cost' + count.toString() + '"class="w3-btn w3-round w3-purple" onclick="lego_refresh(this)">����Go</button></li>';

	document.getElementById("route_ul").innerHTML += result;

	cost_list.push(cost);
}

function lego_refresh(obj){

	/* var n = parseInt(obj.id[obj.id.length-1]);
	var rest_lego;
	var tmp_str = 't_updateAllCube.php?team=1&c1=0';
	var j;
	for (j = 1; j < 5; j++){
		rest_lego = document.getElementById("lego" + (j+1).toString()).innerText - cost_list[n-1][j];
		document.getElementById("lego" + (j+1).toString()).innerHTML = "<p>" + rest_lego.toString() + "</p>"
		tmp_str += '&c' + (j+1).toString() + '=' + rest_lego.toString();
	}
	document.getElementById("route_list").style.display = "none"; */

	var tmp_str = 't_updatePosition.php?team=1&position=' + end.toString();
	window.location = tmp_str;
	alert("���ʦ��\! �ЦV" + mrt_value[end.toString()] + "���e�i~");
}

//lego_trade
function send_request(){
	var tmp_str = 't_addTradeRequest.php?sender=1&receiver=4&c1=0&fc1=0';
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
	var tmp_str;
	for (i = 1; i < trade.length; i += 14){
		sender = trade[i];
		tmp_str += '<li class="w3-container"><div class="w3-card w3-orange w3-padding"><p>��' + sender + '�զV�A���X�����</p></div><a class="w3-btn w3-purple w3-padding w3-round">�d��</a></li>';
	}
	document.getElementById("trade_ul").innerHTML = tmp_str;
}

function wait_init(wait){
	if (wait.length <= 1)
		return;

	var i, receiver;
	var tmp_str;
	for (i = 2; i < wait.length; i += 14){
		receiver = wait[i];
		tmp_str += '<li class="w3-container"><div class="w3-card w3-orange w3-padding"><p>�A�V��' + receiver + '�մ��X�����</p></div><a class="w3-btn w3-purple w3-padding w3-round">�d��</a></li>';
	}
	document.getElementById("wait_ul").innerHTML = tmp_str;
}