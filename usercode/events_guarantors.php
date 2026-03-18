<?php
class eventclass_guarantors  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeAdd' => true 
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
		'created_at' => array(
			'edit' => true 
		),
		'updated_at' => array(
			'edit' => true 
		) 
	),
	'autoUpdateValue' => array(
		'updated_at' => array(
			'edit' => true 
		) 
	),
	'uploadFolder' => array(
		 
	),
	'viewPluginInit' => array(
		 
	),
	'editPluginInit' => array(
		 
	) 
);
			}
		function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$values['full_name'] = ucwords($values['full_name']);

return true;
		;
		return true;
	}
	public function default_created_at_efedit(  ) {
	$defaultValue = now();;
return $defaultValue;
}

public function default_updated_at_efedit(  ) {
	$defaultValue = now();;
return $defaultValue;
}

public function autoupdate_updated_at_efedit(  ) {
	$defaultValue = now();;
return $defaultValue;
}	

}


?>