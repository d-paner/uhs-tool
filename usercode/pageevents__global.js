
Runner.pages.PageSettings.addPageEvent( 
	'<global>', 
	"login", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {

		// Place event code here.
// Use "Add Action" button to add code snippets.

document.getElementById("username").setAttribute("placeholder", "Enter your username");
document.getElementById("password").setAttribute("placeholder", "Enter your password");
	});




