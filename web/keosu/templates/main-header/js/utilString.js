/*
 * Decode json content
 */
function decodedContent(content){
	content = $('<div/>').html(content).text();
	content = content.replace(/[/\\*]/g, "");
	return content;
}