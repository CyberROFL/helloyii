<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

// config file
$config = dirname(__FILE__).'/protected/config/main.php';

// include Yii bootstrap file
require_once(dirname(__FILE__).'/../framework/yii.php');

// create a Web application instance and run
Yii::createWebApplication($config)->run();
