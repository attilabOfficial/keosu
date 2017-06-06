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

	$(".img-theme input[checked=checked]").parent(".radio").find("img").css("border","red solid 3px");
	
	// switch border color
	$(".img-theme img").click(function(){
		$(".img-theme img").css("border","none");
		$(this).css("border","red solid 3px");
	});
}
console.log("master.js");

$(document).ready(function(){
    $("#bouton-menu-responsive").click(function(){
        if( (document.getElementById("left-menu").className) == "col-md-2 leftcol closed")
        {
            document.getElementById("left-menu").className="col-md-2 leftcol open";
            $('#icon-arrow-menu-left').show();
            $('#icon-arrow-menu').hide();
        }
        else
        {
            document.getElementById("left-menu").className="col-md-2 leftcol closed";
            $('#icon-arrow-menu-left').hide();
            $('#icon-arrow-menu').show();
        }

    });
});

