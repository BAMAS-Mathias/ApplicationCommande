<?php

namespace service;

interface CommandeAccessInterface{

    function getCommande($id);

    function deleteCommande($id);

    function createCommande();
}