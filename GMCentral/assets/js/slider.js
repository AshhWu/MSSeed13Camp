firstrenew = function(){
	getAllResources();
	getAllStrong();
	calculateTotal();
	chartMaker();
	sleep(8000);
	getAllResources();
	getAllStrong();
	calculateTotal();
	chartMaker();
}
renew = function(){
	getAllResources();
	getAllStrong();
	calculateTotal();
	chartMaker();
}


function sleep(milliseconds) {
	var start = new Date().getTime();
		for (var i = 0; i < 1e7; i++) {
			if ((new Date().getTime() - start) > milliseconds){
			break;
		}
	}
}

chartMaker = function(){
	var chart = AmCharts.makeChart("chartdiv20", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": x20[0],
				"color": "#FF0F00"
			},{
				"country": "2",
				"visits": x20[9],
				"color": "#FF0F00"
			},{
				"country": "3",
				"visits": x20[10],
				"color": "#FF0F00"
			},{
				"country": "4",
				"visits": x20[11],
				"color": "#FFB11B"
			}, {
				"country": "5",
				"visits": x20[1],
				"color": "#FFB11B"
			},{
				"country": "6",
				"visits": x20[2],
				"color": "#FFB11B"
			},{
				"country": "7",
				"visits": x20[3],
				"color": "#3A8FB7"
			},{
				"country": "8",
				"visits": x20[4],
				"color": "#3A8FB7"
			}, {
				"country": "9",
				"visits": x20[5],
				"color": "#3A8FB7"
			}, {
				"country": "10",
				"visits": x20[6],
				"color": "#86C166"
			}, {
				"country": "11",
				"visits": x20[7],
				"color": "#86C166"
			}, {
				"country": "12",
				"visits": x20[8],
				"color": "#86C166"
			}],
			"valueAxes": [{
				"position": "left",
				"title": "原料",
				"minimum": 0,
				"integersOnly":true
			}],
			"graphs": [{
				"balloonText": "[[category]]: <b>[[value]]</b>",
				"fillColorsField": "color",
				"fillAlphas": 1,
				"lineAlpha": 0.1,
				"type": "column",
				"valueField": "visits"
			}],
			"depth3D": 20,
			"angle": 30,
			"chartCursor": {
				"categoryBalloonEnabled": false,
				"cursorAlpha": 0,
				"zoomable": false
			},
			"categoryField": "country",
			"categoryAxis": {
				"gridPosition": "start",
				"labelRotation": 0
			},
			"export": {
				"enabled": false
			}

		});
	var chart = AmCharts.makeChart("chartdiv21", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": x21[0],
				"color": "#FF0F00"
			},{
				"country": "2",
				"visits": x21[9],
				"color": "#FF0F00"
			},{
				"country": "3",
				"visits": x21[10],
				"color": "#FF0F00"
			},{
				"country": "4",
				"visits": x21[11],
				"color": "#FFB11B"
			}, {
				"country": "5",
				"visits": x21[1],
				"color": "#FFB11B"
			},{
				"country": "6",
				"visits": x21[2],
				"color": "#FFB11B"
			},{
				"country": "7",
				"visits": x21[3],
				"color": "#3A8FB7"
			},{
				"country": "8",
				"visits": x21[4],
				"color": "#3A8FB7"
			}, {
				"country": "9",
				"visits": x21[5],
				"color": "#3A8FB7"
			}, {
				"country": "10",
				"visits": x21[6],
				"color": "#86C166"
			}, {
				"country": "11",
				"visits": x21[7],
				"color": "#86C166"
			}, {
				"country": "12",
				"visits": x21[8],
				"color": "#86C166"
			}],
			"valueAxes": [{
				"position": "left",
				"title": "零件",
				"axisAlpha":0.8,
				"gridAlpha":0.5,
				"minimum": 0,
				"integersOnly":true
			}],
			"graphs": [{
				"balloonText": "[[category]]: <b>[[value]]</b>",
				"colorField": "color",
				"fillAlphas": 0.85,
				"lineAlpha": 0.1,
				"type": "column",
				"topRadius":1,
				"valueField": "visits"
			}],
			"depth3D": 15,
			"angle": 30,
			"chartCursor": {
				"categoryBalloonEnabled": false,
				"cursorAlpha": 0,
				"zoomable": false
			},
			"categoryField": "country",
			"categoryAxis": {
				"gridPosition": "start",
				"axisAlpha":0,
				"gridAlpha":0,
				"minimum": 0
			},
			"export": {
				"enabled": false
			}}, 0);
	var chart = AmCharts.makeChart("chartdiv22", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": x22[0],
				"color": "#FF0F00"
			},{
				"country": "2",
				"visits": x22[9],
				"color": "#FF0F00"
			},{
				"country": "3",
				"visits": x22[10],
				"color": "#FF0F00"
			},{
				"country": "4",
				"visits": x22[11],
				"color": "#FFB11B"
			}, {
				"country": "5",
				"visits": x22[1],
				"color": "#FFB11B"
			},{
				"country": "6",
				"visits": x22[2],
				"color": "#FFB11B"
			},{
				"country": "7",
				"visits": x22[3],
				"color": "#3A8FB7"
			},{
				"country": "8",
				"visits": x22[4],
				"color": "#3A8FB7"
			}, {
				"country": "9",
				"visits": x22[5],
				"color": "#3A8FB7"
			}, {
				"country": "10",
				"visits": x22[6],
				"color": "#86C166"
			}, {
				"country": "11",
				"visits": x22[7],
				"color": "#86C166"
			}, {
				"country": "12",
				"visits": x22[8],
				"color": "#86C166"
			}],
			"valueAxes": [{
				"position": "left",
				"title": "特殊材料",
				"axisAlpha":0.8,
				"gridAlpha":0.5,
				"minimum": 0,
				"integersOnly":true
			}],
			"graphs": [{
				"balloonText": "[[category]]: <b>[[value]]</b>",
				"colorField": "color",
				"fillAlphas": 0.85,
				"lineAlpha": 0.1,
				"type": "column",
				"topRadius":1,
				"valueField": "visits"
				
			}],
			
			"depth3D": 15,
			"angle": 30,
			"chartCursor": {
				"categoryBalloonEnabled": false,
				"cursorAlpha": 0,
				"zoomable": false
			},
			"categoryField": "country",
			"categoryAxis": {
				"gridPosition": "start",
				"axisAlpha":0,
				"gridAlpha":0,
				
			},
			
			"export": {
				"enabled": false
			}}, 0);
	var chart = AmCharts.makeChart("chartdiv10", {
		"theme": "black",
		"type": "serial",
		"startDuration": 0,
		"dataProvider": [{
			"country": "美洲",
			"visits": x10[0],
			"color": "#FF0F00"
		}, {
			"country": "歐洲",
			"visits": x10[1],
			"color": "#FFB11B"
		}, {
			"country": "亞洲",
			"visits": x10[2],
			"color": "#3A8FB7"
		}, {
			"country": "非洲",
			"visits": x10[3],
			"color": "#86C166"
		
		}],
		"graphs": [{
			"balloonText": "[[category]]: <b>[[value]]</b>",
			"fillColorsField": "color",
			"fillAlphas": 1,
			"lineAlpha": 0.1,
			"type": "column",
			"valueField": "visits"
		}],
		"depth3D": 20,
		"angle": 30,
		"chartCursor": {
			"categoryBalloonEnabled": false,
			"cursorAlpha": 0,
			"zoomable": false
		},
		"categoryField": "country",
		"categoryAxis": {
			"gridPosition": "start",
			"labelRotation": 0
		},
		"valueAxes": [{
			"minimum": 0,
			"integersOnly":true
			
		}],
		"export": {
			"enabled": false
			}
	});
	var chart = AmCharts.makeChart( "chartdiv11", {
		"type": "pie",
		"theme": "black",
		"startDuration": 0,
		"dataProvider": [ {
			"country": "美洲",
			"value": x10[0],
			"color": "#FF0F00"
		}, {
			"country": "歐洲",
			"value": x10[1],
			"color": "#FFB11B"	
		}, {
			"country": "亞洲",
			"value": x10[2],
			"color": "#3A8FB7"
		}, {
			"country": "非洲",
			"value": x10[3],
			"color": "#86C166"
		}, {
			"country": "(尚未佔領)",
			"value": x10[4],
			"color": "#707070"
		} ],
		"valueField": "value",
		"valueAxes": [{
			"minimum": 0,
			"integersOnly":true,
		}],
		"titleField": "country",
		"outlineAlpha": 0.4,
		"fontSize": 15,
		"labelText": "[[title]]<br>[[value]]",
		"colorField": "color",
		"depth3D": 15,
		"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
		"angle": 30,
		"export": {
			"enabled": false
		}
	});
	var chart = AmCharts.makeChart("chartdiv00", {
		"theme": "black",
		"type": "serial",
		"startDuration": 0,
		"dataProvider": [{
			"country": "美洲",
			"visits": x00[0],
			"color": "#FF0F00"
		}, {
			"country": "歐洲",
			"visits": x00[1],
			"color": "#FFB11B"
		}, {
			"country": "亞洲",
			"visits": x00[2],
			"color": "#3A8FB7"
		}, {
			"country": "非洲",
			"visits": x00[3],
			"color": "#86C166"
		
		}],
		"graphs": [{
			"balloonText": "[[category]]: <b>[[value]]</b>",
			"fillColorsField": "color",
			"fillAlphas": 1,
			"lineAlpha": 0.1,
			"type": "column",
			"valueField": "visits"
		}],
		"depth3D": 20,
		"angle": 30,
		"chartCursor": {
			"categoryBalloonEnabled": false,
			"cursorAlpha": 0,
			"zoomable": false
		},
		"categoryField": "country",
		"categoryAxis": {
			"gridPosition": "start",
			"labelRotation": 0
		},
		"valueAxes": [{
			"minimum": 0,
			"integersOnly":true,
		}],
		"export": {
			"enabled": false
			}

	});
}
///  Ajax TODO  ///

