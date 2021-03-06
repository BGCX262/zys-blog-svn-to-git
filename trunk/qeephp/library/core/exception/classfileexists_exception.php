<?php
// $Id: classfileexists_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Q_ClassFileExistsException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: classfileexists_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * Q_ClassFileExistsException 异常指示类定义文件已经存在
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: classfileexists_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class Q_ClassFileExistsException extends QException
{
    public $class_name;
    public $filename;

    function __construct($class_name, $filename)
    {
        $this->class_name = $class_name;
        $this->filename = $filename;
        parent::__construct(__('Class "%s" declare file "%s" exists.', $class_name, $filename));
    }

}

