<?php

namespace controller;

class CommandePresenter{

    protected $commandeCheck;

    public function __construct($commandeCheck)
    {
        $this->commandeCheck = $commandeCheck;
    }

    public function getAllCommandesHTML(){
        $content = null;
        if($this->commandeCheck->getCommandeTxt() != null){
            $content = '<ul>';
            foreach ($this->commandeCheck->getCommandeTxt() as $commande){
                $content .= '<li>Commande n°' . $commande['id'] . '</li>';
            }
            $content .= '</ul>';
        }
        return $content;
    }
}
