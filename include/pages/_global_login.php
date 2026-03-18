<?php
			$optionsArray = array(
	'captcha' => array(
		'captcha' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'text',
					'login_message',
					'image' 
				),
				'supertop' => array( 
					 
				),
				'top' => array( 
					 
				),
				'grid' => array( 
					'username',
					'password',
					'login_button' 
				),
				'footer' => array( 
					 
				),
				'superbottom' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					 
				),
				'footer' => array( 
					 
				),
				'superbottom' => array( 
					 
				) 
			),
			'itemForms' => array(
				'text' => 'above-grid',
				'login_message' => 'above-grid',
				'image' => 'above-grid',
				'username' => 'grid',
				'password' => 'grid',
				'login_button' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'text' => array( 
				'text' 
			),
			'login_message' => array( 
				'login_message' 
			),
			'image' => array( 
				'image' 
			),
			'username' => array( 
				'username' 
			),
			'password' => array( 
				'password' 
			),
			'login_button' => array( 
				'login_button' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'login',
	'type' => 'login',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'login-above-grid',
			'grid' => array( 
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'text' 
					),
					'align' => 'center',
					'font-size' => '20px' 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'login_message' 
					) 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'image' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'login-header',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'login-nolabels',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c4' 
						) 
					),
					'section' => '' 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'username' 
					) 
				),
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'password' 
					) 
				),
				'c' => array(
					'model' => 'c4',
					'items' => array( 
						'login_button' 
					),
					'align' => 'center' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'footer' => array(
			'modelId' => 'login-footer',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 1 
						),
						array(
							'cell' => 'c' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				),
				'c' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'superbottom' => array(
			'modelId' => 'login-superbottom',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => 'University Health Service',
				'type' => 0 
			),
			'editedByRte' => false,
			'bold' => true 
		),
		'login_message' => array(
			'type' => 'login_message' 
		),
		'image' => array(
			'type' => 'image',
			'image' => array(
				'image' => 'uhslogo (2).png',
				'source' => 2 
			),
			'width' => '200px',
			'height' => '200px',
			'customCSS' => '/* Put  your custom CSS code here */

:host {
  color: red;
}

.container {
  display: flex;
  justify-content: center;  /* horizontal */
  align-items: center;      /* vertical */
}' 
		),
		'username' => array(
			'type' => 'username' 
		),
		'password' => array(
			'type' => 'password' 
		),
		'login_button' => array(
			'type' => 'login_button',
			'icon' => array(
				'style' => 0 
			),
			'buttonStyle' => 'primary' 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'pageCSS' => ':host {
  color: red;
  border-color: transparent;
}


.panel-primary > .panel-heading {
    color: #fff;
    background-color: transparent; 
    border-color: transparent; 
}

[data-page="_global_login"][data-itemid="login_external"] > .btn {
    border-color: transparent;
}

.panel-primary {
    border-color: #f3f3f3;
    border-radius: 5px;
}

body {
background-color: #f0f4f9;
    display: grid;
    place-items: center; 
    height: 100vh;
}

img {
  display: block;
  margin: 0 auto;
  max-width: 100%;
}

/* Center the login form container */
.loginform {
  display: flex;
  flex-direction: column; /* stack inputs vertically */
  align-items: center;    /* center horizontally */
  gap: 10px;              /* spacing between fields */
  margin-top: 50px;       /* optional, move down */
}

[data-itemid="username"] input,
[data-itemid="password"] input {
  width: 300px;
  padding: 6px 10px;
  border-radius: 10px;
  border: 1px solid #ccc;
  display: block;
  margin: 0 auto;
}

.btn.btn-primary { 
    width: 150px; 
    margin: 0 auto; 
    display: block;
}',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>