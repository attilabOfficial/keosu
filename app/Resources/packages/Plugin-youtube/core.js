app.directive('youtubePlayer', function($window) {
  return {
    restrict: "E",
    scope: {
      height: "@",
      width:  "@",
      id:     "="
    },
    template: '<div></div>',

    link: function(scope, element, attrs) {
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;

      $window.onYouTubeIframeAPIReady = function() {
        player = new YT.Player(element.children()[0], {
          height: scope.height,
          width: scope.width,
          videoId: scope.id
        });
      };
    }
  }
});
