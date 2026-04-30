<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'spreadsheetMode' => false,
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
	'allDetails' => array(
		'linkType' => 0 
	),
	'details' => array(
		'hospital_services' => array(
			'displayPreview' => 1,
			'previewPageId' => 'transactionsChild',
			'showCount' => false,
			'badgeColor' => '',
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => false,
			'printDetails' => true 
		),
		'professional_services' => array(
			'displayPreview' => 1,
			'previewPageId' => 'transactionsChild',
			'showCount' => false,
			'badgeColor' => '',
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => false,
			'printDetails' => true 
		) 
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
		'running_balance' => array(
			'totalsType' => '' 
		),
		'total_hospital_fees' => array(
			'totalsType' => '' 
		),
		'total_professional_fees' => array(
			'totalsType' => '' 
		),
		'total_paid' => array(
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
			'total_hospital_fees',
			'total_professional_fees',
			'total_paid',
			'running_balance' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'guarantor_name',
			'total_paid',
			'total_professional_fees',
			'total_hospital_fees',
			'running_balance',
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
				'grid_field10',
				'grid_field' 
			),
			'guarantor_office' => array( 
				'grid_field11',
				'grid_field1' 
			),
			'transaction_number' => array( 
				'grid_field12',
				'grid_field2' 
			),
			'transaction_date' => array( 
				'grid_field13',
				'grid_field3' 
			),
			'patient_name' => array( 
				'grid_field14',
				'grid_field4' 
			),
			'patient_type' => array( 
				'grid_field15',
				'grid_field5' 
			),
			'total_hospital_fees' => array( 
				'grid_field16',
				'grid_field6' 
			),
			'total_professional_fees' => array( 
				'grid_field17',
				'grid_field7' 
			),
			'total_paid' => array( 
				'grid_field18',
				'grid_field9' 
			),
			'running_balance' => array( 
				'grid_field19',
				'grid_field8' 
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
					'grid_alldetails_link',
					'grid_field10',
					'grid_field',
					'grid_field11',
					'grid_field1',
					'grid_field12',
					'grid_field2',
					'grid_field13',
					'grid_field3',
					'grid_field14',
					'grid_field4',
					'grid_field15',
					'grid_field5',
					'grid_field16',
					'grid_field6',
					'grid_field17',
					'grid_field7',
					'grid_field18',
					'grid_field9',
					'grid_field19',
					'grid_field8',
					'details_preview',
					'details_preview1' 
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
				'grid_alldetails_link' => 'grid',
				'grid_field10' => 'grid',
				'grid_field' => 'grid',
				'grid_field11' => 'grid',
				'grid_field1' => 'grid',
				'grid_field12' => 'grid',
				'grid_field2' => 'grid',
				'grid_field13' => 'grid',
				'grid_field3' => 'grid',
				'grid_field14' => 'grid',
				'grid_field4' => 'grid',
				'grid_field15' => 'grid',
				'grid_field5' => 'grid',
				'grid_field16' => 'grid',
				'grid_field6' => 'grid',
				'grid_field17' => 'grid',
				'grid_field7' => 'grid',
				'grid_field18' => 'grid',
				'grid_field9' => 'grid',
				'grid_field19' => 'grid',
				'grid_field8' => 'grid',
				'details_preview' => 'grid',
				'details_preview1' => 'grid' 
			),
			'itemLocations' => array(
				'grid_alldetails_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview1' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
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
				'-2',
				'-3',
				'-4',
				'-5' 
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
				'search_panel_field8',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field9' 
			),
			'print_details' => array( 
				'print_details' 
			),
			'grid_alldetails_link' => array( 
				'grid_alldetails_link' 
			),
			'grid_field_label' => array( 
				'grid_field10',
				'grid_field11',
				'grid_field12',
				'grid_field13',
				'grid_field14',
				'grid_field15',
				'grid_field16',
				'grid_field17',
				'grid_field18',
				'grid_field19' 
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
				'grid_field9',
				'grid_field8' 
			),
			'details_preview' => array( 
				'details_preview',
				'details_preview1' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_details' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
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
							'grid_field10' 
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
							'grid_field11' 
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
							'grid_field12' 
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
							'grid_field13' 
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
							'grid_field14' 
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
							'grid_field15' 
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
							'total_hospital_fees_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field16' 
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
							'total_professional_fees_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field17' 
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
							'total_paid_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'running_balance_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_details' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_alldetails_link' 
						),
						'fixedAtServer' => true,
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
							'total_hospital_fees_fieldcolumn' 
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
							'total_professional_fees_fieldcolumn' 
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
							'total_paid_fieldcolumn' 
						),
						'items' => array( 
							'grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							10 
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
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5,
							6,
							7,
							8,
							9,
							10 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview',
							'details_preview1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'footcell_details' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
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
							3 
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
							3 
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
							3 
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
							3 
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
							3 
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
							3 
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
							3 
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
							3 
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
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field9' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 11,
				'height' => 4 
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
							'cell' => 'headcell_details' 
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
						),
						array(
							'cell' => 'headcell_field9' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_details' 
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
						),
						array(
							'cell' => 'cell_field9' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 11 
						) 
					),
					'section' => 'body' 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_details' 
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
						),
						array(
							'cell' => 'footcell_field9' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_details' => array(
					'model' => 'headcell_details',
					'items' => array( 
						 
					) 
				),
				'cell_details' => array(
					'model' => 'cell_details',
					'items' => array( 
						'grid_alldetails_link' 
					) 
				),
				'footcell_details' => array(
					'model' => 'footcell_details',
					'items' => array( 
						 
					) 
				),
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field10' 
					),
					'field' => 'guarantor_name',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'nowrap' => true,
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
						'grid_field11' 
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
						'grid_field12' 
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
						'grid_field13' 
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
						'grid_field14' 
					),
					'field' => 'patient_name',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field4' 
					),
					'nowrap' => true,
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
						'grid_field15' 
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
						'grid_field16' 
					),
					'field' => 'total_hospital_fees',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field6' 
					),
					'field' => 'total_hospital_fees',
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
						'grid_field17' 
					),
					'field' => 'total_professional_fees',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field7' 
					),
					'field' => 'total_professional_fees',
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
						'grid_field18' 
					),
					'field' => 'total_paid',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field9' 
					),
					'field' => 'total_paid',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field9' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field19' 
					),
					'field' => 'running_balance',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field8' 
					),
					'field' => 'running_balance',
					'columnName' => 'field' 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview',
						'details_preview1' 
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
				'export' 
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
		'-1' => array(
			'type' => '-' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_details',
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field9',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field8',
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
		'search_panel_field8' => array(
			'field' => 'running_balance',
			'type' => 'search_panel_field' 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'7200' => true,
				'7248' => true 
			) 
		),
		'-3' => array(
			'type' => '-' 
		),
		'-4' => array(
			'type' => '-' 
		),
		'-5' => array(
			'type' => '-' 
		),
		'search_panel_field6' => array(
			'field' => 'total_hospital_fees',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'total_professional_fees',
			'type' => 'search_panel_field' 
		),
		'search_panel_field9' => array(
			'field' => 'total_paid',
			'type' => 'search_panel_field' 
		),
		'grid_alldetails_link' => array(
			'type' => 'grid_alldetails_link' 
		),
		'grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'guarantor_name' 
		),
		'grid_field' => array(
			'field' => 'guarantor_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'guarantor_office' 
		),
		'grid_field1' => array(
			'field' => 'guarantor_office',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'transaction_number' 
		),
		'grid_field2' => array(
			'field' => 'transaction_number',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'transaction_date' 
		),
		'grid_field3' => array(
			'field' => 'transaction_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_name' 
		),
		'grid_field4' => array(
			'field' => 'patient_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_type' 
		),
		'grid_field5' => array(
			'field' => 'patient_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'total_hospital_fees' 
		),
		'grid_field6' => array(
			'field' => 'total_hospital_fees',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'total_professional_fees' 
		),
		'grid_field7' => array(
			'field' => 'total_professional_fees',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field18' => array(
			'type' => 'grid_field_label',
			'field' => 'total_paid' 
		),
		'grid_field9' => array(
			'field' => 'total_paid',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'running_balance' 
		),
		'grid_field8' => array(
			'field' => 'running_balance',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 7248,
			'items' => array( 
				 
			),
			'proceedLink' => false,
			'popup' => false,
			'pageId' => 'transactionsChild',
			'hideEmptyPreview' => false 
		),
		'details_preview1' => array(
			'type' => 'details_preview',
			'table' => 7200,
			'items' => array( 
				 
			),
			'proceedLink' => false,
			'popup' => false,
			'pageId' => 'transactionsChild',
			'hideEmptyPreview' => false 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
		) 
	),
	'spreadsheetGrid' => false,
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