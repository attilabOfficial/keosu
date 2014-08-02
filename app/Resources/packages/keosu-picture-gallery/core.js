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

function parts(isGallery, isPicture, $scope) {
	$scope.isGallery = isGallery;
	$scope.isPicture = isPicture;
}

//Main function

app.controller('keosu-picture-galleryController', function ($scope, $http, usSpinnerService) {
	parts(true, false, $scope);
	$scope.index = 0;
	$scope.close = function () {
		parts(true, false, $scope);
	};
	$scope.open = function (page, id) {
		$scope.image = page;
		$scope.index = id - 1;
		parts(false, true, $scope);
	};
	$scope.swipeLeft = function() {
		if ($scope.index == $scope.imageLength - 1)
			$scope.index = 0;
		else
			$scope.index++;
	}
	$scope.swipeRight = function() {
		if ($scope.index == 0)
			$scope.index = $scope.imageLength - 1;
		else
			$scope.index--;
	}
	$scope.init = function (params) {
		$scope.param = params;
		var offset = (0);
		$scope.activePage = {
				page:0
		};
		$scope.imgClass = [];
		usSpinnerService.spin('spinner');
		$http.get( $scope.param.host + 'service/gadget/picturesgallery/'+$scope.param.gadgetId+'/0/json').success(function (data) {
					usSpinnerService.stop('spinner');
					$tmp = [];
					for (i = 0; i < data.data.length; i++) {
						$tmp[i] = data.data[i];
						toto = new Image;
						toto.src = $tmp[i].path;
						if (toto.width > toto.height)
							$scope.imgClass[$tmp[i].id] = "picture-horizontal";
						else
							$scope.imgClass[$tmp[i].id] = "picture-vertical";
						
					}
					$scope.images = $tmp;
					$scope.imageLength = $tmp.length;
					nb = 0;
					pages = new Array();
					for (i = 0; i < $tmp.length; i++) {
						tmpPage = [];
						for (j = 0; j < data.picturesperpage; j++) {
							if (!$tmp[i])
								break;
							tmpPage[j] = $tmp[i];
							i++;
						}
						i--;
						pages[nb] = tmpPage;
						nb++;
					}
					$scope.pages = pages;
				});
	};
});
