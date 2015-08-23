<?php
// $Id: undefinedprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_UndefinedPropException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: undefinedprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QDB_ActiveRecord_UndefinedPropException 异常指示未定义的属性
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: undefinedprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QDB_ActiveRecord_UndefinedPropException extends QDB_ActiveRecord_Exception
{
    public $prop_name;

    function __construct($class_name, $prop_name)
    {
        $this->prop_name = $prop_name;
        // LC_MSG: Undefined property "%s" on object "%s" instance.
        parent::__construct($class_name, __('Undefined property "%s" on object "%s" instance.', $prop_name, $class_name));
    }
}

