<?php
class eventclass_professionals  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessAdd' => true,
	'BeforeAdd' => true,
	'OnPageLoad' => true 
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
		function BeforeProcessAdd( $pageObject ) {
		include_once('custom/set_type.php');
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		$type = 'Professional';
$values['person_type_id'] = setPersonType($type);

// check if data exists
$query = "SELECT * FROM person_type_map 
          WHERE person_id = ".$values['person_id']." 
          AND type_id = ".$values['person_type_id']."
        ";

$runSql = DB::Query($query);

if($runSql->fetchAssoc()) {
    $message = 'Already have professional profile.';
    return false;
} else {
    $queryInsert = "INSERT INTO person_type_map VALUES (".$values['person_id'].", ".$values['person_type_id'].", now(), now())";
    $exec = DB::Query($queryInsert);
    return true;
}
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