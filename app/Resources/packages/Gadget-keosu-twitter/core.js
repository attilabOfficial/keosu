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

HASHTAG = 'HASHTAG_TO_SEARCH'; // TODO: Put this in gadget config

app.controller('keosu-twitterController', function ($location, $rootScope, $scope, $http, $sce, localStorageService) {

    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

    /////////////////////////
    // Init part
    /////////////////////////
    $scope.init = function (params) {

      $('#spinner').css('display', 'block');

        $scope.showFullScreen = true;
        $('html,body').scrollTop(0);
        $scope.param = params;

        $http({
          method: 'GET',
          url: $scope.param.host + 'service/gadget/twitter/%23' + HASHTAG
        }).then(function successCallback(r) {

          $scope.tweets = r.data.statuses;
          for(t in $scope.tweets) $scope.tweets[t].user.profile_image_url_https = $scope.tweets[t].user.profile_image_url_https.replace('_normal', '_bigger');

          $scope.no_tweets = ($scope.tweets.length == 0);
          $('#spinner').css('display', 'none');
        }, function errorCallback(r) {
          console.log(r);
        });

    };

});
