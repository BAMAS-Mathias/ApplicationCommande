<?php

namespace service;

interface PlatAccessInterface{

    function createPlat($nom, $description, $prix);

    function deletePlat($id);

    function getPlat($id);

}