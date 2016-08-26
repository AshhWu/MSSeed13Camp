
renew = function(){
	getAllResources();
	getAllStrong();
	calculateTotal();
	chartMaker();
}
chartMaker = function(){
	var chart = AmCharts.makeChart("chartdiv20", {
			"theme": "black",
			"type": "serial",
			"startDuration": 1,
			"dataProvider": [{
				"country": "美洲",
				"visits": x20[0],
				"color": "#FF0F00"
			}, {
				"country": "歐洲",
				"visits": x20[1],
				"color": "#FFB11B"
			}, {
				"country": "亞洲",
				"visits": x20[2],
				"color": "#3A8FB7"
			}, {
				"country": "非洲",
				"visits": x20[3],
				"color": "#86C166"

			}],
			"valueAxes": [{
				"position": "left",
				"title": "數量",
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
				"country": "美洲",
				"visits": x21[0],
				"color": "#FF0F00"
			}, {
				"country": "歐洲",
				"visits": x21[1],
				"color": "#FFB11B"
			}, {
				"country": "亞洲",
				"visits": x21[2],
				"color": "#3A8FB7"
			}, {
				"country": "非洲",
				"visits": x21[3],
				"color": "#86C166"
			
			}],
			"valueAxes": [{
				"position": "left",
				"axisAlpha":0.8,
				"gridAlpha":0.5,
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
			"depth3D": 40,
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
				"country": "美洲",
				"visits": x22[0],
				"color": "#FF0F00"
			}, {
				"country": "歐洲",
				"visits": x22[1],
				"color": "#FFB11B"
			}, {
				"country": "亞洲",
				"visits": x22[2],
				"color": "#3A8FB7"
			}, {
				"country": "非洲",
				"visits": x22[3],
				"color": "#86C166"
			
			}],
			"valueAxes": [{
				"position": "left",
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
			
			"depth3D": 40,
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
		} );
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
    		x20[0]=0;
			x20[1]=0;
			x20[2]=0;
			x20[3]=0;
			x21[0]=0;
			x21[1]=0;
			x21[2]=0;
			x21[3]=0;
			x22[0]=0;
			x22[1]=0;
			x22[2]=0;
			x22[3]=0;
			for(i=1;i<=16;i++){
				x20[1] = x20[1]+Number(obj[0][i]);
				x20[2] = x20[2]+Number(obj[1][i]);
				x20[3] = x20[3]+Number(obj[2][i]);
				x20[0] = x20[0]+Number(obj[3][i]);
			}
			for(i=17;i<=26;i++){
				x21[1] = x21[1]+Number(obj[0][i]);
				x21[2] = x21[2]+Number(obj[1][i]);
				x21[3] = x21[3]+Number(obj[2][i]);
				x21[0] = x21[0]+Number(obj[3][i]);
			}
			for(i=27;i<=33;i++){
				x22[1] = x22[1]+Number(obj[0][i]);
				x22[2] = x22[2]+Number(obj[1][i]);
				x22[3] = x22[3]+Number(obj[2][i]);
				x22[0] = x22[0]+Number(obj[3][i]);
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
	x00[0] = x10[0]*strongHoldPara + x20[0]*tier1Parameter + x21[0]*tier2Parameter + x22[0]*tier3Parameter;
	x00[1] = x10[1]*strongHoldPara + x20[1]*tier1Parameter + x21[1]*tier2Parameter + x22[1]*tier3Parameter;
	x00[2] = x10[2]*strongHoldPara + x20[2]*tier1Parameter + x21[2]*tier2Parameter + x22[2]*tier3Parameter;
	x00[3] = x10[3]*strongHoldPara + x20[3]*tier1Parameter + x21[3]*tier2Parameter + x22[3]*tier3Parameter;
}

var x20 = [40,40,40,40];
var x21 = [5,5,5,5];
var x22 = [0,0,0,0];
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