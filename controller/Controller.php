<?php

namespace controller;

use services\CommandeAccessInterface;
use services\CommandeChecking;

class Controller{

    function menusAction($menuAccess, $menuCheck){
        $menuCheck->getAllMenus($menuAccess);
    }


    /**
     * @param CommandeAccessInterface $commandeAccess
     * @param CommandeChecking $commandeCheck
     * @return void
     */
    function commandesAction($commandeAccess, $commandeCheck, $userId){
        $commandeCheck->getUserCommandes($commandeAccess, $userId);
    }
}