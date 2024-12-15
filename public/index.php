<?php
// 定义根目录常量
define('BASE_PATH', dirname(__DIR__));

define('APP_PATH', BASE_PATH . '/app');

// var_dump(class_exists('\PDO'));die;
// 自动加载
require BASE_PATH . '/vendor/autoload.php';

use Core\App;

// 初始化并运行框架
App::run();
