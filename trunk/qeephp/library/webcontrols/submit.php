<?php
// $Id: submit.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Submit  类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: submit.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 构造一个表单提交按钮
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: submit.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Submit extends Control_Button
{
	function render()
	{
		$caption = $this->_extract('caption');
        if (!empty($caption))
        {
		    $this->set('value', $caption);
		}
		return $this->_make('submit');
	}
}
