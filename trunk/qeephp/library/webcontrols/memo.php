<?php
// $Id: memo.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Memo 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: memo.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * 构造一个多行文本框
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: memo.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
class Control_Memo extends QUI_Control_Abstract
{
	function render()
	{
		$value = $this->_extract('value');
		$out = '<textarea ';
		$out .= $this->_printIdAndName();
		$out .= $this->_printAttrs();
		$out .= $this->_printDisabled();
		$out .= '>';
		$out .= htmlspecialchars($value);
		$out .= '</textarea>';

        return $out;
	}
}

