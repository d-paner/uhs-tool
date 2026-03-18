<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => null,
		'editInPopup' => null,
		'viewInPopup' => null,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'guarantor_name' => array(
			'totalsType' => '' 
		),
		'guarantor_office' => array(
			'totalsType' => '' 
		),
		'transaction_number' => array(
			'totalsType' => '' 
		),
		'transaction_date' => array(
			'totalsType' => '' 
		),
		'patient_name' => array(
			'totalsType' => '' 
		),
		'patient_type' => array(
			'totalsType' => '' 
		),
		'total_hospital_amount' => array(
			'totalsType' => '' 
		),
		'total_professional_amount' => array(
			'totalsType' => '' 
		),
		'running_balance' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'guarantor_name',
			'guarantor_office',
			'transaction_number',
			'transaction_date',
			'patient_name',
			'patient_type',
			'total_hospital_amount',
			'total_professional_amount',
			'running_balance' 
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
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'guarantor_name' => array( 
				'grid_field',
				'grid_field_label' 
			),
			'guarantor_office' => array( 
				'grid_field1',
				'grid_field_label1' 
			),
			'transaction_number' => array( 
				'grid_field2',
				'grid_field_label2' 
			),
			'transaction_date' => array( 
				'grid_field3',
				'grid_field_label3' 
			),
			'patient_name' => array( 
				'grid_field4',
				'grid_field_label4' 
			),
			'patient_type' => array( 
				'grid_field5',
				'grid_field_label5' 
			),
			'total_hospital_amount' => array( 
				'grid_field6',
				'grid_field_label6' 
			),
			'total_professional_amount' => array( 
				'grid_field7',
				'grid_field_label7' 
			),
			'running_balance' => array( 
				'grid_field8',
				'grid_field_label8' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => true 
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
				'top' => array( 
					 
				),
				'grid' => array( 
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_field_label',
					'grid_field',
					'grid_field_label1',
					'grid_field1',
					'grid_field_label2',
					'grid_field2',
					'grid_field_label3',
					'grid_field3',
					'grid_field_label4',
					'grid_field4',
					'grid_field_label5',
					'grid_field5',
					'grid_field_label6',
					'grid_field6',
					'grid_field_label7',
					'grid_field7',
					'grid_field_label8',
					'grid_field8' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'details_found',
					'recsPerPage',
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
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_field_label' => 'grid',
				'grid_field' => 'grid',
				'grid_field_label1' => 'grid',
				'grid_field1' => 'grid',
				'grid_field_label2' => 'grid',
				'grid_field2' => 'grid',
				'grid_field_label3' => 'grid',
				'grid_field3' => 'grid',
				'grid_field_label4' => 'grid',
				'grid_field4' => 'grid',
				'grid_field_label5' => 'grid',
				'grid_field5' => 'grid',
				'grid_field_label6' => 'grid',
				'grid_field6' => 'grid',
				'grid_field_label7' => 'grid',
				'grid_field7' => 'grid',
				'grid_field_label8' => 'grid',
				'grid_field8' => 'grid' 
			),
			'itemLocations' => array(
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_field_label' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_field_label2' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field_label3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field_label4' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field_label5' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field_label6' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'grid_field_label7' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field_label8' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				) 
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
			'details_found' => array( 
				'details_found' 
			),
			'list_options' => array( 
				'list_options' 
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
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2' 
			),
			'import' => array( 
				'import' 
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
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_field' => array( 
				'grid_field',
				'grid_field1',
				'grid_field2',
				'grid_field3',
				'grid_field4',
				'grid_field5',
				'grid_field6',
				'grid_field7',
				'grid_field8' 
			),
			'grid_field_label' => array( 
				'grid_field_label',
				'grid_field_label1',
				'grid_field_label2',
				'grid_field_label3',
				'grid_field_label4',
				'grid_field_label5',
				'grid_field_label6',
				'grid_field_label7',
				'grid_field_label8' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
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
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'guarantor_name_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'guarantor_office_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'transaction_number_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'transaction_date_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'patient_name_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'patient_type_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'total_hospital_amount_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'total_professional_amount_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'running_balance_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field_label8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'guarantor_name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'guarantor_office_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'transaction_number_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'transaction_date_fieldcolumn' 
						),
						'items' => array( 
							'grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'patient_name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'patient_type_fieldcolumn' 
						),
						'items' => array( 
							'grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'total_hospital_amount_fieldcolumn' 
						),
						'items' => array( 
							'grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'total_professional_amount_fieldcolumn' 
						),
						'items' => array( 
							'grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'running_balance_fieldcolumn' 
						),
						'items' => array( 
							'grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_checkbox' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field6' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field7' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field8' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 10,
				'height' => 3 
			) 
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
		'gridType' => 0,
		'recsPerRow' => 1,
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
		'type' => 'list',
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
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
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
			'modelId' => 'list-below-grid',
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
			'modelId' => 'leftbar-top',
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
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_checkbox' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_checkbox' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				),
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label' 
					),
					'field' => 'guarantor_name',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'guarantor_name',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label1' 
					),
					'field' => 'guarantor_office',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'guarantor_office',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label2' 
					),
					'field' => 'transaction_number',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'transaction_number',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label3' 
					),
					'field' => 'transaction_date',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field3' 
					),
					'field' => 'transaction_date',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label4' 
					),
					'field' => 'patient_name',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field4' 
					),
					'field' => 'patient_name',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label5' 
					),
					'field' => 'patient_type',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field5' 
					),
					'field' => 'patient_type',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label6' 
					),
					'field' => 'total_hospital_amount',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field6' 
					),
					'field' => 'total_hospital_amount',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label7' 
					),
					'field' => 'total_professional_amount',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field7' 
					),
					'field' => 'total_professional_amount',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field_label8' 
					),
					'field' => 'running_balance',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field8' 
					),
					'field' => 'running_balance',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				) 
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
		'details_found' => array(
			'type' => 'details_found' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'show_search_panel',
				'hide_search_panel',
				'-2',
				'export',
				'-1',
				'import' 
			) 
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
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-1' => array(
			'type' => '-' 
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
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_field' => array(
			'field' => 'guarantor_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label' => array(
			'type' => 'grid_field_label',
			'field' => 'guarantor_name' 
		),
		'grid_field1' => array(
			'field' => 'guarantor_office',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label1' => array(
			'type' => 'grid_field_label',
			'field' => 'guarantor_office' 
		),
		'grid_field2' => array(
			'field' => 'transaction_number',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label2' => array(
			'type' => 'grid_field_label',
			'field' => 'transaction_number' 
		),
		'grid_field3' => array(
			'field' => 'transaction_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label3' => array(
			'type' => 'grid_field_label',
			'field' => 'transaction_date' 
		),
		'grid_field4' => array(
			'field' => 'patient_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label4' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_name' 
		),
		'grid_field5' => array(
			'field' => 'patient_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label5' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_type' 
		),
		'grid_field6' => array(
			'field' => 'total_hospital_amount',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label6' => array(
			'type' => 'grid_field_label',
			'field' => 'total_hospital_amount' 
		),
		'grid_field7' => array(
			'field' => 'total_professional_amount',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label7' => array(
			'type' => 'grid_field_label',
			'field' => 'total_professional_amount' 
		),
		'grid_field8' => array(
			'field' => 'running_balance',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field_label8' => array(
			'type' => 'grid_field_label',
			'field' => 'running_balance' 
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
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'-2' => array(
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