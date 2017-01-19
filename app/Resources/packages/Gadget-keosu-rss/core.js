
app.controller('keosu-rssController', function ($rootScope, $scope,cacheManagerService)
{
	$scope.init = function(params) {
        $scope.infiniteList = false;
        $scope.param = params;
        $scope.isList = true;
        $scope.list = [];
        $scope.currentlist = [];
        $scope.page = 0;
        $scope.limit = $scope.param.gadgetParam.articlesPerPage;
        $scope.max = parseInt($(document).height()) - parseInt($(window).height());
        console.log(encodeURIComponent($scope.param.gadgetParam.url));
		cacheManagerService.get($scope.param.host + 'service/xml2json?url='+encodeURIComponent($scope.param.gadgetParam.url)).success(function (data) {
			$scope.list = data.channel.item;
			$scope.buildPage();
		});
        //google.load('feeds', '1', {"callback": $scope.displayRss});
	};

    $scope.buildPage = function() {
        if ($scope.infiniteList == false)
            $scope.currentlist = [];
        console.log("update page");
        var offset = $scope.page * $scope.param.gadgetParam.articlesPerPage;
        for (var i = offset; i < offset + $scope.param.gadgetParam.articlesPerPage && i < $scope.list.length; i++)
            $scope.currentlist.push($scope.list[i]);
    };

    /**
     * specific action when the 'back' or 'close' button is called
     */
    $scope.$on('back', function () {
        $scope.isList = !$scope.isList;
    });

    /**
     * specific action when the 'open' button is called
     */
    $scope.open= function (elem) {
        $scope.isList = !$scope.isList;
        $scope.title = elem.title;
        $scope.body = elem.description;
        $scope.path = elem.image;
        $scope.link = elem.link;
        $scope.hasImage = (elem.image != "");
        window.scrollTo(0, 0);
		$scope.$emit("show-back",null);
    };

    $scope.next = function() {      
        if ($scope.page < $scope.last)
            $scope.page += 1;
        $scope.buildPage();
    };

    $scope.prev = function() {
        if ($scope.page > 0)
            $scope.page -= 1;
        $scope.buildPage();
    };

    $scope.setInfiniteList = function(){
        $scope.infiniteList = true;
    };

    $(window).on('scroll', function() {
        if ($scope.isList && !$scope.isLastPage && $scope.infiniteList){
            $scope.max = parseInt($(document).height()) - parseInt($(window).height()) - 1;
            if ($(window).scrollTop() >= $scope.max) {
                $scope.next();
                $scope.$apply();
            }
        }
    });
});
