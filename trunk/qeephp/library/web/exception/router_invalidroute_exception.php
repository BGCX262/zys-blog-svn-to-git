<?php
// $Id: router_invalidroute_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QRouter_InvalidRouteException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: router_invalidroute_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QRouter_InvalidRouteException 异常指示无效的路由规则
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: router_invalidroute_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QRouter_InvalidRouteException extends QException
{
    public $route_name;

    function __construct($route_name, $msg)
    {
        $this->route_name = $route_name;
        parent::__construct($msg);
    }
}

