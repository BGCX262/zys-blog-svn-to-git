<?php
// $Id: all.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

Q::import(dirname(dirname(__FILE__)));

class UT_All extends QTest_UnitTest_TestSuite_Abstract
{
    static function suite()
    {
        $suite = new UT_All('UT_Core_Suite');
        $suite->addTestSuite(UT_Core_All::suite());
        $suite->addTestSuite(UT_Form_All::suite());

        return $suite;
    }

}

