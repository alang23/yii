<?php

// This is the main Web application configuration. Any writable
// application properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Framework: Phone Book Demo',

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(  
    // uncomment the following to enable the Gii tool  
      
	    'gii'=>array(  
	        'class'=>'system.gii.GiiModule',  
	        'password'=>'123456',  
	        //ipFilters用于所在服务器不在本机的情况需开启    
	        //'ipFilters'=>array('192.168.1.10','::1'),    
	    ),

    ),

	// application components
	'components'=>array(
		'db'=>array(
			'connectionString'=>'sqlite:protected/data/phonebook.db',
		),

		'cache'=>array(
            'class'=>'CMemCache',
            'servers'=>array(
                array('host'=>'127.0.0.1', 'port'=>11211, 'weight'=>60),
                //array('host'=>'server2', 'port'=>11211, 'weight'=>40),
            ),
        ),
	),
);