<?php
// $Id: all.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

class UT_Form_All extends QTest_UnitTest_TestSuite_Abstract
{
    static function suite()
    {
        $dir = dirname(__FILE__);
        $suite = new UT_Form_All('UT_Form_Suite');
        $suite->addTestFiles(array(
            "{$dir}/basic.php",
            "{$dir}/group.php",
        ));

        return $suite;
    }
}

