<?php
$runnerProjectSettings = array(
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'patients' => array(
			'table' => 6744 
		),
		'transactions' => array(
			'table' => 6812 
		),
		'patient_types' => array(
			'table' => 6865 
		),
		'hospital_accounts' => array(
			'table' => 6940 
		),
		'guarantors' => array(
			'table' => 6986 
		),
		'professionals' => array(
			'table' => 7091 
		),
		'offices' => array(
			'table' => 7151 
		),
		'professional_services' => array(
			'table' => 7200 
		),
		'hospital_services' => array(
			'table' => 7248 
		),
		'users' => array(
			'table' => 7315 
		),
		'payments' => array(
			'table' => 7555 
		),
		'transaction_guarantor' => array(
			'table' => 7737 
		),
		'Viewing List' => array(
			'table' => 7813 
		),
		'professional_accounts' => array(
			'table' => 7869 
		) 
	),
	'userTableKeys' => array( 
		'id' 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => 'users',
		'loginForm' => 0,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			array(
				'type' => '%db',
				'name' => 'db',
				'active' => true,
				'label' => array(
					'text' => 'Database',
					'type' => 0 
				),
				'code' => '00',
				'table' => array(
					'connId' => 'conn',
					'table' => 'users' 
				),
				'usernameField' => 'username',
				'passwordField' => 'password',
				'emailField' => 'email',
				'extUserIdField' => 'ext_security_id',
				'fullnameField' => 'full_name',
				'userpicField' => '',
				'activationField' => '˂Create new˃',
				'resetTokenField' => '˂Create new˃',
				'resetDateField' => '˂Create new˃',
				'userGroupField' => 'group_id' 
			) 
		),
		'enabled' => true,
		'advancedSecurityAvailable' => true,
		'userGroupsAvailable' => true,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '00',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => '8nXCYnXrReLvXLSetlFq',
			'JWTSecret' => 'szdDF91FS36L01KHedZ6' 
		),
		'registration' => array(
			'remindMethod' => 1,
			'hashAlgorithm' => 0,
			'registerPage' => false,
			'remindPage' => false,
			'changePwdPage' => true,
			'hashPassword' => true,
			'changePasswordPage' => true,
			'remindPasswordPage' => false,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			) 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => '',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'localhost',
			'SMTPPort' => 25,
			'SMTPUser' => '',
			'SMTPPassword' => '',
			'securityProtocol' => 0 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 0,
			'loggingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'tables' => array(
				 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				'<Default>' => array(
					'permissions' => array(
						'patients' => array(
							'mask' => 'ADESPI',
							'table' => 'patients',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'ADESPI',
							'table' => 'transactions',
							'restrictedPages' => array(
								 
							) 
						),
						'patient_types' => array(
							'mask' => 'ADESPI',
							'table' => 'patient_types',
							'restrictedPages' => array(
								 
							) 
						),
						'hospital_accounts' => array(
							'mask' => 'ADESPI',
							'table' => 'hospital_accounts',
							'restrictedPages' => array(
								 
							) 
						),
						'guarantors' => array(
							'mask' => 'ADESPI',
							'table' => 'guarantors',
							'restrictedPages' => array(
								 
							) 
						),
						'professionals' => array(
							'mask' => 'ADESPI',
							'table' => 'professionals',
							'restrictedPages' => array(
								 
							) 
						),
						'offices' => array(
							'mask' => 'ADESPI',
							'table' => 'offices',
							'restrictedPages' => array(
								 
							) 
						),
						'professional_services' => array(
							'mask' => 'ADESPI',
							'table' => 'professional_services',
							'restrictedPages' => array(
								 
							) 
						),
						'hospital_services' => array(
							'mask' => 'ADESPI',
							'table' => 'hospital_services',
							'restrictedPages' => array(
								 
							) 
						),
						'users' => array(
							'mask' => 'ADESPI',
							'table' => 'users',
							'restrictedPages' => array(
								 
							) 
						),
						'<global>' => array(
							'mask' => 'ADESPI',
							'table' => '<global>',
							'restrictedPages' => array(
								 
							) 
						),
						'payments' => array(
							'mask' => 'ADESPI',
							'table' => 'payments',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_guarantor' => array(
							'mask' => 'ADESPI',
							'table' => 'transaction_guarantor',
							'restrictedPages' => array(
								 
							) 
						),
						'Viewing List' => array(
							'mask' => 'ADESPI',
							'table' => 'Viewing List',
							'restrictedPages' => array(
								 
							) 
						),
						'professional_accounts' => array(
							'mask' => 'ADESPI',
							'table' => 'professional_accounts',
							'restrictedPages' => array(
								 
							) 
						) 
					),
					'admin' => false,
					'username' => '<Default>' 
				),
				'Admin' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'guarantors' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'hospital_accounts' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'hospital_services' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'offices' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'patient_types' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'patients' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'payments' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'professional_services' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'professionals' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'transactions' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'users' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								 
							) 
						),
						'transaction_guarantor' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'add' => false,
								'edit' => false,
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false,
								'import' => false 
							) 
						),
						'Viewing List' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'add' => false,
								'list' => false,
								'print' => false,
								'export' => false,
								'import' => false 
							) 
						),
						'professional_accounts' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'add' => false,
								'edit' => false,
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false,
								'import' => false 
							) 
						) 
					) 
				),
				'cashier' => array(
					'permissions' => array(
						'<global>' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'menu' => false 
							) 
						),
						'guarantors' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'hospital_accounts' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'hospital_services' => array(
							'mask' => 'S',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => false,
								'transactionsChild' => false,
								'view' => false,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'offices' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'patient_types' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'patients' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'forTransactions' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'payments' => array(
							'mask' => 'AEDSPI',
							'table' => '',
							'restrictedPages' => array(
								'add' => false,
								'edit' => false,
								'list' => false,
								'view' => false,
								'print' => false,
								'export' => false,
								'import' => false 
							) 
						),
						'professional_services' => array(
							'mask' => 'S',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => false,
								'transactionsChild' => false,
								'view' => false,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'professionals' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'transactions' => array(
							'mask' => 'S',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => false,
								'view' => false,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						),
						'users' => array(
							'mask' => '',
							'table' => '',
							'restrictedPages' => array(
								'add' => true,
								'edit' => true,
								'list' => true,
								'view' => true,
								'print' => true,
								'export' => true,
								'import' => true 
							) 
						) 
					) 
				) 
			) 
		),
		'dbProvider' => array(
			'type' => '%db',
			'name' => 'db',
			'active' => true,
			'label' => array(
				'text' => 'Database',
				'type' => 0 
			),
			'code' => '00',
			'table' => array(
				'connId' => 'conn',
				'table' => 'users' 
			),
			'usernameField' => 'username',
			'passwordField' => 'password',
			'emailField' => 'email',
			'extUserIdField' => 'ext_security_id',
			'fullnameField' => 'full_name',
			'userpicField' => '',
			'activationField' => '˂Create new˃',
			'resetTokenField' => '˂Create new˃',
			'resetDateField' => '˂Create new˃',
			'userGroupField' => 'group_id' 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			'00' 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'patients' => array(
			'gid' => 6744,
			'name' => 'patients',
			'shortName' => 'patients',
			'type' => 0,
			'caption' => array(
				'English' => 'Patients' 
			),
			'connId' => 'conn',
			'color' => '2f4f4f',
			'originalTable' => 'patients' 
		),
		'transactions' => array(
			'gid' => 6812,
			'name' => 'transactions',
			'shortName' => 'transactions',
			'type' => 0,
			'caption' => array(
				'English' => 'Transactions' 
			),
			'connId' => 'conn',
			'color' => '6da5c8',
			'originalTable' => 'transactions' 
		),
		'patient_types' => array(
			'gid' => 6865,
			'name' => 'patient_types',
			'shortName' => 'patient_types',
			'type' => 0,
			'caption' => array(
				'English' => 'Patient Types' 
			),
			'connId' => 'conn',
			'color' => '778899',
			'originalTable' => 'patient_types' 
		),
		'hospital_accounts' => array(
			'gid' => 6940,
			'name' => 'hospital_accounts',
			'shortName' => 'hospital_accounts',
			'type' => 0,
			'caption' => array(
				'English' => 'Hospital Accounts' 
			),
			'connId' => 'conn',
			'color' => '6da5c8',
			'originalTable' => 'hospital_accounts' 
		),
		'guarantors' => array(
			'gid' => 6986,
			'name' => 'guarantors',
			'shortName' => 'guarantors',
			'type' => 0,
			'caption' => array(
				'English' => 'Guarantors' 
			),
			'connId' => 'conn',
			'color' => '1e90ff',
			'originalTable' => 'guarantors' 
		),
		'professionals' => array(
			'gid' => 7091,
			'name' => 'professionals',
			'shortName' => 'professionals',
			'type' => 0,
			'caption' => array(
				'English' => 'Professionals' 
			),
			'connId' => 'conn',
			'color' => '008b8b',
			'originalTable' => 'professionals' 
		),
		'offices' => array(
			'gid' => 7151,
			'name' => 'offices',
			'shortName' => 'offices',
			'type' => 0,
			'caption' => array(
				'English' => 'Offices' 
			),
			'connId' => 'conn',
			'color' => 'e8926f',
			'originalTable' => 'offices' 
		),
		'professional_services' => array(
			'gid' => 7200,
			'name' => 'professional_services',
			'shortName' => 'professional_services',
			'type' => 0,
			'caption' => array(
				'English' => 'Professional Services' 
			),
			'connId' => 'conn',
			'color' => '9acd32',
			'originalTable' => 'professional_services' 
		),
		'hospital_services' => array(
			'gid' => 7248,
			'name' => 'hospital_services',
			'shortName' => 'hospital_services',
			'type' => 0,
			'caption' => array(
				'English' => 'Hospital Services' 
			),
			'connId' => 'conn',
			'color' => '4682b4',
			'originalTable' => 'hospital_services' 
		),
		'users' => array(
			'gid' => 7315,
			'name' => 'users',
			'shortName' => 'users',
			'type' => 0,
			'caption' => array(
				'English' => 'Users' 
			),
			'connId' => 'conn',
			'color' => 'b22222',
			'originalTable' => 'users' 
		),
		'payments' => array(
			'gid' => 7555,
			'name' => 'payments',
			'shortName' => 'payments',
			'type' => 0,
			'caption' => array(
				'English' => 'Payments' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'payments' 
		),
		'transaction_guarantor' => array(
			'gid' => 7737,
			'name' => 'transaction_guarantor',
			'shortName' => 'transaction_guarantor',
			'type' => 0,
			'caption' => array(
				'English' => 'Transaction Guarantor' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'transaction_guarantor' 
		),
		'Viewing List' => array(
			'gid' => 7813,
			'name' => 'Viewing List',
			'shortName' => 'Viewing_List',
			'type' => 6,
			'caption' => array(
				'English' => 'Viewing List' 
			),
			'connId' => 'conn',
			'color' => 'edca00',
			'originalTable' => '' 
		),
		'professional_accounts' => array(
			'gid' => 7869,
			'name' => 'professional_accounts',
			'shortName' => 'professional_accounts',
			'type' => 0,
			'caption' => array(
				'English' => 'Professional Accounts' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'professional_accounts' 
		) 
	),
	'tablesByShort' => array(
		'patients' => 'patients',
		'transactions' => 'transactions',
		'patient_types' => 'patient_types',
		'hospital_accounts' => 'hospital_accounts',
		'guarantors' => 'guarantors',
		'professionals' => 'professionals',
		'offices' => 'offices',
		'professional_services' => 'professional_services',
		'hospital_services' => 'hospital_services',
		'users' => 'users',
		'payments' => 'payments',
		'transaction_guarantor' => 'transaction_guarantor',
		'Viewing_List' => 'Viewing List',
		'professional_accounts' => 'professional_accounts' 
	),
	'tablesByGood' => array(
		'patients' => 'patients',
		'transactions' => 'transactions',
		'patient_types' => 'patient_types',
		'hospital_accounts' => 'hospital_accounts',
		'guarantors' => 'guarantors',
		'professionals' => 'professionals',
		'offices' => 'offices',
		'professional_services' => 'professional_services',
		'hospital_services' => 'hospital_services',
		'users' => 'users',
		'payments' => 'payments',
		'transaction_guarantor' => 'transaction_guarantor',
		'Viewing_List' => 'Viewing List',
		'professional_accounts' => 'professional_accounts' 
	),
	'events' => array( 
		 
	),
	'languages' => array( 
		array(
			'name' => 'English',
			'nativeName' => 'English',
			'rtl' => false,
			'filename' => 'English.lng' 
		) 
	),
	'languageNames' => array( 
		'English' 
	),
	'defaultLanguage' => 'English',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'settingsTable' => array(
		'connId' => '',
		'table' => '' 
	),
	'wizardBuild' => '43917',
	'projectBuild' => 'DtESyqWMvjol',
	'projectTheme' => 'flatly',
	'projectSize' => 'normal',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'English' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>