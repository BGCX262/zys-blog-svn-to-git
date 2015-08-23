<?php
// $Id: _setup.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

require_once dirname(dirname(__FILE__)) . '/bootstrap.php';
QTest_Helper::import(dirname(__FILE__) . '/fixtures');

QTest_Helper::loadConfig('database.yaml', 'db_dsn_pool');

