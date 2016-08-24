angular.module('myApp', ["chart.js"])
	.controller('locationController', ['$scope', '$interval', 'flagService', function($scope, $interval, flagService){
      $scope.markers = [];
      $scope.teamInfo;

      flagService.mark();
      
      var latLng = new google.maps.LatLng(25.054056, 121.539021);
      var mapCanvas = document.getElementById('map-canvas');
      var map = new google.maps.Map(mapCanvas, {
          zoom: 14,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          });
      
      teamInfo = 
      $interval(getLoc, 5000);

      function getLoc(){
        flagService.getLocation()
        .then(function(data){
            window.alert("success!");
            for(var index in data)
            {
              var team = data[index];
              console.log(team);
                    console.log(markers[team['id']]);
                    if(team['location'] != 'null'){
                                if(markers[team['id']] == undefined){
                                    console.log('Create new marker');
                                    var array = team['location'].split(',');
                                    markers[team['id']] = new MarkerWithLabel({
                                        position: new google.maps.LatLng(array[0], array[1]),
                                        draggable: true,
                                        raiseOnDrag: true,
                                        map: map,
                                        icon: teamInfo[index]['picture'],
                                        labelContent: teamInfo[index]['team'],
                                        labelAnchor: new google.maps.Point(22, 0),
                                        labelClass: "labels", // the CSS class for the label
                                        labelStyle: {opacity: 0.8}
                                    });

                                }else{
                                    console.log('Move');
                                    var array = team['location'].split(',');
//                                    markers[team['id']].setMap(null);
                                    markers[team['id']].setPosition(new google.maps.LatLng(array[0], array[1]));
                                }

                            }
            }
          }
          ,function(error){ 
              console.log("error: " + error);
          });
      }

	}])
  .controller('picController', ['$scope', 'PicService', '$interval', function($scope, PicService, $interval){
      $scope.markers;
      $scope.teamInfo;

      $scope.pics = PicService.getPics();
	}])

  .controller('cubeController',);