<?php
// $Id: button.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Button 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: button.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * Control_Button 封装各种类型的按钮
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: button.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Button extends Control_Input_Abstract
{
	function render($button_type = 'button')
	{
		$caption = $this->_extract('caption');
        if (!empty($caption))
        {
		    $this->set('value', $caption);
		}
		return $this->_make($button_type);
	}
}


