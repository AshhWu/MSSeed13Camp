angular.module('myApp', ["chart.js"])
	.controller('cubeController', ['$scope', 'cubeService', '$interval', function($scope, cubeService, $interval){

		function getCube() {
			cubeService.getCube()
            .then(function(data){
                console.log("cube get");
                $scope.cubes = data;
            } ,function(error){
                console.log("cube error: " + error.message);
            });
        }

        $interval(getCube, 2000);
}]);