

var menu_open = 0;
function menu_action(){
	if (menu_open == 0){
		document.getElementById("topnav").style.width = "50%";
		document.getElementById("sidemenu").style.width = "50%";
		document.getElementById("sidemenu").style.display = "block";
		menu_open = 1;
	} else {
		document.getElementById("topnav").style.width = "100%";
		document.getElementById("sidemenu").style.display = "none";
		menu_open = 0;
	}
}

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
var start, end, line_s, line_e, station_s, station_e;
var change_line = [[0, [108203], [110303], 0, [109508]], [[203108], 0, [206309, 209305], [205405, 211410], [208511]], [[303110], [309206, 305209], 0, [304407, 310404], [307512]], [0, [405205, 410211], [407304, 404310], 0, [406509]], [[508109], [511208], [512307], [509406], 0]];
var result, cost, tmp1, tmp2, tmp3, tmp4, i, j, k;
function check_lego(){
	document.getElementById("route_ul").innerHTML = "";
	document.getElementById("route_list").style.display = "none";

	start = parseInt(document.getElementById("sstation").value);
	end = parseInt(document.getElementById("estation").value);
	if (!Number.isInteger(start) || !Number.isInteger(end)){
		alert("Error!");
		return;
	}

	line_s = parseInt(start / 100);
	line_e = parseInt(end / 100);
	station_s = start % 100;
	station_e = end % 100;

	result = "";
	if (line_s == line_e){
		mrt_route([start, end]);
	} else {
		//change line *1
		if (change_line[line_s-1][line_e-1] != 0)
			for (i = 0; i < change_line[line_s-1][line_e-1].length; i++){
				tmp1 = parseInt(change_line[line_s-1][line_e-1][i]/1000);
				tmp2 = parseInt(change_line[line_s-1][line_e-1][i]%1000);
				mrt_route([start, tmp1, tmp2, end]);
			}

		//change line *2
		for (i = 1; i <= 5; i++)
			if (i != line_s && i != line_e)
				if (change_line[line_s-1][i-1] != 0 && change_line[i-1][line_e-1] != 0)
					for (j = 0; j < change_line[line_s-1][i-1].length; j++){
						tmp1 = parseInt(change_line[line_s-1][i-1][j]/1000);
						tmp2 = parseInt(change_line[line_s-1][i-1][j]%1000);
						for (k = 0; k < change_line[i-1][line_e-1].length; k++){
							tmp3 = parseInt(change_line[i-1][line_e-1][k]/1000);
							tmp4 = parseInt(change_line[i-1][line_e-1][k]%1000);
							mrt_route([start, tmp1, tmp2, tmp3, tmp4, end]);
						}
					}

	}

	document.getElementById("route_list").style.display = "block";
}

var lego_color = ["orange", "red", "green", "yellow", "blue"];
var mrt_value = {'100':'�ʪ���', '101':'��]', '102':'�U�ڪ���', '103':'�U����|', '104':'����', '105':'���', '106':'���i�p', '107':'��ޤj��', '108':'�j�w', '109':'�����_��', '110':'�n�ʴ_��', '111':'���s�ꤤ', '112':'�Q�s����', '113':'�j��', '114':'�C�n��', '115':'���', '116':'���Y', '117':'��w', '118':'����', '119':'�j�򤽶�', '120':'���w', '121':'�F��', '122':'�n��n����', '123':'�n��i���]', '226':'�H��', '225':'����L', '224':'�˳�', '223':'����', '222':'���q', '221':'�_���^', '220':'�s�_��', '220':'�_��', '219':'�_��', '218':'ԧ����', '217':'�۵P', '216':'���w', '215':'�ۤs', '214':'�h�L', '213':'�C��', '212':'��s', '211':'���v���', '210':'���s', '209':'���s', '208':'�x�_����', '207':'�x�j��|', '206':'����������', '205':'�F��', '204':'�j�w�˪L����', '203':'�j�w', '202':'�H�q�w�M', '201':'�x�_101/�@�T', '200':'�H�s', '300':'�Q�s', '301':'�n�ʤT��', '302':'�x�_�p���J', '303':'�n�ʴ_��', '304':'�Q���n��', '305':'���s', '306':'�_��', '307':'���', '308':'�p�n��', '309':'����������', '310':'�j�F', '311':'�x�q�j��', '312':'���]', '313':'�U��', '314':'����', '315':'�j�W�L', '316':'�C�i', '316':'�p�Ѽ�', '317':'�s���Ϥ���', '318':'�s��', '400':'�n�ը�', '401':'���w', '402':'�æw����', '403':'����', '404':'�j�F', '405':'�F��', '406':'�����s��', '407':'�Q���n��', '408':'��Ѯc', '409':'���s��p', '410':'���v���', '411':'�j���Y', '412':'�x�_��', '413':'��d', '414':'�T��', '415':'���ޮc', '416':'�Y�e��', '417':'�s��', '418':'���j', '419':'����', '420':'�j�s', '412':'�T����p', '413':'�T�M�ꤤ', '414':'�}�פ���', '415':'�T������', '416':'Ī�w', '523':'���H', '521':'�ù�', '520':'�g��', '519':'���s', '518':'�ȪF��|', '517':'����', '516':'�O��', '515':'�s�H', '514':'���l�A', '513':'�s�s�x', '512':'���', '511':'�x�_����', '510':'���ɦx', '509':'�����s��', '508':'�����_��', '507':'��������', '506':'��������]', '505':'���F��', '504':'�ìK', '503':'��s��', '502':'����', '501':'�n��', '500':'�n��i���]'};
function mrt_route(route){
	var cost = [0, 0, 0, 0, 0];
	var i;
	result ='<li class="w3-container"><div class="w3-card-2 w3-purple w3-padding-small w3-round-large">'

	for (i = 0; i < route.length-1; i++){
		if (parseInt(route[i]/100) == parseInt(route[i+1]/100)){
			result += mrt_value[route[i].toString()] + ' > ';
			cost[parseInt(route[i]/100) - 1] += Math.abs(route[i+1]%100 - route[i]%100);
		}
	}
	result += mrt_value[route[i].toString()] + '</div>';

	for (i = 0; i < 5; i++){
		result += '<div class="w3-tag w3-' + lego_color[i] + '"><p>' + cost[i] + '</p></div>'
	}
	result += '<button class="w3-btn w3-round w3-margin">Go</button></li>';

	document.getElementById("route_ul").innerHTML += result;
}