function getAllResources() {
	$.ajax({
  		type: "GET",
  		url: "getitems.php",
 		datatype: "json",
 		data: {},
  		success: function(response) {
			console.log(response);
			var obj = JSON.parse(response);
			console.log(obj);
			console.log(obj[0][1]);
    		for(i=0;i<12;i++){
				x20[i]=0;
				x21[i]=0;
				x22[i]=0;
			}
			for(i=1;i<=16;i++){
				for(j=0;j<12;j++){
					x20[j] = x20[j]+Number(obj[j][i]);
				}
			}
			for(i=17;i<=26;i++){
				for(j=0;j<12;j++){
					x21[j] = x21[j]+Number(obj[j][i]);
				}
			}
			for(i=27;i<=33;i++){
				for(j=0;j<12;j++){
					x22[j] = x22[j]+Number(obj[j][i]);
				}
			}
    	}
	});
	
}
function getAllStrong() {
	$.ajax({
  		type: "GET",
  		url: "getstrong.php",
 		datatype: "json",
 		data: {},
  		success: function(response) {
			console.log(response);
			var obj = JSON.parse(response);
			console.log(obj);
			console.log(obj[0][1]);
    		x10[0]=0;
			x10[1]=0;
			x10[2]=0;
			x10[3]=0;
			x10[4]=0;

			for(i=0;i<=15;i++){
				switch (obj[i][7]) {
					case 'A':
						x10[0]++;
						break;
					case 'B':
						x10[1]++;
						break;
					case 'C':
						x10[2]++;
						break;
					case 'D':
						x10[3]++;
						break;
					default:
						break;
				}
			}
			x10[4]=16-x10[0]-x10[1]-x10[2]-x10[3];
    	}
	});
	
}
function calculateTotal(){
	var strongHoldPara = 100;
	var tier1Parameter = 1;
	var tier2Parameter = 100;
	var tier3Parameter = 400;
	x00 = [0,0,0,0];
	for(i=0;i<3;i++){
		x00[0]=x00[0]+ x20[i]*tier1Parameter + x21[i]*tier2Parameter + x22[i]*tier3Parameter;
		x00[1]=x00[1]+ x20[i+3]*tier1Parameter + x21[i+3]*tier2Parameter + x22[i+3]*tier3Parameter;
		x00[2]=x00[2]+ x20[i+6]*tier1Parameter + x21[i+6]*tier2Parameter + x22[i+6]*tier3Parameter;
		x00[3]=x00[3]+ x20[i+9]*tier1Parameter + x21[i+9]*tier2Parameter + x22[i+9]*tier3Parameter;
	}
}

var x20 = [40,40,40,40,40,40,40,40,40,40,40,40];
var x21 = [5,5,5,5,5,5,5,5,5,5,5,5];
var x22 = [0,0,0,0,0,0,0,0,0,0,0,0];
var x10 = [1,1,1,1,12];
var x00 = [20,20,20,20];
/* Down Below is Function to Set Graph */
jssor_2_slider_init = function() {

        var jssor_2_options = {
            
              $AutoPlay: true,
              $Idle: 8000,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 9,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 260
              }
        };

            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_2_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_2_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        }


jssor_1_slider_init = function() {   

            var jssor_1_options = {
              $Idle: 8000,
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 9,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 260
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
            
        };
jssor_0_slider_init = function() {   
    
            var jssor_0_options = {
              $Idle: 8000,
              $AutoPlay: true,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 9,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 260
              }
            };
            
            var jssor_0_slider = new $JssorSlider$("jssor_0", jssor_0_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_0_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_0_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
            
        };