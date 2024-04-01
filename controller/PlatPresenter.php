<?php

namespace controller;

use services\PlatChecking;

class PlatPresenter{

    protected $platCheck;

    /**
     * @param PlatChecking $platCheck
     */
    public function __construct($platCheck)
    {
        $this->platCheck = $platCheck;
    }

    public function getAllPlatHTML(){
        $content = null;
        if($this->platCheck->getPlatTxt() != null){
            $content = '<ul>';
            foreach ($this->platCheck->getPlatTxt() as $plat){
                $content  .= '<li onclick="addPlat(this)">
                                <p>' . $plat['nom'] . '</p>
                                <input type="hidden" value="' . $plat['id'] . '">
                                <input type="hidden" value="' . $plat['price'] . '">
                              </li>';
            }
            $content .= '</ul>';
        }
        return $content;
    }


}
