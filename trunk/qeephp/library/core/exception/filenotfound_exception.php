<?php
// $Id: filenotfound_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Q_FileNotFoundException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: filenotfound_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * Q_FileNotFoundException 异常指示文件没有找到错误
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: filenotfound_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class Q_FileNotFoundException extends QException
{
    public $required_filename;

    function __construct($filename)
    {
        $this->required_filename = $filename;
        parent::__construct(__('File "%s" not found.', $filename));
    }
}
