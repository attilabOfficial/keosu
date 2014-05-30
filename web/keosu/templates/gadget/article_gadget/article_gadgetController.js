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
	$scope.init = function(host, param, page, gadget, zone){
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
		$http.get(host + param + 'service/gadget/article/' + gadget + '/json').success(function(data) {
			usSpinnerService.stop('spinner');
			var decodedContent = data[0].content;
			decodedContent = $('<div/>').html(decodedContent).text();
			decodedContent = decodedContent.replace(/[/\\*]/g, "");
			$scope.article = data[0];
			$scope.article.content = decodedContent;
			decodedContent = data[0].title;
			decodedContent = $('<div/>').html(decodedContent).text();
			decodedContent = decodedContent.replace(/[/\\*]/g, "");
			$scope.article.title = decodedContent;
			$scope.article.content = $sce.trustAsHtml($scope.article.content);
		});
	};
});
