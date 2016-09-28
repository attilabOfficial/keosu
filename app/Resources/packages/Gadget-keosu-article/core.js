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
app.controller('keosu-articleController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService) {

    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";


    /////////////////////////
    // Init part
    /////////////////////////
    $scope.init = function (params) {
        $scope.param = params;
        $scope.articleInit();
    };

    /////////////////////////
    // Article part
    /////////////////////////
    $scope.articleInit = function () {
        if ($scope.param.gadgetParam.offline == true) {
            $http.get('data/article' + $scope.param.gadgetParam['article-id'] + '.json').success(function (data) {
                $scope.article = data;
                $scope.article.content = $sce.trustAsHtml(data.content);
            });
        } else {
            usSpinnerService.spin('spinner'); // While loading, there will be a spinner
            cacheManagerService.get($scope.param.host + 'service/gadget/article/' + $scope.param.gadgetId + '/json', $scope.param.gadgetParam.cache, $scope.param.gadgetParam.timeout).success(function (data) {
                usSpinnerService.stop('spinner');
                $scope.article = data;
                $scope.article.content = $sce.trustAsHtml(data.content);
            }).error(function (error) {
                $scope.error = (error);
                usSpinnerService.stop('spinner');
            });
        }
    };

});
