<?php

namespace services;

interface MenuAccessInterface{

    function createMenu();

    function deleteMenu($id);

    function getMenu($id);

    function getAllMenu();
}