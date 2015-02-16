<?php

return [
    'id'					=> 'yanous-installer',
    'basePath'				=> dirname(__DIR__) . '/../app/',
    'language'				=> 'en-US',
	'controllerNamespace'	=> 'yanous\installer\controllers',
	
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
		'installer'		=> 'yanous\installer\Module'
	]
];
