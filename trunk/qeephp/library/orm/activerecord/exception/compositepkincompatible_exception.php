<?php
// $Id: compositepkincompatible_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_CompositePKIncompatibleException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: compositepkincompatible_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QDB_ActiveRecord_CompositePKIncompatibleException 异常指示某项功能与复合主键不兼容
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: compositepkincompatible_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QDB_ActiveRecord_CompositePKIncompatibleException extends QDB_ActiveRecord_Exception
{
    /**
     * 与复合主键不兼容的功能名称
     *
     * @var string
     */
    public $feature_name;

    function __construct($class_name, $feature_name)
    {
        $this->feature_name = $feature_name;
        // LC_MSG: Feature "%s" incompatible with composite primary keys.
        parent::__construct($class_name, __('Feature "%s" incompatible with composite primary keys.'));
    }
}
