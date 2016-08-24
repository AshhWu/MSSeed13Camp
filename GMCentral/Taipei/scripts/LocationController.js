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
      
      teamInfo = flagService.getTeamInfo();
      $interval(getLoc, 5000);

      function getLoc(){
        flagService.getLocation()
        .then(function(data){
            for(var index in data)
            {
              var team = data[index];
              console.log(team);
              console.log(markers[team['Team']]);
  
              if(team['location'] != 'null')
              {
                if(markers[team['Team']] == undefined)
                {
                    console.log('Create new marker');
                    markers[team['Team']] = new MarkerWithLabel({
                        position: new google.maps.LatLng(team['gpsX'], team['gpsY']),
                        draggable: true,
                        raiseOnDrag: true,
                        map: map,
                        icon: teamInfo[team['Team']]['picture'],
                        labelContent: teamInfo[team['Team']]['team'],
                        labelAnchor: new google.maps.Point(22, 0),
                        labelClass: "labels", // the CSS class for the label
                        labelStyle: {opacity: 0.8}
                    });
                }
                else
                {
                    console.log('Move');
                    markers[team['Team']].setPosition(new google.maps.LatLng(team['gpsX'], team['gpsY']));
                }
              }
            }
          }
          ,function(error)
          { 
              console.log("error: " + error);
          });
      }

	}])
  .controller('picController', ['$scope', 'PicService', '$interval', function($scope, PicService, $interval){
      $scope.pics = PicService.getPics();
	}])