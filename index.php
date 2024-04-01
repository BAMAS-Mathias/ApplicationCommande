<?php

require './autoloader.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$menuCheck = new \services\MenuChecking();

$menuAccess = new \data\ApiMenu();

$commandeAccess = new \data\ApiCommande();

$platAccess = new \data\ApiPlat();

$commandeCheck = new \services\CommandeChecking();

$platCheck = new \services\PlatChecking();

$menuPresenter = new \controller\MenuPresenter($menuCheck);

$commandePresenter = new \controller\CommandePresenter($commandeCheck);

$platPresenter = new \controller\PlatPresenter($platCheck);

$controller = new \controller\Controller();


if($uri === '/menu/index.php/commandes/create'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->menusAction($menuAccess, $menuCheck);
    $welcomeView = new \gui\WelcomeView($layout, $menuPresenter);
    $welcomeView->display();
}
else if($uri === '/menu/index.php/menu/create'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->platsAction($platAccess, $platCheck);
    $createMenuView = new \gui\CreateMenuView($layout, $platPresenter);
    $createMenuView->display();
}
else if($uri === '/menu/index.php/menu/'){
    // Composer un menu
}
else if($uri === '/menu/index.php/commandes/' && isset($_GET['id'])){
    // Afficher une commande précise
}
else if($uri === '/menu/index.php/commandes/'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->commandesAction($commandeAccess, $commandeCheck, 1);
    $userCommandeView = new \gui\UserCommandesView($layout, $commandePresenter);
    $userCommandeView->display();
}
else{
    $layout = new \gui\Layout("gui/layout.html");
    $welcomeView = new \gui\WelcomeView($layout, $menuPresenter);
    $welcomeView->display();
}