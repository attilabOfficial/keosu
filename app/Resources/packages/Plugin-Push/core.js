// Don't forget to take a look at exportListener.php before edit this file

var appPushNotification = {
	// result contains any message sent from the plugin call
	successHandler: function(result) {
		console.log('Callback Success! Result = '+result);
	},

	errorHandler: function(error) {
		console.log(error);
	},

	onNotificationGCM: function(e) {
		switch( e.event )
		{
			case 'registered':
			if ( e.regid.length > 0 ) {
				console.log("Regid " + e.regid);
			}
			break;

			case 'message':
			// this is the actual push notification. its format depends on the data model from the push server
			console.log('message = '+e.message+' msgcnt = '+e.msgcnt);
			break;

			case 'error':
			alert('GCM error = '+e.msg);
			break;

			default:
			alert('An unknown GCM event has occurred');
			break;
		}
	}

};
