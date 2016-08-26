//Define an angular module for our app
var app = angular.module('app', []);

app.controller('tasksController', ['$scope', '$http', '$interval', function($scope, $http, $interval) {
  function getTask(){  
  $http.get("ajax/getTask.php")
        .success(function(data){
        window.alert("success!");
        $scope.tasks = data;
        $scope.tasks[0].n = "1";
        $scope.tasks[1].n = "2";
        $scope.tasks[2].n = "3";
        $scope.img = "Taiwan_"+ $scope.tasks[0]['ID'].toString() + ".png"+ '?' + new Date().getTime();
       })
        .error(function(data){
          window.alert("error!");
        });
  };
  $scope.img = "Taiwan_blur.png";
  // function getImg(){
  //       $scope.img = "Taiwan_blur.png"+ '?' + new Date().getTime();
  // };
  getTask(); // Load all available tasks 
  $interval(getTask, 5000);
  // $interval(getImg, 5000);

  $scope.addTask = function (task) {
    $http.post("ajax/addTask.php?task="+task).success(function(data){
        $scope.taskInput = "";
        window.alert("success!");
      })
    .error(function(data){ console.log("Get ERRoR!!!!!!!!!!!!!!!!!!!!!!!!!!!")});
  };
  $scope.deleteTask = function (task) {
    if(confirm("Are you sure to delete this line?")){
    $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
        getTask();
      });
    }
  };

  $scope.toggleStatus = function(item, status, task) {
    if(status=='2'){status='0';}else{status='2';}
      $http.post("ajax/updateTask.php?taskID="+item+"&status="+status).success(function(data){
        getTask();
      });
  };

}]);
