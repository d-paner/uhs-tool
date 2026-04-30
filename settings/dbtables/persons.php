<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['persons'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'id',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => true,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'master_person_id',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'first_name',
			'type' => 200,
			'size' => 250,
			'scale' => 0,
			'typeName' => 'varchar(250)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'middle_name',
			'type' => 200,
			'size' => 250,
			'scale' => 0,
			'typeName' => 'varchar(250)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'last_name',
			'type' => 200,
			'size' => 250,
			'scale' => 0,
			'typeName' => 'varchar(250)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'suffix',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'sex',
			'type' => 200,
			'size' => 10,
			'scale' => 0,
			'typeName' => 'varchar(10)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'birth_date',
			'type' => 7,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'date',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'created_at',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'timestamp',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => 'current_timestamp()',
			'defaultValue' => 'CURRENT_TIMESTAMP' 
		),
		array(
			'name' => 'updated_at',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'timestamp',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => 'current_timestamp()',
			'defaultValue' => 'CURRENT_TIMESTAMP' 
		) 
	),
	'primaryKeys' => array( 
		'id' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'persons' 
);
?>