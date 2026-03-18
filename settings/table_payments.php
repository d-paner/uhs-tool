<?php
global $runnerTableSettings;
$runnerTableSettings['payments'] = array(
	'name' => 'payments',
	'shortName' => 'payments',
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
		'list' => array( 
			'list' 
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'payments',
	'afterAddDetail' => 'payments',
	'detailsBadgeColor' => '5f9ea0',
	'strOrderBy' => 'ORDER BY `date` DESC',
	'orderInfo' => array( 
		array(
			'index' => 7,
			'dir' => 'DESC',
			'field' => 'group_id' 
		) 
	),
	'sql' => 'SELECT
	id,
	transaction_number,
	service_type,
	hospital_service_id,
	professional_service_id,
	amount,
	`date`,
	payment_method,
	placed_by,
	group_id
FROM
	payments
ORDER BY `date` DESC',
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
			'tableName' => 'payments' 
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
					'lookupOrderByDesc' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'transactionsList' 
				) 
			),
			'tableName' => 'payments' 
		),
		'amount' => array(
			'name' => 'amount',
			'goodName' => 'amount',
			'strField' => 'amount',
			'index' => 6,
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
			'tableName' => 'payments' 
		),
		'date' => array(
			'name' => 'date',
			'goodName' => 'date',
			'strField' => 'date',
			'index' => 7,
			'type' => 135,
			'sqlExpression' => '`date`',
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
			'tableName' => 'payments' 
		),
		'payment_method' => array(
			'name' => 'payment_method',
			'goodName' => 'payment_method',
			'strField' => 'payment_method',
			'index' => 8,
			'sqlExpression' => 'payment_method',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 0,
					'lookupValues' => array( 
						'Cash',
						'Card' 
					) 
				) 
			),
			'tableName' => 'payments' 
		),
		'placed_by' => array(
			'name' => 'placed_by',
			'goodName' => 'placed_by',
			'strField' => 'placed_by',
			'index' => 9,
			'sqlExpression' => 'placed_by',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'getFullname($_SESSION[\'full_name\']);' 
				) 
			),
			'tableName' => 'payments' 
		),
		'group_id' => array(
			'name' => 'group_id',
			'goodName' => 'group_id',
			'strField' => 'group_id',
			'index' => 10,
			'sqlExpression' => 'group_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'getGroup($_SESSION[\'group\']);' 
				) 
			),
			'tableName' => 'payments' 
		),
		'service_type' => array(
			'name' => 'service_type',
			'goodName' => 'service_type',
			'strField' => 'service_type',
			'index' => 3,
			'sqlExpression' => 'service_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 0,
					'lookupValues' => array( 
						'Hospital Service',
						'Professional Service',
						'Pay All' 
					) 
				) 
			),
			'tableName' => 'payments' 
		),
		'hospital_service_id' => array(
			'name' => 'hospital_service_id',
			'goodName' => 'hospital_service_id',
			'strField' => 'hospital_service_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'hospital_service_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'hospital_services',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'hospital_account',
					'lookupControlType' => 2,
					'lookupWhere' => 'status=\'Unpaid\'',
					'lookupListPage' => 'transactionsChild',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'transaction_number',
							'lookupField' => 'transaction_number' 
						) 
					) 
				) 
			),
			'tableName' => 'payments' 
		),
		'professional_service_id' => array(
			'name' => 'professional_service_id',
			'goodName' => 'professional_service_id',
			'strField' => 'professional_service_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'professional_service_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'professional_services',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'pf_account',
					'lookupControlType' => 2,
					'lookupWhere' => 'status=\'Unpaid\'',
					'lookupListPage' => 'transactionsChild',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'transaction_number',
							'lookupField' => 'transaction_number' 
						) 
					) 
				) 
			),
			'tableName' => 'payments' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	transaction_number,
	service_type,
	hospital_service_id,
	professional_service_id,
	amount,
	`date`,
	payment_method,
	placed_by,
	group_id
FROM
	payments
ORDER BY `date` DESC',
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
					'table' => 'payments',
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
					'table' => 'payments',
					'name' => 'transaction_number' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_number' 
			),
			array(
				'sql' => 'service_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'service_type' 
				),
				'encrypted' => false,
				'columnName' => 'service_type' 
			),
			array(
				'sql' => 'hospital_service_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'hospital_service_id' 
				),
				'encrypted' => false,
				'columnName' => 'hospital_service_id' 
			),
			array(
				'sql' => 'professional_service_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'professional_service_id' 
				),
				'encrypted' => false,
				'columnName' => 'professional_service_id' 
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
					'table' => 'payments',
					'name' => 'amount' 
				),
				'encrypted' => false,
				'columnName' => 'amount' 
			),
			array(
				'sql' => '`date`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'date' 
				),
				'encrypted' => false,
				'columnName' => 'date' 
			),
			array(
				'sql' => 'payment_method',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'payment_method' 
				),
				'encrypted' => false,
				'columnName' => 'payment_method' 
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
					'table' => 'payments',
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
					'table' => 'payments',
					'name' => 'group_id' 
				),
				'encrypted' => false,
				'columnName' => 'group_id' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'payments',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'payments',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'transaction_number',
						'service_type',
						'hospital_service_id',
						'professional_service_id',
						'amount',
						'date',
						'payment_method',
						'placed_by',
						'group_id' 
					),
					'name' => 'payments' 
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
			array(
				'sql' => '`date` DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'payments',
					'name' => 'date' 
				),
				'asc' => false,
				'columnNumber' => 7 
			) 
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	transaction_number,
	service_type,
	hospital_service_id,
	professional_service_id,
	amount,
	`date`,
	payment_method,
	placed_by,
	group_id',
		'fromListSql' => 'FROM
	payments',
		'orderBySql' => 'ORDER BY `date` DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'payments',
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
		'list' => array( 
			'list' 
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
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
			'date',
			'payment_method',
			'placed_by',
			'group_id',
			'service_type',
			'hospital_service_id',
			'professional_service_id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'transaction_number',
			'amount',
			'date',
			'payment_method',
			'placed_by',
			'group_id',
			'service_type',
			'hospital_service_id',
			'professional_service_id' 
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
		array(
			'title' => array(
				'text' => 'All data',
				'type' => 0 
			),
			'where' => '',
			'id' => '',
			'showCount' => false,
			'hideEmpty' => false 
		) 
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
	$runnerTableLabels['payments'] = array(
	'tableCaption' => 'Payments',
	'fieldLabels' => array(
		'id' => 'Id',
		'transaction_number' => 'Transaction Number',
		'amount' => 'Amount',
		'date' => 'Date',
		'payment_method' => 'Payment Method',
		'placed_by' => 'Placed By',
		'group_id' => 'Group Id',
		'service_type' => 'Service Type',
		'hospital_service_id' => 'Hospital Service',
		'professional_service_id' => 'Professional Service' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'transaction_number' => '',
		'amount' => '',
		'date' => '',
		'payment_method' => '',
		'placed_by' => '',
		'group_id' => '',
		'service_type' => '',
		'hospital_service_id' => '',
		'professional_service_id' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'transaction_number' => '',
		'amount' => '',
		'date' => '',
		'payment_method' => '',
		'placed_by' => '',
		'group_id' => '',
		'service_type' => '',
		'hospital_service_id' => '',
		'professional_service_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>