<?php

include_once 'gui/Layout.php';
include_once 'gui/WelcomeView.php';
include_once 'gui/View.php';
include_once 'controller/Presenter.php';
include_once 'services/MenuChecking.php';
include_once 'data/ApiMenu.php';
include_once 'controller/Controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$menuCheck = new \gui\MenuChecking();

$menuAccess = new ApiMenu();

$presenter = new \controller\Presenter($menuCheck);

$controller = new \controller\Controller();

if($uri === '/index.php/commandes/create'){

}
else if($uri === '/index.php/menu/create'){

}
else if($uri === '/index.php/menu/'){
    $layout = new \gui\Layout("gui/layout.html");
    $controller->MenusAction($menuAccess, $menuCheck);
    $welcomeView = new \gui\WelcomeView($layout, $presenter);
    $welcomeView->display();
}
else if($uri === '/index.php/commandes'){

}
else{
    $layout = new \gui\Layout("gui/layout.html");
    $welcomeView = new \gui\WelcomeView($layout, $presenter);
    $welcomeView->display();
}