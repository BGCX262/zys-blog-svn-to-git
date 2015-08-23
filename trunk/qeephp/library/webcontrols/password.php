<?php
// $Id: password.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Password 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: password.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 密码输入框
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: password.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Password extends Control_Input_Abstract
{
	function render()
	{
		return $this->_make('password');
	}
}

