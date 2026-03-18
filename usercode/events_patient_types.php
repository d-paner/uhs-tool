<?php
class eventclass_patient_types  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	 
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