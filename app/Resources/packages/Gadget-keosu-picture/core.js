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

app.controller('keosu-pictureController', function ($scope, $http, usSpinnerService, cacheManagerService) {

	/////////////////////
	// init part
	/////////////////////
	$scope.init = function(params) {
		$scope.param = params;
		$scope.showPictureAction();
	};

	$scope.showPictureAction = function() {
		usSpinnerService.spin('spinner');
		cacheManagerService.get($scope.param.host+'service/gadget/picture/'+$scope.param.gadgetId, $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success( function (data) {
				usSpinnerService.stop('spinner');
				$scope.picture = data;
				$scope.title = data.name;
				$scope.image = data.path;
		}).error(function (error) {
			$scope.error = (error);
			usSpinnerService.stop('spinner');
		});
	};

});
