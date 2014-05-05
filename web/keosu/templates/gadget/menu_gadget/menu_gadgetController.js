/************************************************************************
	Pockeit is an open source CMS for mobile app
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

app.controller('menu_gadgetController', function ($scope, $http) {
	$scope.init = function (host, param, page, gadget, zone){ 
		$scope.page = page;
		$http.get('data/' + gadget + '.json').success( function (data) {
			var length = data.pages.length;
			var pages = [];
			var ico = [];
			img = ['home', 'news', 'chrono', 'map'];
			for (var i = 0; i < data.pages.length; i++){
				var pageFileName = data.pages[i] + ".html";
				if (pageFileName.replace(' ', '') == $scope.page){  
					pages[i] = {name : pageFileName.replace(' ', ''), ico : 'theme/img/' + img[i] + '_active.png'};
				}
				else
					pages[i] = {name : pageFileName.replace(' ', ''), ico : 'theme/img/' + img[i] + '.png'};
			}
			$scope.pages = pages;
		});
	};
});