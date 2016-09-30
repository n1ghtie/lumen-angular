var angular = require('angular');
var ngRoute = require('angular-route');
var angular_bootstrap = require('angular-bootstrap');
var jQlite = require('jquery-lite');
 
var app = angular.module('myApp', []);

app.controller('usersCtrl', function($scope, $http) {

  $http.get("users")
  .success(function(response){
    $scope.users = response;
    
  });

  $scope.confirmDelete = function(id) {

    var isDelete = confirm("Delete?");

    if(isDelete) {
    $http.post("user/"+id)
      .success(function(data){
        location.reload();
      });
    }
    else 
    {
      return false;
    }
  }

  $scope.addNewUser = function() {

    $http.post("new",{
      firstName: $scope.firstName,
      lastName: $scope.lastName
    })
    .success(function(data){
        location.reload();
    });
  }

  $scope.editUser = function(id) {

    $http.post("edit/"+id, {
      firstName: $scope.newFirstName,
      lastName: $scope.newLastName 
    })
    .success(function(data){
      location.reload();
    })
  }

})