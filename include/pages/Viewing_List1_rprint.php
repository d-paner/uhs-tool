<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'guarantor_office',
			'transaction_date' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'guarantor_office' => array( 
				'report_grid_field1' 
			),
			'transaction_date' => array( 
				'report_grid_field3' 
			),
			'guarantor_name' => array( 
				'report_group_field' 
			),
			'transaction_number' => array( 
				'report_group_field1' 
			),
			'patient_name' => array( 
				'report_group_field2' 
			),
			'patient_type' => array( 
				'report_group_field3' 
			),
			'total_hospital_amount' => array( 
				'report_group_field4' 
			),
			'total_professional_amount' => array( 
				'report_group_field5' 
			),
			'running_balance' => array( 
				'report_group_field6' 
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
				'above-grid' => array( 
					'print_pages' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'print_header',
					'print_subheader' 
				),
				'grid' => array( 
					'report_group_field',
					'report_group_field1',
					'report_group_field2',
					'report_group_field3',
					'report_group_field4',
					'report_group_field5',
					'report_group_field6',
					'report_grid_field1',
					'report_grid_field3' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'print_pages' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'print_pages' => 'above-grid',
				'print_header' => 'top',
				'print_subheader' => 'top',
				'report_group_field' => 'grid',
				'report_group_field1' => 'grid',
				'report_group_field2' => 'grid',
				'report_group_field3' => 'grid',
				'report_group_field4' => 'grid',
				'report_group_field5' => 'grid',
				'report_group_field6' => 'grid',
				'report_grid_field1' => 'grid',
				'report_grid_field3' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'print_header' => array( 
				'print_header' 
			),
			'print_subheader' => array( 
				'print_subheader' 
			),
			'print_pages' => array( 
				'print_pages' 
			),
			'report_grid_field' => array( 
				'report_grid_field1',
				'report_grid_field3' 
			),
			'report_group_field' => array( 
				'report_group_field',
				'report_group_field1',
				'report_group_field2',
				'report_group_field3',
				'report_group_field4',
				'report_group_field5',
				'report_group_field6' 
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
				'print_pages' => array(
					'tag' => 'PRINT_PAGES',
					'type' => 2 
				) 
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
	'misc' => array(
		'type' => 'rprint',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'newreport' => array(
		'reportInfo' => array(
			'groupFields' => array( 
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'guarantor_name',
					'color' => array(
						'header' => '7aca7a',
						'summary' => '90ee90' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'transaction_number',
					'color' => array(
						'header' => '93b8c4',
						'summary' => 'add8e6' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'patient_name',
					'color' => array(
						'header' => 'd9d5ae',
						'summary' => 'fffacd' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'patient_type',
					'color' => array(
						'header' => '6cd9b4',
						'summary' => '7fffd4' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'total_hospital_amount',
					'color' => array(
						'header' => '96bec4',
						'summary' => 'b0e0e6' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'total_professional_amount',
					'color' => array(
						'header' => 'd56d61',
						'summary' => 'fa8072' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'running_balance',
					'color' => array(
						'header' => 'd9d3bb',
						'summary' => 'fff8dc' 
					),
					'axis' => 0 
				) 
			),
			'fields' => array( 
				array(
					'field' => 'guarantor_office',
					'grid' => true,
					'min' => false,
					'max' => false,
					'sum' => false,
					'avg' => false 
				),
				array(
					'field' => 'transaction_date',
					'grid' => true,
					'min' => false,
					'max' => false,
					'sum' => false,
					'avg' => false 
				) 
			),
			'showData' => true,
			'pageSummary' => false,
			'globalSummary' => false,
			'crosstab' => false,
			'layout' => 'stepped' 
		) 
	) 
);
			$pageArray = array(
	'id' => 'rprint',
	'type' => 'rprint',
	'layoutId' => 'basic',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'print-above-grid',
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
						'print_pages' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'print-below-grid',
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
			'modelId' => 'print-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'print_header',
						'print_subheader' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'report-grid',
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
						'report_group_field',
						'report_group_field1',
						'report_group_field2',
						'report_group_field3',
						'report_group_field4',
						'report_group_field5',
						'report_group_field6' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'report_grid_field1',
						'report_grid_field3' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1,
			'reportInfo' => array(
				'groupFields' => array( 
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'guarantor_name',
						'color' => array(
							'header' => '7aca7a',
							'summary' => '90ee90' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'transaction_number',
						'color' => array(
							'header' => '93b8c4',
							'summary' => 'add8e6' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'patient_name',
						'color' => array(
							'header' => 'd9d5ae',
							'summary' => 'fffacd' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'patient_type',
						'color' => array(
							'header' => '6cd9b4',
							'summary' => '7fffd4' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'total_hospital_amount',
						'color' => array(
							'header' => '96bec4',
							'summary' => 'b0e0e6' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'total_professional_amount',
						'color' => array(
							'header' => 'd56d61',
							'summary' => 'fa8072' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'running_balance',
						'color' => array(
							'header' => 'd9d3bb',
							'summary' => 'fff8dc' 
						),
						'axis' => 0 
					) 
				),
				'fields' => array( 
					array(
						'field' => 'guarantor_office',
						'grid' => true,
						'min' => false,
						'max' => false,
						'sum' => false,
						'avg' => false 
					),
					array(
						'field' => 'transaction_date',
						'grid' => true,
						'min' => false,
						'max' => false,
						'sum' => false,
						'avg' => false 
					) 
				),
				'showData' => true,
				'pageSummary' => false,
				'globalSummary' => false,
				'crosstab' => false,
				'layout' => 'stepped' 
			) 
		) 
	),
	'items' => array(
		'print_header' => array(
			'type' => 'print_header' 
		),
		'print_subheader' => array(
			'type' => 'print_subheader' 
		),
		'print_pages' => array(
			'type' => 'print_pages' 
		),
		'report_grid_field1' => array(
			'field' => 'guarantor_office',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_grid_field3' => array(
			'field' => 'transaction_date',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_group_field' => array(
			'field' => 'guarantor_name',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field1' => array(
			'field' => 'transaction_number',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field2' => array(
			'field' => 'patient_name',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field3' => array(
			'field' => 'patient_type',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field4' => array(
			'field' => 'total_hospital_amount',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field5' => array(
			'field' => 'total_professional_amount',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field6' => array(
			'field' => 'running_balance',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
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