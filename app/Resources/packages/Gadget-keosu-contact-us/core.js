
app.controller('keosu-contact-usController', function ($scope, cacheManagerService) {
	$scope.init = function (params){
		$scope.param = params;
        $scope.name         = $scope.param.gadgetParam.name;
        $scope.presentation = $scope.param.gadgetParam.presentation;
        $scope.address      = $scope.param.gadgetParam.address;
        $scope.phone        = $scope.param.gadgetParam.phone;
        $scope.email        = $scope.param.gadgetParam.email;
		cacheManagerService.get($scope.param.host+'service/gadget/picture/'+$scope.param.gadgetId).success( function (data) {
			$scope.image = data.path;
		});
	};
});
