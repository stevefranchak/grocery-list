
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import angular from 'angular';
require('./routes');

var app = angular.module('mainApp', ['mainRoutes']);
 
app.controller('mainController', ['$scope', '$http', function($scope, $http) {
    console.log('is this working?');
}]);