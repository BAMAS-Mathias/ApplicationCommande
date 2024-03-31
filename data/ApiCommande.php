<?php

namespace data;
use domain\Commande;
use domain\Menu;
use services\CommandeAccessInterface;

include_once "services/CommandeAccessInterface.php";

class ApiCommande implements CommandeAccessInterface {

    function getCommande($id)
    {
        // TODO: Implement getCommande() method.
    }

    function deleteCommande($id)
    {
        // TODO: Implement deleteCommande() method.
    }

    function createCommande()
    {
        // TODO: Implement createCommande() method.
    }

    function getAllCommandes()
    {
        // TODO: Implement getAllCommandes() method.
    }

    function getUserCommandes($userId)
    {
        $commandeList = array();
        $commandeList[] = new Commande(14, 144, [new Menu(14, 'test', 'test', 12), new Menu(16, 'telijst', 'tesiljt', 102)]);
        $commandeList[] = new Commande(18, 121, [new Menu(14, 'test', 'test', 12), new Menu(16, 'telijst', 'tesiljt', 102)]);
        return $commandeList;
    }
}