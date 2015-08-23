<?php
// $Id: destroywithoutid_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_DestroyWithoutIdException 异常
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: destroywithoutid_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */

/**
 * QDB_ActiveRecord_DestroyWithoutIdException 指示视图删除一个没有主键值的对象
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: destroywithoutid_exception.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package exception
 */
class QDB_ActiveRecord_DestroyWithoutIdException extends QDB_ActiveRecord_Exception
{
    public $ar_object;

    function __construct(QDB_ActiveRecord_Abstract $object)
    {
        $this->ar_object = $object;
        $class_name = $object->getMeta()->class_name;
        // LC_MSG: Destroy object "%s" instance without ID.
        parent::__construct($class_name, __('Destroy object "%s" instance without ID.', $class_name));
    }
}

