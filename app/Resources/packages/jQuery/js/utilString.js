/*
 * Decode json content
 */
function decodedContent(content){
	var ret = document.createElement('div');
	ret.innerHTML = content.replace(/[/\\*]/g, "");
	return ret;
}
