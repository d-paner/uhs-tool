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
	'strOrderBy' => 'ORDER BY
	transactions.created_at DESC',
	'orderInfo' => array( 
		array(
			'index' => 10,
			'dir' => 'DESC',
			'field' => 'patient_name' 
		) 
	),
	'sql' => 'SELECT
	transactions.id,
	transactions.transaction_number,
	transactions.patient_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS patient_name,
	transactions.patient_type,
	transactions.status,
	transactions.total_due,
	transactions.total_paid,
	transactions.opd_attendance,
	transactions.created_at,
	transactions.updated_at
FROM
	transactions
	INNER JOIN patients ON patients.patient_id = transactions.patient_id
	INNER JOIN persons ON persons.master_person_id = patients.person_id
ORDER BY
	transactions.created_at DESC
',
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
			'sqlExpression' => 'transactions.id',
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
			'sqlExpression' => 'transactions.transaction_number',
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
			'sqlExpression' => 'transactions.patient_id',
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
					'lookupLinkField' => 'patient_id',
					'lookupDisplayField' => 'patient_id',
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
			'index' => 5,
			'sqlExpression' => 'transactions.patient_type',
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
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'type' 
				) 
			),
			'tableName' => 'transactions' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 6,
			'sqlExpression' => 'transactions.status',
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
			'index' => 7,
			'type' => 14,
			'sqlExpression' => 'transactions.total_due',
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
			'index' => 8,
			'type' => 14,
			'sqlExpression' => 'transactions.total_paid',
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
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'transactions.created_at',
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
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'transactions.updated_at',
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
		),
		'patient_name' => array(
			'name' => 'patient_name',
			'goodName' => 'patient_name',
			'strField' => 'patient_name',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'tableName' => '' 
		),
		'opd_attendance' => array(
			'name' => 'opd_attendance',
			'goodName' => 'opd_attendance',
			'strField' => 'opd_attendance',
			'index' => 9,
			'sqlExpression' => 'transactions.opd_attendance',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
	transactions.id,
	transactions.transaction_number,
	transactions.patient_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS patient_name,
	transactions.patient_type,
	transactions.status,
	transactions.total_due,
	transactions.total_paid,
	transactions.opd_attendance,
	transactions.created_at,
	transactions.updated_at
FROM
	transactions
	INNER JOIN patients ON patients.patient_id = transactions.patient_id
	INNER JOIN persons ON persons.master_person_id = patients.person_id
ORDER BY
	transactions.created_at DESC
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'transactions.id',
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
				'sql' => 'transactions.transaction_number',
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
				'sql' => 'transactions.patient_id',
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
				'sql' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'patient_name',
				'expression' => array(
					'sql' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'persons.first_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'NULLIF(persons.middle_name, \'\')',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'persons.last_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT_WS',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'patient_name' 
			),
			array(
				'sql' => 'transactions.patient_type',
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
				'sql' => 'transactions.status',
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
				'sql' => 'transactions.total_due',
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
				'sql' => 'transactions.total_paid',
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
				'sql' => 'transactions.opd_attendance',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transactions',
					'name' => 'opd_attendance' 
				),
				'encrypted' => false,
				'columnName' => 'opd_attendance' 
			),
			array(
				'sql' => 'transactions.created_at',
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
				'sql' => 'transactions.updated_at',
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
						'opd_attendance',
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
			),
			array(
				'sql' => 'INNER JOIN patients ON patients.patient_id = transactions.patient_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'patients',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'patient_id',
						'person_id',
						'person_type_id',
						'created_at',
						'updated_at',
						'classification',
						'office',
						'college',
						'uhs_id_no',
						'emed_no',
						'ihomis_no',
						'philhealth_no' 
					),
					'name' => 'patients' 
				),
				'joinOn' => array(
					'sql' => 'patients.patient_id = transactions.patient_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'patients',
						'name' => 'patient_id' 
					),
					'case' => '= transactions.patient_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'patients.patient_id = transactions.patient_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'patients',
							'name' => 'patient_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'transactions',
							'name' => 'patient_id' 
						) 
					) 
				),
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN persons ON persons.master_person_id = patients.person_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'persons',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'master_person_id',
						'first_name',
						'middle_name',
						'last_name',
						'suffix',
						'sex',
						'birth_date',
						'created_at',
						'updated_at' 
					),
					'name' => 'persons' 
				),
				'joinOn' => array(
					'sql' => 'persons.master_person_id = patients.person_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'persons',
						'name' => 'master_person_id' 
					),
					'case' => '= patients.person_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'persons.master_person_id = patients.person_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'persons',
							'name' => 'master_person_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'patients',
							'name' => 'person_id' 
						) 
					) 
				),
				'link' => 1 
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
				'sql' => 'transactions.created_at DESC',
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
				'columnNumber' => 10 
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
				'orderByIndex' => 0,
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
		'fieldListSql' => 'transactions.id,
	transactions.transaction_number,
	transactions.patient_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS patient_name,
	transactions.patient_type,
	transactions.status,
	transactions.total_due,
	transactions.total_paid,
	transactions.opd_attendance,
	transactions.created_at,
	transactions.updated_at',
		'fromListSql' => 'FROM
	transactions
	INNER JOIN patients ON patients.patient_id = transactions.patient_id
	INNER JOIN persons ON persons.master_person_id = patients.person_id',
		'orderBySql' => 'ORDER BY
	transactions.created_at DESC',
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
			'updated_at',
			'patient_name',
			'opd_attendance' 
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
			'updated_at',
			'patient_name',
			'opd_attendance' 
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
		'patient_id' => 'Patient ID',
		'patient_type' => 'Patient Type',
		'status' => 'Status',
		'total_due' => 'Total Charges',
		'total_paid' => 'Total Paid',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'patient_name' => 'Patient Name',
		'opd_attendance' => 'Date of OPD Attendance' 
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
		'updated_at' => '',
		'patient_name' => '',
		'opd_attendance' => '' 
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
		'updated_at' => '',
		'patient_name' => '',
		'opd_attendance' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>