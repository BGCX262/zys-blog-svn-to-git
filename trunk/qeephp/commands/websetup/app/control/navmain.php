<?php
// $Id: navmain.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

class Control_NavMain extends QUI_Control_Abstract
{
	function render()
    {
		$menu = Menu::instance();
		$this->_view['all_menu'] = $menu->getAll();
		$this->_view['current']  = $menu->getCurrentMainMenu();

		return $this->_fetchView(dirname(__FILE__) . '/navmain_view.php');
	}

}

