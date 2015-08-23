<?php
// $Id: controller_forward.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QController_Forward 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: controller_forward.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package mvc
 */

/**
 * QController_Forward 将请求转发到另一个控制器动作执行
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: controller_forward.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package mvc
 */
class QController_Forward
{
    /**
     * 附加参数
     *
     * @var array
     */
    public $args;

    /**
     * 构造函数
     *
     * @param string|array $udi
     * @param array $args
     */
    function __construct($udi, array $args = array())
    {
        QContext::instance()->changeRequestUDI($udi);
        $this->args = $args;
    }
}

