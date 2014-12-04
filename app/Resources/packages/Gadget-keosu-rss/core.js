
app.controller('keosu-rssController', function ($rootScope, $scope)
{
	$scope.init = function(params) {
        $rootScope.previousButton = false;
        $scope.param = params;
        $scope.isList = true;
        $scope.list = [];
        $scope.currentlist = [];
        $scope.page = 0;
        google.load('feeds', '1', {"callback": $scope.displayRss});
	}

    $scope.buildPage = function() {
        $scope.currentlist = [];
        var offset = $scope.page * $scope.param.gadgetParam.articlesPerPage;
        for (var i = offset; i < offset + $scope.param.gadgetParam.articlesPerPage && i < $scope.list.length; i++){
            $scope.currentlist.push($scope.list[i]);
        }
    }

    $rootScope.previous = function() {
        $rootScope.previousButton = false;
        $scope.isList = !$scope.isList;
    }

    $scope.open = function(elem) {
        $rootScope.previousButton = true;
        $scope.isList = !$scope.isList;
        $scope.title = elem.title;
        $scope.body = elem.body;
        $scope.path = elem.image;
        $scope.hasImage = (elem.image != "");
        window.scrollTo(0, 0);
    }

    $scope.next = function() {
        if ($scope.page < $scope.last)
            $scope.page += 1;
        $scope.buildPage();
    }

    $scope.prev = function() {
        if ($scope.page > 0)
            $scope.page -= 1;
        $scope.buildPage();
    }

    $scope.displayRss = function() {
        $scope.feed = new google.feeds.Feed($scope.param.gadgetParam.url);
        $scope.feed.setResultFormat(google.feeds.Feed.MIXED_FORMAT);
        $scope.feed.setNumEntries(100);
      	$scope.feed.load(function(result){
        if (!result.error){
            console.log(result.feed.entries.length + " elem");
            for(var i = 0; i < result.feed.entries.length; i++) {
                var image = "";
                try {
                    image = result.feed.entries[i].xmlNode.getElementsByTagName("image")[0].innerHTML;
                    console.log("<image>");
                }
                catch(err) {
                    try {
                        image = result.feed.entries[i].xmlNode.getElementsByTagName("enclosure")[0].getAttribute("url");
                        console.log("<enclosure>");
                    }
                    catch(err){
                        image = "";                        
                    }
                }
                $scope.list.push({"title": result.feed.entries[i].title,
                                  "body": result.feed.entries[i].content,
                                  "image": image});
            }
            $scope.last = Math.ceil($scope.list.length / $scope.param.gadgetParam.articlesPerPage);
            $scope.buildPage();
            $scope.$apply();
        }
      });
    }
});
/* RSS Feed lemonde:  http://rss.lemonde.fr/c/205/f/3050/index.rss */