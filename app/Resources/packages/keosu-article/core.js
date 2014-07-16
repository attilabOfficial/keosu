/************************************************************************
	Keosu is an open source CMS for mobile app
	Copyright (C) 2014  Vincent Le Borgne

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

app.controller('article_gadgetController', function ($scope, $http, $sce, usSpinnerService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	/////////////////////////
	// Init part
	/////////////////////////
	$scope.init = function(host, param, page, gadget, zone){
		$scope.param = {
			'host'   : host+param,
			'page'   : page,
			'gadget' : gadget,
			'zone'   : zone
		}
		$scope.articleInit();

	};
	
	/////////////////////////
	// Article part
	/////////////////////////
	$scope.articleInit = function() {
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		$http.get($scope.param.host+ 'service/gadget/article/' + $scope.param.gadget + '/json').success(function(data) {
			usSpinnerService.stop('spinner');
			$scope.article = data[0];
			$scope.article.content = decodedContent(data[0].content);
			$scope.article.title = decodedContent(data[0].title);
			$scope.article.content = $sce.trustAsHtml($scope.article.content);
			$scope.commentListAction();
		});
	};
	
});
