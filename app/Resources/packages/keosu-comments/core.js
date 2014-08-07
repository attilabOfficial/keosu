app.directive('keosuComments', function(){
	return {
		restrict : 'E',
		scope : {
			objectId: '=objectId',
			patateObjectName: '=patateObjectName',
			enableComments: '=enableComments',
			templateName: '=templateName'
		},
		templateUrl : 'plugins/keosu-comments/templates/default.html',
		controller : function ($scope, $http, usSpinnerService) {

			$scope.commentListAction = function() {
				console.log($scope);
				$http.get(main.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId).success(function(data){
					$scope.comments = data.comments;
					$scope.connect = data.connect;
				});
			};

			$scope.commentAddAction = function() {
				var data = "message="+$scope.messageComment;
				$scope.messageComment = "";
				$http.post($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId,data).success(function(data){
					$scope.comments = data.comments;
					$scope.connect = data.connect;
				});
			};
		}
	};
});
