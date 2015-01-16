
app.controller('keosu-contact-usController', function ($scope, cacheManagerService) {
	$scope.init = function (params){
		$scope.param = params;
        $scope.companyName = $scope.param.gadgetParam.companyName;
        $scope.description = $scope.param.gadgetParam.description;
        $scope.address     = $scope.param.gadgetParam.address;
        $scope.phone       = $scope.param.gadgetParam.phone;
        $scope.email       = $scope.param.gadgetParam.email;

		cacheManagerService.get($scope.param.host+'service/gadget/picture/'+$scope.param.gadgetId).success( function (data) {
				$scope.image = data.path;
		});
	};
});
