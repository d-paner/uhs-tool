<?php
global $runnerTableSettings;
$runnerTableSettings['uhs_audit'] = array(
	'name' => 'uhs_audit',
	'shortName' => 'uhs_audit',
	'pagesByType' => array(
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
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'uhs_audit',
	'afterAddDetail' => 'uhs_audit',
	'detailsBadgeColor' => '5f9ea0',
	'strOrderBy' => 'ORDER BY `datetime` DESC',
	'orderInfo' => array( 
		array(
			'index' => 2,
			'dir' => 'DESC',
			'field' => 'datetime' 
		) 
	),
	'sql' => 'SELECT
	id,
	`datetime`,
	ip,
	`user`,
	`table`,
	`action`,
	description
FROM
	uhs_audit
ORDER BY `datetime` DESC',
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
			'tableName' => 'uhs_audit' 
		),
		'datetime' => array(
			'name' => 'datetime',
			'goodName' => 'datetime',
			'strField' => 'datetime',
			'index' => 2,
			'type' => 135,
			'sqlExpression' => '`datetime`',
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
			'tableName' => 'uhs_audit' 
		),
		'ip' => array(
			'name' => 'ip',
			'goodName' => 'ip',
			'strField' => 'ip',
			'index' => 3,
			'sqlExpression' => 'ip',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'uhs_audit' 
		),
		'user' => array(
			'name' => 'user',
			'goodName' => 'user',
			'strField' => 'user',
			'index' => 4,
			'sqlExpression' => '`user`',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'uhs_audit' 
		),
		'table' => array(
			'name' => 'table',
			'goodName' => 'table',
			'strField' => 'table',
			'index' => 5,
			'sqlExpression' => '`table`',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'uhs_audit' 
		),
		'action' => array(
			'name' => 'action',
			'goodName' => 'action',
			'strField' => 'action',
			'index' => 6,
			'sqlExpression' => '`action`',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'uhs_audit' 
		),
		'description' => array(
			'name' => 'description',
			'goodName' => 'description',
			'strField' => 'description',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'description',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'uhs_audit' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	`datetime`,
	ip,
	`user`,
	`table`,
	`action`,
	description
FROM
	uhs_audit
ORDER BY `datetime` DESC',
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
					'table' => 'uhs_audit',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => '`datetime`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'datetime' 
				),
				'encrypted' => false,
				'columnName' => 'datetime' 
			),
			array(
				'sql' => 'ip',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'ip' 
				),
				'encrypted' => false,
				'columnName' => 'ip' 
			),
			array(
				'sql' => '`user`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'user' 
				),
				'encrypted' => false,
				'columnName' => 'user' 
			),
			array(
				'sql' => '`table`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'table' 
				),
				'encrypted' => false,
				'columnName' => 'table' 
			),
			array(
				'sql' => '`action`',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'action' 
				),
				'encrypted' => false,
				'columnName' => 'action' 
			),
			array(
				'sql' => 'description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'description' 
				),
				'encrypted' => false,
				'columnName' => 'description' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'uhs_audit',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'uhs_audit',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'datetime',
						'ip',
						'user',
						'table',
						'action',
						'description' 
					),
					'name' => 'uhs_audit' 
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
				'sql' => '`datetime` DESC',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'uhs_audit',
					'name' => 'datetime' 
				),
				'asc' => false,
				'columnNumber' => 2 
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
				'orderByIndex' => 0,
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	`datetime`,
	ip,
	`user`,
	`table`,
	`action`,
	description',
		'fromListSql' => 'FROM
	uhs_audit',
		'orderBySql' => 'ORDER BY `datetime` DESC',
		'tailSql' => '' 
	),
	'originalTable' => 'uhs_audit',
	'originalPagesByType' => array(
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
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
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
			'datetime',
			'ip',
			'user',
			'table',
			'action',
			'description' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'datetime',
			'ip',
			'user',
			'table',
			'action',
			'description' 
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
	$runnerTableLabels['uhs_audit'] = array(
	'tableCaption' => 'Uhs Audit',
	'fieldLabels' => array(
		'id' => 'Id',
		'datetime' => 'Datetime',
		'ip' => 'Ip',
		'user' => 'User',
		'table' => 'Table',
		'action' => 'Action',
		'description' => 'Description' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'datetime' => '',
		'ip' => '',
		'user' => '',
		'table' => '',
		'action' => '',
		'description' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'datetime' => '',
		'ip' => '',
		'user' => '',
		'table' => '',
		'action' => '',
		'description' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>