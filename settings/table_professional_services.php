<?php
global $runnerTableSettings;
$runnerTableSettings['professional_services'] = array(
	'name' => 'professional_services',
	'shortName' => 'professional_services',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list',
			'transactionsChild' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'transactionsChild' => 'list',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'professional_services',
	'afterAddDetail' => 'professional_services',
	'detailsBadgeColor' => '9acd32',
	'sql' => 'SELECT
	id,
	transaction_number,
	pf_account,
	amount,
	professional_id,
	type_of_account_due,
	status,
	placed_by,
	group_id,
	created_at,
	updated_at
FROM
	professional_services',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'transaction_number' => array(
			'name' => 'transaction_number',
			'goodName' => 'transaction_number',
			'strField' => 'transaction_number',
			'index' => 2,
			'sqlExpression' => 'transaction_number',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'transactions',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'transaction_number',
					'lookupDisplayField' => 'transaction_number',
					'lookupOrderBy' => 'created_at',
					'lookupControlType' => 2,
					'lookupWhere' => 'status IN (\'Open\',\'Partially Paid\')',
					'lookupListPage' => 'transactionsList' 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'amount' => array(
			'name' => 'amount',
			'goodName' => 'amount',
			'strField' => 'amount',
			'index' => 4,
			'type' => 14,
			'sqlExpression' => 'amount',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'professional_id' => array(
			'name' => 'professional_id',
			'goodName' => 'professional_id',
			'strField' => 'professional_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'professional_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'professionals',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'full_name' 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'type_of_account_due' => array(
			'name' => 'type_of_account_due',
			'goodName' => 'type_of_account_due',
			'strField' => 'type_of_account_due',
			'index' => 6,
			'sqlExpression' => 'type_of_account_due',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 7,
			'sqlExpression' => 'status',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => 'Unpaid',
					'lookupType' => 0,
					'lookupValues' => array( 
						'Paid',
						'Unpaid' 
					) 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'placed_by' => array(
			'name' => 'placed_by',
			'goodName' => 'placed_by',
			'strField' => 'placed_by',
			'index' => 8,
			'sqlExpression' => 'placed_by',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => 'getGroup($_SESSION[\'full_name\']);' 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'group_id' => array(
			'name' => 'group_id',
			'goodName' => 'group_id',
			'strField' => 'group_id',
			'index' => 9,
			'sqlExpression' => 'group_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'required' => true,
					'defaultValue' => 'getGroup($_SESSION[\'group\']);' 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'created_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'now();',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'updated_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'now();',
					'autoUpdateValue' => 'now();',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'professional_services' 
		),
		'pf_account' => array(
			'name' => 'pf_account',
			'goodName' => 'pf_account',
			'strField' => 'pf_account',
			'index' => 3,
			'sqlExpression' => 'pf_account',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'professional_accounts',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'label',
					'lookupDisplayField' => 'label' 
				) 
			),
			'tableName' => '' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'transactions',
			'detailsKeys' => array( 
				'transaction_number' 
			),
			'masterKeys' => array( 
				'transaction_number' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	transaction_number,
	pf_account,
	amount,
	professional_id,
	type_of_account_due,
	status,
	placed_by,
	group_id,
	created_at,
	updated_at
FROM
	professional_services',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'transaction_number',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'transaction_number' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_number' 
			),
			array(
				'sql' => 'pf_account',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => 'pf_account',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'pf_account' 
			),
			array(
				'sql' => 'amount',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'amount' 
				),
				'encrypted' => false,
				'columnName' => 'amount' 
			),
			array(
				'sql' => 'professional_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'professional_id' 
				),
				'encrypted' => false,
				'columnName' => 'professional_id' 
			),
			array(
				'sql' => 'type_of_account_due',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'type_of_account_due' 
				),
				'encrypted' => false,
				'columnName' => 'type_of_account_due' 
			),
			array(
				'sql' => 'status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'placed_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'placed_by' 
				),
				'encrypted' => false,
				'columnName' => 'placed_by' 
			),
			array(
				'sql' => 'group_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'group_id' 
				),
				'encrypted' => false,
				'columnName' => 'group_id' 
			),
			array(
				'sql' => 'created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professional_services',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'professional_services',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'professional_services',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'transaction_number',
						'pf_account_id',
						'amount',
						'professional_id',
						'type_of_account_due',
						'status',
						'placed_by',
						'group_id',
						'created_at',
						'updated_at' 
					),
					'name' => 'professional_services' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	transaction_number,
	pf_account,
	amount,
	professional_id,
	type_of_account_due,
	status,
	placed_by,
	group_id,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	professional_services',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'professional_services',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list',
			'transactionsChild' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'transactionsChild' => 'list',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'transaction_number',
			'amount',
			'professional_id',
			'type_of_account_due',
			'status',
			'placed_by',
			'group_id',
			'created_at',
			'updated_at',
			'pf_account' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'transaction_number',
			'amount',
			'professional_id',
			'type_of_account_due',
			'status',
			'placed_by',
			'group_id',
			'created_at',
			'updated_at',
			'pf_account' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['professional_services'] = array(
	'tableCaption' => 'Professional Services',
	'fieldLabels' => array(
		'id' => 'Id',
		'transaction_number' => 'Transaction Number',
		'amount' => 'Amount',
		'professional_id' => 'Professional Id',
		'type_of_account_due' => 'Type Of Account Due',
		'status' => 'Status',
		'placed_by' => 'Placed By',
		'group_id' => 'Group Id',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'pf_account' => 'Pf Account' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'transaction_number' => '',
		'amount' => '',
		'professional_id' => '',
		'type_of_account_due' => '',
		'status' => '',
		'placed_by' => '',
		'group_id' => '',
		'created_at' => '',
		'updated_at' => '',
		'pf_account' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'transaction_number' => '',
		'amount' => '',
		'professional_id' => '',
		'type_of_account_due' => '',
		'status' => '',
		'placed_by' => '',
		'group_id' => '',
		'created_at' => '',
		'updated_at' => '',
		'pf_account' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>