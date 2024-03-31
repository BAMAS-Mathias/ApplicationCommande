<?php

namespace services;

interface CommandeAccessInterface{

    function getCommande($id);

    function deleteCommande($id);

    function createCommande();

    function getAllCommandes();

    function getUserCommandes($userId);
}