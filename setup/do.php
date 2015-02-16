<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'env');
defined('DS') or define('DS', DIRECTORY_SEPARATOR);

require(__DIR__ . DS . '..' . DS . 'app' . DS . 'vendor' . DS . 'autoload.php');
require(__DIR__ . DS . '..' . DS . 'app' . DS . 'vendor' . DS . 'yiisoft' . DS . 'yii2' . DS . 'Yii.php');

$config = require(__DIR__ .  DS . 'config' . DS . 'main.php');

(new yii\web\Application($config))->run();