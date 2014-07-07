$(function() {
	$( document ).tooltip();
}); 


/*
 * Manage the loading spinner
 */
jQuery(function($){
    $('#spinner-loading').hide(); 
    $('#spinner-load').click(function(e){
    	$('#spinner-loading').show();
    });
});
