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
			'index' => 8,
			'dir' => 'DESC',
			'field' => 'service_type' 
		) 
	),
	'sql' => 'SELECT
	payments.id,
	payments.transaction_number,
	payments.service_type,
	payments.hospital_service_id,
	payments.professional_service_id,
	COALESCE(hs.hospital_account, ps.pf_account) AS services,
	payments.amount,
	payments.`date`,
	payments.payment_method,
	payments.placed_by,
	payments.group_id
FROM
	payments
LEFT JOIN hospital_services hs ON hs.id = payments.hospital_service_id
LEFT JOIN professional_services ps ON ps.id = payments.professional_service_id
LEFT JOIN hospital_accounts ha ON ha.label = hs.hospital_account
LEFT JOIN professional_accounts pa ON pa.label = ps.pf_account
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
			'sqlExpression' => 'payments.id',
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
			'sqlExpression' => 'payments.transaction_number',
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
			'index' => 7,
			'type' => 14,
			'sqlExpression' => 'payments.amount',
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
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'payments.`date`',
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
			'index' => 9,
			'sqlExpression' => 'payments.payment_method',
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
			'index' => 10,
			'sqlExpression' => 'payments.placed_by',
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
			'index' => 11,
			'sqlExpression' => 'payments.group_id',
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
			'sqlExpression' => 'payments.service_type',
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
		'services' => array(
			'name' => 'services',
			'goodName' => 'services',
			'strField' => 'services',
			'index' => 6,
			'sqlExpression' => 'COALESCE(hs.hospital_account, ps.pf_account)',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => '' 
		),
		'hospital_service_id' => array(
			'name' => 'hospital_service_id',
			'goodName' => 'hospital_service_id',
			'strField' => 'hospital_service_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'payments.hospital_service_id',
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
					'lookupWhere' => 'status IN (\'Unpaid\')',
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
			'sqlExpression' => 'payments.professional_service_id',
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
					'lookupWhere' => 'status IN (\'Unpaid\')',
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
	payments.id,
	payments.transaction_number,
	payments.service_type,
	payments.hospital_service_id,
	payments.professional_service_id,
	COALESCE(hs.hospital_account, ps.pf_account) AS services,
	payments.amount,
	payments.`date`,
	payments.payment_method,
	payments.placed_by,
	payments.group_id
FROM
	payments
LEFT JOIN hospital_services hs ON hs.id = payments.hospital_service_id
LEFT JOIN professional_services ps ON ps.id = payments.professional_service_id
LEFT JOIN hospital_accounts ha ON ha.label = hs.hospital_account
LEFT JOIN professional_accounts pa ON pa.label = ps.pf_account
ORDER BY `date` DESC',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'payments.id',
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
				'sql' => 'payments.transaction_number',
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
				'sql' => 'payments.service_type',
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
				'sql' => 'payments.hospital_service_id',
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
				'sql' => 'payments.professional_service_id',
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
				'sql' => 'COALESCE(hs.hospital_account, ps.pf_account)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'services',
				'expression' => array(
					'sql' => 'COALESCE(hs.hospital_account, ps.pf_account)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'hs.hospital_account',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'ps.pf_account',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'COALESCE',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'services' 
			),
			array(
				'sql' => 'payments.amount',
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
				'sql' => 'payments.`date`',
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
				'sql' => 'payments.payment_method',
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
				'sql' => 'payments.placed_by',
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
				'sql' => 'payments.group_id',
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
			),
			array(
				'sql' => 'LEFT JOIN hospital_services hs ON hs.id = payments.hospital_service_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'hospital_services',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'transaction_number',
						'hospital_account_id',
						'amount',
						'status',
						'placed_by',
						'group_id',
						'created_at',
						'updated_at' 
					),
					'name' => 'hospital_services' 
				),
				'joinOn' => array(
					'sql' => 'hs.id = payments.hospital_service_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'hs',
						'name' => 'id' 
					),
					'case' => '= payments.hospital_service_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'hs.id = payments.hospital_service_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'hs',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'payments',
							'name' => 'hospital_service_id' 
						) 
					) 
				),
				'alias' => 'hs',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT JOIN professional_services ps ON ps.id = payments.professional_service_id',
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
					'sql' => 'ps.id = payments.professional_service_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'ps',
						'name' => 'id' 
					),
					'case' => '= payments.professional_service_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ps.id = payments.professional_service_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ps',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'payments',
							'name' => 'professional_service_id' 
						) 
					) 
				),
				'alias' => 'ps',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT JOIN hospital_accounts ha ON ha.label = hs.hospital_account',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'hospital_accounts',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'label',
						'description',
						'fund_code',
						'fund_type',
						'created_at',
						'updated_at' 
					),
					'name' => 'hospital_accounts' 
				),
				'joinOn' => array(
					'sql' => 'ha.`label` = hs.hospital_account',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'ha',
						'name' => 'label' 
					),
					'case' => '= hs.hospital_account',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ha.label = hs.hospital_account',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ha',
							'name' => 'label' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => 'hs.hospital_account',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					) 
				),
				'alias' => 'ha',
				'link' => 3 
			),
			array(
				'sql' => 'LEFT JOIN professional_accounts pa ON pa.label = ps.pf_account',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'professional_accounts',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'label',
						'description',
						'created_at',
						'updated_at' 
					),
					'name' => 'professional_accounts' 
				),
				'joinOn' => array(
					'sql' => 'pa.`label` = ps.pf_account',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'pa',
						'name' => 'label' 
					),
					'case' => '= ps.pf_account',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'pa.label = ps.pf_account',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'pa',
							'name' => 'label' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => 'ps.pf_account',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					) 
				),
				'alias' => 'pa',
				'link' => 3 
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
		'fieldListSql' => 'payments.id,
	payments.transaction_number,
	payments.service_type,
	payments.hospital_service_id,
	payments.professional_service_id,
	COALESCE(hs.hospital_account, ps.pf_account) AS services,
	payments.amount,
	payments.`date`,
	payments.payment_method,
	payments.placed_by,
	payments.group_id',
		'fromListSql' => 'FROM
	payments
LEFT JOIN hospital_services hs ON hs.id = payments.hospital_service_id
LEFT JOIN professional_services ps ON ps.id = payments.professional_service_id
LEFT JOIN hospital_accounts ha ON ha.label = hs.hospital_account
LEFT JOIN professional_accounts pa ON pa.label = ps.pf_account',
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
			'services',
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
			'services',
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
		'services' => 'Services',
		'hospital_service_id' => 'Hospital Service Id',
		'professional_service_id' => 'Professional Service Id' 
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
		'services' => '',
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
		'services' => '',
		'hospital_service_id' => '',
		'professional_service_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>