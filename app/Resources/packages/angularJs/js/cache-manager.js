(function() {
	/* Start angularCacheManager */
	'use strict';
	var angularCacheManager = angular.module('CacheManagerModule', ['ngRoute', 'LocalStorageModule']);

	angularCacheManager.provider('cacheManagerService', function() {

		this.cacheExpiration=100000;

		this.$get = ['$http','$q','localStorageService', function($http,$q,localStorageService) {

			var cacheExpiration = this.cacheExpiration; //TODO put this in gadget config

			var getFromCache = function(url,cacheExp){
				if(cacheExp){
					cacheExpiration=cacheExp;
				}
				var tmp=url.split("/");
				var cachekey="";
				for(var c in tmp){
					cachekey=cachekey+"_"+tmp[c];
				}

				var deferred = $q.defer();
				var promise = deferred.promise;

				var lastUpdate = localStorageService.get('lastup'+cachekey);
				var now = new Date().getTime();
				if(lastUpdate==null){
					lastUpdate=0;
					now=0;
				}
				var dif = now - lastUpdate;
				var currentCache = localStorageService.get(cachekey);
				if((currentCache && (dif < cacheExpiration && dif != 0))
						/*|| $scope.offline */){
					deferred.resolve(currentCache);
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
			};

			var getLocationFromCache = function(cachekey,cacheExp){	
				if(cacheExp){
					cacheExpiration=cacheExp;
				}
				var onGpsSuccess = function(position){
					localStorageService.set(cachekey,position);
					localStorageService.set('lastup'+cachekey,now);
					deferred.resolve(position);
				};

				var onGpsError = function(){
					if(currentCache !=null){
						deferred.resolve(currentCache);
					}else{
						alert('Impossible de vous localiser.');
						deferred.reject('error');
					}
				};
				var deferred = $q.defer();
				var promise = deferred.promise;
				var lastUpdate = localStorageService.get('lastup'+cachekey);
				var now = new Date().getTime();
				if(lastUpdate==null){
					lastUpdate=0;
					now=0;
				}
				var dif = now - lastUpdate;
				var currentCache = localStorageService.get(cachekey);
				if((currentCache && (dif < cacheExpiration && dif != 0))
						/*|| $scope.offline*/ ){
					deferred.resolve(currentCache);
				}else{
					navigator.geolocation.getCurrentPosition(onGpsSuccess, onGpsError);	
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
			};


			return{
				get: getFromCache,
				getLocation : getLocationFromCache
			};
		}];
	});
}).call(this);
