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
	'strOrderBy' => 'ORDER BY
	created_at DESC',
	'orderInfo' => array( 
		array(
			'index' => 13,
			'dir' => 'DESC',
			'field' => 'full_name' 
		) 
	),
	'sql' => 'SELECT
	patients.id,
	patients.patient_id,
	patients.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	patients.person_type_id,
	patients.classification,
	patients.office,
	patients.college,
	patients.uhs_id_no,
	patients.emed_no,
	patients.ihomis_no,
	patients.philhealth_no,
	patients.created_at,
	patients.updated_at
FROM
	patients
JOIN persons ON persons.master_person_id = patients.person_id
ORDER BY
	created_at DESC',
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
			'sqlExpression' => 'patients.id',
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
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'patients.created_at',
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
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'patients.updated_at',
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
		'classification' => array(
			'name' => 'classification',
			'goodName' => 'classification',
			'strField' => 'classification',
			'index' => 6,
			'sqlExpression' => 'patients.classification',
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
						'Student',
						'Administrative Employee',
						'Faculty REPS',
						'AdmEmpDep',
						'FacDep',
						'REPSDep',
						'Faculty',
						'Non-UP' 
					),
					'lookupTable' => 'patient_classifications',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'label' 
				) 
			),
			'tableName' => 'patients' 
		),
		'office' => array(
			'name' => 'office',
			'goodName' => 'office',
			'strField' => 'office',
			'index' => 7,
			'sqlExpression' => 'patients.office',
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
		'college' => array(
			'name' => 'college',
			'goodName' => 'college',
			'strField' => 'college',
			'index' => 8,
			'sqlExpression' => 'patients.college',
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
		'uhs_id_no' => array(
			'name' => 'uhs_id_no',
			'goodName' => 'uhs_id_no',
			'strField' => 'uhs_id_no',
			'index' => 9,
			'sqlExpression' => 'patients.uhs_id_no',
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
		'emed_no' => array(
			'name' => 'emed_no',
			'goodName' => 'emed_no',
			'strField' => 'emed_no',
			'index' => 10,
			'sqlExpression' => 'patients.emed_no',
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
		'ihomis_no' => array(
			'name' => 'ihomis_no',
			'goodName' => 'ihomis_no',
			'strField' => 'ihomis_no',
			'index' => 11,
			'sqlExpression' => 'patients.ihomis_no',
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
		'philhealth_no' => array(
			'name' => 'philhealth_no',
			'goodName' => 'philhealth_no',
			'strField' => 'philhealth_no',
			'index' => 12,
			'sqlExpression' => 'patients.philhealth_no',
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
		'person_id' => array(
			'name' => 'person_id',
			'goodName' => 'person_id',
			'strField' => 'person_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'patients.person_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'persons',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'id',
					'lookupCustomDisplay' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'addPerson' 
				) 
			),
			'tableName' => 'patients' 
		),
		'person_type_id' => array(
			'name' => 'person_type_id',
			'goodName' => 'person_type_id',
			'strField' => 'person_type_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'patients.person_type_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'lookupType' => 2,
					'lookupTable' => 'person_types',
					'lookupTableConnection' => 'conn',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'type_name' 
				) 
			),
			'tableName' => 'patients' 
		),
		'full_name' => array(
			'name' => 'full_name',
			'goodName' => 'full_name',
			'strField' => 'full_name',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name)',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => '' 
		),
		'patient_id' => array(
			'name' => 'patient_id',
			'goodName' => 'patient_id',
			'strField' => 'patient_id',
			'index' => 2,
			'sqlExpression' => 'patients.patient_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'patients' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	patients.id,
	patients.patient_id,
	patients.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	patients.person_type_id,
	patients.classification,
	patients.office,
	patients.college,
	patients.uhs_id_no,
	patients.emed_no,
	patients.ihomis_no,
	patients.philhealth_no,
	patients.created_at,
	patients.updated_at
FROM
	patients
JOIN persons ON persons.master_person_id = patients.person_id
ORDER BY
	created_at DESC',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'patients.id',
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
				'sql' => 'patients.patient_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'patient_id' 
				),
				'encrypted' => false,
				'columnName' => 'patient_id' 
			),
			array(
				'sql' => 'patients.person_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
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
				'sql' => 'patients.person_type_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'person_type_id' 
				),
				'encrypted' => false,
				'columnName' => 'person_type_id' 
			),
			array(
				'sql' => 'patients.classification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'classification' 
				),
				'encrypted' => false,
				'columnName' => 'classification' 
			),
			array(
				'sql' => 'patients.office',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'office' 
				),
				'encrypted' => false,
				'columnName' => 'office' 
			),
			array(
				'sql' => 'patients.college',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'college' 
				),
				'encrypted' => false,
				'columnName' => 'college' 
			),
			array(
				'sql' => 'patients.uhs_id_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'uhs_id_no' 
				),
				'encrypted' => false,
				'columnName' => 'uhs_id_no' 
			),
			array(
				'sql' => 'patients.emed_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'emed_no' 
				),
				'encrypted' => false,
				'columnName' => 'emed_no' 
			),
			array(
				'sql' => 'patients.ihomis_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'ihomis_no' 
				),
				'encrypted' => false,
				'columnName' => 'ihomis_no' 
			),
			array(
				'sql' => 'patients.philhealth_no',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'patients',
					'name' => 'philhealth_no' 
				),
				'encrypted' => false,
				'columnName' => 'philhealth_no' 
			),
			array(
				'sql' => 'patients.created_at',
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
				'sql' => 'patients.updated_at',
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
				'sql' => 'JOIN persons ON persons.master_person_id = patients.person_id',
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
				'columnNumber' => 13 
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
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => 0,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'patients.id,
	patients.patient_id,
	patients.person_id,
	CONCAT_WS(\' \', persons.first_name, NULLIF(persons.middle_name, \'\'), persons.last_name) AS full_name,
	patients.person_type_id,
	patients.classification,
	patients.office,
	patients.college,
	patients.uhs_id_no,
	patients.emed_no,
	patients.ihomis_no,
	patients.philhealth_no,
	patients.created_at,
	patients.updated_at',
		'fromListSql' => 'FROM
	patients
JOIN persons ON persons.master_person_id = patients.person_id',
		'orderBySql' => 'ORDER BY
	created_at DESC',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'hasJsEvents' => true,
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
			'created_at',
			'updated_at',
			'classification',
			'office',
			'college',
			'uhs_id_no',
			'emed_no',
			'ihomis_no',
			'philhealth_no',
			'person_id',
			'person_type_id',
			'full_name',
			'patient_id' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'created_at',
			'updated_at',
			'classification',
			'office',
			'college',
			'uhs_id_no',
			'emed_no',
			'ihomis_no',
			'philhealth_no',
			'person_id',
			'person_type_id',
			'full_name',
			'patient_id' 
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
		'id' => 'Patient ID',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'classification' => 'Patient Classification',
		'office' => 'Office',
		'college' => 'College',
		'uhs_id_no' => 'UHS ID No.',
		'emed_no' => 'E-Med No.',
		'ihomis_no' => 'IHOMIS No.',
		'philhealth_no' => 'Philhealth No.',
		'person_id' => 'Person ID',
		'person_type_id' => 'Type',
		'full_name' => 'Full Name',
		'patient_id' => 'Patient ID' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'created_at' => '',
		'updated_at' => '',
		'classification' => '',
		'office' => '',
		'college' => '',
		'uhs_id_no' => '',
		'emed_no' => '',
		'ihomis_no' => '',
		'philhealth_no' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '',
		'patient_id' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'created_at' => '',
		'updated_at' => '',
		'classification' => '',
		'office' => '',
		'college' => '',
		'uhs_id_no' => '',
		'emed_no' => '',
		'ihomis_no' => '',
		'philhealth_no' => '',
		'person_id' => '',
		'person_type_id' => '',
		'full_name' => '',
		'patient_id' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>