//https://github.com/EddyVerbruggen/SocialSharing-PhoneGap-Plugin/blob/master/README.md

app.directive('keosuShare', function(){
	return {
		restrict : 'E',
		scope : {
			object: '=object',
			url: '=url'
		},
		templateUrl : 'plugins/keosu-share/templates/default.html',
		controller : ['$scope','$http', function ($scope, $http) {

			$scope.share = function () {
				//window.plugins.socialsharing.share('Message, subject, image and link',
				// 'The subject',
				// 'https://www.google.nl/images/srpr/logo4w.png',
				// 'http://www.x-services.nl');
				window.plugins.socialsharing.share($scope.object.title, null, null, $scope.url);
			};
			$scope.$watch('objectId', function() {
        	});
		}]
	};
});
