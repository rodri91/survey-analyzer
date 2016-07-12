angular.module('survey-analyzer', [])

.factory('mainData', function($http) {
    return $http.get('./php/getData.php')
    .then(function(response) {
      console.log(response.data);
      return response.data;
    });
})

.controller('testCtrl', function($scope, mainData){
	mainData.then(function(data) {
    	$scope.array = data;
	});
});


