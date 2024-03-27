<?php

namespace service;

interface MenuAccessInterface{

    function createMenu();

    function deleteMenu($id);

    function getMenu($id);

    function getAllMenu();
}