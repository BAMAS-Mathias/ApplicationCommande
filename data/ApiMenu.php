<?php

include_once 'services/MenuAccessInterface.php';
include_once 'domain/Menu.php';

class ApiMenu implements \service\MenuAccessInterface{

    private $apiRootUrl = '';

    function createMenu()
    {
        // TODO: Implement createMenu() method.
    }

    function deleteMenu($id)
    {
        // TODO: Implement deleteMenu() method.
    }

    function getMenu($id)
    {
        // TODO: Implement getMenu() method.
    }


    /** Renvois tous les menus
     * @return array
     */
    function getAllMenu()
    {
        $menuList = array();
        $menuList[] = new \domain\Menu(4, "Menu Rayan", "Un trés bon menu", 15);
        $menuList[] = new \domain\Menu(15, "Menu Test", "Un trés mauvais menu", 99);
        $menuList[] = new \domain\Menu(15, "Menu Manager", "Un trés mauvais menu", 99);
        return $menuList;
    }
}