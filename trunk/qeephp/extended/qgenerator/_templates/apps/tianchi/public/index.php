<?php
// $Id: index.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 应用程序启动脚本
 */
global $g_boot_time;
$g_boot_time = microtime(true);

$app_config = require(dirname(__FILE__) . '/../config/boot.php');
require $app_config['QEEPHP_DIR'] . '/library/q.php';
require $app_config['APP_DIR'] . '/myapp.php';

$ret = MyApp::instance($app_config)->dispatching();
if (is_string($ret)) echo $ret;

return $ret;
