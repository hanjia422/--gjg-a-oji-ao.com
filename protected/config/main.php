<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'name'=>'高教网后台管理',

    'timeZone'=>'Asia/Shanghai',
    'language'=>'zh_cn',
    'sourceLanguage'=>'zh_cn',
    'charset'=>'utf-8',
    // preloading 'log' component
    'preload'=>array('log'),
    'defaultController'=>'Admin',
    // autoloading model and component classes
    'import'=>array(
        'application.models.*',
        'application.components.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
    ),

    'modules'=>array(
        'back',
        'rights',
        'user',
        'album',
        'article',
        'order',
        'gii'=>array(
            'class'=>'system.gii.giiModule',
            'password'=>'admin',
            'generatorPaths'=>array(
                'ext.dwz.gii', //可以继续配置其他路径
            ),
        ),
        // uncomment the following to enable the Gii tool
        /*
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'Enter Your Password Here',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
        */
    ),

    // application components
    'components'=>array(
        'user'=>array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'loginUrl'=>array('admin/login'),
            'class'=>'RWebUser',

        ),
        'authManager' => array(
            'class' => 'RDbAuthManager',
            'assignmentTable' => 'authassignment',
            'itemTable' => 'authitem',
            'itemChildTable' => 'authitemchild',
            'rightsTable' => 'rights',
            'defaultRoles'=>array('Guest'),
        ),
        'memcache' => array (
            'class' => 'system.caching.CMemCache',
            'servers' => array (
                array (
                    'host' => '127.0.0.1',
                    'port' => 11211,
                    'weight' => 60
                ),
                //服务器池配置
// 					array (
// 							'host' => '127.0.0.1',
// 							'port' => 11211,
// 							'weight' => 40
// 					),     
            ),
            'hashKey' => false,
// 			'keyPrefix'=>' ',
            'serializer' => false,
        ),
        //将session的设置：
        'session' => array (
            'class' => 'CHttpSession',
            'autoStart' => true,
//            'cacheID' => 'sessionCache', // we only use the sessionCache to store the session
//            'cookieMode' => 'only',
            'timeout' => 86400,
        ),
//
//        //防止 CSRF 跨站式伪造
        'request'=>array(
            'enableCsrfValidation'=>true,//防止post跨站攻击(外站提交)
// 		    'enableCookieValidation'=>true,  //防止Cookie攻击

        ),

        // uncomment the following to enable URLs in path-forma
        'urlManager'=>array(
//            'urlSuffix'=>'.htm',
            'showScriptName'=>false,
            'caseSensitive'=>false,
            'urlFormat'=>'path',
            'rules'=>array(
                '<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
//                'gii'=>'gii',
//                'gii/<controller:\w+>'=>'gii/<controller>',
//                'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
            ),
        ),

//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
        // uncomment the following to use a MySQL database

        'db'=>array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=back',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
            'tablePrefix'=>'gj_',
            'enableProfiling'=>true,
        ),

        'errorHandler'=>array(
            // use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning',
                ),
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
        'pagesize'=>1,
    ),
);