<?php
class eventclass_hospital_services  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessAdd' => true,
	'AfterAdd' => true 
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
		'status' => array(
			'edit' => true 
		),
		'placed_by' => array(
			'edit' => true 
		),
		'group_id' => array(
			'edit' => true 
		),
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
		function BeforeProcessAdd( $pageObject ) {
		include_once('custom/get_sessions.php');
include_once('custom/calculations.php');
		;
		
	}

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		// get table name of current page
// $tableName = $pageObject->tName;
$trnNumber = [$values['transaction_number']];
addServicesCalculation($trnNumber);

		;
		
	}
	public function default_status_efedit(  ) {
	$defaultValue = "Unpaid";
return $defaultValue;
}

public function default_placed_by_efedit(  ) {
	$defaultValue = getFullname($_SESSION['full_name']);;
return $defaultValue;
}

public function default_group_id_efedit(  ) {
	$defaultValue = getGroup($_SESSION['group']);;
return $defaultValue;
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