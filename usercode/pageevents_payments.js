
Runner.pages.PageSettings.addPageEvent( 
	"payments", 
	"add", 
	"afterPageReady", 
	function(pageObj, proxy, pageid, inlineRow, inlineObject, row ) {
		function toggleServices(){

    $("[data-field='professional_service_id']").hide();
    $("[data-field='hospital_service_id']").hide();
    
    var type = Runner.getControl(pageid, "service_type").getValue();

    if(type == "Hospital Service"){
        $("[data-field='hospital_service_id']").show();
        $("[data-field='hospital_service_id']").required = true;
    }

    if(type == "Professional Service"){
        $("[data-field='professional_service_id']").show();
        $("[data-field='professional_service_id']").required = true;
    }

    if(type == "Pay All"){
        // hide both fields when selected
    }

}

toggleServices();

Runner.getControl(pageid, "service_type").on("change", function(){
    toggleServices();
});
});







