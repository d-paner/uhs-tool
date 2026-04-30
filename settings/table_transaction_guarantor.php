<?php
global $runnerTableSettings;
$runnerTableSettings['transaction_guarantor'] = array(
	'name' => 'transaction_guarantor',
	'shortName' => 'transaction_guarantor',
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
			'list1' 
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
		'list1' => 'list',
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
	'audit' => true,
	'afterEditDetails' => 'transaction_guarantor',
	'afterAddDetail' => 'transaction_guarantor',
	'detailsBadgeColor' => '5f9ea0',
	'sql' => 'SELECT
    id,
    transaction_number,
    guarantor_id,
    placed_by,
    `group`,
    timestamps
FROM
	transaction_guarantor',
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
			'tableName' => 'transaction_guarantor' 
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
					'lookupControlType' => 2,
					'lookupListPage' => 'list' 
				) 
			),
			'tableName' => 'transaction_guarantor' 
		),
		'placed_by' => array(
			'name' => 'placed_by',
			'goodName' => 'placed_by',
			'strField' => 'placed_by',
			'index' => 4,
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
			'tableName' => 'transaction_guarantor' 
		),
		'group' => array(
			'name' => 'group',
			'goodName' => 'group',
			'strField' => 'group',
			'index' => 5,
			'sqlExpression' => '`group`',
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
			'tableName' => 'transaction_guarantor' 
		),
		'timestamps' => array(
			'name' => 'timestamps',
			'goodName' => 'timestamps',
			'strField' => 'timestamps',
			'index' => 6,
			'type' => 135,
			'sqlExpression' => 'timestamps',
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
			'tableName' => 'transaction_guarantor' 
		),
		'guarantor_id' => array(
			'name' => 'guarantor_id',
			'goodName' => 'guarantor_id',
			'strField' => 'guarantor_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'guarantor_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'guarantors',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'CONCAT_WS(\' \', first_name, middle_name, last_name)',
					'lookupCustomDisplay' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'list1' 
				) 
			),
			'tableName' => 'transaction_guarantor' 
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
    guarantor_id,
    placed_by,
    `group`,
    timestamps
FROM
	transaction_guarantor',
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
					'table' => 'transaction_guarantor',
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
					'table' => 'transaction_guarantor',
					'name' => 'transaction_number' 
				),
				'encrypted' => false,
				'columnName' => 'transaction_number' 
			),
			array(
				'sql' => 'guarantor_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transaction_guarantor',
					'name' => 'guarantor_id' 
				),
				'encrypted' => false,
				'columnName' => 'guarantor_id' 
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
					'table' => 'transaction_guarantor',
					'name' => 'placed_by' 
				),
				'encrypted' => false,
				'columnName' => 'placed_by' 
			),
			array(
				'sql' => '`group`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transaction_guarantor',
					'name' => 'group' 
				),
				'encrypted' => false,
				'columnName' => 'group' 
			),
			array(
				'sql' => 'timestamps',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'transaction_guarantor',
					'name' => 'timestamps' 
				),
				'encrypted' => false,
				'columnName' => 'timestamps' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'transaction_guarantor',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'transaction_guarantor',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'transaction_number',
						'guarantor_id',
						'placed_by',
						'group',
						'timestamps' 
					),
					'name' => 'transaction_guarantor' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
    transaction_number,
    guarantor_id,
    placed_by,
    `group`,
    timestamps',
		'fromListSql' => 'FROM
	transaction_guarantor',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'transaction_guarantor',
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
			'list1' 
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
		'list1' => 'list',
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
			'placed_by',
			'group',
			'timestamps',
			'guarantor_id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'transaction_number',
			'placed_by',
			'group',
			'timestamps',
			'guarantor_id' 
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
	$runnerTableLabels['transaction_guarantor'] = array(
	'tableCaption' => 'Transaction Guarantor',
	'fieldLabels' => array(
		'id' => 'Id',
		'transaction_number' => 'Transaction Number',
		'placed_by' => 'Placed By',
		'group' => 'Group',
		'timestamps' => 'Timestamps',
		'guarantor_id' => 'Guarantor Id' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'transaction_number' => '',
		'placed_by' => '',
		'group' => '',
		'timestamps' => '',
		'guarantor_id' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'transaction_number' => '',
		'placed_by' => '',
		'group' => '',
		'timestamps' => '',
		'guarantor_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>