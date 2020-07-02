var app = angular.module("myApp", []);
app.controller("formCtrl", function ($scope) {
  $scope.name = "";
  $scope.email = "";

  $scope.submitForm = function () {
    $scope.name = $scope.nameInput;
    $scope.email = $scope.emailInput;
  };
});
