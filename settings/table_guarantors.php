<?php
global $runnerTableSettings;
$runnerTableSettings['guarantors'] = array(
	'name' => 'guarantors',
	'shortName' => 'guarantors',
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
	'afterEditDetails' => 'guarantors',
	'afterAddDetail' => 'guarantors',
	'detailsBadgeColor' => '1e90ff',
	'sql' => 'SELECT
	guarantors.id,
	guarantors.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	guarantors.person_type_id,
	guarantors.office,
	guarantors.college,
	guarantors.unit,
	guarantors.classification,
	guarantors.created_at,
	guarantors.updated_at
FROM
	guarantors
JOIN persons ON persons.master_person_id = guarantors.person_id',
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
			'sqlExpression' => 'guarantors.id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'guarantors' 
		),
		'classification' => array(
			'name' => 'classification',
			'goodName' => 'classification',
			'strField' => 'classification',
			'index' => 8,
			'sqlExpression' => 'guarantors.classification',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupValues' => array( 
						'Administrative Employee',
						'Faculty',
						'REPS',
						'Student',
						'Other UP Units',
						'Non-UP' 
					),
					'lookupTable' => 'guarantor_classifications',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'label' 
				) 
			),
			'tableName' => 'guarantors' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'guarantors.created_at',
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
			'tableName' => 'guarantors' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'guarantors.updated_at',
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
			'tableName' => 'guarantors' 
		),
		'office' => array(
			'name' => 'office',
			'goodName' => 'office',
			'strField' => 'office',
			'index' => 5,
			'sqlExpression' => 'guarantors.office',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'lookupType' => 2,
					'lookupTable' => 'offices',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'abbreviation',
					'lookupDisplayField' => 'abbreviation' 
				) 
			),
			'tableName' => 'guarantors' 
		),
		'college' => array(
			'name' => 'college',
			'goodName' => 'college',
			'strField' => 'college',
			'index' => 6,
			'sqlExpression' => 'guarantors.college',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'guarantors' 
		),
		'unit' => array(
			'name' => 'unit',
			'goodName' => 'unit',
			'strField' => 'unit',
			'index' => 7,
			'sqlExpression' => 'guarantors.unit',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'guarantors' 
		),
		'person_id' => array(
			'name' => 'person_id',
			'goodName' => 'person_id',
			'strField' => 'person_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'guarantors.person_id',
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
			'tableName' => 'guarantors' 
		),
		'person_type_id' => array(
			'name' => 'person_type_id',
			'goodName' => 'person_type_id',
			'strField' => 'person_type_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'guarantors.person_type_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'guarantors' 
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
	guarantors.id,
	guarantors.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	guarantors.person_type_id,
	guarantors.office,
	guarantors.college,
	guarantors.unit,
	guarantors.classification,
	guarantors.created_at,
	guarantors.updated_at
FROM
	guarantors
JOIN persons ON persons.master_person_id = guarantors.person_id',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'guarantors.id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'guarantors.person_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
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
				'sql' => 'guarantors.person_type_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'person_type_id' 
				),
				'encrypted' => false,
				'columnName' => 'person_type_id' 
			),
			array(
				'sql' => 'guarantors.office',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'office' 
				),
				'encrypted' => false,
				'columnName' => 'office' 
			),
			array(
				'sql' => 'guarantors.college',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'college' 
				),
				'encrypted' => false,
				'columnName' => 'college' 
			),
			array(
				'sql' => 'guarantors.unit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'unit' 
				),
				'encrypted' => false,
				'columnName' => 'unit' 
			),
			array(
				'sql' => 'guarantors.classification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'classification' 
				),
				'encrypted' => false,
				'columnName' => 'classification' 
			),
			array(
				'sql' => 'guarantors.created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'guarantors.updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'guarantors',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'guarantors',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'guarantors',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'person_id',
						'person_type_id',
						'office',
						'classification',
						'created_at',
						'updated_at',
						'college',
						'unit' 
					),
					'name' => 'guarantors' 
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
				'sql' => 'JOIN persons ON persons.master_person_id = guarantors.person_id',
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
					'sql' => 'persons.master_person_id = guarantors.person_id',
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
					'case' => '= guarantors.person_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'persons.master_person_id = guarantors.person_id',
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
							'table' => 'guarantors',
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
		'fieldListSql' => 'guarantors.id,
	guarantors.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	guarantors.person_type_id,
	guarantors.office,
	guarantors.college,
	guarantors.unit,
	guarantors.classification,
	guarantors.created_at,
	guarantors.updated_at',
		'fromListSql' => 'FROM
	guarantors
JOIN persons ON persons.master_person_id = guarantors.person_id',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
	'originalTable' => 'guarantors',
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
			'classification',
			'created_at',
			'updated_at',
			'office',
			'college',
			'unit',
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
			'classification',
			'created_at',
			'updated_at',
			'office',
			'college',
			'unit',
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
	$runnerTableLabels['guarantors'] = array(
	'tableCaption' => 'Guarantors',
	'fieldLabels' => array(
		'id' => 'Gurantor ID',
		'classification' => 'Classification',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'office' => 'Office',
		'college' => 'College',
		'unit' => 'Unit',
		'person_id' => 'Person ID',
		'person_type_id' => 'Person Type Id',
		'full_name' => 'Full Name' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'classification' => '',
		'created_at' => '',
		'updated_at' => '',
		'office' => '',
		'college' => '',
		'unit' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'classification' => '',
		'created_at' => '',
		'updated_at' => '',
		'office' => '',
		'college' => '',
		'unit' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>