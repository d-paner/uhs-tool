<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => false,
		'detailsAdd' => false,
		'inlineEdit' => false,
		'addToBottom' => false,
		'delete' => false,
		'updateSelected' => false,
		'addInPopup' => true,
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
		'linkType' => 2 
	),
	'details' => array(
		'professional_services' => array(
			'displayPreview' => 2,
			'previewPageId' => '',
			'showCount' => false,
			'badgeColor' => '',
			'hideEmptyChild' => false,
			'hideEmptyPreview' => null,
			'showProceedLink' => null,
			'printDetails' => true 
		),
		'hospital_services' => array(
			'displayPreview' => 2,
			'previewPageId' => '',
			'showCount' => false,
			'badgeColor' => '',
			'hideEmptyChild' => false,
			'hideEmptyPreview' => null,
			'showProceedLink' => null,
			'printDetails' => true 
		),
		'transaction_guarantor' => array(
			'displayPreview' => 2,
			'previewPageId' => '',
			'showCount' => false,
			'badgeColor' => '',
			'hideEmptyChild' => false,
			'hideEmptyPreview' => null,
			'showProceedLink' => null,
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
		'id' => array(
			'totalsType' => '' 
		),
		'transaction_number' => array(
			'totalsType' => '' 
		),
		'patient_id' => array(
			'totalsType' => '' 
		),
		'patient_type' => array(
			'totalsType' => '' 
		),
		'status' => array(
			'totalsType' => '' 
		),
		'total_due' => array(
			'totalsType' => '' 
		),
		'total_paid' => array(
			'totalsType' => '' 
		),
		'created_at' => array(
			'totalsType' => '' 
		),
		'updated_at' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'transaction_number',
			'patient_id',
			'patient_type',
			'status' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'updated_at',
			'created_at',
			'total_paid',
			'total_due',
			'status',
			'patient_type',
			'patient_id',
			'transaction_number' 
		),
		'filterFields' => array( 
			 
		),
		'inlineAddFields' => array( 
			 
		),
		'inlineEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'transaction_number' => array( 
				'simple_grid_field1',
				'simple_grid_field' 
			),
			'patient_id' => array( 
				'simple_grid_field2',
				'simple_grid_field9' 
			),
			'patient_type' => array( 
				'simple_grid_field3',
				'simple_grid_field10' 
			),
			'status' => array( 
				'simple_grid_field4',
				'simple_grid_field11' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => true,
		'view' => false,
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
					'simple_grid_field',
					'simple_grid_field1',
					'simple_grid_field9',
					'simple_grid_field2',
					'simple_grid_field10',
					'simple_grid_field3',
					'simple_grid_field11',
					'simple_grid_field4' 
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
				'simple_grid_field' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field4' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
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
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8' 
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
			'grid_field' => array( 
				'simple_grid_field1',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4' 
			),
			'grid_field_label' => array( 
				'simple_grid_field',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11' 
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
			'print_details' => array( 
				'print_details' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'transaction_number_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'patient_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'patient_type_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'status_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'transaction_number_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'patient_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'patient_type_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'status_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
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
					'footcell_field' => array(
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
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
					'footcell_field3' => array(
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
					) 
				),
				'width' => 4,
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
	'id' => 'transactionsList',
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
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
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
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 4 
						) 
					),
					'section' => 'body' 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
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
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'align' => 'center',
					'field' => 'transaction_number',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'align' => 'center',
					'field' => 'transaction_number',
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
						'simple_grid_field9' 
					),
					'align' => 'center',
					'field' => 'patient_id',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'align' => 'center',
					'field' => 'patient_id',
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
						'simple_grid_field10' 
					),
					'align' => 'center',
					'field' => 'patient_type',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'align' => 'center',
					'field' => 'patient_type',
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
						'simple_grid_field11' 
					),
					'align' => 'center',
					'field' => 'status',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'align' => 'center',
					'field' => 'status',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
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
		'search_panel_field1' => array(
			'field' => 'transaction_number',
			'type' => 'search_panel_field' 
		),
		'search_panel_field2' => array(
			'field' => 'patient_id',
			'type' => 'search_panel_field' 
		),
		'search_panel_field3' => array(
			'field' => 'patient_type',
			'type' => 'search_panel_field' 
		),
		'search_panel_field4' => array(
			'field' => 'status',
			'type' => 'search_panel_field' 
		),
		'search_panel_field5' => array(
			'field' => 'total_due',
			'type' => 'search_panel_field' 
		),
		'search_panel_field6' => array(
			'field' => 'total_paid',
			'type' => 'search_panel_field' 
		),
		'search_panel_field7' => array(
			'field' => 'created_at',
			'type' => 'search_panel_field' 
		),
		'search_panel_field8' => array(
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
				'text' => 'New Transaction',
				'type' => 0 
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
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'simple_grid_field1' => array(
			'field' => 'transaction_number',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field' => array(
			'type' => 'grid_field_label',
			'field' => 'transaction_number' 
		),
		'simple_grid_field2' => array(
			'field' => 'patient_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field9' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_id',
			'label' => array(
				'field' => 'patient_id',
				'table' => 'transactions',
				'type' => 3 
			) 
		),
		'simple_grid_field3' => array(
			'field' => 'patient_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field10' => array(
			'type' => 'grid_field_label',
			'field' => 'patient_type' 
		),
		'simple_grid_field4' => array(
			'field' => 'status',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field11' => array(
			'type' => 'grid_field_label',
			'field' => 'status' 
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
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'7200' => true,
				'7248' => true,
				'7737' => true 
			) 
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