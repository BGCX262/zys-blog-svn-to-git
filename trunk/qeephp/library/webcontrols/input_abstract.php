<?php
// $Id: input_abstract.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Control_Input_Abstract 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: input_abstract.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */

/**
 * Control_Input_Abstract 类使所有输入框控件的基础类
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: input_abstract.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package webcontrols
 */
abstract class Control_Input_Abstract extends QUI_Control_Abstract
{
	protected function _make($type)
	{
		$out = "<input type=\"{$type}\" ";
        $out .= $this->_printIdAndName();
        $out .= $this->_printValue();
		$out .= $this->_printAttrs();
        $out .= $this->_printDisabled();
        $out .= '/>';

        return $out;
	}
}

