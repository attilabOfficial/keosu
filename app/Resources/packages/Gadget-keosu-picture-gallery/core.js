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

app.controller('keosu-picture-galleryController', function ($rootScope, $scope, $http, usSpinnerService, cacheManagerService) {
	$scope.parts = function (isGallery, isPicture, $scope) {
		$scope.isGallery = isGallery;
		$scope.isPicture = isPicture;
	}
	$scope.parts(true, false, $scope);
	$scope.index = 0;
	$scope.next = function(){
		if($scope.isLastPage()){
			$scope.slidePage="slideInRight";
			$scope.activePage.page = $scope.activePage.page+1;
		}
	};
	$scope.previous = function(){
		if($scope.activePage.page-1 >=0){
			$scope.slidePage="slideInLeft";
			$scope.activePage.page = $scope.activePage.page-1;
		}
	};
	$scope.$on('back', function () {
		$scope.slideElement="zoomIn";
		$scope.slide="fadeIn";
		$scope.parts(true, false, $scope);
	});
	$scope.$on('open', function (event, page) {
		$scope.indexSlide= page.id-1;
		$scope.slidePage="fadeIn";
		$scope.image = page;
		$scope.index = page.id - 1;
		$scope.parts(false, true, $scope);
	});
	$scope.swipeLeft = function() {
		$scope.slideElement="slideInRight";
		if ($scope.index == $scope.imageLength - 1)
			$scope.index = 0;
		else
			$scope.index++;
	};
	$scope.swipeRight = function() {
		$scope.slideElement="slideInLeft";
		if ($scope.index == 0)
			$scope.index = $scope.imageLength - 1;
		else
			$scope.index--;
	};
	$scope.isLastPage = function() {
		return ($scope.activePage.page+1 < $scope.pages.length);
	};
	$scope.init = function (params) {
		$scope.indexSlide=0;
		$scope.slideElement="zoomIn";
		$scope.slidePage="fadeIn";
		$scope.param = params;
		$scope.activePage = {
				page:0
		};
		$scope.imgClass = [];
		$scope.infiniteList = false;
		usSpinnerService.spin('spinner');
		cacheManagerService.get( $scope.param.host + 'service/gadget/picturesgallery/'+$scope.param.gadgetId+'/0/json', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
					usSpinnerService.stop('spinner');
					$tmp = [];
					for (i = 0; i < data.data.length; i++) {
						$tmp[i] = data.data[i];

						if (data.data[i].orientation == 'landscape')
							$scope.imgClass[$tmp[i].id] = "picture-horizontal";
						else
							$scope.imgClass[$tmp[i].id] = "picture-vertical";

					}
					$scope.images = $tmp;
					$scope.imageLength = $tmp.length;
					nb = 0;
					pages = [];
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
                    // For the template gallery-thumbs-navigation, we need to set the first image to get the comments
                    if (pages[0] && pages[0][0])
                        $scope.image = pages[0][0];
				}).error(function (error) {
			$scope.error = (error);
			usSpinnerService.stop('spinner');
		});
	};

	$scope.setInfiniteList = function(){
		$scope.infiniteList = true;
	};

	$(window).on('scroll', function() {
		if ($scope.isGallery && !$scope.isLastPage() && $scope.infiniteList){
			$scope.max = parseInt($(document).height()) - parseInt($(window).height()) - 2;
			if ($(window).scrollTop() >= $scope.max) {
				$scope.next();
			}
		}
	});
});
