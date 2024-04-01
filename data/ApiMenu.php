<?php

namespace data;

use domain\Menu;
use services\MenuAccessInterface;

class ApiMenu implements MenuAccessInterface {

    private $apiRootUrl = '';

    function createMenu()
    {
        // TODO: Implement createMenu() method.
    }

    function deleteMenu($id)
    {
        // TODO: Implement deleteMenu() method.
    }

    function getMenu($id)
    {
        $apiUrl = "http://localhost:8080/apimenus-1.0-SNAPSHOT/api/menus/get";

        $curlConnection = curl_init();

        $params = array(
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('accept: application/json')
        );
        curl_setopt_array($curlConnection, $params);
        $response = curl_exec($curlConnection);
        curl_close($curlConnection);

        if(!$response)
            echo curl_error($curlConnection);

        $response = json_decode($response, true);
        $menuList = array();

        foreach ($response as $menu){
            $menuList[] = new Menu($menu['id'], $menu['title'], $menu['description'], $menu['price']);
        }

        return $menuList;
    }


    /** Renvois tous les menus
     * @return array
     */
    function getAllMenu()
    {
        $apiUrl = "http://localhost:8080/apimenus-1.0-SNAPSHOT/api/menus";

        $curlConnection = curl_init();

        $params = array(
            CURLOPT_URL => $apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array('accept: application/json')
        );
        curl_setopt_array($curlConnection, $params);
        $response = curl_exec($curlConnection);
        curl_close($curlConnection);

        if(!$response)
            echo curl_error($curlConnection);

        $response = json_decode($response, true);
        $menuList = array();

        foreach ($response as $menu){
            $menuList[] = new Menu($menu['id'], $menu['title'], $menu['description'], $menu['price']);
        }

        return $menuList;
    }
}