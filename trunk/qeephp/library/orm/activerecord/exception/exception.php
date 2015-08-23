<?php
// $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_Exception 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QDB_ActiveRecord_Exception 封装所有与 ActiveRecord 有关的错误
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QDB_ActiveRecord_Exception extends QException
{
    /**
     * 相关的 ActiveRecord 类
     *
     * @var string
     */
    public $ar_class_name;

    function __construct($class_name, $msg)
    {
        $this->ar_class_name = $class_name;
        parent::__construct($msg);
    }
}

