<?php

return [
    'id'					=> 'janus-installer',
    'basePath'				=> dirname(__DIR__) . '/../app/',
    'language'				=> 'en-US',
	'controllerNamespace'	=> 'janus\installer\controllers',
	
    'components'          => [  

		'assetManager' => [
			'linkAssets' => true,
            //'appendTimestamp' => true
        ],
		
		'request' => [
			'enableCookieValidation' => false            
        ],
		
        'urlManager'   => [						
			'enablePrettyUrl' => false,
			'showScriptName' => true		
        ]
    ],
    
	'modules' => [		
		'installer'		=> 'janus\installer\Module'
	]
];
