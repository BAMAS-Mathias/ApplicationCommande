<?php

namespace controller;

class Controller{

    function MenusAction($menuAccess, $menuCheck){
        $menuCheck->getAllMenus($menuAccess);
    }
}