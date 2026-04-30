<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => false,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'loginform_login' => array(
				'menutItem' => false 
			),
			'username_button' => array(
				'menutItem' => false 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'patients',
				'page' => 'list' 
			),
			'welcome_item1' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'transactions',
				'page' => 'list' 
			),
			'welcome_item2' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'patient_types',
				'page' => 'list' 
			),
			'welcome_item3' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'hospital_accounts',
				'page' => 'list' 
			),
			'welcome_item4' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'guarantors',
				'page' => 'list' 
			),
			'welcome_item6' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'professionals',
				'page' => 'list' 
			),
			'welcome_item7' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'offices',
				'page' => 'list' 
			),
			'welcome_item8' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'professional_services',
				'page' => 'list' 
			),
			'welcome_item9' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'hospital_services',
				'page' => 'list' 
			),
			'welcome_item10' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'users',
				'page' => 'list' 
			),
			'welcome_item11' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'payments',
				'page' => 'list' 
			),
			'welcome_item12' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'transaction_guarantor',
				'page' => 'list' 
			),
			'welcome_item13' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'Viewing List',
				'page' => 'list' 
			),
			'welcome_item14' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'professional_accounts',
				'page' => 'list' 
			),
			'welcome_item5' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'uhs_audit',
				'page' => 'list' 
			),
			'welcome_item15' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'patient_classifications',
				'page' => 'list' 
			),
			'welcome_item16' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'guarantor_classifications',
				'page' => 'list' 
			),
			'welcome_item17' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'fund_type',
				'page' => 'list' 
			),
			'welcome_item18' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'fund_code',
				'page' => 'list' 
			),
			'welcome_item19' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'persons',
				'page' => 'list' 
			),
			'welcome_item20' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'person_types',
				'page' => 'list' 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu',
					'loginform_login',
					'username_button' 
				),
				'grid' => array( 
					'welcome_item',
					'welcome_item1',
					'welcome_item2',
					'welcome_item3',
					'welcome_item4',
					'welcome_item6',
					'welcome_item7',
					'welcome_item8',
					'welcome_item9',
					'welcome_item10',
					'welcome_item11',
					'welcome_item12',
					'welcome_item13',
					'welcome_item14',
					'welcome_item5',
					'welcome_item15',
					'welcome_item16',
					'welcome_item17',
					'welcome_item18',
					'welcome_item19',
					'welcome_item20' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'welcome_item' => 'grid',
				'welcome_item1' => 'grid',
				'welcome_item2' => 'grid',
				'welcome_item3' => 'grid',
				'welcome_item4' => 'grid',
				'welcome_item6' => 'grid',
				'welcome_item7' => 'grid',
				'welcome_item8' => 'grid',
				'welcome_item9' => 'grid',
				'welcome_item10' => 'grid',
				'welcome_item11' => 'grid',
				'welcome_item12' => 'grid',
				'welcome_item13' => 'grid',
				'welcome_item14' => 'grid',
				'welcome_item5' => 'grid',
				'welcome_item15' => 'grid',
				'welcome_item16' => 'grid',
				'welcome_item17' => 'grid',
				'welcome_item18' => 'grid',
				'welcome_item19' => 'grid',
				'welcome_item20' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3,
				'username_button' => 3,
				'loginform_login' => 3 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'welcome_item' => array( 
				'welcome_item',
				'welcome_item1',
				'welcome_item2',
				'welcome_item3',
				'welcome_item4',
				'welcome_item6',
				'welcome_item7',
				'welcome_item8',
				'welcome_item9',
				'welcome_item10',
				'welcome_item11',
				'welcome_item12',
				'welcome_item13',
				'welcome_item14',
				'welcome_item5',
				'welcome_item15',
				'welcome_item16',
				'welcome_item17',
				'welcome_item18',
				'welcome_item19',
				'welcome_item20' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'menu',
	'type' => 'menu',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'welcome',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'welcome_item',
						'welcome_item1',
						'welcome_item2',
						'welcome_item3',
						'welcome_item4',
						'welcome_item6',
						'welcome_item7',
						'welcome_item8',
						'welcome_item9',
						'welcome_item10',
						'welcome_item11',
						'welcome_item12',
						'welcome_item13',
						'welcome_item14',
						'welcome_item5',
						'welcome_item15',
						'welcome_item16',
						'welcome_item17',
						'welcome_item18',
						'welcome_item19',
						'welcome_item20' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'patients',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'patients',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'headphones' 
			),
			'linkComments' => array(
				'text' => 'Patients description',
				'type' => 0 
			),
			'background' => '#2f4f4f',
			'linkType' => 0 
		),
		'welcome_item1' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'transactions',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'transactions',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'flash' 
			),
			'linkComments' => array(
				'text' => 'Transactions description',
				'type' => 0 
			),
			'background' => '#6da5c8',
			'linkType' => 0 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'patient_types',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'patient_types',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'linkComments' => array(
				'text' => 'Patient Types description',
				'type' => 0 
			),
			'background' => '#778899',
			'linkType' => 0 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'hospital_accounts',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'hospital_accounts',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'barcode' 
			),
			'linkComments' => array(
				'text' => 'Hospital Accounts description',
				'type' => 0 
			),
			'background' => '#6da5c8',
			'linkType' => 0 
		),
		'welcome_item4' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'guarantors',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'guarantors',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'flash' 
			),
			'linkComments' => array(
				'text' => 'Guarantors description',
				'type' => 0 
			),
			'background' => '#1e90ff',
			'linkType' => 0 
		),
		'welcome_item6' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'professionals',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'professionals',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'calendar' 
			),
			'background' => '#008b8b',
			'linkType' => 0 
		),
		'welcome_item7' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'offices',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'offices',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'background' => '#e8926f',
			'linkType' => 0 
		),
		'welcome_item8' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'professional_services',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'professional_services',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'shopping-cart' 
			),
			'background' => '#9acd32',
			'linkType' => 0 
		),
		'welcome_item9' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'hospital_services',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'hospital_services',
				'type' => 6 
			),
			'background' => '#4682b4',
			'linkType' => 0 
		),
		'welcome_item10' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'users',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'users',
				'type' => 6 
			),
			'background' => '#b22222',
			'linkType' => 0 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'welcome_item11' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'payments',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'payments',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item12' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'transaction_guarantor',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'transaction_guarantor',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item13' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'Viewing List',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'Viewing List',
				'type' => 6 
			),
			'background' => '#edca00',
			'linkType' => 0 
		),
		'welcome_item14' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'professional_accounts',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'professional_accounts',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item5' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'uhs_audit',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'uhs_audit',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item15' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'patient_classifications',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'patient_classifications',
				'type' => 6 
			),
			'background' => '#d2af80',
			'linkType' => 0 
		),
		'welcome_item16' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'guarantor_classifications',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'guarantor_classifications',
				'type' => 6 
			),
			'background' => '#e07878',
			'linkType' => 0 
		),
		'welcome_item17' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'fund_type',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'fund_type',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item18' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'fund_code',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'fund_code',
				'type' => 6 
			),
			'background' => '#d2af80',
			'linkType' => 0 
		),
		'welcome_item19' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'persons',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'persons',
				'type' => 6 
			),
			'background' => '#778899',
			'linkType' => 0 
		),
		'welcome_item20' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'person_types',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'person_types',
				'type' => 6 
			),
			'background' => '#db7093',
			'linkType' => 0 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'welcomePageStay' => true,
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>