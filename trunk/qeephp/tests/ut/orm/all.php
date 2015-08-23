<?php
// $Id: all.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

class UT_ORM_All extends QTest_UnitTest_TestSuite_Abstract
{
    static function suite()
    {
        $dir = dirname(__FILE__);
        $suite = new UT_ORM_All('UT_ORM_Suite');
        $suite->addTestFiles(array(
            "{$dir}/basic.php",
            "{$dir}/assoc.php",
            "{$dir}/validations.php",
            "{$dir}/events.php",
            "{$dir}/behaviors.php",
        ));

        return $suite;
    }
}

