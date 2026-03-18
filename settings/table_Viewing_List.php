<?php
global $runnerTableSettings;
$runnerTableSettings['Viewing List'] = array(
	'name' => 'Viewing List',
	'type' => 6,
	'shortName' => 'Viewing_List',
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
	'afterEditDetails' => 'Viewing List',
	'afterAddDetail' => 'Viewing List',
	'detailsBadgeColor' => 'edca00',
	'keyFields' => array( 
		'transaction_number' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'guarantor_name' => array(
			'name' => 'guarantor_name',
			'goodName' => 'guarantor_name',
			'strField' => 'guarantor_name',
			'index' => 1,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'guarantor_office' => array(
			'name' => 'guarantor_office',
			'goodName' => 'guarantor_office',
			'strField' => 'guarantor_office',
			'index' => 2,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'transaction_number' => array(
			'name' => 'transaction_number',
			'goodName' => 'transaction_number',
			'strField' => 'transaction_number',
			'index' => 3,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'transaction_date' => array(
			'name' => 'transaction_date',
			'goodName' => 'transaction_date',
			'strField' => 'transaction_date',
			'index' => 4,
			'type' => 135,
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
			'tableName' => 'Viewing List' 
		),
		'patient_name' => array(
			'name' => 'patient_name',
			'goodName' => 'patient_name',
			'strField' => 'patient_name',
			'index' => 5,
			'type' => 201,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'patient_type' => array(
			'name' => 'patient_type',
			'goodName' => 'patient_type',
			'strField' => 'patient_type',
			'index' => 6,
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'total_hospital_amount' => array(
			'name' => 'total_hospital_amount',
			'goodName' => 'total_hospital_amount',
			'strField' => 'total_hospital_amount',
			'index' => 7,
			'type' => 14,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'total_professional_amount' => array(
			'name' => 'total_professional_amount',
			'goodName' => 'total_professional_amount',
			'strField' => 'total_professional_amount',
			'index' => 8,
			'type' => 14,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		),
		'running_balance' => array(
			'name' => 'running_balance',
			'goodName' => 'running_balance',
			'strField' => 'running_balance',
			'index' => 9,
			'type' => 14,
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'Viewing List' 
		) 
	),
	'originalTable' => '',
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
			'guarantor_name',
			'guarantor_office',
			'transaction_number',
			'transaction_date',
			'patient_name',
			'patient_type',
			'total_hospital_amount',
			'total_professional_amount',
			'running_balance' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => false,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'guarantor_name',
			'guarantor_office',
			'transaction_number',
			'transaction_date',
			'patient_name',
			'patient_type',
			'total_hospital_amount',
			'total_professional_amount',
			'running_balance' 
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
		'selectList' => array(
			'type' => 'selectList',
			'subtype' => 'sql',
			'enabled' => true,
			'sql' => 'SELECT
    g.full_name AS guarantor_name,
    g.office AS guarantor_office,
    ts.transaction_number,
    ts.created_at AS transaction_date,  -- Added transaction date
    CONCAT_WS(\' \', pt.first_name, pt.middle_name, pt.last_name) AS patient_name,
    ts.patient_type,
    -- Total amounts (all, regardless of status)
    h_totals.total_hospital_amount,
    p_totals.total_professional_amount,
    
    -- Running balance: sum of unpaid amounts only
    COALESCE(unpaid_h.total_unpaid_hospital, 0) + COALESCE(unpaid_p.total_unpaid_professional, 0) AS running_balance

FROM transactions ts
JOIN patients pt ON pt.id = ts.patient_id

-- Full hospital totals (all amounts)
LEFT JOIN (
    SELECT 
        hs.transaction_number,
        SUM(hs.amount) AS total_hospital_amount
    FROM hospital_services hs
    GROUP BY hs.transaction_number
) h_totals ON h_totals.transaction_number = ts.transaction_number

-- Full professional totals (all amounts)
LEFT JOIN (
    SELECT 
        ps.transaction_number,
        SUM(ps.amount) AS total_professional_amount
    FROM professional_services ps
    GROUP BY ps.transaction_number
) p_totals ON p_totals.transaction_number = ts.transaction_number

-- Unpaid hospital amounts
LEFT JOIN (
    SELECT 
        hs.transaction_number,
        SUM(hs.amount) AS total_unpaid_hospital
    FROM hospital_services hs
    WHERE hs.status = \'Unpaid\'
    GROUP BY hs.transaction_number
) unpaid_h ON unpaid_h.transaction_number = ts.transaction_number

-- Unpaid professional amounts
LEFT JOIN (
    SELECT 
        ps.transaction_number,
        SUM(ps.amount) AS total_unpaid_professional
    FROM professional_services ps
    WHERE ps.status = \'Unpaid\'
    GROUP BY ps.transaction_number
) unpaid_p ON unpaid_p.transaction_number = ts.transaction_number

LEFT JOIN transaction_guarantor tg ON tg.transaction_number = ts.transaction_number
LEFT JOIN guarantors g ON g.id = tg.guarantor_id

ORDER BY ts.transaction_number;',
			'payload' => array( 
				 
			),
			'payloadFormat' => 4 
		) 
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
	$runnerTableLabels['Viewing List'] = array(
	'tableCaption' => 'Viewing List',
	'fieldLabels' => array(
		'guarantor_name' => 'Guarantor Name',
		'guarantor_office' => 'Guarantor Office',
		'transaction_number' => 'Transaction Number',
		'transaction_date' => 'Transaction Date',
		'patient_name' => 'Patient Name',
		'patient_type' => 'Patient Type',
		'total_hospital_amount' => 'Total Hospital Amount',
		'total_professional_amount' => 'Total Professional Amount',
		'running_balance' => 'Running Balance' 
	),
	'fieldTooltips' => array(
		'guarantor_name' => '',
		'guarantor_office' => '',
		'transaction_number' => '',
		'transaction_date' => '',
		'patient_name' => '',
		'patient_type' => '',
		'total_hospital_amount' => '',
		'total_professional_amount' => '',
		'running_balance' => '' 
	),
	'fieldPlaceholders' => array(
		'guarantor_name' => '',
		'guarantor_office' => '',
		'transaction_number' => '',
		'transaction_date' => '',
		'patient_name' => '',
		'patient_type' => '',
		'total_hospital_amount' => '',
		'total_professional_amount' => '',
		'running_balance' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>