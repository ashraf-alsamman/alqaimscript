<?php
// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
 ob_start('My_OB');
function My_OB($str, $flags)
{
    //remove UTF-8 BOM
    $str = preg_replace("/\xef\xbb\xbf/","",$str);
    return $str;
}

return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'C G',

	// preloading 'log' component
	
	 'preload'=>array('log'),
 
	// autoloading model and component classes
	'import'=>array(
                      'application.modules.translate.TranslateModule',
		//	   'ext.flushable-masfdfster.FlushableDependency',

			    'application.models.*',
                'application.components.*',
                'application.modules.user.models.*',
                'application.modules.user.components.*',
        'application.modules.image.components.*',
        'application.modules.image.models.Image',

'application.extensions.jformvalidate.EHtml',

	),

	'modules'=>array(
		'translate',
		
 'mailbox'=>array(  
                    'userClass' => 'User',
                    'userIdColumn' => 'id',
                    'usernameColumn' => 'username',
                    'superuserColumn'=>'superuser',
					//'tablePrefix' => 'tbl_',
					),
		
		
		
		'apcinfo',
		// uncomment the following to enable the Gii tool
		'user'=>array(
  'tableUsers' => 'tbl_users',
  'tableProfiles' => 'tbl_profiles',
  'tableProfileFields' => 'tbl_profiles_fields',
	
	
 ),
	
          'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'0',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                        'application.gii'  //Ajax Crud template path
             ),
        ),
 
        
   		
 /*
 'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'0',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	*/	
	),

	// application components
	'components'=>array(
 
        'translate'=>array(//if you name your component something else change TranslateModule
            'class'=>'translate.components.MPTranslate',
            //any avaliable options here
            'acceptedLanguages'=>array(
                  'ar'=>'العربية',
                  'en'=>'English',
                  'fr'=>'français',
                  'hi'=>'भारतीय'
            ),
        ),
	    'user' => array(
            'class' => 'WebUser',
             'allowAutoLogin' => true,
            'loginUrl' => array('/user/login'),

	        ),
        
            'file'=>array(
        'class'=>'application.extensions.file.CFile',
    ),
        
        	    'jformvalidate' => array (
    	'class' => 'application.extensions.jformvalidate.EJFValidate',
     	'enable' => true
    ),
	
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
     //   'caseSensitive'=>false, 
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		/*
                'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=alqaim',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'initSQLs'=>array('SET NAMES utf8'), 
			 
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
 
				
				
				
				         'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CProfileLogRoute',
                    'report'=>'summary'),
				
				
				
				
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'exashraf@yahoo.com',
	),
);
