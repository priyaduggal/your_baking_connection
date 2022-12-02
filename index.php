<?php

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, PATCH, DELETE');
header('Access-Control-Allow-Headers: Accept, Content-Type, X-Auth-Token, Origin, Authorization');
// change the following paths if necessary
$yii=dirname(__FILE__).'/framework/yiilite.php';
require_once dirname(__FILE__).'/k-config.php';
$config=dirname(__FILE__).'/protected/config/front_main.php';

// remove the following line when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
Yii::createWebApplication($config)->run();

