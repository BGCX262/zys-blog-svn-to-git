<?php
// $Id: expectsassocprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_ExpectsAssocPropException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: expectsassocprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QDB_ActiveRecord_ExpectsAssocPropException 异常指示对象的关联属性没有设置
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: expectsassocprop_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QDB_ActiveRecord_ExpectsAssocPropException extends QDB_ActiveRecord_Exception
{
    public $prop_name;

    function __construct($class_name, $prop_name)
    {
        $this->prop_name = $prop_name;
        // LC_MSG: Expects property "%s" on object "%s" instance for association operation.
        parent::__construct($class_name, __('Expects property "%s" on object "%s" instance for association operation.', $prop_name, $class_name));
    }
}

