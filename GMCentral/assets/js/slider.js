
renew = function(){
	var resourcesObj = getAllResources();
	setNewGraph(resourcesObj);
	$("#main").load(location.href + " #main",function () {
         $(this).unwrap();
    });
	chartMaker();
}
chartMaker = function(){
		var chart = AmCharts.makeChart("chartdiv3", {
                "theme": "black",
                "type": "serial",
                "startDuration": 1,
                "dataProvider": [{
                    "country": "A",
                    "visits": x2[0],
                    "color": "#FF0F00"
                }, {
                    "country": "B",
                    "visits": x2[1],
                    "color": "#FF6600"
                }, {
                    "country": "C",
                    "visits": x2[2],
                    "color": "#FF9E01"
                }, {
                    "country": "D",
                    "visits": x2[3],
                    "color": "#FCD202"

                }],
                "valueAxes": [{
                    "position": "left",
                    "title": "Visitors"
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
                    "labelRotation": 90
                },
                "export": {
                    "enabled": false
                }

		    });
   		var chart = AmCharts.makeChart("chartdiv4", {
                "theme": "black",
                "type": "serial",
                "startDuration": 0,
                "dataProvider": [{
                    "country": "A",
                    "visits": 4025,
                    "color": "#FF0F00"
                }, {
                    "country": "B",
                    "visits": 1882,
                    "color": "#FF6600"
                }, {
                    "country": "C",
                    "visits": 1809,
                    "color": "#FF9E01"
                }, {
                    "country": "D",
                    "visits": 1322,
                    "color": "#FCD202"
                
                }],
                "valueAxes": [{
                    "position": "left",
                    "axisAlpha":0,
                    "gridAlpha":0
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
                    "gridAlpha":0
                },
                "export": {
                    "enabled": false
                }}, 0);
		var chart = AmCharts.makeChart("chartdiv2", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "A",
				"visits": 40205,
				"color": "#FF0F00"
			}, {
				"country": "B",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "C",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "D",
				"visits": 1322,
				"color": "#FCD202"
			
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
				"labelRotation": 90
			},
			"export": {
				"enabled": false
			 }

		});

        var chart = AmCharts.makeChart("chartdiv1", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "A",
				"visits": 4025,
				"color": "#FF0F00"
			}, {
				"country": "B",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "C",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "D",
				"visits": 1322,
				"color": "#FCD202"
			
			}],
			"valueAxes": [{
				"position": "left",
				"axisAlpha":0,
				"gridAlpha":0
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
				"gridAlpha":0
			},
			"export": {
				"enabled": false
			}}, 0);
		var chart = AmCharts.makeChart("chartdiv01", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "A",
				"visits": 40205,
				"color": "#FF0F00"
			}, {
				"country": "B",
				"visits": 20182,
				"color": "#FF6600"
			}, {
				"country": "C",
				"visits": 20009,
				"color": "#FF9E01"
			}, {
				"country": "D",
				"visits": 18022,
				"color": "#FCD202"
			
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
				"labelRotation": 90
			},
			"export": {
				"enabled": false
			 }

		});

        var chart = AmCharts.makeChart("chartdiv02", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "A",
				"visits": 4025,
				"color": "#FF0F00"
			}, {
				"country": "B",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "C",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "D",
				"visits": 1322,
				"color": "#FCD202"
			
			}],
			"valueAxes": [{
				"position": "left",
				"axisAlpha":0,
				"gridAlpha":0
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
				"gridAlpha":0
			},
			"export": {
				"enabled": false
			}}, 0);

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
			//console.log(obj[0][1]);
    		return obj;
    	}
	});
}

var x2 = [10,10,10,10];
/* Set json in each graph */
setNewGraph = function(obj){
	//Debug//
	var obj = JSON.parse("[[\"A\",\"500\"],[\"B\",\"300\"]]");
	//Debug//
	console.log(obj[0][1]);
	x2[0] = x2[0]+5;
	console.log(x2[0]);
}
/* Down Below is Function to Set Graph */
jssor_2_slider_init = function() {

        var jssor_2_options = {
            
              $AutoPlay: true,
              $Idle: 5000,
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