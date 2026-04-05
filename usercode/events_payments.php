<?php
class eventclass_payments  extends TableEventsBase {
	
	function init() {
		$this->events = array(
	'BeforeProcessAdd' => true,
	'AfterAdd' => true,
	'OnPageLoad' => true,
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
		'date' => array(
			'edit' => true 
		),
		'placed_by' => array(
			'edit' => true 
		),
		'group_id' => array(
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

	function AfterAdd( &$values, &$keys, $inline, $pageObject ) {
		addPayments($values['transaction_number']);
// update services status to paid
if(!empty($values['hospital_service_id'])){
    $service = $values['hospital_service_id'];
    $serviceTable = 'hospital_services';
}
if(!empty($values['professional_service_id'])){
    $service = $values['professional_service_id'];
    $serviceTable = 'professional_services';
}

// if only Pay All service type
if($values['service_type'] == 'Pay All'){
    // update all hospital services to paid
    DB::Exec("UPDATE hospital_services set status = 'Paid' WHERE transaction_number = '".$values['transaction_number']."'");
    // update all hospital services to paid
    DB::Exec("UPDATE professional_services set status = 'Paid' WHERE transaction_number = '".$values['transaction_number']."'");
}

$query = "UPDATE $serviceTable
SET status = 'Paid'
WHERE id = $service
";

DB::Exec($query);
		;
		
	}

	function BeforeAdd( &$values, &$sqlValues, &$message, $inline, $pageObject ) {
		if ($values['service_type'] == 'Hospital Service') {

    $values['professional_service_id'] = null;

    if (isset($values['hospital_service_id']) && $values['hospital_service_id']) {

        $id = (int)$values['hospital_service_id'];

        $sql = "SELECT amount FROM hospital_services WHERE id = $id";
        $result = DB::Query($sql);
        $data = $result->fetchAssoc();

        if (!$data) {
            $message = "Hospital service not found.";
            return false;
        }

        if (abs($values['amount'] - $data['amount']) > 0.01) {
            $message = "Please enter the exact amount of hospital service fee.";
            return false;
        }

    } else {
        $message = "Please enter hospital service id first.";
        return false;
    }


} elseif ($values['service_type'] == 'Professional Service') {

    $values['hospital_service_id'] = null;

    if (isset($values['professional_service_id']) && $values['professional_service_id']) {

        $id = (int)$values['professional_service_id'];

        $sql = "SELECT amount FROM professional_services WHERE id = $id";
        $result = DB::Query($sql);
        $data = $result->fetchAssoc();

        if (!$data) {
            $message = "Professional service not found.";
            return false;
        }

        if (abs($values['amount'] - $data['amount']) > 0.01) {
            $message = "Please enter the exact amount of professional service fee.";
            return false;
        }

    } else {
        $message = "Please enter professional service id first.";
        return false;
    }


} else {

    $values['professional_service_id'] = null;
    $values['hospital_service_id'] = null;

    $sql = "SELECT total_due, total_paid 
            FROM transactions 
            WHERE transaction_number = '{$values['transaction_number']}'";

    $result = DB::Query($sql);
    $data = $result->fetchAssoc();

    if (!$data) {
        $message = "Transaction not found.";
        return false;
    }

    $remainingBalance = $data['total_due'] - $data['total_paid'];

    if ($values['amount'] > $remainingBalance) {
        $message = "Amount is higher than total charges.";
        return false;
    }elseif($values['amount'] < $remainingBalance){
        $message = "Please enter exact amount.";
        return false;
    }
}

return true;
		;
		return true;
	}
	public function default_date_efedit(  ) {
	$defaultValue = now();;
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

}


?>