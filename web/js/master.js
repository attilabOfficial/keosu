$(function() {
	$( document ).tooltip();
});

/*
 * Create radio button with a picture for a template.
 * (url_base / templateDir / name) is the path where the picture is.
 */
function templateButton(url_base, templateDir, name){
	$( ".imgTemplate .radio" ).each(function( index ) {
		input = $(this).find('input');
		templateName=input.attr('value');
		input.attr('id',templateName);
		img = '<label for="'+templateName+'"><img title="'+templateName+'" src="'+url_base+'/'+templateDir+name+'/'+templateName+'.png" template="'+templateName+'"/></label>';
		$(this).text("");
		$(this).append(input);
		$(this).append(img);

	});

	$(".imgTemplate input[checked=checked]").parent(".radio").find("img").css("border","red solid 3px");
	
	// switch border color
	$(".imgTemplate img").click(function(){
		template=$(this).attr('template');
		$("#"+template).addClass('checked','checked');
		$(".imgTemplate img").css("border","none");
		$(this).css("border","red solid 3px");
	});	
}

/*
 * Create radio button with a picture for a theme.
 */
function themeButton(url_base, themeDir){
	$( ".radio" ).each(function( index ) {
		input = $(this).find('input');
		themeName=input.attr('value');
		input.attr('id',themeName);
		img='<label for="'+themeName+'"><img alt="'+themeName+'" src="'+url_base+'/'+themeDir+themeName+'/'+themeName+'.png"/></label>';
		
		$( this ).text("");
		$( this ).append(input);
		$( this ).append(img);
	});

	$(".imgtheme input[checked=checked]").parent(".radio").find("img").css("border","red solid 3px");
	
	// switch border color
	$(".imgtheme img").click(function(){
		$(".imgtheme img").css("border","none");
		$(this).css("border","red solid 3px");
	});
}
