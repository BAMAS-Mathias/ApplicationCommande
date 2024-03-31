<?php

require './autoloader.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$menuCheck = new \services\MenuChecking();

$menuAccess = new \data\ApiMenu();

$commandeAccess = new \data\ApiCommande();

$commandeCheck = new \services\CommandeChecking();

$menuPresenter = new \controller\MenuPresenter($menuCheck);

$commandePresenter = new \controller\CommandePresenter($commandeCheck);

$controller = new \controller\Controller();

if($uri === '/index.php/commandes/create'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->menusAction($menuAccess, $menuCheck);
    $welcomeView = new \gui\WelcomeView($layout, $menuPresenter);
    $welcomeView->display();
}
else if($uri === '/index.php/menu/create'){

}
else if($uri === '/index.php/menu/'){

}
else if($uri === '/index.php/commandes/'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->commandesAction($commandeAccess, $commandeCheck, 1);
    $userCommandeView = new \gui\UserCommandesView($layout, $commandePresenter);
    $userCommandeView->display();
}
else{
    echo $uri;
    $layout = new \gui\Layout("gui/layout.html");
    $welcomeView = new \gui\WelcomeView($layout, $menuPresenter);
    $welcomeView->display();
}