/**
 * Created by lianglijiao on 14-8-5.
 */

//<keosufacebook-like      />
//<keosufacebook-share         />
//<keosufacebook-connect       />
app.directive('facebookConnect', function () {
	return {
		scope:{
			pageId:'=pageId'
		},
		restrict: 'E',
		templateUrl: 'plugins/facebookPlugins/templates/default.html',

		controller:['$scope','$http', function($scope,$http){
			$scope.checkLogin = function(){
				FB.login(null,{scope:"email"});
			};

			$scope.init=function(){

				if($scope.host==null){
					$http.get('data/globalParam.json').success(function(data){
						$scope.host=data.host;

						FB.Event.subscribe('auth.login',function(response){

							//window.location.reload();
							if(response.status =='connect'){
								var data = 'facebook_Token='+accessToken;
								$http.post($scope.host + '/service/gadget/facebook/appId/login',data).success(function(data){

									if(data.success){
										$location.path('/Page/'+$scope.pageId);
									}else{
										alert("wrong!!!");
									}
								});

							}
						});
					});
				}
			}
		}]
	};
});


//				FB.getLoginStatus(function(response){
//
//					if(response.status==='connected'){
//
//						var uid = response.authResponse.userID;
//						var accessToken = response.authResponse.accessToken;
//
//						var data = 'facebook_Token='+accessToken;
//						$http.post($scope.param.host + '/service/gadget/facebook/login',data).success(function(data){
//
//							if(data.success){
//								$location.path(params+$scope.param.pageToGoAfterLogin);
//							}else{
//								alert("wrong!!!!");
//							}
//							});
//
//					}
//
//				});









