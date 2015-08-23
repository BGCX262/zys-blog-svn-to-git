<?php
// $Id: submenu.php 11 2012-02-08 06:05:02Z zys4416@gmail.com $

class Control_SubMenu extends QUI_Control_Abstract
{
    function render()
    {
        $menu = Menu::instance();
        $this->_view['menu']    = $menu;
        $this->_view['main']    = $menu->getCurrentMainMenu();
        $this->_view['current'] = $menu->getCurrentSubMenu($this->_view['main']['items']);

        return $this->_fetchView(dirname(__FILE__) . '/submenu_view.php');
    }

}
