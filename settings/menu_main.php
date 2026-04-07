<?php
global $runnerMenus;
$runnerMenus['main'] = array(
	'name' => 'main',
	'id' => 'main',
	'treeLike' => true,
	'root' => array(
		'id' => '',
		'parent' => '',
		'children' => array( 
			array(
				'id' => '2',
				'parent' => '',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'text' => 'Patient Transactions',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 2,
					'iconName' => 'glyphicon-flash',
					'iconStyle' => 0,
					'showIconType' => 2,
					'linkToAnotherApp' => false,
					'table' => 6812,
					'pageType' => 'list' 
				) 
			),
			array(
				'id' => '17',
				'parent' => '',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'table' => 'transaction_guarantor',
						'type' => 6 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => 7737,
					'pageType' => 'list' 
				) 
			),
			array(
				'id' => '13',
				'parent' => '',
				'children' => array( 
					array(
						'id' => '12',
						'parent' => '13',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'hospital_services',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 7248,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '11',
						'parent' => '13',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'professional_services',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-shopping-cart',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 7200,
							'pageType' => 'list' 
						) 
					) 
				),
				'data' => array(
					'name' => array(
						'text' => 'Billings',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 0,
					'linkType' => 2,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false 
				) 
			),
			array(
				'id' => '3',
				'parent' => '',
				'children' => array( 
					array(
						'id' => '1',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'patients',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-headphones',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 6744,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '7',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'guarantors',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-flash',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 6986,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '9',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'professionals',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-calendar',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 7091,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '6',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'hospital_accounts',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-barcode',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 6940,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '19',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'professional_accounts',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 7869,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '10',
						'parent' => '3',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'offices',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-camera',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 7151,
							'pageType' => 'list' 
						) 
					) 
				),
				'data' => array(
					'name' => array(
						'text' => 'Master Data',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 0,
					'linkType' => 2,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false 
				) 
			),
			array(
				'id' => '5',
				'parent' => '',
				'children' => array( 
					array(
						'id' => '4',
						'parent' => '5',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'patient_types',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 2,
							'iconName' => 'glyphicon-earphone',
							'iconStyle' => 0,
							'showIconType' => 2,
							'linkToAnotherApp' => false,
							'table' => 6865,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '21',
						'parent' => '5',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'patient_classifications',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 8377,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '22',
						'parent' => '5',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'guarantor_classifications',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 8402,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '23',
						'parent' => '5',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'fund_type',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 8427,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '24',
						'parent' => '5',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'fund_code',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 8452,
							'pageType' => 'list' 
						) 
					) 
				),
				'data' => array(
					'name' => array(
						'text' => 'Dropdowns',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 0,
					'linkType' => 2,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false 
				) 
			),
			array(
				'id' => '15',
				'parent' => '',
				'children' => array( 
					array(
						'id' => '14',
						'parent' => '15',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'table' => 'users',
								'type' => 6 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 7315,
							'pageType' => 'list' 
						) 
					),
					array(
						'id' => '20',
						'parent' => '15',
						'children' => array( 
							 
						),
						'data' => array(
							'name' => array(
								'text' => 'Audit Log',
								'type' => 0 
							),
							'comments' => array(
								'text' => '',
								'type' => 0 
							),
							'style' => '',
							'href' => '',
							'params' => '',
							'pageId' => '',
							'itemType' => 2,
							'linkType' => 0,
							'openType' => 0,
							'iconType' => 0,
							'iconName' => '',
							'iconStyle' => 0,
							'showIconType' => 1,
							'linkToAnotherApp' => false,
							'table' => 8274,
							'pageType' => 'list' 
						) 
					) 
				),
				'data' => array(
					'name' => array(
						'text' => 'Admin',
						'type' => 0 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 0,
					'linkType' => 2,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false 
				) 
			),
			array(
				'id' => '16',
				'parent' => '',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'table' => 'payments',
						'type' => 6 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => 7555,
					'pageType' => 'list' 
				) 
			),
			array(
				'id' => '18',
				'parent' => '',
				'children' => array( 
					 
				),
				'data' => array(
					'name' => array(
						'table' => 'Viewing List',
						'type' => 6 
					),
					'comments' => array(
						'text' => '',
						'type' => 0 
					),
					'style' => '',
					'href' => '',
					'params' => '',
					'pageId' => '',
					'itemType' => 2,
					'linkType' => 0,
					'openType' => 0,
					'iconType' => 0,
					'iconName' => '',
					'iconStyle' => 0,
					'showIconType' => 1,
					'linkToAnotherApp' => false,
					'table' => 7813,
					'pageType' => 'list' 
				) 
			) 
		),
		'data' => array(
			'name' => array(
				'text' => '',
				'type' => 0 
			),
			'comments' => array(
				'text' => '',
				'type' => 0 
			),
			'style' => '',
			'href' => '',
			'params' => '',
			'pageId' => '',
			'itemType' => 0,
			'linkType' => 2,
			'openType' => 0,
			'iconType' => 0,
			'iconName' => '',
			'iconStyle' => 0,
			'showIconType' => 1,
			'linkToAnotherApp' => false 
		) 
	) 
);
?>