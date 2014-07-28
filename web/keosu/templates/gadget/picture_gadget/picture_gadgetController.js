/************************************************************************
	Keosu is an open source CMS for mobile app
	Copyright (C) 2013  Vincent Le Borgne

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/

//Main function

app.controller('picture_gadgetController', function ($scope, $http, usSpinnerService, cacheManagerService) {

	/////////////////////
	// init part
	/////////////////////
	$scope.init = function(host, param, page, gadget, zone) {
		$scope.param = {
			'host'   : host+param,
			'page'   : page,
			'gadget' : gadget,
			'zone'   : zone
		};
		$scope.showPictureAction();
	};

	$scope.showPictureAction = function() {
		usSpinnerService.spin('spinner');
		data = cacheManagerService.get($scope.param.gadget, $scope.param.host+'service/gadget/picture/'+$scope.param.gadget+'/json')
			.success( function (data) {
					usSpinnerService.stop('spinner');
					$scope.picture = data[0];
					$scope.title = $('<div/>').html(data[0].name).text();
					$scope.image = data[0].path;
					$scope.commentListAction();
			});
	};

	/////////////////////////
	// Comment part
	/////////////////////////
	$scope.commentListAction = function() {
		$http.get($scope.param.host+'service/gadget/comment/'+$scope.picture.dataModelObjectName+'/'+$scope.picture.id).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};

	$scope.commentAddAction = function() {
		var data = "message="+$scope.messageComment;
		$scope.messageComment = "";
		$http.post($scope.param.host+'service/gadget/comment/'+$scope.picture.dataModelObjectName+'/'+$scope.picture.id,data).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};

});
