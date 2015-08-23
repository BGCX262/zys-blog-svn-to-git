<?php
/////////////////////////////////////////////////////////////////////////////
// QeePHP Framework
//
// Copyright (c) 2005 - 2008 QeeYuan China Inc. (http://www.qeeyuan.com)
//
// 许可协议，请查看源代码中附带的 LICENSE.TXT 文件，
// 或者访问 http://www.qeephp.org/ 获得详细信息。
/////////////////////////////////////////////////////////////////////////////

/**
 * 定义 Table_BooksHasAuthors
 *
 * @package test-fixture
 * @version $Id: bookshasauthors.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $
 */

/**
 * Table_BooksHasAuthors 封装了一个 many to many 中间表的操作
 *
 * @package test-fixture
 */
class Table_BooksHasAuthors extends QDB_Table
{
    public $table_name = 'books_has_authors';
}
