<?php
// $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 AclUser_Exception 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * AclUser_Exception 异常是所有 acluser 插件异常的基础类
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class AclUser_Exception extends QException
{
    public $username;

    function __construct($username, $msg)
    {
        $this->username = $username;
        parent::__construct($msg);
    }
}

