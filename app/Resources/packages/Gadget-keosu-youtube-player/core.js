app.controller('keosu-youtube-playerController', function ($scope) {

	$scope.init = function (params){
		$scope.id = params.gadgetParam.videoId;
	};
});
