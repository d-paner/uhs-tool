<?php
global $runnerTableSettings;
$runnerTableSettings['users'] = array(
	'name' => 'users',
	'shortName' => 'users',
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
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'users',
	'afterAddDetail' => 'users',
	'detailsBadgeColor' => 'b22222',
	'sql' => 'SELECT
	id,
	full_name,
	username,
	email,
	password,
	group_id,
	ext_security_id,
	created_at,
	updated_at
FROM
	users',
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
			'tableName' => 'users' 
		),
		'full_name' => array(
			'name' => 'full_name',
			'goodName' => 'full_name',
			'strField' => 'full_name',
			'index' => 2,
			'sqlExpression' => 'full_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'users' 
		),
		'username' => array(
			'name' => 'username',
			'goodName' => 'username',
			'strField' => 'username',
			'index' => 3,
			'sqlExpression' => 'username',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'users' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'index' => 4,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'users' 
		),
		'password' => array(
			'name' => 'password',
			'goodName' => 'password',
			'strField' => 'password',
			'index' => 5,
			'sqlExpression' => 'password',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Password',
					'required' => true,
					'validateAs' => 'Password',
					'textHTML5Input' => 'Text' 
				) 
			),
			'tableName' => 'users' 
		),
		'group_id' => array(
			'name' => 'group_id',
			'goodName' => 'group_id',
			'strField' => 'group_id',
			'index' => 6,
			'sqlExpression' => 'group_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'users' 
		),
		'ext_security_id' => array(
			'name' => 'ext_security_id',
			'goodName' => 'ext_security_id',
			'strField' => 'ext_security_id',
			'index' => 7,
			'sqlExpression' => 'ext_security_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'users' 
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
			'tableName' => 'users' 
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
			'tableName' => 'users' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	full_name,
	username,
	email,
	password,
	group_id,
	ext_security_id,
	created_at,
	updated_at
FROM
	users',
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
					'table' => 'users',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'full_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'full_name' 
				),
				'encrypted' => false,
				'columnName' => 'full_name' 
			),
			array(
				'sql' => 'username',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'username' 
				),
				'encrypted' => false,
				'columnName' => 'username' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'password',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'password' 
				),
				'encrypted' => false,
				'columnName' => 'password' 
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
					'table' => 'users',
					'name' => 'group_id' 
				),
				'encrypted' => false,
				'columnName' => 'group_id' 
			),
			array(
				'sql' => 'ext_security_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'users',
					'name' => 'ext_security_id' 
				),
				'encrypted' => false,
				'columnName' => 'ext_security_id' 
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
					'table' => 'users',
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
					'table' => 'users',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'users',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'users',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'full_name',
						'username',
						'email',
						'password',
						'group_id',
						'ext_security_id',
						'created_at',
						'updated_at' 
					),
					'name' => 'users' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	full_name,
	username,
	email,
	password,
	group_id,
	ext_security_id,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	users',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'users',
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
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'full_name',
			'username',
			'email',
			'password',
			'group_id',
			'ext_security_id',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'full_name',
			'username',
			'email',
			'password',
			'group_id',
			'ext_security_id',
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
	$runnerTableLabels['users'] = array(
	'tableCaption' => 'Users',
	'fieldLabels' => array(
		'id' => 'Id',
		'full_name' => 'Full Name',
		'username' => 'Username',
		'email' => 'Email',
		'password' => 'Password',
		'group_id' => 'Group Id',
		'ext_security_id' => 'Ext Security Id',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'full_name' => '',
		'username' => '',
		'email' => '',
		'password' => '',
		'group_id' => '',
		'ext_security_id' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'full_name' => '',
		'username' => '',
		'email' => '',
		'password' => '',
		'group_id' => '',
		'ext_security_id' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>