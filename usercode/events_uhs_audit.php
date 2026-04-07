<?php
class eventclass_uhs_audit  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeShowList' => true 
);
		$this->fieldValues = array(
	'filterLimit' => array(
		 
	),
	'mapIcon' => array(
		 
	),
	'viewCustom' => array(
		 
	),
	'lookupWhere' => array(
		 
	),
	'viewFileText' => array(
		 
	),
	'defaultValue' => array(
		 
	),
	'autoUpdateValue' => array(
		 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeShowList( &$xt, &$templatefile, $pageObject ) {
		$xt->assign("pagetitle", "Audit Log");
		;
		
	}
		

}


?>