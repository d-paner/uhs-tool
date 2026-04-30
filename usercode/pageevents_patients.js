
Runner.pages.PageSettings.addPageEvent( 
	"patients", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		$("[data-field='person_type_id']").hide();
});







