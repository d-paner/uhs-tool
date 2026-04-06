<?php
global $runnerTableSettings;
$runnerTableSettings['patients'] = array(
	'name' => 'patients',
	'shortName' => 'patients',
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
			'forTransactions' 
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
		'forTransactions' => 'list',
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
	'afterEditDetails' => 'patients',
	'afterAddDetail' => 'patients',
	'detailsBadgeColor' => '2f4f4f',
	'strOrderBy' => 'ORDER BY created_at DESC',
	'orderInfo' => array( 
		array(
			'index' => 8,
			'dir' => 'DESC',
			'field' => 'updated_at' 
		) 
	),
	'sql' => 'SELECT
	id,
	first_name,
	last_name,
	middle_name,
	CONCAT_WS(\' \',first_name, middle_name, last_name) AS full_name,
	sex,
	birthday,
	created_at,
	updated_at
FROM
	patients
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
			'tableName' => 'patients' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'index' => 2,
			'sqlExpression' => 'first_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'patients' 
		),
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'index' => 3,
			'sqlExpression' => 'last_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'patients' 
		),
		'middle_name' => array(
			'name' => 'middle_name',
			'goodName' => 'middle_name',
			'strField' => 'middle_name',
			'index' => 4,
			'sqlExpression' => 'middle_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'patients' 
		),
		'sex' => array(
			'name' => 'sex',
			'goodName' => 'sex',
			'strField' => 'sex',
			'index' => 6,
			'sqlExpression' => 'sex',
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
						'Male',
						'Female' 
					) 
				) 
			),
			'tableName' => 'patients' 
		),
		'birthday' => array(
			'name' => 'birthday',
			'goodName' => 'birthday',
			'strField' => 'birthday',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'birthday',
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
			'tableName' => 'patients' 
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
			'tableName' => 'patients' 
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
			'tableName' => 'patients' 
		),
		'full_name' => array(
			'name' => 'full_name',
			'goodName' => 'full_name',
			'strField' => 'full_name',
			'index' => 5,
			'sqlExpression' => 'CONCAT_WS(\' \',first_name, middle_name, last_name)',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => '' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	first_name,
	last_name,
	middle_name,
	CONCAT_WS(\' \',first_name, middle_name, last_name) AS full_name,
	sex,
	birthday,
	created_at,
	updated_at
FROM
	patients
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
					'table' => 'patients',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'first_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'first_name' 
				),
				'encrypted' => false,
				'columnName' => 'first_name' 
			),
			array(
				'sql' => 'last_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'middle_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'middle_name' 
				),
				'encrypted' => false,
				'columnName' => 'middle_name' 
			),
			array(
				'sql' => 'CONCAT_WS(\' \',first_name, middle_name, last_name)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'full_name',
				'expression' => array(
					'sql' => 'CONCAT_WS(\' \',first_name, middle_name, last_name)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'first_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'middle_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'last_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT_WS',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'full_name' 
			),
			array(
				'sql' => 'sex',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'sex' 
				),
				'encrypted' => false,
				'columnName' => 'sex' 
			),
			array(
				'sql' => 'birthday',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'birthday' 
				),
				'encrypted' => false,
				'columnName' => 'birthday' 
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
					'table' => 'patients',
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
					'table' => 'patients',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'patients',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'patients',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'first_name',
						'last_name',
						'middle_name',
						'sex',
						'birthday',
						'created_at',
						'updated_at' 
					),
					'name' => 'patients' 
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
					'table' => 'patients',
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
	first_name,
	last_name,
	middle_name,
	CONCAT_WS(\' \',first_name, middle_name, last_name) AS full_name,
	sex,
	birthday,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	patients',
		'orderBySql' => 'ORDER BY created_at DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'patients',
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
			'forTransactions' 
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
		'forTransactions' => 'list',
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
			'first_name',
			'last_name',
			'middle_name',
			'sex',
			'birthday',
			'created_at',
			'updated_at',
			'full_name' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'first_name',
			'last_name',
			'middle_name',
			'sex',
			'birthday',
			'created_at',
			'updated_at',
			'full_name' 
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
	$runnerTableLabels['patients'] = array(
	'tableCaption' => 'Patients',
	'fieldLabels' => array(
		'id' => 'Id',
		'first_name' => 'First Name',
		'last_name' => 'Last Name',
		'middle_name' => 'Middle Name',
		'sex' => 'Sex',
		'birthday' => 'Birthday',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'full_name' => 'Full Name' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'first_name' => '',
		'last_name' => '',
		'middle_name' => '',
		'sex' => '',
		'birthday' => '',
		'created_at' => '',
		'updated_at' => '',
		'full_name' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'first_name' => '',
		'last_name' => '',
		'middle_name' => '',
		'sex' => '',
		'birthday' => '',
		'created_at' => '',
		'updated_at' => '',
		'full_name' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>