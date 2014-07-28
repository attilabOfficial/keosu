(function() {
    /* Start angularCacheManager */
    'use strict';
    var angularCacheManager = angular.module('CacheManagerModule', ['ngRoute', 'LocalStorageModule']);
    
    angularCacheManager.provider('cacheManagerService', function() {
    	
    	this.cacheExpiration=20000;
    	
    	
    	this.$get = ['$http','$q','localStorageService', function($http,$q,localStorageService) {
    	    
    		var cacheExpiration = this.cacheExpiration; //TODO put this in gadget config
    		
    	    var getFromCache = function(cachekey, url){
    		
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
    		};
    	    
    	    return{
    	    	get: getFromCache
    	    };
		}];
    });
}).call(this);