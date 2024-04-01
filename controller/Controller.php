<?php

namespace controller;

use services\CommandeAccessInterface;
use services\CommandeChecking;
use services\PlatAccessInterface;
use services\PlatChecking;

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


    /**
     * @param PlatAccessInterface $platAccess
     * @param PlatChecking $platCheck
     * @return void
     */
    function platsAction($platAccess, $platCheck){
        $platCheck->getAllPlats($platAccess);
    }
}