import 'angular-route';

const app = angular.module('mainRoutes', ['ngRoute']);
 
app.config(function ($routeProvider) {
    $routeProvider.when('/', {
        templateUrl: "templates/test.html"
    });
});