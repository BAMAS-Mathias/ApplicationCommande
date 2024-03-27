<?php

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

    function getAllMenu()
    {
        $menuList = array();
        $menuList[] = new \domain\Menu("");
    }
}