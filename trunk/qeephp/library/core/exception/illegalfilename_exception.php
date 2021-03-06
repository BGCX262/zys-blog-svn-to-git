<?php
// $Id: illegalfilename_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 Q_IllegalFilenameException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: illegalfilename_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * Q_IllegalFilenameException 异常指示存在无效字符的文件名
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: illegalfilename_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class Q_IllegalFilenameException extends QException
{
    public $required_filename;

    function __construct($filename)
    {
        $this->required_filename = $filename;
        parent::__construct(__('Security check: Illegal character in filename "%s".', $filename));
    }
}

