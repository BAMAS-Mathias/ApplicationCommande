<?php

namespace data;

use domain\Plat;
use services\PlatAccessInterface;

class ApiPlat implements PlatAccessInterface{

    function createPlat($nom, $description, $prix)
    {
        // TODO: Implement createPlat() method.
    }

    function deletePlat($id)
    {
        // TODO: Implement deletePlat() method.
    }

    function getPlat($id)
    {
        // TODO: Implement getPlat() method.
    }


    function getAllPlats()
    {
        $listePlats = array();
        $listePlats[] = new Plat(14,"Steak", "Un bon steak", 15);
        $listePlats[] = new Plat(120,"Pates", "Des Pates", 15);
        return $listePlats;
    }
}