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
app.controller('keosu-last-articleController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService) {	

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	$scope.parts = function (isList, isArticle, $scope) {
		$scope.isList = isList;
		$scope.isArticle = isArticle;
	}
	$scope.close = function () {
		$scope.slide="fadeIn";
		$scope.parts(true, false, $scope);
		
	};
	$scope.open = function (page) {
		$scope.article = page;
		$scope.parts(false, true, $scope);
	};
	$scope.next = function(){
		$scope.slide="slideInRight";
		$scope.activePage.page = $scope.activePage.page+1;
	};
	$scope.previous = function(){
		$scope.slide="slideInLeft";
		$scope.activePage.page = $scope.activePage.page-1;
	};
	$scope.init = function (params){
		$scope.slide="fadeIn";
		$scope.param = params;
		$scope.parts(true, false, $scope);
		var offset = (0);
		$scope.activePage = {
				page:0
		};
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		cacheManagerService.get($scope.param.host+'service/gadget/lastarticle/'+$scope.param.gadgetId+'/'+$scope.param.gadgetParam.articlesPerPage+'/json').success(function(data) {
			usSpinnerService.stop('spinner');
			$tmp = [];
			for (i = 0; i < data.data.length; i++) {
				$tmp[i] = data.data[i];
				$tmp[i].content = $sce.trustAsHtml(decodedContent(data.data[i].content));
				$tmp[i].title = decodedContent(data.data[i].title);
			}
			nb = 0;
			pages = new Array();
			for (i = 0; i < $tmp.length; i++) {
				tmpPage = [];
				for (j = 0; j < data.articleperpage; j++) {
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

