<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'sex',
			'birthday',
			'classification',
			'created_at',
			'updated_at',
			'first_name',
			'middle_name',
			'last_name',
			'college',
			'unit' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'sex' => array( 
				'import_field2' 
			),
			'birthday' => array( 
				'import_field3' 
			),
			'classification' => array( 
				'import_field5' 
			),
			'created_at' => array( 
				'import_field6' 
			),
			'updated_at' => array( 
				'import_field7' 
			),
			'first_name' => array( 
				'import_field' 
			),
			'middle_name' => array( 
				'import_field4' 
			),
			'last_name' => array( 
				'import_field8' 
			),
			'college' => array( 
				'import_field1' 
			),
			'unit' => array( 
				'import_field9' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field2',
					'import_field3',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field',
					'import_field4',
					'import_field8',
					'import_field1',
					'import_field9' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field' => 'grid',
				'import_field4' => 'grid',
				'import_field8' => 'grid',
				'import_field1' => 'grid',
				'import_field9' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field2',
				'import_field3',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field',
				'import_field4',
				'import_field8',
				'import_field1',
				'import_field9' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
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
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
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
		'top' => array(
			'modelId' => 'import-header',
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
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
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
						'import_field2',
						'import_field3',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field',
						'import_field4',
						'import_field8',
						'import_field1',
						'import_field9' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field2' => array(
			'field' => 'sex',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'birthday',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'classification',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'created_at',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'updated_at',
			'type' => 'import_field' 
		),
		'import_field' => array(
			'field' => 'first_name',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'middle_name',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'last_name',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'college',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'unit',
			'type' => 'import_field' 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>