/**
 * Created by athomas on 11/30/2016.
 */
var app = angular.module('kzApp', ['ngResource', 'ngSanitize', 'ngTouch', 'ngAnimate']);

app.factory('apiCall', ['$location', function($location){

    var protocol = $location.protocol() + '://';
    var host = $location.host();
    var origin = protocol + host;
    var apiPoint = appInfo.api_url;
    var apiCall = origin + '/' + apiPoint;

    return apiCall;

}]);

app.factory('classroomData', ['$http', 'apiCall', function($http, apiCall){

    var promise;

    return{
        async: function(){
            if( !promise ) {
                promise = $http.get(apiCall + 'classrooms?per_page=100').then(function (response) {
                    return response.data;
                });
            }
            return promise;
        }
    }

}]);


app.controller('mainCtrl', ['$scope', 'classroomData', function($scope, classroomData){

    $scope.showMenu = false;
    console.log('test');
    
    classroomData.async().then(function(d){
        
        $scope.classrooms = d;
        
        console.log($scope.classrooms);
        
    $scope.classroom = $scope.classrooms[0];
    $scope.selectClassroom = function(item){
        $scope.classroom = item;
    };
  
    });
    
    

}]);

app.filter('preserveHtml', function($sce) {
    return function(val) {
        return $sce.trustAsHtml(val);
    };
});




