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
app.controller('last_article_gadgetController', function ($scope, $http, $sce, $q, usSpinnerService, localStorageService) {

	$http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";

	$scope.parts = function (isList, isArticle, $scope) {
		$scope.isList = isList;
		$scope.isArticle = isArticle;
	}
	$scope.close = function () {
		$scope.parts(true, false, $scope);
	};
	$scope.open = function (page) {
		$scope.article = page;
		$scope.commentListAction();
		$scope.parts(false, true, $scope);
	};
	$scope.init = function (host, param, page, gadget, zone){
	
		$scope.param = {
			'host'   : host+param,
			'page'   : page,
			'gadget' : gadget,
			'zone'   : zone,
            'cacheExpiration':20000,//TODO put this in gadget config
            'offset':(0)
		};
	
	
		$scope.parts(true, false, $scope);
		var offset = (0);
		$scope.activePage = {
				page:0
		};
		usSpinnerService.spin('spinner'); // While loading, there will be a spinner
        data = $scope.getFromCache(gadget,
                $scope.param.host + 'service/gadget/lastarticle/' + $scope.param.gadget + '/' + $scope.param.offset + '/' + 'json')
                 .success(function(data){
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
                        usSpinnerService.stop('spinner');
                });
	};

    //TODO put this function in an angular module
    // Add page nbr in cachekey if we need to
    $scope.getFromCache = function(cachekey, url){
        var deferred = $q.defer();
        var promise = deferred.promise;

        lastUpdate = localStorageService.get('lastup'+cachekey);
        now = new Date().getTime();
        if(lastUpdate==null){
            lastUpdate=0;
            now=0;
        }
        dif = now - lastUpdate;
        currentCache = localStorageService.get(cachekey);
        if((currentCache && (dif < $scope.param.cacheExpiration && dif != 0))
            /*|| TODO Add user not connected to the net*/ ){
                deferred.resolve(currentCache);
                //return ;
        }else{
            $http.get(url)
                .success( function (data) {
                    localStorageService.set(cachekey,data);
                    localStorageService.set('lastup'+cachekey,now);
                    deferred.resolve(data);
                })
                .error(function(data){
                    if(currentCache !=null){
                        deferred.resolve(currentCache);
                    }else{
                        deferred.reject('error');
                        //TODO Return an error
                    }
                }
            );

        }
        promise.success = function(fn) {
            promise.then(fn);
            return promise;
        }

        promise.error = function(fn) {
            promise.then(null, fn);
            return promise;
        }

        return promise;

    }

	/////////////////////////
	// Comment part
	/////////////////////////
	$scope.commentListAction = function() {
		$http.get($scope.param.host+'service/gadget/comment/'+$scope.article.dataModelObjectName+'/'+$scope.article.id).success(function(data){
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};
	
	$scope.commentAddAction = function() {
	
		var data = "message="+$scope.messageComment;
		$scope.messageComment = "";
		$http.post($scope.param.host+'service/gadget/comment/'+$scope.article.dataModelObjectName+'/'+$scope.article.id,data).success(function(data){
			console.log(data)
			$scope.comments = data.comments;
			$scope.connect = data.connect;
		});
	};
});

