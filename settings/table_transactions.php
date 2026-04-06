<?php
global $runnerTableSettings;
$runnerTableSettings['transactions'] = array(
	'name' => 'transactions',
	'shortName' => 'transactions',
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
			'transactionsList' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'transactionsList' => 'list',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'audit' => true,
	'afterEditDetails' => 'transactions',
	'afterAddDetail' => 'transactions',
	'detailsBadgeColor' => '6da5c8',
	'strOrderBy' => 'ORDER BY created_at DESC',
	'orderInfo' => array( 
		array(
			'index' => 8,
			'dir' => 'DESC',
			'field' => 'created_at' 
		) 
	),
	'sql' => 'SELECT
	id,
	transaction_number,
	patient_id,
	patient_type,
	status,
	total_due,
	total_paid,
	created_at,
	updated_at
FROM
	transactions
ORDER BY created_at DESC',
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
			'tableName' => 'transactions' 
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
					'format' => 'Readonly',
					'defaultValue' => 'generate_transaction_number();' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'patient_id' => array(
			'name' => 'patient_id',
			'goodName' => 'patient_id',
			'strField' => 'patient_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'patient_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'patients',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'CONCAT_WS(\' \', first_name, middle_name, last_name)',
					'lookupCustomDisplay' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'forTransactions' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'patient_type' => array(
			'name' => 'patient_type',
			'goodName' => 'patient_type',
			'strField' => 'patient_type',
			'index' => 4,
			'sqlExpression' => 'patient_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'patient_types',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'type',
					'lookupDisplayField' => 'type' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 5,
			'sqlExpression' => 'status',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '"Open"' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'total_due' => array(
			'name' => 'total_due',
			'goodName' => 'total_due',
			'strField' => 'total_due',
			'index' => 6,
			'type' => 14,
			'sqlExpression' => 'total_due',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'total_paid' => array(
			'name' => 'total_paid',
			'goodName' => 'total_paid',
			'strField' => 'total_paid',
			'index' => 7,
			'type' => 14,
			'sqlExpression' => 'total_paid',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 8,
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
			'tableName' => 'transactions' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 9,
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
			'tableName' => 'transactions' 
		) 
	),
	'detailsTables' => array( 
		'professional_services',
		'hospital_services',
		'transaction_guarantor' 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	transaction_number,
	patient_id,
	patient_type,
	status,
	total_due,
	total_paid,
	created_at,
	updated_at
FROM
	transactions
ORDER BY created_at DESC',
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
					'table' => 'transactions',
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
					'table' => 'transactions',
					'name' => 'transaction_number' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_number' 
			),
			array(
				'sql' => 'patient_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'patient_id' 
				),
				'encrypted' => false,
				'columnName' => 'patient_id' 
			),
			array(
				'sql' => 'patient_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'patient_type' 
				),
				'encrypted' => false,
				'columnName' => 'patient_type' 
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
					'table' => 'transactions',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'total_due',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'total_due' 
				),
				'encrypted' => false,
				'columnName' => 'total_due' 
			),
			array(
				'sql' => 'total_paid',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'total_paid' 
				),
				'encrypted' => false,
				'columnName' => 'total_paid' 
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
					'table' => 'transactions',
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
					'table' => 'transactions',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'transactions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'transactions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'transaction_number',
						'patient_id',
						'patient_type',
						'status',
						'total_due',
						'total_paid',
						'outstanding_balance',
						'created_at',
						'updated_at' 
					),
					'name' => 'transactions' 
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
				'sql' => 'created_at DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'created_at' 
				),
				'asc' => false,
				'columnNumber' => 8 
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
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	transaction_number,
	patient_id,
	patient_type,
	status,
	total_due,
	total_paid,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	transactions',
		'orderBySql' => 'ORDER BY created_at DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'transactions',
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
			'transactionsList' 
		),
		'print' => array( 
			'print' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'transactionsList' => 'list',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'transaction_number',
			'patient_id',
			'patient_type',
			'status',
			'total_due',
			'total_paid',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'transaction_number',
			'patient_id',
			'patient_type',
			'status',
			'total_due',
			'total_paid',
			'created_at',
			'updated_at' 
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
	$runnerTableLabels['transactions'] = array(
	'tableCaption' => 'Transactions',
	'fieldLabels' => array(
		'id' => 'Id',
		'transaction_number' => 'Transaction Number',
		'patient_id' => 'Patient',
		'patient_type' => 'Patient Type',
		'status' => 'Status',
		'total_due' => 'Total Charges',
		'total_paid' => 'Total Paid',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'transaction_number' => '',
		'patient_id' => '',
		'patient_type' => '',
		'status' => '',
		'total_due' => '',
		'total_paid' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'transaction_number' => '',
		'patient_id' => '',
		'patient_type' => '',
		'status' => '',
		'total_due' => '',
		'total_paid' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>