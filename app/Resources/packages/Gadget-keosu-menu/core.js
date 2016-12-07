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
app.controller('keosu-menuController', function ($rootScope, $scope, $http,$location) {
	$scope.init = function(params) {
		$rootScope.initButton();
		$scope.pages = params.gadgetParam.pages;
		$http.get('data/'+params.gadgetId+".json").success(function(data) {
			console.log(data);
			$scope.pages = data;
		});
	};

    $scope.getPath = function(icon,iconActive, page) {

        return $location.path() == '/Page/'+page ? 'data/menu/'+iconActive : 'data/menu/'+icon;
    }

	// @see https://stackoverflow.com/questions/12592472/how-to-highlight-a-current-menu-item-in-angularjs
	$scope.getClass = function(page) {
		return $location.path() == '/Page/'+page ? 'active' : ''
	}

	$scope.httpLink = function(page){
			console.log("link href");

			if (page.isExternal) {
				if (typeof(cordova)!= "undefined" && typeof(cordova.InAppBrowser) != "undefined") {
					var ua = navigator.userAgent.toLowerCase();
					console.log(device.platform);
					if(device.platform == 'android' || device.platform == 'Android' || device.platform == "amazon-fireos") {
						navigator.app.loadUrl(page.externalLink, {openExternal: true});
					} else if(device.platform == 'windows'){
						window.open(page.externalLink,'_system');
					}
					else {
						cordova.InAppBrowser.open(page.externalLink, '_blank', 'location=yes,EnableViewPortScale=yes');
					}
				}
				else {
					window.open(page.externalLink, '_blank', 'location=yes');
				}
			} else {
				window.location = '#/Page/' + page.id;
			}
	}
});
