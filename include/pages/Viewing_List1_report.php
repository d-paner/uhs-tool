<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'guarantor_office',
			'transaction_date' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'guarantor_name',
			'running_balance',
			'total_professional_amount',
			'total_hospital_amount',
			'patient_type',
			'patient_name',
			'transaction_date',
			'transaction_number',
			'guarantor_office' 
		),
		'filterFields' => array( 
			 
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
					'details_found',
					'page_size',
					'print_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu',
					'search_panel' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'breadcrumb',
					'simple_search',
					'list_options',
					'loginform_login',
					'username_button' 
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
				),
				'top' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'details_found',
					'grpsPerPage',
					'print_friendly' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'search_panel' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
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
				'breadcrumb' => 5,
				'expand_menu_button' => 2,
				'print_panel' => 5,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'export_report_excel' => array( 
				'export_report_excel' 
			),
			'export_report_word' => array( 
				'export_report_word' 
			),
			'report_grid_field' => array( 
				'report_grid_field1',
				'report_grid_field3' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'-' => array( 
				'-' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8' 
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
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'report_group_field' => array( 
				'report_group_field',
				'report_group_field1',
				'report_group_field2',
				'report_group_field3',
				'report_group_field4',
				'report_group_field5',
				'report_group_field6' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
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
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'report',
		'breadcrumb' => true 
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
	'id' => 'report',
	'type' => 'report',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'report-above-grid',
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
						 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'details_found',
						'page_size',
						'print_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'report-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu',
						'search_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top-chart',
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
						'expand_menu_button',
						'collapse_button',
						'breadcrumb' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
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
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'page_size' => array(
			'type' => 'page_size' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export_report_excel',
				'export_report_word' 
			) 
		),
		'export_report_excel' => array(
			'type' => 'export_report_excel' 
		),
		'export_report_word' => array(
			'type' => 'export_report_word' 
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'-' => array(
			'type' => '-' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'guarantor_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'guarantor_office',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'transaction_number',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'transaction_date',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'patient_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'patient_type',
			'type' => 'search_panel_field' 
		),
		'search_panel_field6' => array(
			'field' => 'total_hospital_amount',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'total_professional_amount',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
			'field' => 'running_balance',
			'type' => 'search_panel_field' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'changepassword_link' 
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
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
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
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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