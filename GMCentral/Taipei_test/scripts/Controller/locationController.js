angular.module('app')
	.controller('locationController', ['$scope', '$interval', 'flagService', function($scope, $interval, flagService){
      $scope.markers = [];
      
      var latLng = new google.maps.LatLng(25.054056, 121.539021);
      var mapCanvas = document.getElementById('map-canvas');
      var map = new google.maps.Map(mapCanvas, {
          zoom: 14,
          center: latLng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
          });
      
      $scope.teamInfo = flagService.getTeamInfo();
      $interval(getLoc, 5000);

      function getLoc(){
        flagService.getLocation()
        .then(function(data){
            for(var index in data)
            {
              var team = data[index];
              console.log(team);
              console.log($scope.markers[team.Team]);
  
              if(team.location != 'null')
              {
                if($scope.markers[team.Team] === undefined)
                {
                    console.log('Create new marker');
                    $scope.markers[team.Team] = new MarkerWithLabel({
                        position: new google.maps.LatLng(team.gpsX, team.gpsY),
                        draggable: true,
                        raiseOnDrag: true,
                        map: map,
                        icon: $scope.teamInfo[team.Team].picture,
                        labelContent: $scope.teamInfo[team.Team].team,
                        labelAnchor: new google.maps.Point(22, 0),
                        labelClass: "labels", // the CSS class for the label
                        labelStyle: {opacity: 0.8}
                    });
                }
                else
                {
                    console.log('Move');
                    $scope.markers[team.Team].setPosition(new google.maps.LatLng(team.gpsX, team.gpsY));
                }
              }
            }
          } ,function(error)
          { 
              console.log("error: " + error.message);
          });
      }

	}]);