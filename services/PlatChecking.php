<?php

namespace services;

class PlatChecking{

    protected $platTxt;

    /**
     * @param PlatAccessInterface $platAccess
     * @return void
     */
    function getAllPlats($platAccess){
        $plats = $platAccess->getAllPlats();
        $this->platTxt = array();
        foreach ($plats as $plat) {
            $this->platTxt[] = ['id' => $plat->getId(), 'nom' => $plat->getNom(), 'libelle' => $plat->getLibelle(), 'price' => $plat->getPrice()];
        }
    }

    function getPlatTxt(){
        return $this->platTxt;
    }
}