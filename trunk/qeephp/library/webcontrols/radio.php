<?php
// $Id: radio.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Radio 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: radio.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 构造一个单选按钮
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: radio.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Radio extends Control_Checkbox_Abstract
{
	function render()
	{
		return $this->_make('radio');
	}
}

