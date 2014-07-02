/*
 * Decode json content
 */
function decodedContent(content){
	content = $('<div/>').html(content).html();
	content = content.replace(/[/\\*]/g, "");
	return content;
}