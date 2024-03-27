<?php

include_once 'gui/Layout.php';
include_once 'gui/WelcomeView.php';
include_once 'gui/View.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$layout = new \gui\Layout("gui/layout.html");
$welcomeView = new \gui\WelcomeView($layout);
$welcomeView->display();
