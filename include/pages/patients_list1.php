<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => false,
		'addInPopup' => true,
		'editInPopup' => true,
		'viewInPopup' => true,
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
		'id' => array(
			'totalsType' => '' 
		),
		'created_at' => array(
			'totalsType' => '' 
		),
		'updated_at' => array(
			'totalsType' => '' 
		),
		'classification' => array(
			'totalsType' => '' 
		),
		'office' => array(
			'totalsType' => '' 
		),
		'college' => array(
			'totalsType' => '' 
		),
		'uhs_id_no' => array(
			'totalsType' => '' 
		),
		'emed_no' => array(
			'totalsType' => '' 
		),
		'ihomis_no' => array(
			'totalsType' => '' 
		),
		'philhealth_no' => array(
			'totalsType' => '' 
		),
		'person_id' => array(
			'totalsType' => '' 
		),
		'person_type_id' => array(
			'totalsType' => '' 
		),
		'full_name' => array(
			'totalsType' => '' 
		),
		'patient_id' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'patient_id',
			'full_name',
			'classification',
			'office',
			'college',
			'uhs_id_no',
			'emed_no',
			'ihomis_no',
			'philhealth_no',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'updated_at',
			'patient_id',
			'full_name',
			'person_type_id',
			'person_id',
			'philhealth_no',
			'ihomis_no',
			'emed_no',
			'uhs_id_no',
			'college',
			'office',
			'classification',
			'created_at' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'patient_id' => array( 
				'grid_field18',
				'grid_field19' 
			),
			'full_name' => array( 
				'grid_field15',
				'grid_field16' 
			),
			'classification' => array( 
				'grid_field',
				'grid_field3' 
			),
			'office' => array( 
				'grid_field1',
				'grid_field4' 
			),
			'college' => array( 
				'grid_field2',
				'grid_field5' 
			),
			'uhs_id_no' => array( 
				'grid_field6',
				'grid_field10' 
			),
			'emed_no' => array( 
				'grid_field7',
				'grid_field11' 
			),
			'ihomis_no' => array( 
				'grid_field8',
				'grid_field12' 
			),
			'philhealth_no' => array( 
				'grid_field9',
				'grid_field13' 
			),
			'created_at' => array( 
				'simple_grid_field6',
				'simple_grid_field' 
			),
			'updated_at' => array( 
				'simple_grid_field7',
				'simple_grid_field8' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'delete',
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
					'grid_field19',
					'grid_field18',
					'grid_field16',
					'grid_field15',
					'grid_field3',
					'grid_field',
					'grid_field4',
					'grid_field1',
					'grid_field5',
					'grid_field2',
					'grid_field10',
					'grid_field6',
					'grid_field11',
					'grid_field7',
					'grid_field12',
					'grid_field8',
					'grid_field13',
					'grid_field9',
					'simple_grid_field',
					'simple_grid_field6',
					'simple_grid_field8',
					'simple_grid_field7',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_view' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'add_link',
					'deleteselected_link',
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
				'add' => 'above-grid',
				'delete' => 'above-grid',
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
				'grid_field19' => 'grid',
				'grid_field18' => 'grid',
				'grid_field16' => 'grid',
				'grid_field15' => 'grid',
				'grid_field3' => 'grid',
				'grid_field' => 'grid',
				'grid_field4' => 'grid',
				'grid_field1' => 'grid',
				'grid_field5' => 'grid',
				'grid_field2' => 'grid',
				'grid_field10' => 'grid',
				'grid_field6' => 'grid',
				'grid_field11' => 'grid',
				'grid_field7' => 'grid',
				'grid_field12' => 'grid',
				'grid_field8' => 'grid',
				'grid_field13' => 'grid',
				'grid_field9' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field7' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_view' => 'grid' 
			),
			'itemLocations' => array(
				'grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
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
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field10',
				'search_panel_field11',
				'search_panel_field12',
				'search_panel_field13',
				'search_panel_field14',
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'add' => array( 
				'add' 
			),
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'export_selected' => array( 
				'export_selected' 
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
			'delete' => array( 
				'delete' 
			),
			'delete_selected' => array( 
				'delete_selected' 
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
			'grid_field' => array( 
				'grid_field18',
				'grid_field15',
				'grid_field',
				'grid_field1',
				'grid_field2',
				'grid_field6',
				'grid_field7',
				'grid_field8',
				'grid_field9',
				'simple_grid_field6',
				'simple_grid_field7' 
			),
			'grid_field_label' => array( 
				'grid_field19',
				'grid_field16',
				'grid_field3',
				'grid_field4',
				'grid_field5',
				'grid_field10',
				'grid_field11',
				'grid_field12',
				'grid_field13',
				'simple_grid_field',
				'simple_grid_field8' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_edit' => array( 
				'grid_edit' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
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
					'headcell_checkbox' => array(
						'cols' => array( 
							1 
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
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'patient_id_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'full_name_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'classification_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'office_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'college_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'uhs_id_no_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'emed_no_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'ihomis_no_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'philhealth_no_fieldheadercolumn' 
						),
						'items' => array( 
							'grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'created_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'updated_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'edit_column',
							'view_column' 
						),
						'items' => array( 
							'grid_edit',
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							1 
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
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'patient_id_fieldcolumn' 
						),
						'items' => array( 
							'grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'full_name_fieldcolumn' 
						),
						'items' => array( 
							'grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'classification_fieldcolumn' 
						),
						'items' => array( 
							'grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'office_fieldcolumn' 
						),
						'items' => array( 
							'grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'college_fieldcolumn' 
						),
						'items' => array( 
							'grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'uhs_id_no_fieldcolumn' 
						),
						'items' => array( 
							'grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'emed_no_fieldcolumn' 
						),
						'items' => array( 
							'grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'ihomis_no_fieldcolumn' 
						),
						'items' => array( 
							'grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'philhealth_no_fieldcolumn' 
						),
						'items' => array( 
							'grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'created_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'updated_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
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
					'footcell_checkbox' => array(
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
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
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
					'footcell_field3' => array(
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
					'footcell_field4' => array(
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
					'footcell_field5' => array(
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
					'footcell_field6' => array(
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
					'footcell_field7' => array(
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
					),
					'footcell_field8' => array(
						'cols' => array( 
							10 
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
					'footcell_field9' => array(
						'cols' => array( 
							11 
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
					'footcell_field10' => array(
						'cols' => array( 
							12 
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
				'width' => 13,
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
	'id' => 'list1',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 1,
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
						'add',
						'delete' 
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
							'cell' => 'headcell_icons' 
						),
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
						),
						array(
							'cell' => 'headcell_field9' 
						),
						array(
							'cell' => 'headcell_field10' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_icons' 
						),
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
						),
						array(
							'cell' => 'cell_field9' 
						),
						array(
							'cell' => 'cell_field10' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
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
						),
						array(
							'cell' => 'footcell_field9' 
						),
						array(
							'cell' => 'footcell_field10' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'grid_field19' 
					),
					'field' => 'patient_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field18' 
					),
					'field' => 'patient_id',
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
						'grid_field16' 
					),
					'field' => 'full_name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field15' 
					),
					'nowrap' => false,
					'field' => 'full_name',
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
						'grid_field3' 
					),
					'field' => 'classification',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field' 
					),
					'field' => 'classification',
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
						'grid_field4' 
					),
					'field' => 'office',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field1' 
					),
					'field' => 'office',
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
						'grid_field5' 
					),
					'field' => 'college',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field2' 
					),
					'field' => 'college',
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
						'grid_field10' 
					),
					'field' => 'uhs_id_no',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field6' 
					),
					'field' => 'uhs_id_no',
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
						'grid_field11' 
					),
					'field' => 'emed_no',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field7' 
					),
					'field' => 'emed_no',
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
						'grid_field12' 
					),
					'field' => 'ihomis_no',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field8' 
					),
					'field' => 'ihomis_no',
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
						'grid_field13' 
					),
					'field' => 'philhealth_no',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'grid_field9' 
					),
					'field' => 'philhealth_no',
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
						'simple_grid_field' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field10' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'footcell_field10' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
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
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_edit',
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
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
			'type' => 'logo',
			'logo' => array(
				'type' => 8 
			) 
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field7',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1',
				'search_panel_field',
				'search_panel_field14',
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field6' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'export_selected',
				'delete_selected',
				'-3',
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export',
				'-2',
				'import' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field6' => array(
			'field' => 'created_at',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'updated_at',
			'type' => 'search_panel_field' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'add' => array(
			'type' => 'add',
			'popup' => true,
			'icon' => array(
				 
			),
			'label' => array(
				'type' => 0,
				'text' => 'Add Patient' 
			) 
		),
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
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
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
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
		'search_panel_field8' => array(
			'field' => 'classification',
			'type' => 'search_panel_field' 
		),
		'search_panel_field9' => array(
			'field' => 'office',
			'type' => 'search_panel_field' 
		),
		'search_panel_field10' => array(
			'field' => 'college',
			'type' => 'search_panel_field' 
		),
		'search_panel_field11' => array(
			'field' => 'uhs_id_no',
			'type' => 'search_panel_field' 
		),
		'search_panel_field12' => array(
			'field' => 'emed_no',
			'type' => 'search_panel_field' 
		),
		'search_panel_field13' => array(
			'field' => 'ihomis_no',
			'type' => 'search_panel_field' 
		),
		'search_panel_field14' => array(
			'field' => 'philhealth_no',
			'type' => 'search_panel_field' 
		),
		'search_panel_field' => array(
			'field' => 'person_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field1' => array(
			'field' => 'person_type_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'full_name',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'patient_id',
			'type' => 'search_panel_field' 
		),
		'grid_field18' => array(
			'field' => 'patient_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_id' 
		),
		'grid_field15' => array(
			'field' => 'full_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'full_name' 
		),
		'grid_field' => array(
			'field' => 'classification',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field3' => array(
			'type' => 'grid_field_label',
			'field' => 'classification' 
		),
		'grid_field1' => array(
			'field' => 'office',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field4' => array(
			'type' => 'grid_field_label',
			'field' => 'office' 
		),
		'grid_field2' => array(
			'field' => 'college',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'grid_field5' => array(
			'type' => 'grid_field_label',
			'field' => 'college' 
		),
		'grid_field6' => array(
			'field' => 'uhs_id_no',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'label' => array(
				'field' => 'uhs_id_no',
				'table' => 'patients',
				'type' => 3 
			) 
		),
		'grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'uhs_id_no' 
		),
		'grid_field7' => array(
			'field' => 'emed_no',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'label' => array(
				'field' => 'emed_no',
				'table' => 'patients',
				'type' => 3 
			) 
		),
		'grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'emed_no' 
		),
		'grid_field8' => array(
			'field' => 'ihomis_no',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'label' => array(
				'field' => 'ihomis_no',
				'table' => 'patients',
				'type' => 3 
			) 
		),
		'grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'ihomis_no' 
		),
		'grid_field9' => array(
			'field' => 'philhealth_no',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'label' => array(
				'field' => 'philhealth_no',
				'table' => 'patients',
				'type' => 3 
			) 
		),
		'grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'philhealth_no' 
		),
		'simple_grid_field6' => array(
			'field' => 'created_at',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field' => array(
			'type' => 'grid_field_label',
			'field' => 'created_at' 
		),
		'simple_grid_field7' => array(
			'field' => 'updated_at',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field8' => array(
			'type' => 'grid_field_label',
			'field' => 'updated_at' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_edit' => array(
			'type' => 'grid_edit',
			'popup' => true 
		),
		'grid_view' => array(
			'type' => 'grid_view',
			'popup' => true 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'-3' => array(
			'type' => '-' 
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