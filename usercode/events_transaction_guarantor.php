<?php
class eventclass_transaction_guarantor  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessAdd' => true 
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
		'placed_by' => array(
			'edit' => true 
		),
		'group' => array(
			'edit' => true 
		),
		'timestamps' => array(
			'edit' => true 
		) 
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
		function BeforeProcessAdd( $pageObject ) {
		include_once('custom/get_sessions.php');
include_once('custom/calculations.php');
		;
		
	}
	public function default_placed_by_efedit(  ) {
	$defaultValue = getFullname($_SESSION['full_name']);;
return $defaultValue;
}

public function default_group_efedit(  ) {
	$defaultValue = getGroup($_SESSION['group']);;
return $defaultValue;
}

public function default_timestamps_efedit(  ) {
	$defaultValue = now();;
return $defaultValue;
}	

}


?>