<?php
// $Id: createfilefailed_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Q_CreateFileFailedException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: createfilefailed_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * Q_CreateFileFailedException 异常指示创建文件失败
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: createfilefailed_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class Q_CreateFileFailedException extends QException
{
    public $ex_filename;

    function __construct($filename)
    {
        $this->ex_filename = $filename;
        parent::__construct(__('Create file "%s" failed.', $filename));
    }
}


