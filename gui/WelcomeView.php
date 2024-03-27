<?php

namespace gui;

include_once 'gui/View.php';

class WelcomeView extends View {

    public function __construct($layout, $presenter)
    {
        parent::__construct($layout);

        $this->title = 'Bienvenue';

        $this->content = $presenter->getAllMenusHTML();

    }
}