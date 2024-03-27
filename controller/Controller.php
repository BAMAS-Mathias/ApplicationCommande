<?php

namespace controller;

class Controller{

    function menusAction($menuAccess, $menuCheck){
        $menuCheck->getAllMenus($menuAccess);
    }

    function commandesAction($commandeAccess, $commandeCheck){

    }
}