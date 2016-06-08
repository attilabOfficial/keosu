app.directive('keosuComments', function(){
	return {
		restrict : 'E',
		scope : {
			objectId: '=objectId',
			objectName: '=objectName',
			enableComments: '=enableComments'
		},
		templateUrl : 'plugins/keosu-comments/templates/default.html',
		controller : ['$scope','$http', function ($scope, $http) {
		
			$scope.$watch('objectId', function() {
				$scope.myinit();
        	});
			
			$scope.myinit = function() {
				$http.get('data/globalParam.json').success(function(data){
					$scope.host = data.host;
					$scope.commentListAction();
				});
			}

			$scope.commentListAction = function() {
				if ($scope.objectId) {
					$http.get($scope.host + 'service/gadget/myaccount/info').success(function(data) {
						if(data.connect) {
							$http.get($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId).success(function(data){
								$scope.comments = data.comments;
								$scope.connect = data.connect;
							});
						}

					});

				}
			};

			$scope.commentAddAction = function() {
				var data = "message="+$scope.messageComment;
				$scope.messageComment = "";
				if (data != "message=") {//check if the commentaire is not empty
					$http.post($scope.host+'service/gadget/comment/'+$scope.objectName+'/'+$scope.objectId,data).success(function(data){
						$scope.comments = data.comments;
						$scope.connect = data.connect;
					});
				};
			};
		}]
	};
});
