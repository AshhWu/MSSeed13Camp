
renew = function(){
	/* Test */
	var mysql = require('mysql');
	var connection = mysql.createConnection({
    	host: 'ap-cdbr-azure-east-c.cloudapp.net',
    	user: 'b37f8ddf38d21d',
    	password: '1e72c81e',
    	database: 'stronghold'
	});
	connection.connect();
	connection.query('SELECT 12 + 34 AS result', function(err, rows, fields) {
    if (err) throw err;
    console.log('The result is: ', rows[0].result);
	connection.end();
  
  //顯示撈取資料
  		console.log(results[0]);
	});
}
/* Set json in each graph */


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

            var chart = AmCharts.makeChart("chartdiv3", {
                "theme": "black",
                "type": "serial",
                "startDuration": 0,
                "dataProvider": [{
                    "country": "1",
                    "visits": 40205,
                    "color": "#FF0F00"
                }, {
                    "country": "2",
                    "visits": 1882,
                    "color": "#FF6600"
                }, {
                    "country": "3",
                    "visits": 1809,
                    "color": "#FF9E01"
                }, {
                    "country": "4",
                    "visits": 1322,
                    "color": "#FCD202"
                }, {
                    "country": "5",
                    "visits": 1122,
                    "color": "#F8FF01"
                }, {
                    "country": "6",
                    "visits": 1114,
                    "color": "#B0DE09"
                }, {
                    "country": "7",
                    "visits": 984,
                    "color": "#04D215"
                }, {
                    "country": "8",
                    "visits": 711,
                    "color": "#0D8ECF"
                }, {
                    "country": "9",
                    "visits": 665,
                    "color": "#0D52D1"
                }, {
                    "country": "10",
                    "visits": 580,
                    "color": "#2A0CD0"
                }, {
                    "country": "11",
                    "visits": 443,
                    "color": "#8A0CCF"
                }, {
                    "country": "12",
                    "visits": 441,
                    "color": "#CD0D74"
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
                    "country": "1",
                    "visits": 4025,
                    "color": "#FF0F00"
                }, {
                    "country": "2",
                    "visits": 1882,
                    "color": "#FF6600"
                }, {
                    "country": "3",
                    "visits": 1809,
                    "color": "#FF9E01"
                }, {
                    "country": "4",
                    "visits": 1322,
                    "color": "#FCD202"
                }, {
                    "country": "5",
                    "visits": 1122,
                    "color": "#F8FF01"
                }, {
                    "country": "6",
                    "visits": 1114,
                    "color": "#B0DE09"
                }, {
                    "country": "7",
                    "visits": 984,
                    "color": "#04D215"
                }, {
                    "country": "8",
                    "visits": 711,
                    "color": "#0D8ECF"
                }, {
                    "country": "9",
                    "visits": 665,
                    "color": "#0D52D1"
                }, {
                    "country": "10",
                    "visits": 580,
                    "color": "#2A0CD0"
                }, {
                    "country": "11",
                    "visits": 443,
                    "color": "#8A0CCF"
                }, {
                    "country": "12",
                    "visits": 441,
                    "color": "#CD0D74"
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
            var chart = AmCharts.makeChart("chartdiv2", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": 40205,
				"color": "#FF0F00"
			}, {
				"country": "2",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "3",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "4",
				"visits": 1322,
				"color": "#FCD202"
			}, {
				"country": "5",
				"visits": 1122,
				"color": "#F8FF01"
			}, {
				"country": "6",
				"visits": 1114,
				"color": "#B0DE09"
			}, {
				"country": "7",
				"visits": 984,
				"color": "#04D215"
			}, {
				"country": "8",
				"visits": 711,
				"color": "#0D8ECF"
			}, {
				"country": "9",
				"visits": 665,
				"color": "#0D52D1"
			}, {
				"country": "10",
				"visits": 580,
				"color": "#2A0CD0"
			}, {
				"country": "11",
				"visits": 443,
				"color": "#8A0CCF"
			}, {
				"country": "12",
				"visits": 441,
				"color": "#CD0D74"
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

        var chart = AmCharts.makeChart("chartdiv1", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": 4025,
				"color": "#FF0F00"
			}, {
				"country": "2",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "3",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "4",
				"visits": 1322,
				"color": "#FCD202"
			}, {
				"country": "5",
				"visits": 1122,
				"color": "#F8FF01"
			}, {
				"country": "6",
				"visits": 1114,
				"color": "#B0DE09"
			}, {
				"country": "7",
				"visits": 984,
				"color": "#04D215"
			}, {
				"country": "8",
				"visits": 711,
				"color": "#0D8ECF"
			}, {
				"country": "9",
				"visits": 665,
				"color": "#0D52D1"
			}, {
				"country": "10",
				"visits": 580,
				"color": "#2A0CD0"
			}, {
				"country": "11",
				"visits": 443,
				"color": "#8A0CCF"
			}, {
				"country": "12",
				"visits": 441,
				"color": "#CD0D74"
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
            var chart = AmCharts.makeChart("chartdiv01", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": 40205,
				"color": "#FF0F00"
			}, {
				"country": "2",
				"visits": 20182,
				"color": "#FF6600"
			}, {
				"country": "3",
				"visits": 20009,
				"color": "#FF9E01"
			}, {
				"country": "4",
				"visits": 18022,
				"color": "#FCD202"
			}, {
				"country": "5",
				"visits": 12222,
				"color": "#F8FF01"
			}, {
				"country": "6",
				"visits": 20055,
				"color": "#B0DE09"
			}, {
				"country": "7",
				"visits": 31201,
				"color": "#04D215"
			}, {
				"country": "8",
				"visits": 8879,
				"color": "#0D8ECF"
			}, {
				"country": "9",
				"visits": 5665,
				"color": "#0D52D1"
			}, {
				"country": "10",
				"visits": 4580,
				"color": "#2A0CD0"
			}, {
				"country": "11",
				"visits": 4443,
				"color": "#8A0CCF"
			}, {
				"country": "12",
				"visits": 78441,
				"color": "#CD0D74"
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

        var chart = AmCharts.makeChart("chartdiv02", {
			"theme": "black",
			"type": "serial",
			"startDuration": 0,
			"dataProvider": [{
				"country": "1",
				"visits": 4025,
				"color": "#FF0F00"
			}, {
				"country": "2",
				"visits": 1882,
				"color": "#FF6600"
			}, {
				"country": "3",
				"visits": 1809,
				"color": "#FF9E01"
			}, {
				"country": "4",
				"visits": 1322,
				"color": "#FCD202"
			}, {
				"country": "5",
				"visits": 1122,
				"color": "#F8FF01"
			}, {
				"country": "6",
				"visits": 1114,
				"color": "#B0DE09"
			}, {
				"country": "7",
				"visits": 984,
				"color": "#04D215"
			}, {
				"country": "8",
				"visits": 711,
				"color": "#0D8ECF"
			}, {
				"country": "9",
				"visits": 665,
				"color": "#0D52D1"
			}, {
				"country": "10",
				"visits": 580,
				"color": "#2A0CD0"
			}, {
				"country": "11",
				"visits": 443,
				"color": "#8A0CCF"
			}, {
				"country": "12",
				"visits": 441,
				"color": "#CD0D74"
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
        };