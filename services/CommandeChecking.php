<?php

namespace services;

use domain\Commande;

class CommandeChecking{

    protected $commmandeTxt;

    /** Récupère la liste de toutes les commandes
     * @param CommandeAccessInterface $commandeAccess
     * @return void
     */
    public function getAllCommandes(CommandeAccessInterface $commandeAccess) : void{
        $commandes = $commandeAccess->getAllCommandes();
        $this->commmandeTxt = array();
        foreach ($commandes as $commande){
            $this->commmandeTxt[] = ['id' => $commande->getId(), 'authorId' => $commande->getAuthorId(), 'menuList' => $commande->getMenuList()];
        }
    }


    /** Récupère la liste des commandes d'un client
     * @param CommandeAccessInterface $commandeAccess
     * @param $userId
     * @return void
     */
    public function getUserCommandes(CommandeAccessInterface $commandeAccess, $userId) : void{
        $commandes = $commandeAccess->getUserCommandes($userId);
        $this->commmandeTxt = array();
        foreach ($commandes as $commande){
            $this->commmandeTxt[] = ['id' => $commande->getId(), 'authorId' => $commande->getAuthorId(), 'menuList' => $commande->getMenuList()];
        }
    }


    public function getCommandeTxt(){
        return $this->commmandeTxt;
    }


}
