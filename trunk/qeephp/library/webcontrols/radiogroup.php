<?php
// $Id: radiogroup.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_RadioGroup 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: radiogroup.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 构造一组单选按钮
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: radiogroup.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_RadioGroup extends Control_CheckboxGroup_Abstract
{
	function render()
	{
		return $this->_make('radio', '');
	}
}

