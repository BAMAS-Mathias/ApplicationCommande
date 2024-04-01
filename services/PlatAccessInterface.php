<?php

namespace services;

interface PlatAccessInterface{

    function createPlat($nom, $description, $prix);

    function deletePlat($id);

    function getPlat($id);

    function getAllPlats();

}