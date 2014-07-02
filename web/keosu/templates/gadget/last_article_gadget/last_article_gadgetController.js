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
app.controller('last_article_gadgetController', function ($scope, $http, $sce, usSpinnerService) {	

	$scope.parts = function (isList, isArticle, $scope) {
		$scope.isList = isList;
		$scope.isArticle = isArticle;
	}
	$scope.close = function () {
		$scope.parts(true, false, $scope);
	};
	$scope.open = function (page) {
		$scope.article = page;
		$scope.parts(false, true, $scope);
	};
	$scope.init = function (host, param, page, gadget, zone){ 
		$scope.parts(true, false, $scope);
		var offset = (0);
		$scope.activePage = {
				page:0
		};
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		$http.get(host + param + 'service/gadget/lastarticle/' + gadget + '/' + offset + '/' + 'json').success( function (data) {
			usSpinnerService.stop('spinner');
			$tmp = [];		
			for (i = 0; i < data.data.length; i++) {
				$tmp[i] = data.data[i];
				var decodedContent = data.data[i].content;
				decodedContent = $('<div/>').html(decodedContent).text();
				decodedContent = decodedContent.replace(/[/\\*]/g, "");
				$tmp[i] = data.data[i];
				$tmp[i].content = $sce.trustAsHtml(decodedContent);
				decodedContent = data.data[i].title;
				decodedContent = $('<div/>').html(decodedContent).text();
				decodedContent = decodedContent.replace(/[/\\*]/g, "");
				$tmp[i].title = decodedContent;
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

