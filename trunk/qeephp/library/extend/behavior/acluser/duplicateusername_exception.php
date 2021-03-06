<?php
// $Id: duplicateusername_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 AclUser_DuplicateUsernameException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: duplicateusername_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * AclUser_DuplicateUsernameException 异常指示重复的用户名
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: duplicateusername_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class AclUser_DuplicateUsernameException extends AclUser_Exception
{
    function __construct($username)
    {
        parent::__construct($username, __('Duplicate username "%s".', $username));
    }
}

