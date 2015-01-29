
app.controller('keosu-rssController', function ($rootScope, $scope)
{
	$scope.init = function(params) {
        $scope.infiniteList = false;
        $rootScope.previousButton = false;
        $scope.param = params;
        $scope.isList = true;
        $scope.list = [];
        $scope.currentlist = [];
        $scope.page = 0;
        $scope.max = parseInt($(document).height()) - parseInt($(window).height());
        google.load('feeds', '1', {"callback": $scope.displayRss});
	}

    $scope.buildPage = function() {
        if ($scope.infiniteList == false)
            $scope.currentlist = [];
        console.log("update page");
        var offset = $scope.page * $scope.param.gadgetParam.articlesPerPage;
        for (var i = offset; i < offset + $scope.param.gadgetParam.articlesPerPage && i < $scope.list.length; i++)
            $scope.currentlist.push($scope.list[i]);
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
        $scope.link = elem.link;
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
        $scope.feed.setNumEntries(50);
      	$scope.feed.load(function(result){
        if (!result.error){
            for(var i = 0; i < result.feed.entries.length; i++) {
                var image = "";
                try {
                    image = result.feed.entries[i].xmlNode.getElementsByTagName("image")[0].innerHTML;
                }
                catch(err) {
                    try {
                        image = result.feed.entries[i].xmlNode.getElementsByTagName("enclosure")[0].getAttribute("url");
                    }
                    catch(err){
                        image = "";                        
                    }
                }
                $scope.list.push({"title": result.feed.entries[i].title,
                                  "body": result.feed.entries[i].content,
                                  "link": result.feed.entries[i].link,
                                  "image": image});
            }
            $scope.last = Math.ceil($scope.list.length / $scope.param.gadgetParam.articlesPerPage);
            $scope.buildPage();
            $scope.$apply();
        }
      });
    }

    $scope.setInfiniteList = function(){
        $scope.infiniteList = true;
    }

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
/* RSS Feed lemonde:  http://rss.lemonde.fr/c/205/f/3050/index.rss */