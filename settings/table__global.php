<?php
global $runnerTableSettings;
$runnerTableSettings[ GLOBAL_PAGES ] = array(
	'name' => '<global>',
	'type' => 5,
	'shortName' => '_global',
	'advancedSecurityType' => 0,
	'pagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		),
		'userinfo' => array( 
			'userinfo' 
		),
		'changepwd' => array( 
			'changepwd' 
		),
		'changepwd_success' => array( 
			'changepwd_success' 
		) 
	),
	'pageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success' 
	),
	'defaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success' 
	),
	'originalPagesByType' => array(
		'menu' => array( 
			'menu' 
		),
		'login' => array( 
			'login' 
		),
		'userinfo' => array( 
			'userinfo' 
		),
		'changepwd' => array( 
			'changepwd' 
		),
		'changepwd_success' => array( 
			'changepwd_success' 
		) 
	),
	'originalPageTypes' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success' 
	),
	'originalDefaultPages' => array(
		'menu' => 'menu',
		'login' => 'login',
		'userinfo' => 'userinfo',
		'changepwd' => 'changepwd',
		'changepwd_success' => 'changepwd_success' 
	),
	'hasJsEvents' => true 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels[ GLOBAL_PAGES ] = array(
	'pageTitles' => array(
		 
	) 
);
}
?>