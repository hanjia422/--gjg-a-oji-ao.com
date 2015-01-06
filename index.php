<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

ini_set('session.save_handler', 'memcache');
//ini_set('session.save_path', 'tcp://192.168.1.17:11211');
ini_set('session.save_path', 'tcp://127.0.0.1:11211');
require_once($yii);
$constant = dirname(__FILE__) . '/protected/config/constant.php';
require_once($constant);
Yii::createWebApplication($config)->run();
