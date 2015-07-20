app.controller('keosu-searchController',function ($rootScope, $scope, $http, usSpinnerService,$location) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	$scope.init = function(params) {
		$http.get('data/'+params.gadgetId+".json").success(function(data) {
			$scope.keys = data;
		});
	};
	$scope.onSelect = function ($item, $model, $label) {
		window.location = "#/Page/"+$scope.selected.target;
	};

});
