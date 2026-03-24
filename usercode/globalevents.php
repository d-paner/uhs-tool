<?php
class class_GlobalEvents extends GlobalEventsBase
{
	function init() {
		$this->events = array(
	'pageEvents' => array(
		'AfterSuccessfulLogin' => true,
		'BeforeProcessMenu' => true,
		'OnPageLoad' => true 
	),
	'onScreenEvents' => array(
		 
	),
	'dashboardEvents' => array(
		 
	),
	'buttons' => array(
		 
	),
	'maps' => array(
		 
	),
	'tablePermissions' => array(
		 
	),
	'recordEditable' => array(
		 
	) 
);
	}

		function AfterSuccessfulLogin( $username, $password, &$data, $pageObject ) {
		// create session to use later
$_SESSION['group'] = $data['group_id'];
$_SESSION['full_name'] = $data['full_name'];
if($_SESSION['group'] == 'admin'){
    // Redirect to a specific page
    header("Location: transactions_list.php");
}
elseif($_SESSION['group'] == 'cashier'){
    // Redirect to a specific page
    header("Location: payments_list.php");
}

exit();


		;
		
	}

	function BeforeProcessMenu( $pageObject ) {
		header("Location: transactions_list.php");
exit();
		;
		
	}
	
	// custom buttons 
	
	// ajax code snippets
	
	
	// field events
	

	// code snippets
	
}
?>
