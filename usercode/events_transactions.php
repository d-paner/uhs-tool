<?php
class eventclass_transactions  extends TableEventsBase {
	
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
		'transaction_number' => array(
			'edit' => true 
		),
		'status' => array(
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
		include_once('custom/generate_transaction_number.php');
		;
		
	}
	public function default_transaction_number_efedit(  ) {
	$defaultValue = generate_transaction_number();;
return $defaultValue;
}

public function default_status_efedit(  ) {
	$defaultValue = Open;
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