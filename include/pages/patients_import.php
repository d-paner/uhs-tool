<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'created_at',
			'updated_at',
			'classification',
			'office',
			'college',
			'uhs_id_no',
			'emed_no',
			'ihomis_no',
			'philhealth_no',
			'person_id',
			'person_type_id',
			'patient_id' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'created_at' => array( 
				'import_field6' 
			),
			'updated_at' => array( 
				'import_field7' 
			),
			'classification' => array( 
				'import_field' 
			),
			'office' => array( 
				'import_field8' 
			),
			'college' => array( 
				'import_field9' 
			),
			'uhs_id_no' => array( 
				'import_field10' 
			),
			'emed_no' => array( 
				'import_field11' 
			),
			'ihomis_no' => array( 
				'import_field12' 
			),
			'philhealth_no' => array( 
				'import_field13' 
			),
			'person_id' => array( 
				'import_field1' 
			),
			'person_type_id' => array( 
				'import_field2' 
			),
			'patient_id' => array( 
				'import_field3' 
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
					'import_field6',
					'import_field7',
					'import_field',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field1',
					'import_field2',
					'import_field3' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid' 
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
				'import_field6',
				'import_field7',
				'import_field',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field1',
				'import_field2',
				'import_field3' 
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
						'import_field6',
						'import_field7',
						'import_field',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field1',
						'import_field2',
						'import_field3' 
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
		'import_field6' => array(
			'field' => 'created_at',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'updated_at',
			'type' => 'import_field' 
		),
		'import_field' => array(
			'field' => 'classification',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'office',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'college',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'uhs_id_no',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'emed_no',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'ihomis_no',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'philhealth_no',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'person_id',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'person_type_id',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'patient_id',
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