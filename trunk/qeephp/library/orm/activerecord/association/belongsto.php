<?php
// $Id: belongsto.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

/**
 * 定义 QDB_ActiveRecord_Association_BelongsTo 类
 *
 * @link http://qeephp.com/
 * @copyright Copyright (c) 2006-2009 Qeeyuan Inc. {@link http://www.qeeyuan.com}
 * @license New BSD License {@link http://qeephp.com/license/}
 * @version $Id: belongsto.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package orm
 */

/**
 * QDB_ActiveRecord_Association_BelongsTo 类封装 ActiveRecord 对象之间的 belongs to 关联
 *
 * @author YuLei Liao <liaoyulei@qeeyuan.com>
 * @version $Id: belongsto.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 * @package orm
 */
class QDB_ActiveRecord_Association_BelongsTo extends QDB_ActiveRecord_Association_Abstract
{
	public $one_to_one = true;
	public $on_delete = 'skip';
	public $on_save = 'skip';

    function init()
    {
        if ($this->_inited) { return $this; }
        parent::init();

        $p = $this->_init_config;
        $this->source_key = !empty($p['source_key']) ? $p['source_key'] : reset($this->target_meta->idname);
        $this->target_key = !empty($p['target_key']) ? $p['target_key'] : reset($this->target_meta->idname);

        unset($this->_init_config);
        return $this;
    }

    function onSourceSave(QDB_ActiveRecord_Abstract $source, $recursion)
    {
        return $this;
    }

    function onSourceDestroy(QDB_ActiveRecord_Abstract $source)
    {
        return $this;
    }
}

