<?php

namespace gui;

use service\MenuAccessInterface;

class MenuChecking{

    protected $menuTxt;

    /**
     * @param MenuAccessInterface $menuAccess
     * @return void
     */
    public function getAllMenus($menuAccess){
        $menus = $menuAccess->getAllMenu();
        $this->menuTxt = array();
        foreach ($menus as $menu) {
            $this->menuTxt[] = ['id' => $menu->getId(), 'title' => $menu->getTitle(), 'description' => $menu->getDescription(), 'price' => $menu->getPrice()];
        }
    }

    /**
     * @return mixed
     */
    public function getMenuTxt()
    {
        return $this->menuTxt;
    }


}