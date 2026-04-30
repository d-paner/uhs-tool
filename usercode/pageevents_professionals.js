
Runner.pages.PageSettings.addPageEvent( 
	"professionals", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("[data-field='person_type_id']").hide();
});







