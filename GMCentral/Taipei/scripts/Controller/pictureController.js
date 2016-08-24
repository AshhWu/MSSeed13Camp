 angular.module('myApp', ["chart.js"])
	.controller('picController', ['$scope', 'picService', '$interval', function($scope, picService, $interval){
     	$scope.pics = picService.getPics();

     	function updatePics(){
     		for(var i = 1; i <= $scope.pics.length; i++){
                $scope.pics[i]["picture"] = "img/TeamPicture/" + i + ".jpg" + '?' + new Date().getTime();
                console.log($scope.pics[i]["picture"]);
            }
     	}

     	$interval(updatePics, 2000);

	}]);