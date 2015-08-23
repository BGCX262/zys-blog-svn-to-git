<?php
// $Id: all.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

class UT_Core_All extends QTest_UnitTest_TestSuite_Abstract
{
    static function suite()
    {
        $dir = dirname(__FILE__);
        $suite = new UT_Core_All('UT_Core_Suite');
        $suite->addTestFiles(array(
            "{$dir}/basic.php",
            "{$dir}/cache.php",
            "{$dir}/coll.php",
            "{$dir}/context.php",
            "{$dir}/config.php",
            "{$dir}/loadclass.php",
            "{$dir}/objects.php",
        ));

        return $suite;
    }
}

