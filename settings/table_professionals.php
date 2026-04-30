<?php
global $runnerTableSettings;
$runnerTableSettings['professionals'] = array(
	'name' => 'professionals',
	'shortName' => 'professionals',
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
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
	'afterEditDetails' => 'professionals',
	'afterAddDetail' => 'professionals',
	'detailsBadgeColor' => '008b8b',
	'sql' => 'SELECT
	professionals.id,
	professionals.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	professionals.person_type_id,
	professionals.profession,
	professionals.professional_type_id,
	professionals.created_at,
	professionals.updated_at
FROM
	professionals
JOIN persons ON persons.id = professionals.person_id',
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
			'sqlExpression' => 'professionals.id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'professionals' 
		),
		'profession' => array(
			'name' => 'profession',
			'goodName' => 'profession',
			'strField' => 'profession',
			'index' => 5,
			'sqlExpression' => 'professionals.profession',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true 
				) 
			),
			'tableName' => 'professionals' 
		),
		'professional_type_id' => array(
			'name' => 'professional_type_id',
			'goodName' => 'professional_type_id',
			'strField' => 'professional_type_id',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'professionals.professional_type_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'professionals' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 7,
			'type' => 135,
			'sqlExpression' => 'professionals.created_at',
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
			'tableName' => 'professionals' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'professionals.updated_at',
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
			'tableName' => 'professionals' 
		),
		'person_id' => array(
			'name' => 'person_id',
			'goodName' => 'person_id',
			'strField' => 'person_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'professionals.person_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'persons',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'id',
					'lookupControlType' => 2,
					'lookupListPage' => 'addPerson' 
				) 
			),
			'tableName' => 'professionals' 
		),
		'person_type_id' => array(
			'name' => 'person_type_id',
			'goodName' => 'person_type_id',
			'strField' => 'person_type_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'professionals.person_type_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'professionals' 
		),
		'full_name' => array(
			'name' => 'full_name',
			'goodName' => 'full_name',
			'strField' => 'full_name',
			'index' => 3,
			'sqlExpression' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
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
	professionals.id,
	professionals.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	professionals.person_type_id,
	professionals.profession,
	professionals.professional_type_id,
	professionals.created_at,
	professionals.updated_at
FROM
	professionals
JOIN persons ON persons.id = professionals.person_id',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'professionals.id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'professionals.person_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'person_id' 
				),
				'encrypted' => false,
				'columnName' => 'person_id' 
			),
			array(
				'sql' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'full_name',
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
				'columnName' => 'full_name' 
			),
			array(
				'sql' => 'professionals.person_type_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'person_type_id' 
				),
				'encrypted' => false,
				'columnName' => 'person_type_id' 
			),
			array(
				'sql' => 'professionals.profession',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'profession' 
				),
				'encrypted' => false,
				'columnName' => 'profession' 
			),
			array(
				'sql' => 'professionals.professional_type_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'professional_type_id' 
				),
				'encrypted' => false,
				'columnName' => 'professional_type_id' 
			),
			array(
				'sql' => 'professionals.created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'professionals.updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'professionals',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'professionals',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'professionals',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'person_id',
						'person_type_id',
						'profession',
						'professional_type_id',
						'created_at',
						'updated_at' 
					),
					'name' => 'professionals' 
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
				'sql' => 'JOIN persons ON persons.id = professionals.person_id',
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
					'sql' => 'persons.id = professionals.person_id',
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
						'name' => 'id' 
					),
					'case' => '= professionals.person_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'persons.id = professionals.person_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'persons',
							'name' => 'id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'professionals',
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'professionals.id,
	professionals.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	professionals.person_type_id,
	professionals.profession,
	professionals.professional_type_id,
	professionals.created_at,
	professionals.updated_at',
		'fromListSql' => 'FROM
	professionals
JOIN persons ON persons.id = professionals.person_id',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'professionals',
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
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
			'profession',
			'professional_type_id',
			'created_at',
			'updated_at',
			'person_id',
			'person_type_id',
			'full_name' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'profession',
			'professional_type_id',
			'created_at',
			'updated_at',
			'person_id',
			'person_type_id',
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
	$runnerTableLabels['professionals'] = array(
	'tableCaption' => 'Professionals',
	'fieldLabels' => array(
		'id' => 'Professional ID',
		'profession' => 'Profession',
		'professional_type_id' => 'Professional Type Id',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'person_id' => 'Person ID',
		'person_type_id' => 'Person Type ID',
		'full_name' => 'Full Name' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'profession' => '',
		'professional_type_id' => '',
		'created_at' => '',
		'updated_at' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'profession' => '',
		'professional_type_id' => '',
		'created_at' => '',
		'updated_at' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>