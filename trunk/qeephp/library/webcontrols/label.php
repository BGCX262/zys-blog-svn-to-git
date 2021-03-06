<?php
// $Id: label.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Label 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: label.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 构造一个标签控件
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: label.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Label extends QUI_Control_Abstract
{
	function render()
	{
		$caption = $this->_extract('caption');

		$out = '<label ';
		$out .= $this->_printIdAndName();
		$out .= $this->_printAttrs();
		$out .= '>';
		$out .= htmlspecialchars($caption);
		$out .= '</label>';

        return $out;
	}
}

