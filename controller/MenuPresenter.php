<?php

namespace controller;

class MenuPresenter{

    protected $menuCheck;

    public function __construct($menuCheck)
    {
        $this->menuCheck = $menuCheck;
    }

    public function getAllMenusHTML(){
        $content = null;
        if($this->menuCheck->getMenuTxt() != null){
            $content = '<ul>';
            foreach ($this->menuCheck->getMenuTxt() as $menu){
                $content  .= '<li>' . $menu['title'] . '</li>';
            }
            $content .= '</ul>';
        }
        return $content;
    }


}
