app.controller('comment_keosuController', function ($scope, $http, $sce, usSpinnerService) {

	$scope.commentListAction = function() {
		$http.get($scope.param.host+'service/gadget/comment/'+$scope.dataModelObjectName+'/'+$scope.objectId).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};
	
	$scope.commentAddAction = function() {
		var data = "message="+$scope.messageComment;
		$scope.messageComment = "";
		$http.post($scope.param.host+'service/gadget/comment/'+$scope.dataModelObjectName+'/'+$scope.objectId,data).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};

});

app.directive('keosu-comments', function(){
	return {
		restrict: 'E',
		scope: {
			objectId: '=objectId',
			dataModelObjectName: '=dataModelObjectName',
			enableComments: '=enable',
			templateName: '=templateName'
		},
		templateUrl: 'templates/{{ templateName }}.html'
	};
});
